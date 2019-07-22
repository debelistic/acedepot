<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'title',
        'description',
        'added_by',
        'sec_img_url',
    ];
  
}
