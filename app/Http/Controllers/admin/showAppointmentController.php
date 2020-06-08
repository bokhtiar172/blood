<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\bloodDonar;
use Illuminate\Support\Facades\Notification;
use App\Notifications\conformNotification;
use Auth;
class showAppointmentController extends Controller
{
    public function add_appointment(){
      return view('admin.appointment.add_appoinment');
    }



    public function save_appointment(Request $request){
      $donar=new bloodDonar;
          $donar['user_id']=Auth::id();
          $donar['donar_name']=$request->donar_name;
          $donar['blood_group']=$request->blood_group;
          $donar['donar_email']=$request->donar_email;
          $donar['donar_phone']=$request->donar_phone;
          $donar['donar_center']=$request->donar_center;
          $donar['donar_date']=$request->donar_date;
          $donar['donar_time']=$request->donar_time;
          $donar['donar_message']=$request->donar_message;

      $donar->save();
      return redirect('admin/all/appointment');
    }


    public function all_appointment(){
      $all_appointment=  bloodDonar::latest()->get();
        return view('admin.appointment.all_appoinment',compact('all_appointment'));
    }




    public function edite_donar($id){
      $edite_donar=bloodDonar::find($id);
          return view('admin.appointment.edite',compact('edite_donar'));
    }



    public function save_edite_donar(Request $request,$id){
      $edite_donar_update=bloodDonar::find($id);

          $edite_donar_update['donar_name']=$request->donar_name;
          $edite_donar_update['donar_email']=$request->donar_email;
          $edite_donar_update['donar_phone']=$request->donar_phone;
          $edite_donar_update['donar_center']=$request->donar_center;
          $edite_donar_update['donar_date']=$request->donar_date;
          $edite_donar_update['donar_time']=$request->donar_time;
          $edite_donar_update['donar_message']=$request->donar_message;

      $edite_donar_update->save();
      return redirect('admin/all/appointment');
    }




    public function delete_donar($id){
      $delete=bloodDonar::find($id);
          $delete->delete();
      return back();
    }



    public function single_view_user($id){
      $single_view_user=bloodDonar::find($id);
            return view('admin.appointment.single_view_user',compact('single_view_user'));
    }



    public function conform_donar($id){
      $donar=bloodDonar::find($id);
          $donar['donar_status']=1;
          $donar->save();

          Auth()->user()->notify(new conformNotification($donar));


          return redirect('admin/all_appointment');
    }
}
