<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $fillable=[
      'todo_name',
      'todo_description',
    ];
}
