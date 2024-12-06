<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizzas extends Model
{
    protected $fillable = [
        'idpizza',
        'id',
        'name',
        'img',
        'desc',
        'price',
        'ingredients'
    ];

    protected $casts = [
        'id'=> 'string',
        'price'=> 'int',
        'ingredients'=>'array'
    ];
}
