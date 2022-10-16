<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'address',
        'total_price',
        'email',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function dishes(){
        return $this->belongsToMany('App\Admin\Dish');
    }
}
