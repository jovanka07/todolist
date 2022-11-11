<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cards;
use App\Models\BoardList;
use App\Models\Boards;
use App\Models\BoardMember;


class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelList = BoardList::where('board_id', $request->id )->get();
        $order = $modelList->count() + 1;
        $model = new BoardList;
        $model->board_id = $request->id;
        $model->order = $order;
        $model->name = $request->boardList;
        $model->save();
        return redirect()->back()->with('pesan', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = BoardMember::where(['board_id' => $id, 'user_id' => Auth()->user()->id])->first();
        if(!$member){
            return "Anda Tidak Dapat Mengakses Board Ini";
        }
        $board =  Boards::with('board_lists', 'board_lists.Cards')->where('id', $id)->first();
        // $model = Boards::get()->first();
        return view('cards/index', compact(
            'board'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = BoardList::find($id);
        return view('cards/edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = boardList::find($id);
        $model->name = $request->boardList;
        $model->save();
        return redirect()->back()->with('pesan', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = boardList::find($id);
        $model->delete();
        return redirect()->back()->with('pesan', 'data berhasil di hapus');

    }
}
