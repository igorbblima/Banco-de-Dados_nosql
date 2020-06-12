@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Update Tarefa</h1>

    @if ($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
<br />
@endif
<form method="post" action="{{ route('tarefa.update', $tarefa->id) }}">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control" name="titulo" value="{{ $tarefa->titulo}}" />
    </div>
    <div class="form-group">
    <label for="mensagem">Tarefa:</label>
    <textarea type="text" class="form-control" name="mensagem">{{$tarefa->mensagem}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <input type="button" class="btn btn-warning  btn-space" value="Voltar" onClick="history.go(-1)">
</form>
    </div>
</div>
@endsection
