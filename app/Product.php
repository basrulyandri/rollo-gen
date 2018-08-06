<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];
    
    protected $fillable = [ "code","name","slug","category_id","description","sell_price","available_stocks", ];

}