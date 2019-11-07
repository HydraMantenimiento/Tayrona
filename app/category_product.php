<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_product extends Model
{
    protected $table = 'category_product';

    public function  category(){
        return $this->belongsTo('App\category');
    }

    public function  productos(){
        return $this->belongsTo('App\productos');
    }
}
