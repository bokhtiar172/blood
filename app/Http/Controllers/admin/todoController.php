<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\todo;


class todoController extends Controller
{
    public function add_todo(){
      return view('admin.todo.add_todo');
    }




          public function save_todo(Request $request){
            $todo=new todo;
              $todo['todo_name']=$request->todo_name;
              $todo['todo_description']=$request->todo_description;
              $todo->save();
            return back();
          }




          public function all_todo(){
            $all_todo=todo::latest()->get();
            return view('admin.todo.all_todo',compact('all_todo'));
          }




          public function edite_todo($id){
            $edite=todo::find($id);
              return view('admin.todo.edite',compact('edite'));
          }




          public function update_todo(Request $request,$id){
            $edite_todo=todo::find($id);

              $edite_todo['todo_name']=$request->todo_name;
              $edite_todo['todo_description']=$request->todo_description;

              $edite_todo->save();
            return redirect()->route('admin.all.todo');
          }



          public function delete_todo($id){
            $delete=todo::find($id);
              $delete->delete();
            return back();
          }


}
