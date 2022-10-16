<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'price',
        'available',
        'user_id',
        'dish_cover'
    ];

    public function users() {
        return $this->hasMany('App\User');
    }

    public function orders(){
        return $this->belongsToMany('App\Order','order_id');
    }
}
