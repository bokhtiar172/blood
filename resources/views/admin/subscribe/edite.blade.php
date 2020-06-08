@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8"> <!--start of blood foorm-->
            <br>
            <h2 class="text-center bg-info text-light">EDITE BLOOD GROUP</h2>
            <form class="" action="{{url('admin/save/blood-donar-appointment/'.$edite_donar->id)}}" method="post">
              @csrf


            <div class="row">
              <br>

                  <div class="col-md-6">
                    <input class="form-control" type="text" name="donar_name" placeholder="Enter Your Name" value="{{$edite_donar->donar_name}}">
                    <br>
                    <input class="form-control" type="number" placeholder="Enter Your Phone" name="donar_phone" value="{{$edite_donar->donar_phone}}">
                    <br>
                    <input class="form-control" type="date" placeholder="Date" name="donar_date" value="{{$edite_donar->donar_date}}">
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="donar_email" placeholder="Enter Your Email" value="{{$edite_donar->donar_email}}">
                    <br>
                    <input class="form-control" type="text" placeholder="Select Donation Center" name="donar_center" value="{{$edite_donar->donar_center}}">
                    <br>
                    <input class="form-control" type="time" placeholder="Time" name="donar_time" value="{{$edite_donar->donar_time}}">
                  </div>

            </div>
            <br>
                  <textarea class="form-control" name="donar_message" placeholder="Enter Your Message" rows="8" cols="30">{{$edite_donar->donar_message}}</textarea>
                  <input class="btn btn-danger ml-auto" type="submit" name="sub_btn" value="GET APPOINTMENT UPDATE">

          </form>

          </div><!-- end of blood form-->



          <div class="col-md-2">

          </div>
        </div>
      </section>


@endsection
