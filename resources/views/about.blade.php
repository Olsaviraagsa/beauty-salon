@extends('template.index')

@section('title')
    About - Get in Beauty
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_2.png')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">About Us</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url({{asset('assets/images/coach-1.png')}});">
                  </div>
                  <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
            <div class="heading-section mb-5">
                <div class="pl-md-5">
                    <span class="subheading mb-2">Welcome to Get in Beauty</span>
                  <h2 class="mb-2">Hello! 'Get in Beauty'' is a natural way of improving your beauty</h2>
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

      {{-- Consultation Box --}}
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

{{-- Testimoni --}}
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
                <div class="user-img" style="background-image: url(images/person_1.jpg)">
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
                <div class="user-img" style="background-image: url(images/person_2.jpg)">
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
                <div class="user-img" style="background-image: url(images/person_3.jpg)">
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
                <div class="user-img" style="background-image: url(images/person_4.jpg)">
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
                <div class="user-img" style="background-image: url(images/person_1.jpg)">
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

  {{-- Dokter Spesialis --}}
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading mb-3">Our Beautician</span>
          <h2>Who are they?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/person_1.jpg')}});"></div>
            </div>
            <div class="text pt-3 px-3 pb-4 text-center">
              <h3>Lloyd Wilson</h3>
              <span class="position mb-2">Health Coach</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/person_2.jpg')}});"></div>
            </div>
            <div class="text pt-3 px-3 pb-4 text-center">
              <h3>Rachel Parker</h3>
              <span class="position mb-2">Life &amp; Business Coach</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/person_3.jpg')}});"></div>
            </div>
            <div class="text pt-3 px-3 pb-4 text-center">
              <h3>Ian Smith</h3>
              <span class="position mb-2">Executive Coach</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/person-1.jpg')}});"></div>
            </div>
            <div class="text pt-3 px-3 pb-4 text-center">
              <h3>Alicia Henderson</h3>
              <span class="position mb-2">Health Coach</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/person-2.jpg')}});"></div>
            </div>
            <div class="text pt-3 px-3 pb-4 text-center">
              <h3>Lloyd Wilson</h3>
              <span class="position mb-2">Executive Coach</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/person-3.jpg')}});"></div>
            </div>
            <div class="text pt-3 px-3 pb-4 text-center">
              <h3>Rachel Parker</h3>
              <span class="position mb-2">Health Coach</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/person-4.jpeg')}});"></div>
            </div>
            <div class="text pt-3 px-3 pb-4 text-center">
              <h3>Ian Smith</h3>
              <span class="position mb-2">Health Coach</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/person-5.jpg')}});"></div>
            </div>
            <div class="text pt-3 px-3 pb-4 text-center">
              <h3>Fred Henderson</h3>
              <span class="position mb-2">Executive Coach</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      {{-- Button Consultation --}}
      <section class="ftco-section" style="background-image: url({{asset('assets/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
              <div class="row">
                  <div class="col-md-9">
                      <h2>We Provide Free Beauty Care Consultation</h2>
                      <p class="mb-0">Your satisfaction is our top priority with comprehensive and affordable quarantine.</p>
                      <p></p>
                  </div>
                  <div class="col-md-3 d-flex align-items-center">
                      <p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Free Consultation</a></p>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-section ftco-counter" id="section-counter">
      <div class="container">
              <div class="row">
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="13">0</strong>
            </div>
            <div class="text">
                <span>Years of Experienced</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="6500">0</strong>
            </div>
            <div class="text">
                <span>Numbers of Patients</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="8">0</strong>
            </div>
            <div class="text">
                <span>Clinic Branch</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="130">0</strong>
            </div>
            <div class="text">
                <span>Beauty Products</span>
            </div>
          </div>
        </div>
      </div>
      </div>
  </section>

@endsection
