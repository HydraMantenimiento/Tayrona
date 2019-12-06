<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
    public function operation(){
        return $this->belongsTo('App\Operation','oper_id');
    }
    public function product(){
        return $this->belongsTo('App\productos', 'id_product');
    }
    public  function img(){
        return $this->belongsTo('App\product_img' , 'id_product');
    }
}
