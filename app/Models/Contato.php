<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    // Adicione os campos que você deseja permitir para atribuição em massa
    protected $fillable = ['nome', 'email', 'telefone'];
}
