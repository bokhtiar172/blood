<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospitalCenter extends Model
{
    protected $filable=[
      'hp_name',
      'hp_description',
      'hp_status'
    ];
}
