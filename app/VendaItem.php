<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendaItem extends Model
{

    protected $fillable = ['venda_id', 'product_id', 'preco', 'quantidade'];
    public function product() {

        return $this->belongsTo('App\Product', 'product_id');
//
//        printf($produto);
//        exit();
    }
}
