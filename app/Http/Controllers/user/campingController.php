<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\camping;
class campingController extends Controller
{
    public function shwo_camping(){
      $all_camping=camping::latest()
                    ->where('camping_status',1)
                    ->get();
          return view('user.camping.show_camping',compact('all_camping'));
    }



    public function single_view_camping($id){
      $single_view_camping=camping::find($id);
          return view('user.camping.single_view_camping',compact('single_view_camping'));
    }
}
