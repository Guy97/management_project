<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BodytoneProduct extends Model
{
    protected $fillable = [
        'name', 'description', 'price',
    ];
}
