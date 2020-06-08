@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8"> <!--start of blood foorm-->
            <br>
            <h2 class="text-center bg-info text-light">ADD CAMPING</h2>
            <form class="form-group" enctype="multipart/form-data" action="{{url('admin/save/camping-camping/'.$edite->id)}}" method="post">
              @csrf
              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping name</label>
                <input class="form-control" placeholder="Enter Camping Title"  type="text" name="camping_name"  value="{{$edite->camping_name}}">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Location</label>
                <input class="form-control" placeholder="Enter Camping Location"  type="text" name="camping_location"  value="{{$edite->camping_location}}">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Start Time</label>
                <input class="form-control"   type="time" name="camping_start_time"  value="{{$edite->camping_start_time}}">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping End Time</label>
                <input class="form-control"   type="time" name="camping_end_time"  value="{{$edite->camping_end_time}}">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Date</label>
                <input class="form-control"   type="date" name="camping_date"  value="{{$edite->camping_date}}">
              </div>


              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Image</label>
                <input class="form-control" type="file" name="camping_image"  value="{{$edite->camping_image}}">
              </div>


              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Description</label>
                <textarea class="form-control" placeholder="Enter Description For Camping" name="camping_description" rows="8" cols="80">{{$edite->camping_description}}</textarea>
              </div>



              <div class="">
                <label class="font-weight-bold" for=""> Camping Publication Status</label>
                <input  type="checkbox" name="caping_status"  value="1">
              </div>
              <div class="float-right">
                <input class="btn btn-info" type="submit" name="btn_add_camping" value="Upload">
              </div><br><br>
            </form>

          </div><!-- end of blood form-->







          <div class="col-md-2">

          </div>
        </div>
      </section>


@endsection
