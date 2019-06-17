<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class atorController extends Controller
{
    // ela pega todas as solicitações feitas por http estaram dentro do tipo de metodo utilizado para pegar as informações
    public function index(Request $request){
        if($request->isMethod('GET')){
            $todosAtores = Ator::all();
            return view('ator',["todosAtores"=>$todosAtores]);
        }
    }
    public function create(Request $request){

        if($request->isMethod('GET')){
            return view('cadastroAtor');

        }

        $novoAtor = new Ator();
        $novoAtor->primeiro_nome = $request->primeiroNome;
        $novoAtor->ultimo_nome = $request->segundoNome;
        $novoAtor->ultima_atualizacao = date('y-m-d');
        $resultado = $novoAtor->save();

        // isso é utilizado para pegar o nome do input ao invés de usarmos o metodo post com os []
        // o save é como se fosse o execute do PDO

        return view('cadastroAtor',["resultado" => $resultado]);

    }
}

