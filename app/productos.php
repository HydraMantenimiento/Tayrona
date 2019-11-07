<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productos extends Model
{

    use SoftDeletes;

    public function  product_status(){
        return $this->belongsTo('App\product_status');
    }

    public function  category(){
        return $this->belongsTo('App\category');
    }

    public function  subcategorys(){
        return $this->belongsTo('App\subcategorys');
    }
    public function category_product(){
        return $this->belongsTo('App\category_product');
    }
    public function descriptions_product(){
        return $this->belongsTo('App\descriptions_product');
    }
    protected $dates = ['deleted_at'];

}
