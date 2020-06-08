@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light"><br>
        <h2 class="text-center text-light bg-info">ALL BLOOD ITEM'S</h2>
        <table class="table table-striped">
        <thead class="text-light bg-dark">
        <tr>
          <th scope="col">DONAR SL</th>
          <th scope="col">DONAR NAME</th>
          <th scope="col">BLOOD GROUP</th>
          <th scope="col">HOSPITAL</th>
          <th scope="col">DONAR DATE</th>
          <th scope="col">DONAR TIME</th>
          <th scope="col">STATUS</th>

        </tr>
        </thead>
        <tbody>
          @foreach($all_appointment as $v_donar)
        <tr>
          <th scope="row">{{$loop->index +1}}</th>
          <td>{{$v_donar->donar_name}}</td>
          <td>{{$v_donar->blood_group}}</td>
          <td>{{$v_donar->donar_center}}</td>
          <td>{{$v_donar->donar_date}}</td>
          <td>{{$v_donar->donar_time}}</td>

          <td>
            <a href="{{url('admin/single-view-donar/'.$v_donar->id)}}"><span class="text-success"><i class="far fa-eye"></i></span></a>

            <a href="{{url('admin/edite-donar/'.$v_donar->id)}}"><span class="text-success"><i class="fas fa-pen-alt"></i></span></a>

            <a href="{{url('admin/delete-donar/'.$v_donar->id)}}"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a>

          </td>
        </tr>
          @endforeach
        </tbody>
        </table>

      </section>


@endsection
