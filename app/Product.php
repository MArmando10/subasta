<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Imagen;
use App\Venta;
use App\User;


class Product extends Model
{
    //
    public function category(){
        return $this->hasMany('App\Category');
    }

    public function imagenes(){
    	return $this->hasMany(Imagen::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }

    public function venta() {
        return $this->hasOne(Product::class);
    }
}
