@extends('user_dashbord')
@section('user_content')

  <section class="container">
    @foreach($all_contact as $v_contact)
    <h2 class="text-center">{{$v_contact->contact_title}}</h2>
    <p class="text-center">{{$v_contact->contact_description}}</p>
    @endforeach
  </section>

@endsection
