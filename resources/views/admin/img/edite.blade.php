@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8"> <!--start of blood foorm-->
            <br>
            <h2 class="text-center bg-info text-light">EDITE IMAGE</h2>
            <form class="form-group" action="{{url('admin/save/edite-img/'.$edite->id)}}" enctype="multipart/form-data" method="post">
              @csrf

              <div class="">
                <label class="font-weight-bold" for=""> IMAGE GALLARY</label>
                <input  type="file" name="img"  value="{{$edite->img}}">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Image Publication Status</label>
                <input  type="checkbox" name="img_status"  value="1">
              </div>


              <div class="float-right">
                <input class="btn btn-info" type="submit" name="btn_add_blood" value="Upload">
              </div><br><br>
            </form>

          </div><!-- end of blood form-->



          <div class="col-md-2">

          </div>
        </div>
      </section>


@endsection
