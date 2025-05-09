@extends('layouts.app')

@section('content')
    <h1 class="my-4 text-center">Agenda de Contatos</h1>

    <form method="GET" action="{{ route('contatos.index') }}" class="row g-3 mb-4">
        <div class="col-md-8">
            <input type="text" name="busca" placeholder="Buscar por nome" class="form-control" value="{{ $busca }}">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary w-100">Buscar</button>
        </div>
    </form>

    <div class="mb-3">
        <a href="{{ route('contatos.create') }}" class="btn btn-success">Novo Contato</a>
    </div>

    <ul class="list-group">
        @foreach ($contatos as $contato)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $contato->nome }}</strong> - {{ $contato->email }} - {{ $contato->telefone }}
                </div>
                <div>
                    <a href="{{ route('contatos.edit', $contato) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('contatos.destroy', $contato) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
