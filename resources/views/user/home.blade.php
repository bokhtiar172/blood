@extends('user_dashbord')
@section('user_content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"><!-- slider start  -->
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">

<div class="carousel-item active">
<img height="400px" width="100%" src="https://picsum.photos/seed/picsum/200/300" alt="...">
<div class="carousel-caption d-none d-md-block">
  <h5>..asdfasdfdfd.</h5>
  <p>.asdfasdfadf..</p>
</div>
</div>

<div class="carousel-item">
  <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">

</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div><!-- slider end -->


<h3 class="text-center text-dark mt-3">DONATION PROCESS</h3>
<h5 class="text-center text-dark mt-2 mb-4">The donation process from the time you arrive center until the time you leave</h5>
<section class="container">
<div class="row">
<div class="col-md-4">
  <div class="card" style="width: 21rem;">
  <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="cart-title">REGISTRATION</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card" style="width: 21rem;">
  <img class="card-img-top" src="img/2.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="cart-title">SCREENING</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card" style="width: 21rem;">
  <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="cart-title">DONATION</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  </div>
</div>
</div>
</section>
<br><br><br><br>











<!-- camping start area -->



<?php

  $all_camping=DB::table('campings')
              ->where('camping_status',1)
              ->paginate(6);
 ?>






<section class="container bg-light">
<br><br><br>
<div class="">

<h2 class="text-center">OUR CAMPAIGNS</h2>
<h5 class="text-center">Encourage new donors to join and continue to give blood. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.</h5>
<br>

<div class="row">
  @foreach($all_camping as $v_camp)
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-6">
        <img height="300px;" width="100%" src="{{asset($v_camp->camping_image)}}" alt="">
      </div>
      <div class="col-md-6">
        <br>
        <p><i class="far fa-calendar-minus"></i>{{$v_camp->camping_date}}</p>
        <h3>{{$v_camp->camping_name}}</h3>
        <br>
        <p><i class="fas fa-clock"></i>{{$v_camp->camping_start_time}}-{{$v_camp->camping_end_time}}  </p>
        <p><i class="fas fa-location-circle"></i>{{$v_camp->camping_location}}</p>
          <a class="btn btn-info float-right mt-4" href="{{url('user/single-view-camping/'.$v_camp->id)}}">READ MORE...</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

</div>
</section>
<br><br>

<!-- camping end area -->














<!-- danation appoiantment -->
<section class="container mt-4">

<h2 class="text-center">APPOINTMENT INFORMATION</h2>
<br><br>


<div class="row">
  <div class="col-md-6">
    <h4>Good To Know</h4>
    <h2 class="font-weight-bold">Helpful Information</h2>
    <br>
    <div class=" ml-4">
      <p style="font-family: italic;   font-size: 20px;"><i class="fas fa-check-circle"></i>Maintain a healthy iron level by eating iron rich foods.</p>
      <p style="font-family: italic;   font-size: 20px;"><i class="fas fa-check-circle"></i>Maintain a healthy iron level by eating iron rich foods.</p>
      <p style="font-family: italic;   font-size: 20px;"><i class="fas fa-check-circle"></i>Maintain a healthy iron level by eating iron rich foods.</p>
      <p style="font-family: italic;   font-size: 20px;"><i class="fas fa-times-circle"></i>Maintain a healthy iron level by eating iron rich foods.</p>
      <p style="font-family: italic;   font-size: 20px;"><i class="fas fa-check-circle"></i>Maintain a healthy iron level by eating iron rich foods.</p>
      <p style="font-family: italic;   font-size: 20px;"><i class="fas fa-times-circle"></i>Maintain a healthy iron level by eating iron rich foods.</p>
    </div>
  </div>
  <div class="col-md-6"><!-- appoiantment latten application -->
    <div class="bg-light">
      <h2 class="bg-dark text-light text-center">REQUEST APPOINTMENT</h2>
      <form class="" action="{{url('user/save/blood-donar')}}" method="post">
        @csrf


      <div class="row">
        <br>

            <div class="col-md-6">
              <input class="form-control" type="text" name="donar_name" placeholder="Enter Your Name" value="">
              <br>
              <input class="form-control" type="number" placeholder="Enter Your Phone" name="donar_phone" value="">
              <br>
              <!-- blood group start-->
              <?php
                $all_blood_group=DB::table('bloods')
                                ->where('blood_status',1)
                                ->get();
               ?>

              <!-- blood group end -->
              <select class="form-control" name="blood_group">
                @foreach($all_blood_group as $v_blood)
                      <option value="{{$v_blood->id}}">{{$v_blood->blood_name}}</option>
                @endforeach
              </select>

              <br>
              <input class="form-control" type="date" placeholder="Date" name="donar_date" value="">
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" name="donar_email" placeholder="Enter Your Email" value="">
              <br>
              <?php
                $hospital_center=DB::table('hospital_centers')
                                ->where('hp_status',1)
                                ->get();
               ?>

              <!-- blood group end -->
              <select class="form-control" name="donar_center">
                @foreach($hospital_center as $v_hp)
                      <option value="{{$v_hp->id}}">{{$v_hp->hp_name}}</option>
                @endforeach
              </select>
              <br>
              <input class="form-control" type="time" placeholder="Time" name="donar_time" value="">
            </div>

      </div>
      <br>
            <textarea class="form-control" name="donar_message" placeholder="Enter Your Message" rows="8" cols="30"></textarea>
            <input class="btn btn-danger ml-auto" type="submit" name="" value="GET APPOINTMENT">

    </form>
    </div>
  </div>
</div>
</section><br><br>

<!-- danation appoiantment -->







<!-- compaing gallary -->

<?php
  $img=DB::table('imgs')
        ->where('img_status',1)
        ->paginate(6);
 ?>



<section class="container mt-2 bg-light mb-4">
<br>
<h2 class="text-center text-dark">CAMPAIGN GALLERY</h2>
<h4 class="text-center text-dark">our prestigious voluntary work on campaigns by the team</h4><br><br>
<div class="row">
  @foreach($img as $v_img)
  <div class="col-md-4">
    <div class="card" style="width: 22rem;">
    <img height="200px;" class="card-img-top" src="{{asset($v_img->img)}}" alt="Card image cap">
    </div>
  </div>
  <br>
  @endforeach

</div>
<div class="float-right">
  {{ $img->links() }}
</div>


</section>
<br><br><br><br>






<!-- latest news start -->
<?php
  $all_news=DB::table('news')
            ->where('news_status',1)
            ->paginate(6);
 ?>




<section class="container">
<h2 class="text-center text-dark">LATEST NEWS</h2>
<h5 class="text-center text-dark">Latest news and statements regarding giving blood processing</h5>
<div class="mt-3 row">
  @foreach($all_news as $v_news)
  <div class="col-md-4 mt-5"><!-- news-->
      <div class="card" style="width: 22rem;">
      <img height="150px" class="card-img-top" src="{{asset($v_news->news_image)}}" alt="Card image cap">
      <div class="card-body">
        <i class="fas fa-clock"></i>{{ \Carbon\Carbon::parse($v_news->created_at)->diffForHumans() }}<br>
        <h5 class="card-title">{{$v_news->news_title}}</h5>
  <a href="{{url('user/single_news/'.$v_news->id)}}" class="btn btn-primary">READ MORE...</a>


      </div>
      </div>
  </div><!-- news-->
  @endforeach
</div>
<div class="float-right"><!-- pagination -->

</div>

</section><br><br><br>


<!-- latest news end -->

@endsection
