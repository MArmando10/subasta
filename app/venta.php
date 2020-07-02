<?php

namespace App;
use\Product;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function products() {
        return $this->hasMany('App\Product', 'foreign_key', 'producto_id');
    }

    
    public  function user(){
        return $this->hasOne('\App\User', 'foreign_key', 'vendedor_id');
    }

    public  function comprador(){
        return $this->hasOne('\App\User', 'foreign_key', 'comprador_id');
    }

    public function oferta(){
        return $this->hasMany('\App\User', 'foreign_key', 'oferta_id');
    }
}
