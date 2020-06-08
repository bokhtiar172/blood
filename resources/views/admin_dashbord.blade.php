<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!-- css link in bootstrap -->
  </head>
  <body class="ml-4 mr-4" >
    <section>
      <div class="row">
        <div class="col-md-2 bg text-light" ><!--left side start -->
          <div class="height">
            <i class="far fa-smile"></i>
            <span class="">BLOOD DONAR</span>
          </div><hr>

          <!-- -->
          <span><i class="fas fa-tachometer-alt"></i>
          <a class="text-light font-weight-bold" href="#">DASHBORD</a>  </span><br><br> <!--end deshbord -->

          <div class="btn-group dropright"><!--add blood group start -->
                <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-meteor"></i>
                  <span class="font-weight-bold">BLOOD GROUP</span>
                </a>
                <div class="dropdown-menu">

                  <a class="dropdown-item" href="{{route('admin.all.blood.group')}}">ALL BLOOD GROUP</a>
                  <a class="dropdown-item" href="{{route('admin.add.blood.group')}}">ADD BLOOD GROUP</a>

                </div>
            </div><br><br><!--add blood group end -->


            <div class="btn-group dropright"><!--add blood group start -->
                  <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-camera-retro"></i>
                    <span class="font-weight-bold">SLIDER</span>
                  </a>
                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="{{route('admin.all.slider')}}">ALL SLIDER</a>
                    <a class="dropdown-item" href="{{route('admin.add.slider')}}">ADD SLIDER</a>

                  </div>
              </div><br><br><!--add blood group end -->


              <div class="btn-group dropright"><!--add blood group start -->
                    <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fad fa-house-night"></i>
                      <span class="font-weight-bold">CAMPING</span>
                    </a>
                    <div class="dropdown-menu">

                      <a class="dropdown-item" href="{{route('admin.all.camping')}}">ALL CAMPING</a>
                      <a class="dropdown-item" href="{{route('admin.add.camping')}}">ADD CAMPING</a>

                    </div>
                </div><br><br><!--add blood group end -->



                <div class="btn-group dropright"><!--add blood group start -->
                      <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-pen-alt"></i>
                        <span class="font-weight-bold">LATEST NEWS</span>
                      </a>
                      <div class="dropdown-menu">

                        <a class="dropdown-item" href="{{route('admin.all.news')}}">ALL LATEST NEWS</a>
                        <a class="dropdown-item" href="{{route('admin.add.news')}}">ADD LATEST NEWS</a>

                      </div>
                  </div><br><br><!--add blood group end -->



                  <div class="btn-group dropright"><!--add blood group start -->
                        <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-hands-helping"></i>
                          <span class="font-weight-bold">APPOINTMENT</span>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{url('admin/all/appointment')}}">ALL APPOINTMENT</a>
                          <a class="dropdown-item" href="{{url('admin/add/appointment')}}">ADD APPOINTMENT</a>
                        </div>
                    </div><br><br><!--add blood group end -->


                    <div class="btn-group dropright"><!--add blood group start -->
                          <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-images"></i>
                            <span class="font-weight-bold">IMAGE</span>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('admin.all.img')}}">ALL IMAGE</a>
                            <a class="dropdown-item" href="{{route('admin.add.img')}}">ADD IMAGE</a>
                          </div>
                      </div><br><br><!--add blood group end -->




                        <div class="btn-group dropright"><!--add blood group start -->
                              <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fad fa-subway"></i>
                                <span class="font-weight-bold">SUBSCRIBER</span>
                              </a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('admin.all.subscribe')}}">ALL SUBSCRIBER</a>
                              </div>
                          </div><br><br><!--add blood group end -->

                          <div class="btn-group dropright"><!--add blood group start -->
                                <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-th-list"></i>
                                  <span class="font-weight-bold">TO DO</span>
                                </a>
                                <div class="dropdown-menu">

                                  <a class="dropdown-item" href="{{route('admin.all.todo')}}">ALL TO DO</a>
                                  <a class="dropdown-item" href="{{route('admin.add.todo')}}">ADD TO DO</a>

                                </div>
                            </div><br><br><!--add blood group end -->


                            <div class="btn-group dropright"><!--add blood group start -->
                                  <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-th-list"></i>
                                    <span class="font-weight-bold">HOSPITAL CENTER</span>
                                  </a>
                                  <div class="dropdown-menu">

                                    <a class="dropdown-item" href="{{route('admin.all.hp')}}">ALL HOSPITAL CENTER</a>
                                    <a class="dropdown-item" href="{{route('admin.add.hp')}}">ADD HOSPITAL CENTER</a>

                                  </div>
                              </div><br><br><!--add blood group end -->


                            <h5 class="page"><i class="far fa-file"></i> WEBSITE PAGE'S</h5><br>

                            <div class="btn-group dropright"><!--add about group start -->
                                  <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-address-book"></i>
                                    <span class="font-weight-bold">ABOUT</span>
                                  </a>
                                  <div class="dropdown-menu">

                                    <a class="dropdown-item" href="{{route('admin.all.about')}}">ALL ABOUT</a>
                                    <a class="dropdown-item" href="{{route('admin.add.about')}}">ADD ABOUT</a>

                                  </div>
                              </div><br><br><!--add about group end -->


                              <div class="btn-group dropright"><!--add blood group start -->
                                    <a type="button" class="  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-blender-phone"></i>
                                      <span class="font-weight-bold">CONTACT</span>
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{route('admin.all.contact')}}">ALL CONTACT</a>
                                      <a class="dropdown-item" href="{{route('admin.add.contact')}}">ADD CONTACT</a>
                                    </div>
                                </div><br><br><!--add blood group end -->


                            <span><i class="fas fa-calendar-week"></i>
                            <a class="text-light font-weight-bold" href="#">CALENDER</a>  </span><br><br> <!--end deshbord -->


        </div><!-- end of left sidebar -->

        <div class="col-md-10"><!--right side start -->
          <!-- start navbar --->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand font-weight-bold" href="#">ADMIN DASHBORD</a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-5">
      <a class="nav-item nav-link active text-info" href="#"><i class="fab fa-facebook"></i> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-info" href="#"><i class="fab fa-twitter-square"></i></a>
      <a class="nav-item nav-link text-info" href="#"><i class="fab fa-google-plus"></i></a>
      <a class="nav-item nav-link text-info" href="#"><i class="fab fa-instagram-square"></i></a>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <strong class="mr-1"> bokhtiar</strong>
      <img class="head-img" height="40px" width="40px;" src="img/4.jpg" alt="ad">
    </form>
  </div>
</nav>
          <!-- end of navbar --->

          <div class="">
            @yield('admin_content')
          </div>
        </div><!--right side end -->


      </div>
    </section>




<!-- jarascript --->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
