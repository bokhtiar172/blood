<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\imageSlider;
use Illuminate\Support\Str;


class imageSlidercontroller extends Controller
{
    public function add_slider(){
      return view('admin.slider.add_slider');
    }



    public function save_slider(Request $request){
      $imageSlider = new imageSlider;
        $imageSlider['slider_status']=$request->slider_status;


                $path=$request->file('slider_image')->store('/image');

                  $image=$request->file('slider_image');
                       if ($image){

                         $image_name=Str::random(20);
                         $ext=strtolower($image->getClientOriginalExtension());
                         $image_full_name=$image_name.'.'.$ext;
                         $upload_path='image/';
                         $image_url=$upload_path.$image_full_name;
                         $success=$image->move($upload_path,$image_full_name);
                             if ($success) {
                             $imageSlider['slider_image']=$image_url;
                             $imageSlider->save();
                             return back();
                                  }
                                }
                              }



        public function all_slider(){
          $all_slider=imageSlider::latest()->get();
              return view('admin.slider.all_slider',compact('all_slider'));
        }






        public function unactive_slider($id){
          $unactive=imageSlider::find($id);
            $unactive['slider_status']=0;
            $unactive->save();
          return back();
        }


        public function active_slider($id){
          $active=imageSlider::find($id);
            $active['slider_status']=1;
            $active->save();
          return back();
        }



        public function edite_slider($id){
          $edite=imageSlider::find($id);
            return view('admin.slider.edite',compact('edite'));
        }




        public function update_slider(Request $request,$id){

          $imageSlider =imageSlider::find($id);
            $imageSlider['slider_status']=$request->slider_status;


                    $path=$request->file('slider_image')->store('/image');

                      $image=$request->file('slider_image');
                           if ($image){

                             $image_name=Str::random(20);
                             $ext=strtolower($image->getClientOriginalExtension());
                             $image_full_name=$image_name.'.'.$ext;
                             $upload_path='image/';
                             $image_url=$upload_path.$image_full_name;
                             $success=$image->move($upload_path,$image_full_name);
                                 if ($success) {
                                 $imageSlider['slider_image']=$image_url;
                                 $imageSlider->save();
                                 return redirect()->route('admin.all.slider');
                                      }
                                    }
                                  }








        public function delete_slider($id){
          $delete_slider=imageSlider::find($id);
            $delete_slider->delete();
          return back();
        }

}
