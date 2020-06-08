<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;


class newsController extends Controller
{
    public function show_news(){
      $all_news=news::latest()
              ->where('news_status',1)
              ->get();
      return view('user.news.show_news',compact('all_news'));
    }



    public function single_news($id){
      $single_news=news::find($id);
          return view('user.news.single_news',compact('single_news'));
    }
}
