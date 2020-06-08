@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light"><br>
        <h2 class="text-center text-light bg-info">ALL BLOOD ITEM'S</h2>
        <table class="table table-striped">
        <thead class="text-light bg-dark">
        <tr>
          <th scope="col">IMAGE SL</th>
          <th scope="col">IMAGE </th>
          <th scope="col">STATUS</th>
        </tr>
        </thead>
        <tbody>
          @foreach($all_img as $v_img)
        <tr>
          <th scope="row">{{$loop->index +1}}</th>
          <td><img height="70px" width="70px;" src="{{asset($v_img->img)}}" alt="">  </td>

          <td>
            @if($v_img->img_status==1)
            <a href="{{url('admin/unactive_img/'.$v_img->id)}}"><span class="text-"><i class="far fa-hand-point-up"> </i></span></a>
            @else
            <a href="{{url('admin/active_img/'.$v_img->id)}}"><span><i class="far fa-hand-point-down"></i></span></a>
            @endif


            <a href="{{url('admin/edite_img/'.$v_img->id)}}"><span class="text-success"><i class="fas fa-pen-alt"></i></span></a>

            <a href="{{url('admin/delete_img/'.$v_img->id)}}"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a>

          </td>
        </tr>
          @endforeach
        </tbody>
        </table>

      </section>


@endsection
