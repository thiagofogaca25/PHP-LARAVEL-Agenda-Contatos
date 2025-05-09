<?php

use App\Http\Controllers\ContatoController;

Route::get('/', [ContatoController::class, 'index'])->name('contatos.index');
Route::get('/contatos/criar', [ContatoController::class, 'create'])->name('contatos.create');
Route::post('/contatos', [ContatoController::class, 'store'])->name('contatos.store');
Route::get('/contatos/{contato}/editar', [ContatoController::class, 'edit'])->name('contatos.edit');
Route::put('/contatos/{contato}', [ContatoController::class, 'update'])->name('contatos.update');
Route::delete('/contatos/{contato}', [ContatoController::class, 'destroy'])->name('contatos.destroy');
