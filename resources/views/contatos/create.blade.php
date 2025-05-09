@extends('layouts.app')

@section('content')
    <h1 class="my-4 text-center">Novo Contato</h1>

    <form method="POST" action="{{ route('contatos.store') }}" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Digite o email">
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Digite o telefone">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Salvar</button>
        </div>
    </form>

    <div class="mt-3">
        <a href="{{ route('contatos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
