@extends('admin_dashbord')
@section('admin_content')
<br>
<section class="container">
  <h2 class="text-center text-light bg-info">Donar Information</h2><br>
  <div class="row">

    <div class="col-md-6 ">
      <div class="">
        <div class="">
          <strong>Donar Name:</strong>
          {{$single_view_user->donar_name}}
        </div>
        <div class="">
          <strong>Donar Email;</strong>
          {{$single_view_user->donar_email}}
        </div>
        <div class="">
          <strong>Donar Phone;</strong>
          {{$single_view_user->donar_phone}}
        </div>
        <div class="">
          <strong>Donar Center;</strong>
          {{$single_view_user->donar_center}}
        </div>

        <div class="mt-5 ">
          <strong>Donar Message:</strong>
            {{$single_view_user->donar_message}}
        </div>

      </div>
    </div><!-- end of left side --->



    <div class="col-md-6 ">
      <div class="">
        <strong>Donar Blood Group:</strong>
          {{$single_view_user->blood_group}}
      </div>
      <div class="">
        <strong>Donar Donation Date:</strong>
          {{$single_view_user->donar_date}}
      </div>
      <div class="">
        <strong>Donar Donation Time:</strong>
          {{$single_view_user->donar_time}}
      </div>

    </div><!-- end of right side --->
  </div>

  <div class="text-center mt-4">

      <a class="btn btn-info" href="{{url('admin/conform-donar/'.$single_view_user->id)}}"><i class="fas fa-check-circle"></i> CONFORM</a>

  </div>


</section>

@endsection
