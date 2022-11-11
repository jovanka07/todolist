<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boards;
use App\Models\BoardsList;
use App\Models\BoardMember;
use App\Models\Login;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $model = Boards::get()->first();
        // $model = Boards::where(['creator_id' => Auth()->user()->id])->get();
        $model = BoardMember::with('Boards')->where(['user_id' => Auth()->user()->id])->get();
        // return $model;
        return view('home/index', compact(
            'model'
        ));
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

        // ubah
        $model = new Boards;
        $model->creator_id = Auth()->user()->id;
        $model->name = $request->boards;
        $model->save();

        $modelMember = new BoardMember;
        $modelMember->board_id = $model->id;
        $modelMember->user_id =  Auth()->user()->id;
        $modelMember->save();
        return redirect('home')->with('pesan', 'Content Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $User = Login::all();
        $model = Boards::find($id);
        return view('home/edit', compact(
            'model', 'User'
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
        $model = Boards::find($id);
        $model->name = $request->boards;
        $model->save();
        return redirect('home')->with('pesan', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $model = Boards::find($id);
        if($model->creator_id == Auth()->user()->id){
            $model->delete();
            $modelMember = BoardMember::where(['board_id' => $id, 'user_id' => Auth()->user()->id])->first();
            $modelMember->delete();
        }else{
            $modelMember = BoardMember::where(['board_id' => $id, 'user_id' => Auth()->user()->id])->first();
            $modelMember->delete();
        }
        
        return redirect('home')->with('pesan', 'Data Berhasil di Hapus');
    }
}
