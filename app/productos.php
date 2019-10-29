<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    public function product_categorys(){
        return $this->belongsTo('App\product_categorys');
    }

    public function  product_status(){
        return $this->belongsTo('App\product_status');
    }
}
