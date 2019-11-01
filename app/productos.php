<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    public function  product_status(){
        return $this->belongsTo('App\product_status');
    }

    public function  category(){
        return $this->belongsTo('App\category');
    }

    public function  subcategorys(){
        return $this->belongsTo('App\subcategorys');
    }
}
