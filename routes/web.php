<?php
use App\Filme;
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
/*
Route::get('/', function () {

    return view('filmes');
});
*/
Route::get('/', function () {
    $filmes = Filme::orderBy('created_at', 'asc')->get();

    return view('filmes', [
        'filmes' => $filmes
    ]);
});
//Route::get('/', 'FilmeController@index');
Route::post('/filme', 'FilmeController@create');
Route::get('/filme/edit/{id}', 'FilmeController@edit');
Route::get('/filme/delete/{id}', 'FilmeController@delete');