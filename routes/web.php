<?php

use App\Http\Controllers\OngsController;
use App\Http\Controllers\PetsController;
use App\Models\Pet;
use App\Models\Ong;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});



Route::get('/listar', function (){
    
    $pets = Pet::all();

    return $pets;
});

Route::get('/buscaOngId', function(){

    return view('searchOngId');

});
Route::get('/ongs/buscarId',[OngsController::class,'buscarOngId'])->name('ongs.buscaId');

Route::get('/buscaOngNome', function(){

    return view('searchOngName');

});
Route::get('/ongs/buscarNome',[OngsController::class,'buscarOngNome'])->name('ongs.buscaNome');


Route::group(['middleware'=>'web'],function(){
    Route::resource('/pets', PetsController::class);
});

Route::group(['middleware'=>'web'],function(){
    Route::resource('/ongs', OngsController::class);
});

Route::group(['middleware'=>'web'],function(){
    Route::view('/criarOng', 'ongs.create');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
