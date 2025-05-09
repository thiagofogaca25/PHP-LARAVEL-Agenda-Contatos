<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $request)
    {
        $busca = $request->input('busca');
        $contatos = Contato::when($busca, function ($query, $busca) {
            return $query->where('nome', 'like', "%$busca%");
        })->get();

        return view('contatos.index', compact('contatos', 'busca'));
    }

    public function create()
    {
        return view('contatos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'nullable|email',
            'telefone' => 'nullable'
        ]);

        Contato::create($request->all());
        return redirect()->route('contatos.index');
    }

    public function edit(Contato $contato)
    {
        return view('contatos.edit', compact('contato'));
    }

    public function update(Request $request, Contato $contato)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'nullable|email',
            'telefone' => 'nullable'
        ]);

        $contato->update($request->all());
        return redirect()->route('contatos.index');
    }

    public function destroy(Contato $contato)
    {
        $contato->delete();
        return redirect()->route('contatos.index');
    }
}
