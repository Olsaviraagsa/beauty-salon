<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('assets/images/beauty.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

  </head>
  <body>
		{{-- <div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col d-flex align-items-center">
							<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div> --}}
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="{{url('/')}}">Get <span> in Beauty<i class="fa fa-leaf"></i></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>
	        	{{-- <li class="nav-item"><a href="coach.html" class="nav-link">Coach</a></li>
	        	<li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li> --}}
	        	{{-- <li class="nav-item"><a href="services.html" class="nav-link">Treatments</a></li> --}}
	          {{-- <li class="nav-item"><a href="success-stories.html" class="nav-link">Stories</a></li> --}}
	          {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Articles</a></li> --}}
              <li class="nav-item"><a href="login" class="nav-link">
                <img src="{{asset('assets/icons/box-arrow-in-right.svg')}}">
                <b>Login</b></a></li>
              <li class="nav-item">
	        </ul>
	      </div>
	    </div>
	  </nav>
	<!-- END nav -->
	
	

    @yield('content')

{{-- FOOTER --}}
    <footer class="footer">
			<div class="container">
				{{-- <div class="row justify-content-center">
					<div class="col-10 col-lg-6">
						<div class="subscribe mb-5">
							<form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
						</div>
					</div>
				</div> --}}
				<div class="row">
					<div class="col-md-4 col-lg-5">
						<div class="row">
							<div class="col-md-12 col-lg-8 mb-md-0 mb-4">
								<h2 class="footer-heading"><a href="#" class="logo">Get <span>in Beauty</span></a></h2>
								<p>a beauty clinic that prioritizes customer satisfaction by providing skin care according to skin conditions</p>
								<a href="#">read more <span class="ion-ios-arrow-round-forward"></span></a>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-lg-7">
                        <div class="row">
                            <div class="col-md-3 mb-md-0 mb-4 border-left">
                                <h2 class="footer-heading"></h2>
                                <ul class="list-unstyled">
                      <li><a href="#" class="py-1 d-block"></a></li>
                      <li><a href="#" class="py-1 d-block"></a></li>
                      <li><a href="#" class="py-1 d-block"></a></li>
                      <li><a href="#" class="py-1 d-block"></a></li>
                    </ul>
                            </div>
							<div class="col-md-3 mb-md-0 mb-4 border-left">
								<h2 class="footer-heading">Treatments</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="py-1 d-block">Skin Brightening</a></li>
		              <li><a href="#" class="py-1 d-block">Acne Solution</a></li>
		              <li><a href="#" class="py-1 d-block">Anti Aging</a></li>
		              {{-- <li><a href="#" class="py-1 d-block">Healthy Food</a></li> --}}
		            </ul>
							</div>
							<div class="col-md-3 mb-md-0 mb-4 border-left">
								<h2 class="footer-heading">About</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="py-1 d-block">Beautician</a></li>
		              <li><a href="#" class="py-1 d-block">Staff</a></li>
		              <li><a href="#" class="py-1 d-block">Careers</a></li>
		              {{-- <li><a href="#" class="py-1 d-block">Blog</a></li> --}}
		            </ul>
							</div>
							<div class="col-md-3 mb-md-0 mb-4 border-left">
								<h2 class="footer-heading">Social</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="py-1 d-block">Facebook</a></li>
		              <li><a href="#" class="py-1 d-block">Twitter</a></li>
		              <li><a href="#" class="py-1 d-block">Instagram</a></li>
		              {{-- <li><a href="#" class="py-1 d-block">Google</a></li> --}}
		            </ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
          <div class="col-md-6 col-lg-8">

            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
          <div class="col-md-6 col-lg-4 text-md-right">
          	<p class="mb-0 list-unstyled">
          		<a class="mr-md-3" href="#">Terms</a>
          		<a class="mr-md-3" href="#">Privacy</a>
          		<a class="mr-md-3" href="#">Compliances</a>
          	</p>
          </div>
        </div>
			</div>
		</footer>



  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}


  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assets/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('assets/js/google-map.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>

  </body>
</html>
