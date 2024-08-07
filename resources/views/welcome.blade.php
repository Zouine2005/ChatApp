<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TalkEase</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Pacifico|Spartan" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* browser default styling */
            html {
              scroll-behavior: smooth;
            }
            
            /* customized scrollbar for chrome desktop version only */
            /* width */
            ::-webkit-scrollbar {
              width: 10px;
            }
            
            /* Track */
            ::-webkit-scrollbar-track {
              background: none;
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb:hover {
              background: #0b5fdd;
              /* Old browsers */
              background: -moz-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* FF3.6-15 */
              background: -webkit-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* Chrome10-25,Safari5.1-6 */
              background: linear-gradient(135deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
              filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0b5fdd', endColorstr='#4ca3ef', GradientType=1);
              /* IE6-9 fallback on horizontal gradient */
              border: 1px solid #fff;
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb {
              background: #555;
            }
            
            /* body styling */
            body {
              font-family: "Montserrat" !important;
              -webkit-user-select: none;
              -webkit-touch-callout: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              overflow-x: hidden;
            }
            
            img {
              pointer-events: none;
            }
            
            a, a:hover, a:visited, a:focus {
              text-decoration: none !important;
            }
            
            /* hero section styling */
            #hero {
              color: rgb(255, 255, 255);
              text-shadow: 1px 2px 8px rgba(0, 0, 0, .3);
              background: #0b5fdd;
              /* Old browsers */
              background: -moz-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* FF3.6-15 */
              background: -webkit-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* Chrome10-25,Safari5.1-6 */
              background: linear-gradient(135deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
              filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0b5fdd', endColorstr='#4ca3ef', GradientType=1);
              /* IE6-9 fallback on horizontal gradient */
              box-shadow: 0px 5px 20px rgba(50, 50, 50, .5);
            }
            /* navbar styling */
            .navbar {}
            
            /* logo/brandname styling */
            .navbar-brand {
              font-family: "Pacifico" !important;
              font-size: 2.5em !important;
            }
            
            .nav-items {
              padding: 0 5px;
            }
            
            .nav-link {
              color: rgba(255, 255, 255, 0.8) !important;
            }
            
            .nav-link:hover {
              color: rgb(255, 255, 255) !important;
            }
            
            /* hero row styling */
            .hero-row {
              margin-top: 10%;
            }
            
            /* hero description styling */
            .hero-description {
              margin-top: 5%;
              margin-left: 3%;
            }
            
            /* hero button styling */
            .get-started-button, .join-community-button {
              margin-right: 5px;
            }
            
            /* hero image styling */
            .hero-img {
              margin-top: -10%;
              padding-bottom: 10%;
              margin-left: 40%;
              height: 470px;
              width: ;
              transform: rotate(20deg);
            }
            
            /* hero title styling */
            .hero-title {
              color: #fff;
              font-family: "Spartan";
              text-shadow: 1px 2px 8px rgba(0, 0, 0, .3);
              line-height: 1.5;
            }
            
            /* features section styling */
            #features {
              padding: 8% 20%;
            }
            
            .features-box {
              text-align: center;
            }
            
            h3 {
              font-family: "Montserrat" !important;
              font-weight: 700 !important;
            }
            
            .features-icons {
              font-size: 55px;
              background: -webkit-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 80%, #54a3ee 79%, #4ca3ef 100%);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              margin-bottom: 10px;
            }
            
            .features-icons:hover {
              transform: scale(1.3);
              transition: 0.3s;
            }
            
            /* testimonial section styling */
            #testimonials {
              padding: 10% 10%;
              text-align: center;
              background-color: #0b5fdd;
              color: #fff;
              text-shadow: 1px 2px 8px rgba(0, 0, 0, .3);
              margin-bottom: 5%;
              box-shadow: 0px 5px 20px rgba(50, 50, 50, .5);
            }
            
            #testimonials h2 {
              font-weight: 700 !important;
              margin-bottom: 3%;
            }
            
            .quotation-symbol {
              padding: 0 2%;
              font-family: "Spartan";
            }
            
            #testimonials img {
              border-radius: 50%;
            }
            
            #testimonials p {
              margin-top: 5px;
              margin-bottom: -5px;
            }
            
            .carousel-inner {
              margin-top: 5%;
              height: 350px;
            }
            
            em {
              font-size: 16px;
              margin-bottom: 10%;
            }
            
            /* press section styling */
            #press {
              text-align: center;
              margin-bottom: 5%;
              padding-top: 4%;
              padding-bottom: 4%;
            }
            
            .press-image {
              width: 15%;
              padding: 0 2% 0 2%;
            }
            
            /* pricing section styling */
            #pricing {
              background: #0b5fdd;
              /* Old browsers */
              background: -moz-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* FF3.6-15 */
              background: -webkit-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* Chrome10-25,Safari5.1-6 */
              background: linear-gradient(135deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
              filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0b5fdd', endColorstr='#4ca3ef', GradientType=1);
              /* IE6-9 fallback on horizontal gradient */
              box-shadow: 0px 5px 20px rgba(50, 50, 50, .5);
              text-align: center;
              padding: 10% 15%;
              font-family: "Montserrat";
            }
            
            .pricing-heading {
              color: #fff;
              margin-bottom: 10%;
              text-shadow: 1px 2px 8px rgba(0, 0, 0, .3);
            }
            
            .pricing-heading h2 {
              font-weight: 700 !important;
              text-shadow: 1px 2px 8px rgba(0, 0, 0, .3);
            }
            
            .card-header {
              font-weight: 700 !important;
            }
            
            .pricing-section-icon {
              background: -webkit-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 80%, #54a3ee 79%, #4ca3ef 100%);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
            }
            
            .rotated-icon {
              transform: rotate(-45deg);
            }
            
            .price {
              font-weight: 700 !important;
              color: #3690f0;
            }
            
            h4 {
              font-weight: 700 !important;
            }
            
            /* call to action section styling */
            #cta {
              text-align: center;
              padding: 10% 10%;
              font-family: "Montserrat"
            }
            
            #cta p {
              margin-bottom: 3%;
            }
            
            /* footer section styling */
            #footer {
              background: #0b5fdd;
              /* Old browsers */
              background: -moz-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* FF3.6-15 */
              background: -webkit-linear-gradient(-45deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* Chrome10-25,Safari5.1-6 */
              background: linear-gradient(135deg, #0b5fdd 1%, #3690f0 60%, #54a3ee 79%, #4ca3ef 100%);
              /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
              filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0b5fdd', endColorstr='#4ca3ef', GradientType=1);
              /* IE6-9 fallback on horizontal gradient */
              color: #fff;
              text-align: center;
              padding: 2% 0%;
            }
            
            .meet-the-dev {
              margin-bottom: 10px;
              text-shadow: 1px 2px 8px rgba(0, 0, 0, .3);
            }
            
            .copyright-text {
              font-size: 14px;
            }
            
            /* ------------for mobile------------ */
            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
            
              /* global rules */
              h1 {
                font-size: 1.2rem !important;
              }
            
              h2, h3, h4 {
                font-size: 1rem !important;
              }
            
              p {
                font-size: 16px !important;
              }
            
              button {
                padding: 6px !important;
              }
            
              /* hero section rules   */
              #hero {
                text-align: center;
              }
            
              .hero-row {
                text-align: center;
                padding-bottom: 20%;
              }
            
              .hero-description {
                margin-top: 0;
                padding: 20% 0%;
              }
            
              .hero-img {
                display: none;
              }
            
              /* features section rules */
              #features {
                padding: 10% 10%;
              }
            
              /* testimonials section rules */
              #testimonials {
                padding: 10% 5%;
              }
            
              .carousel-item img {
                width: 20%;
              }
            
              .carousel-item {
                padding: 5% 5%;
              }
            
              .carousel-item p {
                font-size: 16px !important;
              }
            
              /* press section styling */
              .press-image {
                width: 20%;
                padding: 0 2%;
              }
            
              /* pricing section styling */
              #pricing {
                padding: 10% 10%;
              }
            
              /* footer section styling */
              #footer {
                padding: 5% 2.5% 3% 2.5%;
              }
            
              .meet-the-dev {
                margin-bottom: 5px;
              }
            
              .social-buttons button {
                padding: 0 5px;
                margin: 3px 0;
              }
            
              /* cta section rules */
              #cta {
                margin: 10% 0;
              }
            }
            
            /* ------------for tablet------------ */
            /* Small devices (portrait tablets and large phones, 600px and up) */
            @media only screen and (max-width: 990px) {
            
              /* hero section rules */
              #hero {
                text-align: center;
              }
            
              .hero-title {
                margin-left: 0px;
                padding: 0 5%;
              }
            
              .hero-row {
                margin-top: 0;
              }
            
              .hero-description {
                margin-top: 0;
                padding: 20% 5%;
              }
            
              .hero-img {
                display: none;
              }
            
              /* testimonials section rules */
              #testimonials {
                padding: 5% 10%;
              }
            
              .carousel-inner {
                margin-top: 5%;
                height: 300px;
              }
            
              .carousel-item h2 {
                margin-top: 5%;
                font-size: 1.2rem !important;
              }
            
              .carousel-item img {
                width: 15%;
              }
            
              /* pricing section rules */
              #pricing {
                padding: 10% 5%;
              }
            
              .list-unstyled li {
                font-size: 16px !important;
              }
            }
            
            /* Medium devices (landscape tablets, 768px and up) */
            @media only screen and (min-width: 768px) {}
            
            /* ------------for desktop------------ */
            /* Large devices (laptops/desktops, 992px and up) */
            @media only screen and (min-width: 992px) {}
            
              /* Extra large devices (large laptops and desktops, 1200px and up) */
              @media only screen and (min-width: 1200px) {}
            
        </style>
    </head>
    <body>

        <section id="hero">
          <div class="container">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-dark navbar-toggleable-md">
              <a class="navbar-brand logo" href="#">TalkEase</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarItems">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-items text-center">
                    <a class="nav-link" href="#testimonials">Testimonial</a>
                  </li>
                  <li class="nav-items text-center">
                    <a class="nav-link" href="#cta">Contact</a>
                  </li>
                  <li class="nav-items text-center">
                    @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
                  </li>
                  <li class="nav-items text-center">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                  </li>
                 <li class="nav-items text-center">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                 </li>
                    @endauth
                    @endif
                  </li>
                </ul>
              </div>
            </nav>
            <!-- Title -->
            <div class="row hero-row">
              <div class="col-lg-6">
                <div class="hero-description">
                  <h1 class="font-weight-bold hero-title">Find your nearest mate & chat together</h1>
                  <p class="hero-title-description">
                    It's totally free!
                  </p>
                  <a href="#features">
                    <button class="btn btn-success get-started-button" type="button"><i class="fas fa-angle-double-right"></i> Get Started</button>
                  </a>
                  <a href="#">
                    <button class="btn btn-outline-light" type="button"><i class="fab fa-google-play"></i> Download</button>
                  </a>
                </div>
              </div>
      
              <div class="col-lg-6">
                <img class="hero-img" src="{{asset('assets/images/welcome-image.png')}}" alt="Our Application">
              </div>
            </div>
          </div>
      
        </section>
      
      
        <!-- Features -->
      
        <section id="features">
          <div class="row">
            <div class="features-box col-lg-4">
              <i class="fas fa-check-circle features-icons"></i>
              <h3>Easy to use</h3>
              <p>Really easy to use & user friendly, Try that out.</p>
            </div>
            <div class="features-box col-lg-4">
              <i class="fas fa-shield-alt features-icons"></i>
              <h3>Safe & Secured</h3>
              <p>We are secured and love to keep everything secret.</p>
            </div>
            <div class="features-box col-lg-4">
              <i class="fas fa-heart features-icons"></i>
              <h3>Loved By 3M+</h3>
              <p>We are being fatured & loved by over 3M+ users.</p>
            </div>
          </div>
      
      
        </section>
      
      
        <!-- Testimonials -->
      
        <section id="testimonials">
      
          <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h2>
                  <span class="quotation-symbol">"</span>I've found my best companion through TalkEase. They have made the process super easy. WHOOAH!!!<span class="quotation-symbol">"</span>
                </h2>
                <img src="{{asset('assets/images/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}" alt="emanuel-michel" style="width:13%; height:5%">
                <p>Sanae Zouine</p>
                <em>Sydney, Australia</em>
              </div>
              <div class="carousel-item">
                <h2>
                  <span class="quotation-symbol">"</span>I was sparing my time lonely, but with TalkEase's help, I have found the love of my life. I think.<span class="quotation-symbol">"</span>
                </h2>
                <img src="{{asset('assets/images/jurica-koletic-7YVZYZeITc8-unsplash.jpg')}}" alt="diane-gudogdu" style="width:13%; height:5%">
                <p>Ahmed Almou</p>
                <em>Beverly, Illinois</em>
              </div>
            </div>
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      
        </section>

        <!-- Call to Action -->
      
        <section id="cta">
      
          <h3>Join Our Communtiy and Spread Love</h3>
          <p>You're always welcome to our communtiy</p>
          <button class="btn btn-success join-community-button" type="button"><i class="far fa-heart"></i> Join Now</button>
          <button class="btn btn-outline-primary" type="button"><i class="fab fa-google-play"></i> Download</button>
      
        </section>
      
      
        <!-- Footer -->
      
        <footer id="footer">
          <div class="meet-the-dev">
            <p>Meet the Developer</p>
            <a class="social-buttons" href="https://twitter.com/MohamadeZouine" target="_blank">
              <button class="btn btn-info btn-sm" type="button"><i class="fab fa-twitter-square"></i></i> Twitter</button>
            </a>
            <a class="social-buttons" href="https://github.com/Zouine2005" target="_blank">
              <button class="btn btn-dark btn-sm" type="button"><i class="fab fa-github-square"></i></i></i> Github</button>
            </a>
            <a class="social-buttons" href="https://www.linkedin.com/in/mohamed-zouine-5716a2252" mail target="_blank">
              <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-linkedin-square"></i></i> Linkedin</button>
            </a>
          </div>
          <p class="copyright-text">©Copyright 2024 | Version 1.0| Developed By Mohamed Zouine</p>
      
        </footer>
      
      
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
        <!-- fontawesome kit -->
        <script src="https://kit.fontawesome.com/b286598102.js" crossorigin="anonymous"></script>
      </body>
</html>
