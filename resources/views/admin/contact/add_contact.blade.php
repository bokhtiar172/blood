@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8"> <!--start of blood foorm-->
            <br>
            <h2 class="text-center bg-info text-light">ADD Contact</h2>
            <form class="form-group" action="{{route('admin.save.contact')}}" method="post">
              @csrf
              <div class="">
                <label class="font-weight-bold" for="">Enter Contact Nmae</label>
                <input class="form-control" type="text" name="contact_title" placeholder="Enter Blood Group Nmae *" value="">
              </div>
              <div class="">
                <label class="font-weight-bold" for="">Enter Contact  Description</label>
                <textarea class="form-control" placeholder="Enter Blood Description*" name="contact_description" rows="8" cols="80"></textarea>
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Contact Publication Status</label>
                <input class="" type="checkbox" name="contact_status"  value="1">
              </div>

              <div class="float-right">
                <input class="btn btn-info" type="submit" name="btn_add_about" value="Upload">
              </div><br><br>
            </form>

          </div><!-- end of blood form-->



          <div class="col-md-2">

          </div>
        </div>
      </section>


@endsection
