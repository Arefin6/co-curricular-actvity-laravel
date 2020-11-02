


<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Metropolitan University</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('front-end')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('front-end')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('front-end')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('front-end')}}/css/ionicons.min.css">
    
    <link rel="stylesheet" href="{{asset('front-end')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('front-end')}}/css/style.css">
  </head>
  <body>
    
    @include('layouts.header');
    
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url({{asset('front-end')}}/images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
			  <h1 class="mb-4">Co-Curricular Activitis</h1>
            <h1 class="mb-4">Education Needs Complete Solution</h1>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
            Because curricular exercises alone cannot ensure total development of the students the university has been hosting a good number of clubs, societies, 
            </p>
          </div>
        </div>
        </div>
      </div>

      
    </section>
   
    

    
    @include('admin.includes.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('front-end')}}/js/jquery.min.js"></script>
  <script src="{{asset('front-end')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('front-end')}}/js/popper.min.js"></script>
  <script src="{{asset('front-end')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('front-end')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('front-end')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{asset('front-end')}}/js/jquery.stellar.min.js"></script>
  <script src="{{asset('front-end')}}/js/owl.carousel.min.js"></script>
  <script src="{{asset('front-end')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('front-end')}}/js/aos.js"></script>
  <script src="{{asset('front-end')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{asset('front-end')}}/js/scrollax.min.js"></script>
  <script src="{{asset('front-end')}}/js/main.js"></script>
 
    
  </body>
</html>