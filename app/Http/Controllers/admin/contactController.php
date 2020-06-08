<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\contact;


class contactController extends Controller
{
  public function add_contact(){
    return view('admin.contact.add_contact');
  }




        public function save_contact(Request $request){
          $contact=new contact;
            $contact['contact_title']=$request->contact_title;
            $contact['contact_description']=$request->contact_description;
              if ($request->contact_status) {
                $contact['contact_status']=$request->contact_status;
                }else {
                $contact['contact_status']=0;
              }

            $contact->save();
          return back();
        }



        public function all_contact(){
          $all_contact=contact::latest()->get();
          return view('admin.contact.all_contact',compact('all_contact'));
        }


        public function unactive_contact($id){
          $unactive=contact::find($id);
            $unactive['contact_status']=0;
            $unactive->save();
          return back();
        }


        public function active_contact($id){
          $active=contact::find($id);
            $active['contact_status']=1;
            $active->save();
          return back();
        }



        public function edite_contact($id){
          $edite=contact::find($id);
            return view('admin.contact.edite',compact('edite'));
        }


        public function update_contact(Request $request,$id){
          $edite_contact=contact::find($id);
            $edite_contact['contact_title']=$request->contact_title;
            $edite_contact['contact_description']=$request->contact_description;
              if ($request->contact_status) {
                $edite_contact['contact_status']=$request->contact_status;
                }else {
                $edite_contact['contact_status']=0;
              }

            $edite_contact->save();
          return redirect()->route('admin.all.contact');
        }




        public function delete_contact($id){
          $delete_contact=contact::find($id);
            $delete_contact->delete();
          return back();
        }
}
