@extends('template')

@section('container')
<h1>Editar um Filme</h1>

<form action="/filme/editar/{{$filme->filme_id}}" method="post">
@csrf


<input type="text" name="filme_id" value="{{$filme->filme_id}}" hidden>
<input type="text" name="ftitulo" value="{{$filme->titulo}}" id="">

<button type="submit">Enviar</button>

</form>

@if(isset($resultado))
    @if($resultado)
        <h1>Edição Concluida com Sucesso!</h1>
        <a href="/filme">Foi!</a>
    @else
        <h1>Erro ao tentar editar!</h1>
    @endif    

@endif

@endsection