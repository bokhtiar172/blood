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
          @foreach($all_todo as $v_todo)
        <tr>
          <th scope="row">{{$loop->index +1}}</th>
          <td>{{$v_todo->todo_name}}</td>
          <td>{{$v_todo->todo_description}}</td>
          <td>


            <a href="{{url('admin/edite-todo/'.$v_todo->id)}}"><span class="text-success"><i class="fas fa-pen-alt"></i></span></a>

            <a href="{{url('admin/delete-todo/'.$v_todo->id)}}"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a>

          </td>
        </tr>
          @endforeach
        </tbody>
        </table>

      </section>


@endsection
