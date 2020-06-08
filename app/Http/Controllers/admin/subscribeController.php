<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subscribe;


class subscribeController extends Controller
{
    public function all_subscribe(){
        $all_subscribe=subscribe::latest()->get();
            return view('admin.subscribe.all_subscribe',compact('all_subscribe'));
    }
}
