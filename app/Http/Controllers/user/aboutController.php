<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\about;


class aboutController extends Controller
{
    public function aboutus(){
      $all_about=about::latest()
                ->where('about_status',1)
                ->get();
      return view('user.about.show_about',compact('all_about'));
    }
}
