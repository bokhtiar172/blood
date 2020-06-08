<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\bloodDonar;
use Auth;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\appointmentNotification;

class bloodDonarController extends Controller
{
    public function save(Request $request){
      $bloodDonar=new bloodDonar;
          if (Auth::check()) {
            $bloodDonar['user_id']=Auth::id();
          }else {
            return redirect()->route('login');
          }
          $bloodDonar['blood_group']=$request->blood_group;
          $bloodDonar['donar_name']=$request->donar_name;
          $bloodDonar['donar_email']=$request->donar_email;
          $bloodDonar['donar_phone']=$request->donar_phone;
          $bloodDonar['donar_center']=$request->donar_center;
          $bloodDonar['donar_date']=$request->donar_date;
          $bloodDonar['donar_date']=$request->donar_date;
          $bloodDonar['donar_time']=$request->donar_time;
          $bloodDonar['donar_message']=$request->donar_message;

      $bloodDonar->save();

        $admin=User::where('role_id',2)->get();

          Notification::send($admin,new appointmentNotification($bloodDonar));






      return back();
    }
}
