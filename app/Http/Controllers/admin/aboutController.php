<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\about;



class aboutController extends Controller
{
    public function add_about(){
      return view('admin.about.add_about');
    }




          public function save_about(Request $request){
            $about=new about;
              $about['about_title']=$request->about_title;
              $about['about_description']=$request->about_description;
                if ($request->about_status) {
                  $about['about_status']=$request->about_status;
                  }else {
                  $about['about_status']=0;
                }

              $about->save();
            return back();
          }



          public function all_about(){
            $all_about=about::latest()->get();
            return view('admin.about.all_about',compact('all_about'));
          }


          public function unactive_about($id){
            $unactive=about::find($id);
              $unactive['about_status']=0;
              $unactive->save();
            return back();
          }


          public function active_about($id){
            $active=about::find($id);
              $active['about_status']=1;
              $active->save();
            return back();
          }



          public function edite_about($id){
            $edite=about::find($id);
              return view('admin.about.edite',compact('edite'));
          }


          public function update_about(Request $request,$id){
            $edite_about=about::find($id);
              $edite_about['about_title']=$request->about_title;
              $edite_about['about_description']=$request->about_description;
                if ($request->about_status) {
                  $edite_about['about_status']=$request->about_status;
                  }else {
                  $edite_about['about_status']=0;
                }

              $edite_about->save();
            return redirect()->route('admin.all.about');
          }




          public function delete_about($id){
            $delete_about=about::find($id);
              $delete_about->delete();
            return back();
          }
}
