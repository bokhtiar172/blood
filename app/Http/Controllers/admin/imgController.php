<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\img;



class imgController extends Controller
{
    public function add_img(){
      return view('admin.img.add_img');
    }




        public function save_img(Request $request){
          $img = new img;
          if ($request->img_status) {
            $img['img_status']=$request->img_status;
          }else {
            $img['img_status']=0;
          }



                    $path=$request->file('img')->store('/image');

                      $image=$request->file('img');
                           if ($image){

                             $image_name=Str::random(20);
                             $ext=strtolower($image->getClientOriginalExtension());
                             $image_full_name=$image_name.'.'.$ext;
                             $upload_path='image/';
                             $image_url=$upload_path.$image_full_name;
                             $success=$image->move($upload_path,$image_full_name);
                                 if ($success) {
                                 $img['img']=$image_url;
                                 $img->save();
                                 return back();
                                      }
                                    }
                                  }




            public function all_img(){
              $all_img=img::latest()->get();
                  return view('admin.img.all_img',compact('all_img'));
            }





            public function unactive_img($id){
              $unactive=img::find($id);
                $unactive['img_status']=0;
                $unactive->save();
              return back();
            }


            public function active_img($id){
              $active=img::find($id);
                $active['img_status']=1;
                $active->save();
              return back();
            }




            public function edite_img($id){
              $edite=img::find($id);
                return view('admin.img.edite',compact('edite'));
            }




            public function update_img(Request $request,$id){

              $img =img::find($id);
                  if ($request->slider_status) {
                    $img['img_status']=$request->slider_status;
                  }else {
                    $img['img_status']=0;
                  }


                        $path=$request->file('img')->store('/image');
                          $image=$request->file('img');
                               if ($image){
                                 $image_name=Str::random(20);
                                 $ext=strtolower($image->getClientOriginalExtension());
                                 $image_full_name=$image_name.'.'.$ext;
                                 $upload_path='image/';
                                 $image_url=$upload_path.$image_full_name;
                                 $success=$image->move($upload_path,$image_full_name);
                                     if ($success) {
                                     $img['img']=$image_url;
                                     $img->save();
                                     return redirect()->route('admin.all.img');
                                          }
                                        }
                                      }





            public function delete_img($id){
              $delete=img::find($id);
                $delete->delete();
              return back();
            }

}
