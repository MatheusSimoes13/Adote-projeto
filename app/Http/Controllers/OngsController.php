<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view('ongs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $user_id = Auth::user()->id;

        $userids = DB::table('ongs')->pluck('user_id');

        $criar = 0;

        foreach($userids as $userid){
            if($user_id == $userid){
                return 'ja tem ong';
                break;
            }
            else{
                $criar = 1;
            }
        }

        if($criar == 1){
            $input['user_id'] = $user_id;

            Ong::create($input);
        }
        else{
            return 'ja tem ong';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $user = auth()->user();
        $minhaOng = $user->ong;
        $petsOng = $user->ong->pets;

            return view('ongs.show',compact(['minhaOng','petsOng']));

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
