@extends('user_dashbord')
@section('user_content')

  <section class="container">
    <img height="400" width="100%" src="{{asset($single_view_camping->camping_image)}}" alt="">
    <div class="row">
      <div class="col-md-8">
        <br>
        <div class="">
          <strong>Camping Title:</strong>
          {{$single_view_camping->camping_name}}
        </div>
        <br>
        <div class="">
          <strong>Camping Location:</strong>
          {{$single_view_camping->camping_location}}
        </div>
        <br>

        <div class="">
          <strong>Camp Start Time:</strong>
          {{$single_view_camping->camping_start_time}}
        </div>

        <br>
        <div class="">
          <strong>Camping End Time:</strong>
          {{$single_view_camping->camping_end_time}}
        </div>
<br>
        <div class="">
          <strong>Camp Date:</strong>
          {{$single_view_camping->camping_date}}
        </div>
<br>
        <div class="">
          <strong>Camping Description:</strong>
          {{$single_view_camping->camping_description}}
        </div>
      </div><!--single view show end -->


      <?php
          $all=DB::table('campings')
                      ->where('camping_status',1)
                      ->paginate(3);
       ?>

      <div class="col-md-4"><br>
        @foreach($all as $v_cam)
        <div class=" container">
          <img height="200px" width="100%" src="{{asset($v_cam->camping_image)}}" alt="">
          <strong class="mt-2">{{$v_cam->camping_name}}</strong>
          <a class="btn btn-info float-right" href="{{url('user/single-view-camping/'.$v_cam->id)}}">View</a>
        </div>
        @endforeach
      </div><!-- end of right side -->
    </div>
  </section>


@endsection
