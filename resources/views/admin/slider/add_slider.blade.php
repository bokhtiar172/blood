@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8"> <!--start of blood foorm-->
            <br>
            <h2 class="text-center bg-info text-light">ADD SLIDER</h2>
            <form class="form-group" enctype="multipart/form-data" action="{{route('admin.save.slider')}}" method="post">
              @csrf
              <div class="">
                <label class="font-weight-bold" for="">Enter Blood Slider Image</label>
                <input class="form-control" type="file" name="slider_image"  value="">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Blood Publication Status</label>
                <input  type="checkbox" name="slider_status"  value="1">
              </div>
              <div class="float-right">
                <input class="btn btn-info" type="submit" name="btn_add_slider" value="Upload">
              </div><br><br>
            </form>

          </div><!-- end of blood form-->



          <div class="col-md-2">

          </div>
        </div>
      </section>


@endsection
