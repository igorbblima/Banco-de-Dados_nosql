@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Tarefa</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>TD</td>
                    <td>Titulo mensagem</td>
                    <td>Mensagem</td>
                    <td colspan= 2>Ação</td>
                </tr>
            </thead>
<tbody>

@foreach ($tarefa as $tarefa)

<tr>
<td>{{$tarefa->id}}</td>
<td>{{$tarefa->titulo}}</td>
<td>{{$tarefa->mensagem}}</td>
<td>
<a href="{{ route('tarefa.edit',$tarefa->id)}}" class="btn btn-primary">Editar</a>
<input type="button" class="btn btn-warning  btn-space" value="Voltar" onClick="history.go(-1)">
</td>
<td>
    <form action="{{ route('tarefa.destroy', $tarefa->id)}}" method="POST">
        @csrf
        @method('DELETE')
    <button type="submit" class="btn btn-danger">Deletar</button>
    </form>
</td>
</tr>
@endforeach

<div class="col-sm-12">
    @if(session()->get('sucess'))
    <div class="alert alert-success">
        {{ session()->get('success')}}
    </div>
    @endif
@endsection
