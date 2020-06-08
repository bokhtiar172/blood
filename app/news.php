<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable=[
      'news_title',
      'news_title_slug',
      'news_description',
      'news_image',
      'news_status',
    ];
}
