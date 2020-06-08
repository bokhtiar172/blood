<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;
use App\subscribe;
use Illuminate\Support\Str;
use App\Notifications\subscriberNotification;
use Illuminate\Support\Facades\Notification;



class newsController extends Controller
{
      public function add_news(){
        return view('admin.news.add_news');
      }




          public function save_news(Request $request){
            $news = new news;

              $news['news_title']=$request->news_title;
              $news['news_title_slug']=Str::slug($request->news_title);
              $news['news_description']=$request->news_description;

              if ($request->news_status) {
                $news['news_status']=$request->news_status;
              }else {
                $news['news_status']=0;
              }





                      $path=$request->file('news_image')->store('/image');

                        $image=$request->file('news_image');
                             if ($image){

                               $image_name=Str::random(20);
                               $ext=strtolower($image->getClientOriginalExtension());
                               $image_full_name=$image_name.'.'.$ext;
                               $upload_path='image/';
                               $image_url=$upload_path.$image_full_name;
                               $success=$image->move($upload_path,$image_full_name);
                                   if ($success) {
                                   $news['news_image']=$image_url;
                                   $news->save();



                                   $subscribe=subscribe::all();
                                         foreach ($subscribe as $v_sub) {
                                             Notification::route('mail',$v_sub->email)
                                                 ->notify(new subscriberNotification($news));
                                         }


                                   return back();
                                        }
                                      }
                                    }






              public function all_news(){
                $all_news=news::latest()->get();
                    return view('admin.news.all_news',compact('all_news'));
              }






              public function unactive_news($id){
                $unactive=news::find($id);
                  $unactive['news_status']=0;
                  $unactive->save();
                return back();
              }


              public function active_news($id){
                $active=news::find($id);
                  $active['news_status']=1;
                  $active->save();
                return back();
              }


              public function edite_news($id){
                $edite=news::find($id);
                  return view('admin.news.edite',compact('edite'));
              }





              public function update_news(Request $request,$id){

                $camping=news::find($id);
                $camping['news_title']=$request->news_title;
                $camping['news_title_slug']=Str::slug($request->news_title);
                $camping['news_description']=$request->news_description;

                if ($request->news_status) {
                  $camping['news_status']=$request->news_status;
                }else {
                  $camping['news_status']=0;
                }





                        $path=$request->file('news_image')->store('/image');

                          $image=$request->file('news_image');
                               if ($image){

                                 $image_name=Str::random(20);
                                 $ext=strtolower($image->getClientOriginalExtension());
                                 $image_full_name=$image_name.'.'.$ext;
                                 $upload_path='image/';
                                 $image_url=$upload_path.$image_full_name;
                                 $success=$image->move($upload_path,$image_full_name);
                                     if ($success) {
                                     $camping['news_image']=$image_url;
                                     $camping->save();
                                     return redirect()->route('admin.all.news');
                                          }
                                        }
                                      }





              public function delete_news($id){
                $delete=news::find($id);
                  $delete->delete();
                return back();
              }
}
