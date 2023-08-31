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


    <link href="{{asset('product_ditels/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('product_ditels/assets/css/fontawesome.css')}} ">
    <link rel="stylesheet" href="{{asset('product_ditels/assets/css/templatemo-lugx-gaming.css')}}">
    <link rel="stylesheet" href="{{asset('product_ditels/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('product_ditels/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->

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
                  <a class="nav-link" href="#linkset">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                
               
    
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
              <div class="quote_btn-container">
                <a href="" class="quote_btn">
                  Get A Quote
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->


  <!-- ***** Preloader Start ***** -->

  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <!-- ***** Header Area End ***** -->



  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image" style="width: 87%;padding: 14% 15%;">
            <img src="{{$all_lawdit->law_img}}" alt="Not found">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
            
          <h4>{{$all_lawdit->l_name}}</h4>
          <span class="price">{{$all_lawdit->service_price}}</span>
          <p>	{{$all_lawdit->service_provider_details}}</p>


          <form id="qty" action="#">
            <button type="submit"  style="background-color: #f07b26;" ><i class="fa fa-shopping-bag"></i> <a href="{{ route('add-to-law', ['law_id' => $all_lawdit->id]) }}"
            style="background-color: #f07b26;border: none;" class="btn btn-primary">Add to Cart</a></button>
          </form>

          <ul>
            <li><span>Service Provider:</span> {{$all_lawdit->service_provider}}</li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="" style="padding: 70px 75px;">
          <h4>Service procedure</h4>
            {{$all_lawdit->	service_procedure}}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  <p>You can search for more templates on Google Search using keywords such as "templatemo digital marketing", "templatemo one-page", "templatemo gallery", etc. Please tell your friends about our website. If you need a variety of HTML templates, you may visit Tooplate and Too CSS websites.</p>
                  <br>
                  <p>Coloring book air plant shabby chic, crucifix normcore raclette cred swag artisan activated charcoal. PBR&B fanny pack pok pok gentrify truffaut kitsch helvetica jean shorts edison bulb poutine next level humblebrag la croix adaptogen. Hashtag poke literally locavore, beard marfa kogi bruh artisan succulents seitan tonx waistcoat chambray taxidermy. Same cred meggings 3 wolf moon lomo irony cray hell of bitters asymmetrical gluten-free art party raw denim chillwave tousled try-hard succulents street art.</p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <p>Coloring book air plant shabby chic, crucifix normcore raclette cred swag artisan activated charcoal. PBR&B fanny pack pok pok gentrify truffaut kitsch helvetica jean shorts edison bulb poutine next level humblebrag la croix adaptogen. <br><br>Hashtag poke literally locavore, beard marfa kogi bruh artisan succulents seitan tonx waistcoat chambray taxidermy. Same cred meggings 3 wolf moon lomo irony cray hell of bitters asymmetrical gluten-free art party raw denim chillwave tousled try-hard succulents street art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
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
            <a class="" href="about.html"> About</a>
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

  
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/isotope.min.js')}}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{ asset('assets/js/counter.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>

  </body>
</html>