<?php
// DI ISI CARDS LIST
namespace App\Http\Controllers;

use App\Models\BoardList;
use Illuminate\Http\Request;
use App\Models\Cards;

class BoardListController extends Controller
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
        $modelList = Cards::where('list_id', $request->id )->get();
        $order = $modelList->count() + 1;

        $model = new Cards;
        $model->list_id = $request->id;
        $model->order = $order;
        $model->task = $request->cards;
        $model->save();

        return redirect()->back()->with('pesan', "Data berhasil di tambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BoardList  $boardList
     * @return \Illuminate\Http\Response
     */
    public function show(BoardList $boardList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BoardList  $boardList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $model = Cards::find($id);
        return view('cardsList/edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BoardList  $boardList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Cards::find($id);
        $model->task = $request->cardsList;
        $model->save();
        return redirect()->back()->with('pesan', 'CardsList Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BoardList  $boardList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Cards::find($id);
        $model->delete();
        return redirect()->back()->with('pesan', 'CardsList Berhasil Di Hapus!');
    }
}
