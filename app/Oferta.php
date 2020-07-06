<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Oferta extends Model
{
    public function user() {
        return $this->hasOne(User::class);
    }

    public function product(){
        return $this->hasOne(Product::class);
    }
}
