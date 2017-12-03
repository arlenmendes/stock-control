<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Notifiable;

    protected $fillable = [
            'id',
            'nome',
            'descricao',
            'quantidade',
            'quantidade_minima',
            'custo',
            'preco_sugerido',
        ];
}
