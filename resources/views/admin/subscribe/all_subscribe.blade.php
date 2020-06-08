@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light"><br>
        <h2 class="text-center text-light bg-info">ALL BLOOD ITEM'S</h2>
        <table class="table table-striped">
        <thead class="text-light bg-dark">
        <tr>
          <th scope="col">SUBSCRIBER SL</th>
          <th scope="col">SUBSCRIBER NAME</th>
          <th scope="col">SUBSCRIBER EMAIL</th>
        </tr>
        </thead>
        <tbody>
          @foreach($all_subscribe as $v_sub)
        <tr>
          <th scope="row">{{$loop->index +1}}</th>
          <td>{{$v_sub->user->name}}</td>
          <td>{{$v_sub->email}}</td>
        </tr>
          @endforeach
        </tbody>
        </table>

      </section>


@endsection
