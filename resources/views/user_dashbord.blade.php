<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!-- css link in bootstrap -->


  </head>
  <body><!-- body -->

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #EF3D32; color: white;"><!-- heading navbar start -->
    <div class="container">
    <p><i class="fas fa-phone-alt"></i><a class="navbar-brand text-light" href="#">   Call Us: +880-1891-82709</a> </p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto ">
        <a class="nav-item nav-link active text-light" href="#"><i class="fab fa-facebook"></i> <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link text-light" href="#"><i class="fab fa-twitter-square"></i></a>
        <a class="nav-item nav-link text-light" href="#"><i class="fab fa-google-plus"></i></a>
        <a class="nav-item nav-link text-light" href="#"><i class="fab fa-instagram-square"></i></a>
      </div>
    </div>
    </div>
  </nav><!-- heading navbar close -->












  <nav class="navbar navbar-expand-lg navbar-light bg-light"><!--secound heading -->
  <div class="container">
  <a class="navbar-brand" href="#"><strong class="text-danger">BLOOD</strong><strong>DONAR</strong> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link font-weight-bold text-dark" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-dark" href="{{route('user.show.camping')}}">CAMPING</a>
      </li>

      <li class="nav-item">
        <a class="nav-link font-weight-bold text-dark" href="{{route('user.show.news')}}">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-dark" href="{{route('user.aboutus')}}">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-dark" href="{{route('user.contactus')}}">CONTACT</a>
      </li>
    </ul>
  </div>
  </div>
</nav><!-- end secound heading -->


    @yield('user_content')


      <!-- footer area start -->
      <section class="bg-dark mt-4">
        <br><br><br>
        <div class="container">
          <div class="row">
            <div class="col-md-3 mt-3">
              <h3><strong class="text-danger">BLOOD</strong> <strong class="text-light">DONAR</strong> </h3>
            </div>
            <div class="col-md-9">
              <p class="text-light">
              We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood. We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.</p>
            </div>
          </div>

        </div>
        <br><br>
        <hr>
        <br><br>

        <section class="container">
          <div class="row">
            <div class="col-md-4">
              <h2 class=" text-light">CONTACT</h2>
              <ul class="navbar-nav">
                <li class="nav-item text-light"><i class="fas fa-envelope-open"></i>Bokhtiartoshar1@gmail.com</li>
                <li class="nav-item text-light"><i class="fas fa-phone-alt"></i>01966171301</li>
                <li class="nav-item text-light"><i class="fab fa-facebook"></i>toshar172</li>
              </ul>
            </div>


            <div class="col-md-4">
              <h2 class="text-light">WEBSITE PAGE</h2>
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-light" href="#"><i class="fas fa-caret-right"></i>HOME</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="#"><i class="fas fa-caret-right"></i>ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="#"><i class="fas fa-caret-right"></i>CAMPAIGN</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="#"><i class="fas fa-caret-right"></i>BLOG</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="#"><i class="fas fa-caret-right"></i>CONTACT</a></li>
              </ul>
            </div>


            <div class="col-md-4">
              <h2 class="text-light">SUBSCRIBE US</h2><br>
              <form class="" action="{{route('user.save.subcribes')}}" method="post">
                @csrf
                <input class="form-control" type="email" name="email" placeholder="Enter Your Email" value="">
                <input class="btn btn-danger" type="submit" name="" value="SUBSCRIBE">
              </form>
            </div>
          </div>
        </section>
      </section>




    <!-- javascript area -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body><!-- end body-->
</html>
