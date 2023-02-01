<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    protected $fillable = ['cliente_id', 'servico_id', 'data_abertura'];


    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function servico()
    {
        return $this->belongsTo('App\Servico');
    }

    public function getDataAberturaBrAttribute()
    {
        return date('d/m/Y', strtotime($this->attributes['data_abertura']));
    }
}
