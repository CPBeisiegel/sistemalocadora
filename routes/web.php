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
// é sempre deste jeito - o nome do controller e o metodo que ele vai acessar as info( nenhum metodo vai existir se não for criado pelo dev)

Route::get('ator/cadastro', "atorController@create");
Route::post('ator/cadastro', "atorController@create");
Route::get('ator/editar/{id}',"atorController@editar");
// rotas parametrizadas - significa passar o parametro como exemplificado a route acima. podemos colocar um ponto de ? ao inves do id 
Route::post('ator/editar/{id}',"atorController@editar");

Route::get('filme',"FilmeController@index");
Route::get('filme/editar/{id}',"FilmeController@editar");
Route::post('filme/editar/{id}',"FilmeController@editar");
// Route::get('filme/excluir/{id}',"FilmeController@excluir");
// Route::post('filme/excluir/{id}',"FilmeController@excluir");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
