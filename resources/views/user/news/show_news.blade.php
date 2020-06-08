@extends('user_dashbord')
@section('user_content')

  <section class="container">
    <div class="row">


    @foreach($all_news as $v_news)
    <div class="col-md-4 mt-5"><!-- news-->
      <div class="card" style="width: 22rem;">
      <img height="200px;" class="card-img-top" src="{{asset($v_news->news_image)}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$v_news->news_title}}</h5>
        <i class="far fa-calendar-minus"></i>{{$v_news->created_at->diffforHumans()}}

        <a href="{{url('user/single_news/'.$v_news->id)}}" class="btn btn-primary">READ MORE...</a>
      </div>
      </div>
    </div><!-- news-->
    @endforeach
    </div>
  </section>

@endsection
