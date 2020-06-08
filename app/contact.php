<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
  protected $fillable=[

  'contact_title',
  'contact_description',
  'contact_status',

  ];
}
