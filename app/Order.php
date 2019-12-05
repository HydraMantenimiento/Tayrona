<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }

    public function product(){
        return $this->belongsTo('App\productos', 'id_product');
    }
}
