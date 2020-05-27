@extends('master')
@section('style')
   <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection


@section('content')
<!--Main Navigation-->


    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
         <img style="border-radius: 50px;" src="{{asset('images/logo.png')}}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  Categories
                </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contactez nous</a>
              </li>
          </ul>
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>

    <!-- Intro Section -->
  <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade mb-3" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('images/camera.jpg')}}"
          alt="First slide">
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/computer.jpg')}}"
          alt="Second slide">
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/network.jpg')}}"
          alt="Third slide">
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
<section>
    <h2 style="text-align: center;" class="mb-3">Categories</h2>
    <div class="row">
 
  <!--Main cards-->
  <!-- Card -->
<div class="card card-image col-md"
style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

<!-- Content -->
<div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 mt-5">
  <div>
    <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Marketing</h5>
    <h3 class="card-title pt-2"><strong>This is the card title</strong></h3>
    
    
  </div>
</div>

</div>
<!-- Card -->
<!-- Card -->
<div class="card card-image col-md"
style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

<!-- Content -->
<div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 mt-5">
  <div>
    <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Marketing</h5>
    <h3 class="card-title pt-2"><strong>This is the card title</strong></h3>
    
  </div>
</div>

</div>
<!-- Card -->
<!-- Card -->
<div class="card card-image col-md"
style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

<!-- Content -->
<div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 mt-5">
  <div>
    <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Marketing</h5>
    <h3 class="card-title pt-2"><strong>This is the card title</strong></h3>
    
  </div>
</div>

</div>
</div>
<!-- Card -->
</section>



  <!--Main Layout-->

  <!--Footer-->
  <footer class="page-footer pt-4 mt-4 text-center text-md-left mdb-color lighten-2">

    <!--Footer Links-->
    <div class="container">
      <div class="row">

        <!--First column-->
        <div class="col-md-3 mr-auto">
          <h5 class="text-uppercase mb-3">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div>
        <!--/.First column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Second column-->
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase mb-3">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--/.Second column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Third column-->
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase mb-3">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--/.Third column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Fourth column-->
        <div class="col-md-3 ml-auto">
          <h5 class="text-uppercase mb-3">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--/.Fourth column-->

      </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class="social-section text-center">
      <ul class="list-unstyled list-inline">

        <li class="list-inline-item">
          <a class="btn-floating btn-fb">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>

      </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        &copy; 2018 Copyright:
        <a href="https://mdbootstrap.com/docs/jquery/"> MDBootstrap.com </a>

      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

    
@endsection



@section('script')
<script> $( document ).ready(function() {
    $('.carousel').carousel();
    $('.dropdown-toggle').dropdown();
    new WOW().init();
});

</script>

         
  
@endsection