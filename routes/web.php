<?php

use App\Http\Controllers\PetsController;
use App\Models\Pet;
use App\Models\Ong;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listar', function (){
    
    $pets = Pet::all();

    return $pets;
});

Route::resource('/pets', PetsController::class);

// Route::get('/pets', function(){

//     $ong = Ong::find(1);

//     foreach($ong->pets as $pets){
//         echo $pets->name;
//     }

// });


// Route::get('/insert', function(){

//     $pet = new Pet();

//     $pet->ong_id = '2';
//     $pet->name = 'Rafa';
//     $pet->species = 'Cachorro';
//     $pet->age = '11';

//     $pet->save();

// });

// Route::get('/update', function(){

//     $pet = Pet::find(2);

//     $pet->name = 'Ruf update';

//     $pet->save();


// });