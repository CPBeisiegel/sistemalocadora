<!-- @extends('template')

@section('container')
<h1>Excluir o filme {{$filme->titulo}}?</h1>


<form action="/filme/excluir/{{$filme->filme_id}}" method="post">
    @csrf

    <input type="hidden" name="filme_id" value="{{$filme->filme_id}}">

    <button type="submit" class="btn btn-danger">confirmar</button>

</form>


@endsection -->