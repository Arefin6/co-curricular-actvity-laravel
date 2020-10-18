
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Metropolitan University </title>
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
	  <div class="bg-top navbar-light">
    	<div class="container">
    		@include('layouts.header')
    </div>
	  
    <!-- END nav -->        
    	
    	<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('/'. $firest_event->event_img) }}')">
								<div class="meta-date text-center p-2">
                  
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading">{{$firest_event->event_title}}</h3>
                <p>{{$firest_event->event_content}}</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 1</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('/'. $secend_event->event_img) }}')">
								<div class="meta-date text-center p-2">
                  
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading">{{$secend_event->event_title}}</h3>
                <p>{{$secend_event->event_content}}</p>
                <div class="d-flex align-items-center mt-4">
	                
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 2</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('/'. $thired_event->event_img) }}')">
								<div class="meta-date text-center p-2">
                  
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading">{{$thired_event->event_title}}</h3>
                <p>{{$thired_event->event_content}}</p>
                <div class="d-flex align-items-center mt-4">
	                
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('/'. $fourth_event->event_img) }}')">
				
                 <div class="meta-date text-center p-2">
                 
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading">{{$fourth_event->event_title}}</h3>
                <p>{{$fourth_event->event_content}}</p>
                <div class="d-flex align-items-center mt-4">
	                
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 4</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('/'. $fifth_event->event_img) }}')">
								<div class="meta-date text-center p-2">
                  
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading">{{$fifth_event->event_title}}</h3>
                <p>{{$fifth_event->event_content}}</p>
                <div class="d-flex align-items-center mt-4">
	                
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 5</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image:url('{{ asset('/'. $sixth_event->event_img) }}')">
								<div class="meta-date text-center p-2">
               
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">{{$sixth_event->event_title}}</a></h3>
                <p>{{$sixth_event->event_content}}</p>
                <div class="d-flex align-items-center mt-4">
	           
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 6</a>
	                </p>
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
