<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoteker extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [ "nama","alamat","telpon", ];
}