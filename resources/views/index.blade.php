@extends('template.index')

@section('title')
    Get in Beauty
@endsection

@section('content')
     {{-- HEADER --}}
     <div class="hero-wrap js-fullheight">
	    <div class="home-slider owl-carousel js-fullheight">
	      <div class="slider-item js-fullheight" style="background-image:url({{asset('assets/images/bg_1.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
		          <div class="col-md-7 ftco-animate">
		          	<div class="text w-100">
		          		<h2>Welcome to Get in Beauty</h2>
			            <h1 class="mb-4">Get in beauty easily, live your happy life</h1>
			            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Make a appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight" style="background-image:url({{asset('assets/images/bg_2.png')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
		          <div class="col-md-7 ftco-animate">
		          	<div class="text w-100">
		          		<h2>Welcome to Get in Beauty</h2>
			            <h1 class="mb-4 color-white">Get in beauty easily, live your happy life</h1>
			            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Make a appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      {{-- <div class="slider-item js-fullheight" style="background-image:url({{asset('assets/images/bg_3.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2>Welcome Beautician</h2>
			            <h1 class="mb-4">You can transform health through habit change</h1>
			            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div> --}}
	    </div>
      </div>

      {{-- CARD TREATMENT --}}
      <section class="ftco-section ftco-services">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url({{asset('assets/images/services-1.jpeg')}});"></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Skin Brightening</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url({{asset('assets/images/services-2.jpg')}});"></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Acne Solution</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url({{asset('assets/images/services-3.jpg')}});"></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Anti Aging</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    {{-- WELCOME TO THIS WEB --}}
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url({{asset('assets/images/coach-1.png')}});">
					</div>
					<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	          	<div class="pl-md-5">
		          	<span class="subheading mb-2">Welcome to Get in Beauty</span>
		            <h2 class="mb-2">Hello! 'Get in Beauty' is a natural way of improving your beauty</h2>
	            </div>
	          </div>
	          <div class="pl-md-5">
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<div class="founder d-flex align-items-center mt-5">
								<div class="img" style="background-image: url({{asset('assets/images/coach-1.png')}});"></div>
								<div class="text pl-3">
									<h3 class="mb-0">Cythia Hunter</h3>
									<span class="position">Personal Beauty Care</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>

        {{-- FREE CONSULTATION --}}
		{{-- <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
					<div class="col-md-3 d-flex align-items-stretch">
						<div class="consultation w-100 text-center px-4 px-md-5">
							<h3 class="mb-4">Healthcare Services</h3>
							<p>A small river named Duden flows by their place and supplies</p>
							<a href="#" class="btn-custom">See Services</a>
						</div>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div class="consultation consul w-100 px-4 px-md-5">
							<div class="text-center">
								<h3 class="mb-4">Free Consultation</h3>
							</div>
							<form action="#" class="appointment-form">
								<div class="row">
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<input type="text" class="form-control" placeholder="First Name">
				    				</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<input type="text" class="form-control" placeholder="Last Name">
				    				</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
		                      <select name="" id="" class="form-control">
		                      	<option value="">Services</option>
		                        <option value="">Services 1</option>
		                        <option value="">Services 2</option>
		                      </select>
		                    </div>
				              </div>
				    				</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<div class="input-wrap">
				            		<div class="icon"><span class="ion-md-calendar"></span></div>
				            		<input type="text" class="form-control appointment_date" placeholder="Date">
			            		</div>
				    				</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				    					<div class="input-wrap">
				            		<div class="icon"><span class="ion-ios-clock"></span></div>
				            		<input type="text" class="form-control appointment_time" placeholder="Time">
			            		</div>
				    				</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="form-group">
				              <input type="submit" value="Appointment" class="btn btn-white py-2 px-4">
				            </div>
									</div>
								</div>
		    			</form>
		    	  </div>
					</div>
					<div class="col-md-3 d-flex align-items-stretch">
						<div class="consultation w-100 text-center px-4 px-md-5">
							<h3 class="mb-4">Find A Health Expert</h3>
							<p>A small river named Duden flows by their place and supplies</p>
							<a href="#" class="btn-custom">Meet our health coach</a>
						</div>
					</div>
				</div>
			</div>
		</section> --}}

{{-- TESTIMONI --}}
    {{-- <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Testimonies</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
							<div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_2.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_3.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_4.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

	{{-- Consultation --}}
    {{-- <section class="ftco-intro" style="background-image: url({{asset('assets/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>We Provide Free Health Care Consultation</h2>
                    <p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable Health.</p>
                    <p></p>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Free Consultation</a></p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- Services --}}
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Other Services</span>
            <h2>How it works?</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Make a Appointment</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-workout"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Consultation</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diet-1"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Get a Treatment</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-first"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Make a Payment</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    {{-- SUCCESSFULL STORY --}}
    {{-- <section class="ftco-section ftco-no-pb bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Stories</span>
            <h2>Successfull Stories</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
          	<div class="carousel-stories owl-carousel">
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-md-11">
										<div class="stories-wrap d-md-flex">
											<div class="img" style="background-image: url({{asset('assets/images/person-1.jpg')}});"></div>
											<div class="text p-4 py-xl-5 px-xl-5 d-flex align-items-center">
												<div class="desc w-100">
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<div class="pt-4">
														<p class="name mb-0">Joy Smith</p>
														<span class="position">Client/Manager</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-md-11">
										<div class="stories-wrap d-md-flex">
											<div class="img" style="background-image: url({{asset('assets/images/person-2.jpg')}});"></div>
											<div class="text p-4 py-xl-5 px-xl-5 d-flex align-items-center">
												<div class="desc w-100">
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<div class="pt-4">
														<p class="name mb-0">Rony Smith</p>
														<span class="position">Client/Messenger</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-md-11">
										<div class="stories-wrap d-md-flex">
											<div class="img" style="background-image: url({{asset('assets/images/person-3.jpg')}});"></div>
											<div class="text p-4 py-xl-5 px-xl-5 d-flex align-items-center">
												<div class="desc w-100">
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<div class="pt-4">
														<p class="name mb-0">John Doe</p>
														<span class="position">Client</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Other Services</span>
            <h2>How it works</h2>
          </div>
        </div>
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-account"></span></div>
    					<div class="text pl-4">
    						<h4>Follow the program</h4>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-skills"></span></div>
    					<div class="text pl-4">
    						<h4>Work for result</h4>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-performance"></span></div>
    					<div class="text pl-4">
    						<h4>Eat healthy Food</h4>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-event"></span></div>
    					<div class="text pl-4">
    						<h4>Enjoy your life</h4>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    					</div>
    				</div>
	        </div>
        </div>
    	</div>
    </section> -->

{{-- PERFECT PLAN --}}
    {{-- <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Price &amp; Plans</span>
            <h2>Choose Your Perfect Plans</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<h4 class="heading-2">Starter</h4>
	            	<span class="excerpt d-block">A Beautiful Healthcare</span>
		            <span class="price"><sup>$</sup> <span class="number">49</span></span>

		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>20 Workouts</li>
		              <li><span class="fa fa-check mr-2"></span>Meal plans in mobile</li>
		              <li><span class="fa fa-check mr-2"></span>One Coaching</li>
		              <li><span class="fa fa-check mr-2"></span>-50% Group coaching</li>
		              <li><span class="fa fa-check mr-2"></span>24/7 Customer support</li>
		            </ul>

		            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<h4 class="heading-2">Standard</h4>
            	<span class="excerpt d-block">A Beautiful Healthcare</span>
	            <span class="price"><sup>$</sup> <span class="number">79</span></span>

	            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>20 Workouts</li>
		              <li><span class="fa fa-check mr-2"></span>Meal plans in mobile</li>
		              <li><span class="fa fa-check mr-2"></span>One Coaching</li>
		              <li><span class="fa fa-check mr-2"></span>-50% Group coaching</li>
		              <li><span class="fa fa-check mr-2"></span>24/7 Customer support</li>
		            </ul>

	            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<h4 class="heading-2">Premium</h4>
            	<span class="excerpt d-block">A Beautiful Healthcare</span>
	            <span class="price"><sup>$</sup> <span class="number">109</span></span>

	            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>20 Workouts</li>
		              <li><span class="fa fa-check mr-2"></span>Meal plans in mobile</li>
		              <li><span class="fa fa-check mr-2"></span>One Coaching</li>
		              <li><span class="fa fa-check mr-2"></span>-50% Group coaching</li>
		              <li><span class="fa fa-check mr-2"></span>24/7 Customer support</li>
		            </ul>

	            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<h4 class="heading-2">Platinum</h4>
            	<span class="excerpt d-block">A Beautiful Healthcare</span>
	            <span class="price"><sup>$</sup> <span class="number">159</span></span>

	            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>20 Workouts</li>
		              <li><span class="fa fa-check mr-2"></span>Meal plans in mobile</li>
		              <li><span class="fa fa-check mr-2"></span>One Coaching</li>
		              <li><span class="fa fa-check mr-2"></span>-50% Group coaching</li>
		              <li><span class="fa fa-check mr-2"></span>24/7 Customer support</li>
		            </ul>

	            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section> --}}

    {{-- BLOG --}}
    {{-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Latest news from our blog</h2>
            <span class="subheading">News &amp; Blog</span>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('assets/images/image_1.jpg')}}');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('assets/images/image_2.jpg')}}');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('assets/images/image_3.jpg')}}');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}


    <!-- <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="container">
      	<div class="row">
	      	<div class="col-md-12">
	      		<div class="bg-secondary w-100 rounded p-4">
	        		<div class="row">
			          <div class="col-md-7 d-flex align-items-center">
			            <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 18px;">Subcribe for our weekly tips</h2>
			          </div>
			          <div class="col-md-5 d-flex align-items-center">
			            <form action="#" class="subscribe-form">
			              <div class="form-group d-flex">
			                <input type="text" class="form-control" placeholder="Enter email address">
			                <input type="submit" value="Subscribe" class="submit px-3">
			              </div>
			            </form>
			          </div>
		          </div>
			      </div>
			    </div>
			  </div>
      </div>
    </section> -->


@endsection
