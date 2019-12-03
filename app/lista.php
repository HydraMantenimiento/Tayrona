<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lista extends Model
{

    protected $table='listadeseos';

    public function product(){
        return $this->belongsTo('App\productos');
    }

    public function  product_status(){
        return $this->belongsTo('App\product_status');
    }

    public function  category(){
        return $this->belongsTo('App\category');
    }
    public function product_img()
    {
        return $this->hasMany('App\product_img');
    }
    public function  subcategory(){
        return $this->belongsTo('App\Subcategory');
    }
    public function category_product(){
        return $this->belongsTo('App\category_product');
    }
    public function descriptions_product(){
        return $this->belongsTo('App\descriptions_product');
    }
    public function User(){
        return$this->belongsTo('App\User');
    }



}
