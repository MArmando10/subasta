<?php

namespace App;
use\Product;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function products() {
        return $this->hasMany('App\Product');
    }
}
