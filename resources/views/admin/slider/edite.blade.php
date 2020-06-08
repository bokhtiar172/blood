@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8"> <!--start of blood foorm-->
            <br>
            <h2 class="text-center bg-info text-light">EDITE SLIDER ITEMS</h2>
            <form class="form-group" enctype="multipart/form-data" action="{{url('admin/save/edite-slider/'.$edite->id)}}" method="post">
              @csrf
              <div class="">
                <label class="font-weight-bold" for="">Enter Slider Select Picture</label>
                <input class="form-control" type="file" name="slider_image"  value="{{$edite->slider_image}}">
              </div>
              <div class="">
                <label class="font-weight-bold" for=""> Slider Publication Status</label>
                <input  type="checkbox" name="slider_status"  value="1">
              </div>
              <div class="float-right">
                <input class="btn btn-info" type="submit" name="btn_edite_blood" value="Update">
              </div><br><br>
            </form>

          </div><!-- end of blood form-->



          <div class="col-md-2">

          </div>
        </div>
      </section>


@endsection
