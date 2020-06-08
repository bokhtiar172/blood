@extends('admin_dashbord')
@section('admin_content')
<br>
      <section class="container bg-light"><br>
        <h2 class="text-center text-light bg-info">ALL SLIDER ITEM'S</h2>
        <table class="table table-striped">
        <thead class="text-light bg-dark">
        <tr>

          <th scope="col">NEWS SL</th>
          <th scope="col">NEWS NAME </th>
          <th scope="col">NEWS DESCRIPTION</th>
          <th scope="col">NEWS IMAGE </th>
          <th scope="col">STATUS</th>
        </tr>
        </thead>
        <tbody>
          @foreach($all_news as $v_news)
        <tr>
          <td scope="row">{{$loop->index +1}}</td>
          <td>{{$v_news->news_title}}</td>
          <td>{{$v_news->news_description}}</td>
          <td><img height="70px;" width="70px;" src="{{asset($v_news->news_image)}}" alt=""> </td>

          <td>
            @if($v_news->news_status==1)
            <a href="{{url('admin/unactive-news/'.$v_news->id)}}"><span class="text-"><i class="far fa-hand-point-up"> </i></span></a>
            @else
            <a href="{{url('admin/active-news/'.$v_news->id)}}"><span><i class="far fa-hand-point-down"></i></span></a>
            @endif


            <a href="{{url('admin/edite-news/'.$v_news->id)}}"><span class="text-success"><i class="fas fa-pen-alt"></i></span></a>

            <a href="{{url('admin/delete-news/'.$v_news->id)}}"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a>

          </td>
        </tr>
          @endforeach
        </tbody>
        </table>

      </section>


@endsection
