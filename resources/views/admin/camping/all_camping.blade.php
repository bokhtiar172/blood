@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light"><br>
        <h2 class="text-center text-light bg-info">ALL CAMPING ITEM'S</h2>
        <table class="table table-striped">
        <thead class="text-light bg-dark">
        <tr>

          <th scope="col">CAMP SL</th>
          <th scope="col">CAMP NAME </th>
          <th scope="col">CAMP LOCATION</th>
          <th scope="col">CAMP DESCRIPTION</th>
          <th scope="col">CAMP IMAGE </th>
          <th scope="col">CAMP START TIME </th>
          <th scope="col">CAMP END TIME</th>
          <th scope="col">CAMP DATE</th>
          <th scope="col">STATUS</th>
        </tr>
        </thead>
        <tbody>
          @foreach($all_camping as $v_camping)
        <tr>
          <td scope="row">{{$loop->index +1}}</td>
          <td>{{$v_camping->camping_name}}</td>
          <td>{{$v_camping->camping_location}}</td>
          <td>{{$v_camping->camping_description}}</td>
          <td><img height="70px;" width="70px;" src="{{asset($v_camping->camping_image)}}" alt=""> </td>
          <td>{{$v_camping->camping_start_time}}</td>
          <td>{{$v_camping->camping_end_time}}</td>
          <td>{{$v_camping->camping_date}}</td>

          <td>
            @if($v_camping->camping_status==1)
            <a href="{{url('admin/unactive-camping/'.$v_camping->id)}}"><span class="text-"><i class="far fa-hand-point-up"> </i></span></a>
            @else
            <a href="{{url('admin/active-camping/'.$v_camping->id)}}"><span><i class="far fa-hand-point-down"></i></span></a>
            @endif


            <a href="{{url('admin/edite-camping/'.$v_camping->id)}}"><span class="text-success"><i class="fas fa-pen-alt"></i></span></a>

            <a href="{{url('admin/delete-camping/'.$v_camping->id)}}"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a>

          </td>
        </tr>
          @endforeach
        </tbody>
        </table>

      </section>


@endsection
