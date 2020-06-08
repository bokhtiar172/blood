<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class camping extends Model
{
    protected $fillable=[
      'camping_name',
      'camping_location',
      'camping_description',
      'camping_image',
      'camping_status',  
];
}
