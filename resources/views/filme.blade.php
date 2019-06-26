@extends('template')

@section('container')
<h1>Filmes</h1>
<ul>

@if(isset($todosFilmes))
    @foreach ($todosFilmes as $filme)
        <li>{{$filme->titulo}}<a href="/filme/editar/{{$filme->filme_id}}">Editar</a></li>
    @endforeach
    </ul>
@endif


@endsection

