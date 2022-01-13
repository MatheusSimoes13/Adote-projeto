<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use Illuminate\Http\Request;

class OngsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $ong = Ong::all();

        return view('searchOng',compact('ong'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ong_id)
    {

        $ong = Ong::find($ong_id);

        return view('ongs.show',compact('ong'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function buscarOngId(Request $req){

        $ong_id = $req->get('id');

        $ong = Ong::findOrFail($ong_id);

        return view('ongs.showId',compact('ong'));
    }

    public function buscarOngNome(Request $req){

        $ong_nome = $req->get('name');
    
        $ongs = Ong::where('name','LIKE','%'.$ong_nome.'%')->get();
  
        return view('ongs.showName',compact('ongs'));
    }



}
