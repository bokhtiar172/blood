<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class subscribe extends Model
{
    protected $fillable=[
      'user_id',
      'email'
    ];

    public function User(){
      return $this->belongsTo(User::class);
    }
}
