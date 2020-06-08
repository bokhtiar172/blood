<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\camping;
use Illuminate\Support\Str;


class campingController extends Controller
{
    public function add_camping(){
      return view('admin.camping.add_camping');
    }



    public function save_camping(Request $request){
      $camping = new camping;
        $camping['camping_name']=$request->camping_name;
        $camping['camping_location']=$request->camping_location;
        $camping['camping_description']=$request->camping_description;
        $camping['camping_start_time']=$request->camping_start_time;
        $camping['camping_end_time']=$request->camping_end_time;
        $camping['camping_date']=$request->camping_date;
        if ($request->camping_status) {
          $camping['camping_status']=$request->caping_status;
        }else {
          $camping['camping_status']=0;
        }





                $path=$request->file('camping_image')->store('/image');

                  $image=$request->file('camping_image');
                       if ($image){

                         $image_name=Str::random(20);
                         $ext=strtolower($image->getClientOriginalExtension());
                         $image_full_name=$image_name.'.'.$ext;
                         $upload_path='image/';
                         $image_url=$upload_path.$image_full_name;
                         $success=$image->move($upload_path,$image_full_name);
                             if ($success) {
                             $camping['camping_image']=$image_url;
                             $camping->save();
                             return back();
                                  }
                                }
                              }



        public function all_camping(){
          $all_camping=camping::latest()->get();
              return view('admin.camping.all_camping',compact('all_camping'));
        }






        public function unactive_camping($id){
          $unactive=camping::find($id);
            $unactive['camping_status']=0;
            $unactive->save();
          return back();
        }


        public function active_camping($id){
          $active=camping::find($id);
            $active['camping_status']=1;
            $active->save();
          return back();
        }



        public function edite_camping($id){
          $edite=camping::find($id);
            return view('admin.camping.edite',compact('edite'));
        }




        public function update_camping(Request $request,$id){

          $camping=camping::find($id);
          $camping['camping_name']=$request->camping_name;
          $camping['camping_location']=$request->camping_location;
          $camping['camping_description']=$request->camping_description;
          $camping['camping_start_time']=$request->camping_start_time;
          $camping['camping_end_time']=$request->camping_end_time;
          $camping['camping_date']=$request->camping_date;
          if ($request->camping_status) {
            $camping['camping_status']=$request->caping_status;
          }else {
            $camping['camping_status']=0;
          }





                  $path=$request->file('camping_image')->store('/image');

                    $image=$request->file('camping_image');
                         if ($image){

                           $image_name=Str::random(20);
                           $ext=strtolower($image->getClientOriginalExtension());
                           $image_full_name=$image_name.'.'.$ext;
                           $upload_path='image/';
                           $image_url=$upload_path.$image_full_name;
                           $success=$image->move($upload_path,$image_full_name);
                               if ($success) {
                               $camping['camping_image']=$image_url;
                               $camping->save();
                               return redirect()->route('admin.all.camping');
                                    }
                                  }
                                }





        public function delete_camping($id){
          $delete=camping::find($id);
            $delete->delete();
          return back();
        }

}
