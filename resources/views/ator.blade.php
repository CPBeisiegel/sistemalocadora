@extends('template')

@section('container')
<h1>Atores</h1>
<ul>

@foreach ($todosAtores as $ator)
    <li>{{$ator->primeiro_nome}} <a href="/ator/editar/{{ $ator->ator_id}}">Editar</a></li>

@endforeach
</ul>



@endsection