@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8"> <!--start of blood foorm-->
            <br>
            <h2 class="text-center bg-info text-light">EDITE NEWS</h2>
          <form class="form-group" enctype="multipart/form-data" action="{{url('admin/save/edite-news/'.$edite->id)}}" method="post">
              @csrf
              <div class="">
                <label class="font-weight-bold" for=""> Blood News name</label>
                <input class="form-control" placeholder="Enter News Title"  type="text" name="news_title"  value="{{$edite->news_title}}">
              </div>



              <div class="">
                <label class="font-weight-bold" for=""> Blood News Image</label>
                <input class="form-control" type="file" name="news_image"  value="{{$edite->news_image}}">
              </div>


              <div class="">
                <label class="font-weight-bold" for=""> Blood Camping Description</label>
                <textarea class="form-control" placeholder="Enter Description For Camping" name="news_description" rows="8" cols="80">{{$edite->news_description}}</textarea>
              </div>



              <div class="">
                <label class="font-weight-bold" for=""> Camping Publication Status</label>
                <input  type="checkbox" name="news_status"  value="1">
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
