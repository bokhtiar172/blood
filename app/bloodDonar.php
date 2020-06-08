<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\blood;

class bloodDonar extends Model
{
  protected $fillable=[
    'donar_name','donar_email','donar_phone','donar_center','user_id','blood_group','donar_date','donar_time','donar_message'
  ];

  

}
