@extends('user_dashbord')
@section('user_content')
<br>
  <section class="container">
    <div class="row">
        <img height="300px" width="100%" src="{{asset($single_news->news_image)}}" alt="">
      <div class="col-md-8">
        <div class="mt-2">
          <strong>News Title:</strong>
          {{$single_news->news_title}}
        </div>

        <div class="mt-2">
          <strong>News Description</strong>
          {{$single_news->news_description}}
        </div>
      </div><!-- end of left side -->


      <?php
      $news=DB::table('news')
              ->where('news_status',1)
              ->paginate(3);
       ?>

      <div class="col-md-4">
        @foreach($news as $v_n )
        <div class="col-md-4 mt-5"><!-- news-->
          <div class="card" style="width: 22rem;">
          <img height="200px;" class="card-img-top" src="{{asset($v_n->news_image)}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$v_n->news_title}}</h5>
            <a href="{{url('user/single_news/'.$v_n->id)}}" class="btn btn-primary">READ MORE...</a>
          </div>
          </div>
        </div><!-- news-->
        @endforeach
      </div><!-- end of right side -->
    </div>
  </section>

@endsection
