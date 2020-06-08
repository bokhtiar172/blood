@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light"><br>
        <h2 class="text-center text-light bg-info">ALL BLOOD ITEM'S</h2>
        <table class="table table-striped">
        <thead class="text-light bg-dark">
        <tr>
          <th scope="col">BLOOD SL</th>
          <th scope="col">BLOOD NAME</th>
          <th scope="col">BLOOD DESCRIPTION</th>
          <th scope="col">STATUS</th>
        </tr>
        </thead>
        <tbody>
          @foreach($all_blood as $v_blood)
        <tr>
          <th scope="row">{{$loop->index +1}}</th>
          <td>{{$v_blood->blood_name}}</td>
          <td>{{$v_blood->blood_description}}</td>
          <td>
            @if($v_blood->blood_status==1)
            <a href="{{url('admin/unactive-blood/'.$v_blood->id)}}"><span class="text-"><i class="far fa-hand-point-up"> </i></span></a>
            @else
            <a href="{{url('admin/active-blood/'.$v_blood->id)}}"><span><i class="far fa-hand-point-down"></i></span></a>
            @endif


            <a href="{{url('admin/edite-blood/'.$v_blood->id)}}"><span class="text-success"><i class="fas fa-pen-alt"></i></span></a>

            <a href="{{url('admin/delete-blood/'.$v_blood->id)}}"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a>

          </td>
        </tr>
          @endforeach
        </tbody>
        </table>

      </section>


@endsection
