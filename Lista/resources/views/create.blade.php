@extends('base')

@section('main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Adcionar Lista</h1>
        <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error}}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
    <form method="post" action="{{ route('tarefa.store') }}">
        @csrf
        <div class="form-group">
            <label for="titulo">Titulo Tarefa:</label>
            <input type="text" class="form-control" name="titulo" />
        </div>
        <div class="form-group">
            <label for="mensagem">Informe Mensagem:</label>
            <textarea type="text" class="form-control" placeholder="Digite sua tarefa" name="mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-success"> Adicionar</button>
        <input type="button" class="btn btn-danger" value="Voltar" onClick="history.go(-1)">
        <input type="button" class="btn btn-dark" value="Avançar" onCLick="history.forward()">
    </form>
        </div>
    </div>
</div>
        @endsection
