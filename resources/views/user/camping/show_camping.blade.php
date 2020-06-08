@extends('user_dashbord')
@section('user_content')


<!-- camping start area -->
<section class="container bg-light">
<br><br><br>
<div class="">

<h2 class="text-center">OUR CAMPAIGNS</h2>
<h5 class="text-center">Encourage new donors to join and continue to give blood. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.</h5>
<br>

<div class="row">
  @foreach($all_camping as $v_camping)
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-6">
        <img height="300px" width="100%" src="{{asset($v_camping->camping_image)}}" alt="">
      </div>
      <div class="col-md-6">
        <br>
        <p><i class="far fa-calendar-minus"></i>{{$v_camping->created_at->diffForHumans()}}</p>
        <h3>{{$v_camping->camping_name}}</h3>
        <a class="btn btn-info float-right mt-4" href="{{url('user/single-view-camping/'.$v_camping->id)}}">READ MORE...</a>
        <br>
        <br><br>
        <p><i class="fas fa-clock"></i>{{$v_camping->camping_start_time}}-{{$v_camping->camping_end_time}} </p>
        <p> <i class="fas fa-location-circle"></i>{{$v_camping->camping_location}}</p>

      </div>
    </div>
  </div>
  @endforeach
</div>

</div>

</section>
<br><br>

<!-- camping end area -->




@endsection
