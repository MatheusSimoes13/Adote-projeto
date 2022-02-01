<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use App\Models\Pet;
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

        if($file = $request->file('foto')){

            $name = $file->getClientOriginalName();

            $file->move('images',$name);

            $input['foto'] = $name;
        }

        $user_id = Auth::user()->id;

        $input['user_id'] = $user_id;

        $userids = DB::table('ongs')->pluck('user_id');

            foreach($userids as $userid){
                if($user_id == $userid){
                    return 'ja tem ong';
                    break;
                }
                else{
                    Ong::create($input);
                    return redirect('/');
                }
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
    public function edit(Ong $ong)
    {

      return view('ongs.edit',compact('ong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        // Se não mandar foto quando editar essa variável vai manter a mesma foto que ja tinha
        // $semFoto = $request['foto'];
        // $input = $request;
        
        // if($request->hasFile('foto')){

        //     $file = $input->file('foto');
        //     $name = $file->getClientOriginalName();
        //     $file->move('images',$name);

        //     $input['foto'] = $name;
            
        // }

        // else{
        //     $input['foto'] = $semFoto;
        // }

            $this->validate($request,[
                'foto' => 'nullable'
            ]);

        Auth::user()->ong->update($request->all());

        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
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

    public function mostrarOng($id){

        $ong = Ong::findOrFail($id);

        $pets = $ong->pets;

        return view('ongs.showOng',compact(['ong','pets']));
    }

}
