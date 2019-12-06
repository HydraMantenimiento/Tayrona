<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'operation';
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function order(){
        return $this->belongsTo('App\Order','id');
    }
}
