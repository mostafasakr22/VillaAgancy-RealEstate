<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    protected $fillable=[
        "id","villa_img","price","space","bedrooms","bathrooms","floor"
    ];
}
