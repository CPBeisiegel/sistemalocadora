<?php

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

Route::get('cadastro', function(){
    // echo "<h1> Cadastro <h1>";    
    return view('cadastro', ["usuarios"=>[
        ["nome"=>"Vinicius"],
        ["nome"=>"Rafa"]
    ]]);
});

Route::get('compras',"comprasController@index");

Route::get('ator', "atorController@index");
// metodo index é utilizado para 

Route::get('ator/cadastro', "atorController@create");
Route::post('ator/cadastro', "atorController@create");