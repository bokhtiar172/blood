@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8"> <!--start of blood foorm-->
            <br>
            <h2 class="text-center bg-info text-light">ADD HOSPITAL LIST</h2>
            <form class="form-group" action="{{route('admin.save.hp')}}" method="post">
              @csrf
              <div class="">
                <label class="font-weight-bold" for="">Enter Hospital Nmae</label>
                <input class="form-control" type="text" name="hp_name" placeholder="Enter Hospital Nmae *" value="">
              </div>
              <div class="">
                <label class="font-weight-bold" for="">Enter Hospital  Description</label>
                <textarea class="form-control" placeholder="Enter Hospital Description*" name="hp_description" rows="8" cols="80"></textarea>
              </div>

              <div class="">
                <label class="font-weight-bold" for=""> Hospital Publication Status</label>
                <input class="" type="checkbox" name="hp_status"  value="1">
              </div>

              <div class="float-right">
                <input class="btn btn-info" type="submit" name="btn_add_hoptial" value="Upload">
              </div><br><br>
            </form>

          </div><!-- end of blood form-->



          <div class="col-md-2">

          </div>
        </div>
      </section>


@endsection
