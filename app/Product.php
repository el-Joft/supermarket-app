<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'measurement',
        'cost_price',
        'percent_markup',
        'selling_price',
        're_order',
        'barcode',
        'description',

    ];
}
