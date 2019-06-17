@extends('template')

@section('container')
<h1>Cadastro de Ator</h1>

<form action="cadastro" method="post">
@csrf

<input type="text" name="primeiroNome" id="">
<input type="text" name="segundoNome" id="">

<button type="submit">Enviar</button>

</form>

@if(isset($resultado))
<!-- pergunta se a variavel existe -->
    @if($resultado)
    <!-- se ela existe retorna um se não retorna erro -->
        <h1>Cadastro Concluido!</h1>
    @else
        <h1>Erro ao tentar cadastrar!</h1>
    @endif    

@endif

@endsection