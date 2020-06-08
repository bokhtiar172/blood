<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\hospitalCenter;


class hospitalCenterController extends Controller
{

      public function add_hp(){
        return view('admin.hospital.add_hospital');
      }



            public function save_hp(Request $request){
              $hp=new hospitalCenter;
                $hp['hp_name']=$request->hp_name;
                $hp['hp_description']=$request->hp_description;
                if ($request->hp_status) {
                    $hp['hp_status']=$request->hp_status;
                }else {
                    $hp['hp_status']=0;
                }

                $hp->save();
              return back();
            }




            public function all_hp(){
              $all_hp=hospitalCenter::latest()->get();
              return view('admin.hospital.all_hp',compact('all_hp'));
            }




            public function unactive_hp($id){
              $unactive=hospitalCenter::find($id);
                $unactive['hp_status']=0;
                $unactive->save();
              return back();
            }


            public function active_hp($id){
              $active=hospitalCenter::find($id);
                $active['hp_status']=1;
                $active->save();
              return back();
            }



            public function edite_hp($id){
              $edite=hospitalCenter::find($id);
                return view('admin.hospital.edite',compact('edite'));
            }



            public function update_hp(Request $request,$id){
              $edite_hp=hospitalCenter::find($id);

                $edite_hp['hp_name']=$request->hp_name;
                $edite_hp['hp_description']=$request->hp_description;
                if ($request->hp_status) {
                    $hp['hp_status']=$request->hp_status;
                }else {
                    $hp['hp_status']=0;
                }


                $edite_hp->save();
              return redirect()->route('admin.all.hp');
            }




            public function delete_hp($id){
              $delete=hospitalCenter::find($id);
                $delete->delete();
              return back();
            }

}
