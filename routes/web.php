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

Route::get('/buscaOngId', function(){
    return view('searchOngId');
})->name('busca.id');

Route::get('/ongs/buscarId',[OngsController::class,'buscarOngId'])->name('ongs.buscaId');

Route::get('/buscaOngNome', [OngsController::class,'buscarOngNome'])->name('busca.nome');

Route::group(['middleware'=>'web'],function(){
    Route::resource('/pets', PetsController::class);
});

Route::group(['middleware'=>'web'],function(){
    Route::resource('/ongs', OngsController::class);
});

Route::group(['middleware'=>'web'],function(){
    Route::view('/criarOng', 'ongs.create')->name('criarong');
});

Route::group(['middleware'=>'web'],function(){
    Route::get('/minhaOng', [OngsController::class,'show'])->name('minhaong');
});

Route::get('/mostrarOng/{id}', [OngsController::class,'mostrarOng'])->name('mostrarOng');

Route::get('/criarPet',[PetsController::class,'create'])->name('pets.criar');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
