@extends('template')

@section('container')
    <h1> Cadastro </h1>
    <ul>
      @forelse ($usuarios as $usuario)
      <li>{{ $usuario['nome'] }}</li>
      @empty
          <li>Não tem usuarios</li>
      @endforelse
    </ul>

    

@endsection    
