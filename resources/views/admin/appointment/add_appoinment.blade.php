@extends('admin_dashbord')
@section('admin_content')
<form class="" action="{{url('admin/save/blood-donar')}}" method="post">
  @csrf


<div class="row">
  <br>

      <div class="col-md-6">
        <input class="form-control" type="text" name="donar_name" placeholder="Enter Your Name" value="">
        <br>
        <input class="form-control" type="number" placeholder="Enter Your Phone" name="donar_phone" value="">
        <br>
        <!-- blood group start-->
        <?php
          $all_blood_group=DB::table('bloods')
                          ->where('blood_status',1)
                          ->get();
         ?>

        <!-- blood group end -->
        <select class="form-control" name="blood_group">
          @foreach($all_blood_group as $v_blood)
                <option value="{{$v_blood->id}}">{{$v_blood->blood_name}}</option>
          @endforeach
        </select>

        <br>
        <input class="form-control" type="date" placeholder="Date" name="donar_date" value="">
      </div>
      <div class="col-md-6">
        <input class="form-control" type="text" name="donar_email" placeholder="Enter Your Email" value="">
        <br>
        <?php
          $hospital_center=DB::table('hospital_centers')
                          ->where('hp_status',1)
                          ->get();
         ?>

        <!-- blood group end -->
        <select class="form-control" name="donar_center">
          @foreach($hospital_center as $v_hp)
                <option value="{{$v_hp->id}}">{{$v_hp->hp_name}}</option>
          @endforeach
        </select>
        <br>
        <input class="form-control" type="time" placeholder="Time" name="donar_time" value="">
      </div>

</div>
<br>
      <textarea class="form-control" name="donar_message" placeholder="Enter Your Message" rows="8" cols="30"></textarea>
      <input class="btn btn-danger ml-auto" type="submit" name="" value="GET APPOINTMENT">

</form>

@endsection
