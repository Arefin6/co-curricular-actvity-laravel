

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
    
    <div class="bg-top navbar-light">
      <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
          <div class="col-md-4 d-flex align-items-center py-4">
            <a class="navbar-brand" href="index.html">Metropolitan <span>University</span></a>
          </div>
          <div class="col-lg-8 d-block">
            <div class="row d-flex">
              <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <div class="text">
                  <span>Email</span>
                  <span>Metro_uni@gmail.com</span>
                </div>
              </div>
              <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <div class="text">
                  <span>Call</span>
                  <span>Call Us: +8801689080053</span>
                </div>
              </div>
              <div class="col-md topper d-flex align-items-center justify-content-end">
                <p class="mb-0">
                  <a href="{{route('alllist')}}" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                    <span>All List</span>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container d-flex align-items-center px-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        
        <form action="{{'/result'}}" method="get" class="searchform order-lg-last" >
          <div class="form-group d-flex">
            <input type="text" class="form-control search" placeholder="Search" style="overflow:hidden;width:150px" name="search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
        
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="{{'/'}}" class="nav-link pl-0">Home</a></li>
            <li class="nav-item active"><a href="{{'/about'}}" class="nav-link">About</a></li>
            <li class="nav-item active"><a href="{{route('events.index')}}" class="nav-link">Events</a></li>
            <!-- Search form -->

          </ul>
        </div>
      </div>
    </nav>
      
     