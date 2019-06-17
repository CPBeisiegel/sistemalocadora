<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Pagina padrão dentro do laravel
use App\Filme;    
// É a mesma coisa que fazer require_once="App/Filme.php"

class FilmeController extends Controller
{
    public function criar(){

        $novoFilme = new Filme();
        $novoFilme->titulo = "Titanic";
        $novoFilme->save();
        // isso é basicamente um atalho para criar uma nova tabela dentro do banco de dados substituindo o insert into e tudo necessário no banco.

        $todosFilmes = Filme::All();
        // vai fazer um select de todos os filmes e vai te devolver todos os arquivos presentes dentro da tabela.

    }
}
