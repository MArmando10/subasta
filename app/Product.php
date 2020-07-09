<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Imagen;
use App\Venta;
use App\User;
use App\Oferta;


class Product extends Model
{
    //
    public function category(){
        return $this->hasMany(Category::class);
    }

    public function imagenes(){
    	return $this->hasMany(Imagen::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function ofertas() {
        return $this->hasMany(Oferta::class);
    }

    public function venta() {
        return $this->hasOne(Product::class);
    }

    

    //se requiere belongsTo
}
