<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\contact;


class contactController extends Controller
{
  public function contactus(){
    $all_contact=contact::latest()
              ->where('contact_status',1)
              ->get();
    return view('user.contact.show_contact',compact('all_contact'));
  }
}
