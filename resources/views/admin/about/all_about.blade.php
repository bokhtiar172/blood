@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light"><br>
        <h2 class="text-center text-light bg-info">ALL TO DO ITEM'S</h2>
        <table class="table table-striped">
        <thead class="text-light bg-dark">
        <tr>
          <th scope="col">ABOUT SL</th>
          <th scope="col">ABOUT TITLE</th>
          <th scope="col">ABOUT DESCRIPTION</th>
          <th scope="col">ABOUT STATUS</th>

        </tr>
        </thead>
        <tbody>
          @foreach($all_about as $v_about)
        <tr>
          <th scope="row">{{$loop->index +1}}</th>
          <td>{{$v_about->about_title}}</td>
          <td>{{$v_about->about_description}}</td>
          <td>

            @if($v_about->about_status==1)
            <a href="{{url('admin/unactive-about/'.$v_about->id)}}"><span class="text-"><i class="far fa-hand-point-up"> </i></span></a>
            @else
            <a href="{{url('admin/active-about/'.$v_about->id)}}"><span><i class="far fa-hand-point-down"></i></span></a>
            @endif

            <a href="{{url('admin/edite-about/'.$v_about->id)}}"><span class="text-success"><i class="fas fa-pen-alt"></i></span></a>

            <a href="{{url('admin/delete-about/'.$v_about->id)}}"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a>

          </td>
        </tr>
          @endforeach
        </tbody>
        </table>

      </section>


@endsection
