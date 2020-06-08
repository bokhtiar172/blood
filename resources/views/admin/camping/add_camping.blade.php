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
            <form class="form-group" enctype="multipart/form-data" action="{{route('admin.save.camping')}}" method="post">
              @csrf
              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping name</label>
                <input class="form-control" placeholder="Enter Camping Title"  type="text" name="camping_name"  value="">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Location</label>
                <input class="form-control" placeholder="Enter Camping Location"  type="text" name="camping_location"  value="">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Start Time</label>
                <input class="form-control"   type="time" name="camping_start_time"  value="">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping End Time</label>
                <input class="form-control"   type="time" name="camping_end_time"  value="">
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Date</label>
                <input class="form-control"   type="date" name="camping_date"  value="">
              </div>


              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Image</label>
                <input class="form-control" type="file" name="camping_image"  value="">
              </div>


              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Description</label>
                <textarea class="form-control" placeholder="Enter Description For Camping" name="camping_description" rows="8" cols="80"></textarea>
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
