<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subscribe;
use Auth;
class subcribeController extends Controller
{
    public function save_subscribe(Request $request){
      $subscribe=new subscribe;
          if(Auth::check()){
            $subscribe['user_id']=Auth::id();
          }else {
            return redirect()->route('login');
          }

          $subscribe['email']=$request->email;
          $subscribe->save();

          return back();
    }
}
