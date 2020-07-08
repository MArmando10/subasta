<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Oferta extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function subasta(){
        return $this->hasOne(Subasta::class);
    }

}
