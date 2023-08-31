<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Women-Empowerment</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

<!-- Styles -->


<!-- bootstrap core css -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->
<!-- <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.css') }}"> -->
<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->
<link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
<!-- Custom styles for this template -->
<!-- <link href="css/style.css" rel="stylesheet" /> -->
<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}"> 
<!-- responsive style -->
<!-- <link href="css/responsive.css" rel="stylesheet" /> -->

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
      
    </head>
    <body class="antialiased">
        
            
        <div aria-labelledby="dropdownMenuButton" class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white dropdown" style="
    position: absolute;z-index: 10;right: 14%;top: 14px;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login/Register
                </button>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 dropdown-menu">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-item">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-item">Register</a>
                            @endif
                        @endauth
                    
                @endif
    
                @if (Route::has('admin.login'))
                    
                        @auth('admin')
                            <a href="{{ url('/admin/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Admin Dashboard</a>
                          @else
                            <a href="{{ route('admin.login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-item">Admin Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('admin.register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-item">Admin Register</a>
                            @endif
                        @endauth
                   
                @endif
    
                @if (Route::has('lawyer.login'))
    
                        @auth('lawyer')
                            <a href="{{ url('/lawyer/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Lawyer Dashboard</a>
                        @else
                            <a href="{{ route('lawyer.login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-item">Lawyer Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('lawyer.register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-item">Lawyer Register</a>
                            @endif
                        @endauth
                    
                @endif
    
                @if (Route::has('teacher.login'))
    
                    @auth('teacher')
                        <a href="{{ url('/teacher/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Teacher Dashboard</a>
                    @else
                        <a href="{{ route('teacher.login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-item">Teacher Log in</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('teacher.register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-item">Teacher Register</a>
                        @endif
                    @endauth
    
                    @endif
            </div>
            
        </div>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">
          <div class="lang_box dropdown">
            <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
              <img src="images/flag-uk.png" alt="flag" class=" " title="United Kingdom"> <i class="fa fa-angle-down " aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu ">
              <a href="#" class="dropdown-item">
                <img src="images/flag-france.png" class="" alt="flag">
              </a>
            </div>
            <span>
              English
            </span>
          </div>
          <div class="contact_nav">
            <a href="#contactlink">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
            <a href="https://goo.gl/maps/27H1SYKADk13aC1r8">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="https://www.facebook.com/profile.php?id=100092405517167">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="">
            </a>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="http://127.0.0.1:8000/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:8000/#linkset">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#aboutus"> About</a>
                </li>
                
               
    

              </ul>
              <div class="quote_btn-container">
                <!-- <a href="" class="quote_btn">
                  Get A Quote
                </a> -->
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->



    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                    Women, if the soul of the nation <br>
                    is to be saved, I believe you must<br>
                    become its soul.”
                    </h1>
                    <div class="btn-box">
                      <a href="#contactlink" class="btn1">
                        Contact Us
                      </a>
                      <a href="#aboutus" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                    “Women, like men, should try to do the impossible.<br>
                    And when they fail, their failure should be a challenge <br>
                    to others.”<br>
                    — Amelia Earhart
                    </h1>
                    <div class="btn-box">
                      <a href="#contactlink" class="btn1">
                        Contact Us
                      </a>
                      <a href="#aboutus" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                    Women, if the soul of the nation <br>
                    is to be saved, I believe you must<br>
                    become its soul.”
                    </h1>
                    <div class="btn-box">
                      <a href="#contactlink" class="btn1">
                        Contact Us
                      </a>
                      <a href="#aboutus" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
 
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service of lawyer  section -->

  <section class="service_section layout_padding" id="linkset" style="padding: 125px 0;">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
           Law Services 
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
          </p>
        </div>
        <div class="row">
        @foreach($all_lawservice as $all_lawservice)
          <div class="col-md-6 col-lg-4" style="text-align: center;padding: 20px 41px;">
            <div class="box ">
              <div class="img-box">
                <img src="{{ $all_lawservice->law_img }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                {{ $all_lawservice->l_name }}
                </h5>
                <p>
                {{ \Illuminate\Support\Str::limit($all_lawservice->service_provider_details, 100) }}
                </p>
                <a href="{{ url('lawservice/Ditels_view', ['service_id' => $all_lawservice->id]) }}" type="button" class="btn btn-danger">Read More</a>
               
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <section class="service_section layout_padding" id="linkset" style="padding: 125px 0;">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
            E-learning Services 
          </h2>
         
        </div>
        <div class="row">
        @foreach($allservice as $allservice)
          <div class="col-md-6 col-lg-4">
            <div class="box " style="padding: 10px 20px;">
              <div class="img-box" style="height: 250px;width: 100%;">
                <img src="{{ asset($allservice->img) }}" alt="" style="width: 100%; border-radius: 25px;">
              </div>
              <div class="detail-box">
                <h5>
                  {{$allservice->name}}
                </h5>
                <h3 style="color: #f07b26; padding: 10px 0px;font-weight: bold;">Price {{$allservice->service_price}} tk</h3>
                <a href="{{ url('course/Ditels_view', ['course_id' => $allservice->id]) }}" type="button" class="btn btn-danger">Read More</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- end service of lawyer section -->


  <!-- contact section -->
  <section class="contact_section layout_padding-bottom" id="contactlink" style="
    padding: 60px 0px;margin-bottom: 5%;">
    <div class="container-fluid">
      <div class="col-lg-4 col-md-5 offset-md-1">
        <div class="heading_container">
          <h2>
            Contact Us
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- client section -->
  <section class="client_section layout_padding" id="aboutus" >
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          About Us
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="https://scontent.fdel29-1.fna.fbcdn.net/v/t1.6435-1/119026544_2688337471482774_7551160880910097771_n.jpg?stp=dst-jpg_p480x480&_nc_cat=101&ccb=1-7&_nc_sid=7206a8&_nc_ohc=K2kYzyo67m8AX8eNfty&_nc_ht=scontent.fdel29-1.fna&oh=00_AfDr2xrg1jMrIKyMKom9o3kZebFc7Bj6tbiJClpvd0SNsA&oe=651121F9" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                        Shadman Hasan
                        </h5>
                        <h6>
                          Admin
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img style="
    height: 127px;
" src="https://scontent.fdel29-1.fna.fbcdn.net/v/t39.30808-6/326489632_944021323163591_7170645927703283472_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=174925&_nc_ohc=ItT_ICWLuHIAX-scRuG&_nc_ht=scontent.fdel29-1.fna&oh=00_AfBh9qIJbbZXKUTZflprlW-rfU-mptsUUcmZTFxqRkdP3A&oe=64EE483D" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Atkea Eva
                        </h5>
                        <h6>
                          Admin
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="https://scontent.fdel29-1.fna.fbcdn.net/v/t39.30808-6/291885331_1709277579417378_4505391884166329447_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=Tymi6cxlsSMAX_TcvLk&_nc_ht=scontent.fdel29-1.fna&oh=00_AfBRQ5LTz8den9aBpSvtumAy9g6obPBmVhOmV3zM78tYWA&oe=64EF97FD" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Arman Islam
                        </h5>
                        <h6>
                          Admin
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                    HI My name is Arman islam. I’m a passionate Web Designer and Developer with 3 years of experience. My goal is to meet the highest professional standards and meet every client's demands. I'm currently working on web design and development, and I provide the following services: 1. Web Designing(HTML5, CSS3, PSD to HTML, Jpg/png/pdf to HTML, Bootstrap, Responsive web design, JavaScript, JQuery) 2. Web Development(PHP with Laravel framework). I am a student in the department of computer science. I work as a freelancer in this sit as well as reading. Thanks for reading
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
      </ol>
    </div>
  </section>
  <!-- end client section -->



  <!-- info section -->
  <section class="info_section ">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 123455678990
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : demo@gmail.com
          </span>
        </a>
        <a href="https://goo.gl/maps/27H1SYKADk13aC1r8">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row info_main_row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="http://127.0.0.1:8000">Home <span class="sr-only">(current)</span></a>
                <a class="" href="#linkset">Services</a>
                <a class="" href="#aboutus"> About</a>
                <a class="" href="#contactlink">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-md-2">
            <div class="info_logo">
              <a href="">
                <img src="images/logo2.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  <!-- jQery -->
  <script src="{{asset('backend/js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{{asset('backend/js/bootstrap.js')}}"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- custom js -->
  <script src="{{asset('backend/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</html>

