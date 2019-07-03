<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuarios;



class usuariosController extends Controller
{
    public function listarUsuarios(Request $request){
        $usuarios = Usuarios::all();

        return response() ->json($usuarios);
    }

    public function selecionarUsuario(Request $request, $id){
        $usuario = Usuarios::find($id);

        return response()->json($usuario);
    }

    public function criarUsuario(Request $request){

        $usuario = new Usuarios();
        $usuario->nome = $request->nome;
        $resultado = $usuario->save();


        return response()->json([
            "resultado" => $resultado,
            "mensagem" => "cadastro concluido"
        ]);
    }

    public function deletarUsuario(Request $request, $id){

        $usuario = Usuarios::find($id);

        if($usuario != null){
        $resultado = $usuario -> delete();

        return response()->json([
            "resultado" => $resultado,
            "mensagem" => "Usuário deletado com sucesso"
        ], 200);
    
        } else {
        return response()->json([
            "resultado" => false,
            "mensagem" => "Usuário não existe"
        ], 404);
        }
    }

    public function atualizarUsuario(Request $request, $id){

        $usuario = Usuarios::find($id);
        // substitiu o belongs to e has many de colocar no model
            // $profile = Profile::find($usuario->profile_id);
            // $usuario->profile_id;
        $usuario->nome = $request->nome;
        $resultado = $usuario->save();


        return response()->json([
            "resultado" => $resultado,
            "mensagem" => "Edição concluida"
        ]);

    }
}
