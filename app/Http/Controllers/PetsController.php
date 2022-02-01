<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePetRequest;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::all();

        return view('pets.index',compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePetRequest $request)
    {
        
        $input = $request->all();

        if($file = $request->file('fotopet')){

            $name = $file->getClientOriginalName();

            $file->move('images',$name);

            $input['path'] = $name;
        }

        $user = Auth::user();
        $ong_id = $user->ong->ong_id;

        $input['ong_id'] = $ong_id;

        Pet::create($input);

        return redirect('/minhaOng');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pet::findOrFail($id);

        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $pet = Pet::findOrFail($id);

        return view('pets.edit',compact('pet'));

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
        
        $pet = Pet::findOrFail($id);

        $pet->update($request->all());

        return redirect('/pets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {

        $pet->delete();

        return redirect('/minhaOng');
    }
}
