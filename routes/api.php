 <?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/ator',"Api\atorController@listarAtores");
Route::get('/usuarios',"Api\usuariosController@listarUsuarios");
Route::get('/usuarios/{id}',"Api\usuariosController@selecionarUsuario");

Route::post('/usuarios',"Api\usuariosController@criarUsuario");

Route::delete('/usuarios/{id}',"Api\usuariosController@deletarUsuario");

Route::put('/usuarios/{id}',"Api\usuariosController@atualizarUsuario");