<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps=false;
    protected $fillable = [
       'category',
       'brand',   
       'name',
       'price',
       'weight',
       'city',  
       'info',   
       'qty',       
    ];
}
