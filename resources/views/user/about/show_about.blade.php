@extends('user_dashbord')
@section('user_content')

  <section class="container">
    @foreach($all_about as $v_about)
    <h2 class="text-center">{{$v_about->about_title}}</h2>
    <p class="text-center">{{$v_about->about_description}}</p>
    @endforeach
  </section>

@endsection
