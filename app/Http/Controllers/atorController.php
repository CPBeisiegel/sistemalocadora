<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class atorController extends Controller
{
    // ela pega todas as solicitações feitas por http estaram dentro do tipo de metodo utilizado para pegar as informações
    // Request é uma classe que gera uma solicitação. É um objeto que está vindo através de um objeto
    public function index(Request $request){
        if($request->isMethod('GET')){
            $todosAtores = Ator::all();
            // $todosAtores = Ator::take(30)->get();
            return view('ator',["todosAtores"=>$todosAtores]);
        }
    }
    // metodo get exibir uma info na tela e metodo post envia info 
    // request é uma classe padrão do laravel que acaba pegando as info por http
    // isMethod pergunta que tipo de metodo estamos utilizando e o $request mostra o tipo do metodo utilizado 
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
        // o save é como se fosse o execute do PDO. Ele faz todo o processo do PDO pelo eloquent de forma mais resumida e abstrata. O save retorna um booleano true ou false

        return view('cadastroAtor',["resultado" => $resultado]);

    }

    public function editar(Request $request, $id){
        if($request->isMethod('GET')){
            $ator = Ator::find($id);
            return view('editarAtor',["ator"=>$ator]);
        }

        $ator = Ator::find($request->ator_id);
        $ator->primeiro_nome = $request->primeiroNome;
        $ator->ultimo_nome = $request->segundoNome;
        $resultado = $ator->save();

        return view("editarAtor",["resultado"=>$resultado, "ator"=>$ator]);
    }
}

