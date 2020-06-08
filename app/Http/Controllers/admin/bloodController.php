<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blood;


class bloodController extends Controller
{
      public function add_blood(){
        return view('admin.blood.add_blood');
      }


      public function save_blood(Request $request){
        $blood=new blood;
          $blood['blood_name']=$request->blood_name;
          $blood['blood_description']=$request->blood_description;
            if ($request->blood_status) {
              $blood['blood_status']=$request->blood_status;
              }else {
              $blood['blood_status']=0;
            }

          $blood->save();
        return back();
      }


      public function all_blood(){
        $all_blood=blood::latest()->get();
        return view('admin.blood.all_blood',compact('all_blood'));
      }


      public function unactive_blood($id){
        $unactive=blood::find($id);
          $unactive['blood_status']=0;
          $unactive->save();
        return back();
      }


      public function active_blood($id){
        $active=blood::find($id);
          $active['blood_status']=1;
          $active->save();
        return back();
      }



      public function edite_blood($id){
        $edite=blood::find($id);
          return view('admin.blood.edite',compact('edite'));
      }



      public function update_blood(Request $request,$id){
        $edite_blood=blood::find($id);
          $edite_blood['blood_name']=$request->blood_name;
          $edite_blood['blood_description']=$request->blood_description;
            if ($request->blood_status) {
              $edite_blood['blood_status']=$request->blood_status;
              }else {
              $edite_blood['blood_status']=0;
            }

          $edite_blood->save();
        return redirect()->route('admin.all.blood.group');
      }



      public function delete_blood($id){
        $delete_blood=blood::find($id);
          $delete_blood->delete();
        return back();
      }
}
