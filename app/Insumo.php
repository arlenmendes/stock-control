<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use Notifiable;

    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'quantidade',
        'preco',
    ];
}
