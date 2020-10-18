


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
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
           
            <p><a href="{{route('perfrom.register')}}" class="btn btn-primary px-4 py-3 mt-3">Join Us</a></p>
          </div>
        </div>
        </div>
      </div>

      
    </section>
    <br>

    <section class="ftco-services ftco-no-pb">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-3 mt-4">
                <h3 class="heading">Cultural Program</h3>
                <p>Music,Architecture,Media,Multi culture,Arena,Museums,International & Arts and Crafts</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-3 mt-4">
                <h3 class="heading">Special Education</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-books"></span>
              </div>
              <div class="media-body p-3 mt-4">
                <h3 class="heading">Sport Clubs</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
         
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftc-no-pb">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url({{asset('front-end')}}/images/about.jpeg); border"></div>
          </div>
          <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Activities</h2>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
            <div class="row mt-5">
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                  <div class="text pl-3">
                    <h3>Contest</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                  <div class="text pl-3">
                    <h3> photograph</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                  <div class="text pl-3">
                    <h3>Certified Programmer</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                  <div class="text pl-3">
                    <h3>cycling</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                  <div class="text pl-3">
                    <h3>Creative events</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                  <div class="text pl-3">
                    <h3>Sports</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
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