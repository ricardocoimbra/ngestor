<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 'email', 'cep', 'logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'estado'
    ];
}
