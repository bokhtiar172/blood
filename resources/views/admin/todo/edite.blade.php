@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8"> <!--start of blood foorm-->
            <br>
            <h2 class="text-center bg-info text-light">ADD TO DO EDITE</h2>
            <form class="form-group" action="{{url('admin/save/edite-todo/'.$edite->id)}}" method="post">
              @csrf
              <div class="">
                <label class="font-weight-bold" for="">Enter TO DO Nmae</label>
                <input class="form-control" type="text" name="todo_name" placeholder="Enter Blood Group Nmae *" value="{{$edite->todo_name}}">
              </div>
              <div class="">
                <label class="font-weight-bold" for="">Enter TO DO  Description</label>
                <textarea class="form-control" placeholder="Enter Blood Description*" name="todo_description" rows="8" cols="80">{{$edite->todo_description}}</textarea>
              </div>

              <div class="float-right">
                <input class="btn btn-info" type="submit" name="btn_edite_blood" value="UPDATE">
              </div><br><br>
            </form>

          </div><!-- end of blood form-->



          <div class="col-md-2">

          </div>
        </div>
      </section>


@endsection
