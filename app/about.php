<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $fillable=[
      'about_title',
      'about_description',
      'about_status'
    ];
}
