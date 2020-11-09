<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>{{ config('app.name', 'Laravel') }}</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Site Icons -->
      <link rel="shortcut icon" href="#" type="image/x-icon" />
      <link rel="apple-touch-icon" href="#" />
      {!! Html::style('public/fontend/css/bootstrap.min.css') !!}
      {!! Html::style('public/fontend/css/pogo-slider.min.css') !!}
      {!! Html::style('public/fontend/css/style.css') !!}
      {!! Html::style('public/fontend/css/responsive.css') !!}
      {!! Html::style('public/fontend/css/custom.css') !!}
      <style>
         .navbar{
            box-shadow: none;
            width: 100% !important;
         }
         .navbar-brand img {
            max-width: 300px;
         }
         .navbar a.nav-link {
            font-size: 17px;
            text-shadow: 1px 1px 1px #fff;
         }
      </style>
      @yield('style')
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
      <!-- LOADER -->
      <div id="preloader">
         <div class="loader">
          <img src="{{url('/public/fontend')}}/images/loader.gif" alt="#" />
         </div>
      </div>
      <!-- END LOADER -->
      <div class="wrapper">
      <nav id="sidebar">
         <div class="menu_section">
            <ul>
               <li><a href="{{url('/')}}">Home</a></li>
               @guest
               <li><a href="{{route('login')}}">Login</a></li>
               @else
               <li><a href="{{route('home')}}">Dashboard</a></li>
               @endguest
               <li><a href="about.html">About</a></li>
               <li><a href="services.html">Services</a></li>
               <li><a href="contact.html">Contact us</a></li>
            </ul>
         </div>
      </nav>
      <div id="content">
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                  <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('/public/fontend')}}/images/das_bg.png" alt="{{ config('app.name') }}" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                     <div class="navbar-nav ml-auto">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        @guest
                        <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
                        @else
                        <li><a class="nav-link" href="{{route('home')}}">Dashboard</a></li>
                        @endguest
                        <li><a class="nav-link" href="about.html">About</a></li>
                       <li><a class="nav-link" href="services.html">Services</a></li>
                       <li><a class="nav-link" href="contact.html">Contact us</a></li>
                     </div>
                  </div>
                  </nav>
            </div>
         </header>
         <!-- End header -->
         @yield('content')
         <!-- Start Footer -->
         <footer class="footer-box">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Contact us</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_1">
                         <p>Address<br><small>151 Ho Ba Kien Street,<br>Ward 15, District 10,<br>Ho Chi Minh City, Vietnam</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_2">
                        <p>Phone<br><small>+84 126 922 0162<br>+84 905 333 333<br>Monday - Sunday<br>08:00 am - 05:00 pm</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                         <p>Email<br><small>support@sofbox.com<br>24 X 7 online support</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Social media</p>
                         <p>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                         </p>
                     </div>
                  </div>
              
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">© Copyrights 2019</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    {!! Html::script('public/fontend/js/jquery.min.js') !!}
    {!! Html::script('public/fontend/js/popper.min.js') !!}
    {!! Html::script('public/fontend/js/bootstrap.min.js') !!}
    {!! Html::script('public/fontend/js/jquery.magnific-popup.min.js') !!}
    {!! Html::script('public/fontend/js/jquery.pogo-slider.min.js') !!}
    {!! Html::script('public/fontend/js/slider-index.js') !!}
    {!! Html::script('public/fontend/js/smoothscroll.js') !!}
    {!! Html::script('public/fontend/js/form-validator.min.js') !!}
    {!! Html::script('public/fontend/js/isotope.min.js') !!}
    {!! Html::script('public/fontend/js/images-loded.min.js') !!}
    {!! Html::script('public/fontend/js/custom.js') !!}
      @yield('script')
      <script>
         $(document).ready(function() {
           $('#sidebarCollapse').on('click', function() {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
           });
         });
      </script>
   </body>
</html>