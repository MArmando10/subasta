<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Imagen;

class Product extends Model
{
    //
    public function category(){
        return $this->hasMany('App\Category');
    }

    public function imagenes(){
    	return $this->hasMany(Imagen::class);
    }
}
