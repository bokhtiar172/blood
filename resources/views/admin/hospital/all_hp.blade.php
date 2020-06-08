@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light"><br>
        <h2 class="text-center text-light bg-info">ALL TO DO ITEM'S</h2>
        <table class="table table-striped">
        <thead class="text-light bg-dark">
        <tr>
          <th scope="col">TO DO SL</th>
          <th scope="col">TO DO NAME</th>
          <th scope="col">TO DO DESCRIPTION</th>
          <th scope="col">TO DO STATUS</th>

        </tr>
        </thead>
        <tbody>
          @foreach($all_hp as $v_hp)
        <tr>
          <th scope="row">{{$loop->index +1}}</th>
          <td>{{$v_hp->hp_name}}</td>
          <td>{{$v_hp->hp_description}}</td>
          <td>


            @if($v_hp->hp_status==1)
            <a href="{{url('admin/unactive-hp/'.$v_hp->id)}}"><span class="text-"><i class="far fa-hand-point-up"> </i></span></a>
            @else
            <a href="{{url('admin/active-hp/'.$v_hp->id)}}"><span><i class="far fa-hand-point-down"></i></span></a>
            @endif


            <a href="{{url('admin/edite-hp/'.$v_hp->id)}}"><span class="text-success"><i class="fas fa-pen-alt"></i></span></a>

            <a href="{{url('admin/delete-hp/'.$v_hp->id)}}"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a>

          </td>
        </tr>
          @endforeach
        </tbody>
        </table>

      </section>


@endsection
