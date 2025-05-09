@extends('layouts.app')

@section('content')
    <h1 class="my-4 text-center">Editar Contato</h1>

    <form method="POST" action="{{ route('contatos.update', $contato) }}" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $contato->nome }}" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $contato->email }}">
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $contato->telefone }}">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Atualizar</button>
        </div>
    </form>

    <div class="mt-3">
        <a href="{{ route('contatos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
