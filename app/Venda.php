<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'id',
        'cliente',
        'data_entrega',
        'preco_total',
    ];

    public function getItens() {
        return $this->hasMany('App\VendaItem');
    }
}
