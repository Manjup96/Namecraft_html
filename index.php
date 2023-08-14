<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>


<body>
<!-- navbar start -->
<?php
  $page = 'index';
  include 'navbar.php';

  ?>
  
  <style>
  .carousel-item {
    -webkit-transition: 0s !important;
    -o-transition: 0s !important;
    transition: 0s !important;
    transition: -webkit-transform 0s ease-in-out !important;
    transition: transform 0s ease-in-out !important;
    transition: transform 0s ease-in-out, -webkit-transform 0s ease-in-out !important;


  }
</style>

  
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 120, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 3000, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom',
    });
  </script>
  <!-- navbar emds -->
  <!-- banner starts -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style= "font-family: 'Montserrat';">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner/1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="fs-1 text-center" style="color:white">NAME CRAFT</h2>
          <h5 class="fs-2 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <!--<a class="btn btn-primary btn-border btn-lg fs-4"  href="">Our services</a>-->
          <a class="btn  btn-dark btn-border btn-lg fs-4"  href="" style="background-color: black;">Our services</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner/2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h2 class="fs-1 text-center" style="color:white">NAME CRAFT</h2>
          <h5 class="fs-4 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <a class="btn  btn-dark btn-border btn-lg fs-4"  href="" style="background-color: black;">Our services</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner/3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h2 class="fs-1 text-center" style="color:white">NAME CRAFT</h2>
          <h5 class="fs-4 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <a  class="btn  btn-dark btn-border btn-lg fs-4"  href="" style="background-color: black;">Our services</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner/5.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h2 class="fs-1 text-center" style="color:white">NAME CRAFT</h2>
          <h5 class="fs-4 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <a  class="btn  btn-dark btn-border btn-lg fs-4"  href="" style="background-color: black;">Our services</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner/4.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h2 class="fs-1 text-center" style="color:white">NAME CRAFT</h2>
          <h5 class="fs-4 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <a class=" class="btn  btn-dark btn-border btn-lg fs-4"  href="" style="background-color: black;">Our services</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- banner ends -->

  <br>

  <!-- Our Association starts -->
  <style>
    .associations h2 {
      font-family: 'Montserrat';
      letter-spacing: 3px;
      text-align: center;
      font-weight: bold;
      margin-top: 20px;
    }

    .associations .custom-bg {
      background-color: #eee5ef;
      color: black;
      font-size: 40px;
    }

    .associations .logo-container {
      font-size: 30px;
    }
    .associations .logo-container .logo-item {
      margin: 0.5rem;
      /* Increased margin for better spacing */
      flex: 1 0 100px;
      /* Added flex to distribute items evenly */
      margin-left: 70px;
    }

    .associations .logo-item img {
      margin-top: 80px;
    }
  </style>
  
  
  
<!-- Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <div class="associations">
  <div class="container-fluid p-3  custom-bg ">
    <h2 class="text-center">OUR ASSOCIATIONS</h2>
    <div class="row logo-container owl-carousel">
      <div class="col-6 col-md-4 logo-item">
        <img src="images/logo_amazon.png" alt="Logo 1" class="img-fluid">
      </div>
      <div class="col-6 col-md-4 logo-item">
        <img src="images/logo_cnbc.png" alt="Logo 2" class="img-fluid">
      </div>
      <div class="col-6 col-md-4 logo-item">
        <img src="images/logo_cosmo.png" alt="Logo 3" class="img-fluid">
      </div>
      <div class="col-6 col-md-4 logo-item">
        <img src="images/logo_forbes.png" alt="Logo 4" class="img-fluid">
      </div>
      <div class="col-6 col-md-4 logo-item">
        <img src="images/logo_indianexpress.png" alt="Logo 5" class="img-fluid">
      </div>
      <div class="col-6 col-md-4 logo-item">
        <img src="images/logo_NDTV.png" alt="Logo 6" class="img-fluid">
      </div>
    </div>
  </div>
  </div>


<!-- Add the Owl Carousel JavaScript code -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
    $(".logo-container").owlCarousel({
      loop: true,
      margin: 20,
      autoplay: true, // Enable autoplay
            autoplayTimeout: 2000, // Set autoplay timeout in milliseconds
      autoplayHoverPause: true, // Pause autoplay on hover
      nav: true,
      dots: true,
      responsive: {
        0: {
            items: 1
          },
          576: {
            items: 2
          },
          768: {
            items: 3
          },
          992: {
            items: 4
          },
          1200: {
            items: 5
          }
      }
    });
  });
</script>


  <!-- Our Association Ends -->
  

  <!-- About Namecraft starts -->
  <style>
    .about .container {
      display: flex;
      flex-direction: column;
    }

    .about .row {
      display: flex;
      flex-direction: row;

    }

    .about .col-6 {
      flex-basis: 50%;
    }

    .about h2 {
      font-family: 'Montserrat';
      color: #333;
      letter-spacing: 5px;
      font-weight: bold;
      padding-top: 60px;
      text-align: center;

    }

    .about p {
      font-family: 'Montserrat';
      font-size: 16px;
      color: black;
      line-height: 1.5;
      
      
      
    }

    .about img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      padding-top: 100px;
    }
  </style>

  <div class="about">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-6 col-sm-12">
        <h2>ABOUT NAMECRAFT</h2><br>
        <p style="text-align: justify">Welcome to Namecraft, a sub-brand of Sheelaa M Bajaj, a leading numerology company based in Bangalore, India. At Namecraft, we specialize in providing customized numerology reports for institutions, with a focus on maternity hospitals. Our goal is to help new parents choose the perfect name for their baby, based on numerological analysis.
          Our founder, Sheelaa M Bajaj, is a renowned numerologist, life coach, and spiritual teacher with over two decades of experience in the field. She has helped countless individuals and organizations achieve their goals through her expertise in numerology, astrology, tarot reading, and Feng Shui. She has been featured in numerous media outlets, including The Times of India, Deccan Chronicle, and Femina, among others, and has trained numerous students in these fields.</p>
      </div>
      <div class="col-md-12 col-lg-6 col-sm-12">
        <img style="margin-bottom: 80px;" src="images/about.png" alt="image">
      </div>

    </div>
  </div>
  </div>



  <!-- About Namecraft ends -->

  

  <!-- Our Services starts -->

  <style>
    .services .container-fluid {
      background-color: #eee5ef;
      padding: 40px;
    }

    .services h2 {
      font-family: 'Montserrat';
      text-align: center;
      margin-bottom: 30px;
      letter-spacing: 5px;
      padding: 30px;
      font-weight: bold;
      
    }

    .services .col-md-3 {
      text-align: center;
      margin-bottom: 20px;
    }

    .services .col-md-3 img {
      max-width: 30%;
      height: auto;
    }

    .services .col-md-3 h6 {
      font-size: 16px;
      margin-top: 10px;
      margin-bottom: 5px;
      letter-spacing: 3px;
      
    }

    .services .col-md-3 p {
      font-size: 16px;
      line-height: 1.5;
      
    }

    .services .read-more {
      color: #b8b8b8;
      font-weight: bold;
      font-size: 12px;
      letter-spacing: 2px;
      margin-top: 15px;
      text-transform: uppercase;
      font-family: 'Hind', 'Mulish, Arial', 'sans-serif';
      text-decoration: none;
    }
  </style>
  </head>

  <body>
    <div class="services">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h2>OUR SERVICES</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12">
          <img src="images/Service1-home.png" alt="logo"><br><br>
          <h6>BABY NAME CORRECTION</h6><br>
          <p>If you are looking for a lucky baby name, Sheelaa M Bajaj can help. She has assisted hundreds of couples and families in choosing a suitable lucky baby name based on parents preferences.</p>
          <a href="babyname.php" class="read-more" style="color:black">READ MORE &raquo;</a>
        </div>

        <div class="col-md-3 col-lg-3 col-sm-12">
          <img src="images/service2.png" alt="logo"><br><br>
          <h6>LUCKY DATE DELIVERY</h6><br>
          <p>Is your brand name numerologically lucky? Learn what leading brand names have in common, good numerology, lucky names which give them a boost over their competitors.</p>
          <a href="luckydate.php" class="read-more" style="color:black">READ MORE &raquo;</a>
        </div>

        <div class="col-md-3 col-lg-3 col-sm-12">
          <img src="images/service3.png" alt="logo"><br><br>
          <h6>LUCKY NAME CORRECTION</h6><br>
          <p>A rectified name according to numerology can rectify the date of birth flaw and turn things around for the individual or business. There are Chaldean and Pythagorean numerology systems.</p>
          <a href="luckyname.php" class="read-more" style="color:black">READ MORE &raquo;</a>
        </div>

        <div class="col-md-3 col-lg-3 col-sm-12">
          <img src="images/service4.png" alt="logo"><br><br>
          <h6>NAME ANALYSIS</h6><br>
          <p>Uncover the hidden meanings behind names with our expert name analysis services. Explore the fascinating stories behind names through our personalized name analysis.</p>
          <a href="nameanalysis.php" class="read-more" style="color:black">READ MORE &raquo;</a>
        </div>
      </div>
    </div>
    </div>
<!-- Our Services ends -->




<!-- Testimonials starts -->

<style>
    .testimonial .container {
        margin-top: 20px;
        font-family: 'Montserrat';
        padding-bottom: 50px;
        
    }
    .testimonial h2 {
        text-align: center;
        margin-bottom: 50px;
        font-family: 'Montserrat';
        font-weight: bold;
        margin-top: 80px;
        letter-spacing: 3px;
    }
    .testimonial .card {
        border-radius: 10px;
        text-align: center;
        font-size: 16px;
        box-shadow: 5px 0px 10px rgba(0, 0, 0, 0.1);
        border: none;
        font-family: 'Montserrat';
        width: 100%;
        height: 500px;
        margin-top: 20px;     
    }
    .testimonial .profile-pic {
      border-radius: 20%;
      width: 80px;
      margin-left: 130px;
      margin-top: 30px;
      margin-bottom: 20px;
    }
    /* Custom styles for the carousel */
  .testimonial .carousel-control-prev-icon{
    filter: invert(100%);
    margin-right: 120px;
    
    
  }
  .testimonial .carousel-control-next-icon {
    filter: invert(100%);
    margin-left: 120px;
    margin-top: 5px;
  }

  .testimonial .carousel-indicators {
    filter: invert(50%);
    position: static;
    
  }
  </style>
</head>
<body>
    
<div class="testimonial">
<div class="row">
    <div class="col-md-12">
        <h2>TESTIMONIALS</h2>
    </div>
</div>


<div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="profile-pic rounded-circle" src="images/testimonial-6.jpg" alt="Profile Picture">
                            <div class="card-body">
                                <p style="text-transform: uppercase;">"Loads of gratitude &amp; being associated with Sheelaa has been a life changer"</p>
                                <br>
                                <p>Sheelaa has been an excellent mentor. A talk with her for a few seconds can uplift anybody's mind. She is a life coach, an excellent businesswoman, and a lady who believes in magic. She has shown how to create from nowhere.</p>
                                <br>
                                <p style="text-transform: uppercase;">Arnaaubh Chakraborrty</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="profile-pic rounded-circle" src="images/testimonial-1.jpg" alt="Profile Picture">
                            <div class="card-body">
                                <p style="text-transform: uppercase;">"Truly amazing and wonderful person I have ever met. Thank you, ma'am"</p>
                                <br>
                                <p>Sheelaa M Bajaj is very down to earth and always smiling and ready to solve your problems. Simple remedies but very effective and life-changing. Once you meet her, you'll have lots and lots of positiveness filled within you.</p>
                                <br><br>
                                <p style="text-transform: uppercase;">Apoorva S</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="profile-pic rounded-circle" src="images/testimonial-2.jpg" alt="Profile Picture">
                            <div class="card-body">
                                <p style="text-transform: uppercase;">"Sheelaa mam is a magnanimous, flamboyant & magnetic human being"</p>
                                <br>
                                <p>With her solutions, I was able to successfully complete my Masters in spite of the million hurdles I faced. More than anything, being in her extremely positive aura makes you feel good, energetic & hopeful. I will be forever thankful to her.</p>
                                <br>
                                <p style="text-transform: uppercase;">Amitta Sanjeev Sawantt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="profile-pic rounded-circle" src="images/testimonial-3.jpg" alt="Profile Picture">
                            <div class="card-body">
                                <p style="text-transform: uppercase;">"Consult her for magicology! She creates magic with numbers"</p>
                                <br>
                                <p>That's the spark and energy she adds in everyone's life. I feel she is the healer of Mind, Body, and Soul. The wealth of her knowledge and Keys to Unlock doors is phenomenal.</p>
                                <br>
                                <p style="text-transform: uppercase;">Janakie Thakur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="profile-pic rounded-circle" src="images/testimonial-4.jpg" alt="Profile Picture">
                            <div class="card-body">
                                <p style="text-transform: uppercase;">"Please follow her remedies to see magic! Sheelaa mam is magic"</p>
                                <br>
                                <p>Sheela ma'am has also been a life coach to me, helped me get over my emotional imbalances, poverty consciousness, and has made me a very positive person, opening myself to receive more.</p>
                                <br>
                                <p style="text-transform: uppercase;">Varun Appaiah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="profile-pic rounded-circle" src="images/testimonial-5.jpg" alt="Profile Picture">
                            <div class="card-body">
                                <p style="text-transform: uppercase;">"Thanks Sheela for the amazing human being she is"</p>
                                <br>
                                <p>Sheelaa is selfless enough to give so much valuable information which is beyond belief. I thank you from the core of my heart and I am so much proud of getting associated with you.</p>
                                <br><br>
                                <p style="text-transform: uppercase;">Sharmistha Chakraborty</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <ol class="carousel-indicators">
        <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#testimonialCarousel" data-slide-to="1"></li>
    </ol>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialize the Carousel component
    var carousel = document.getElementById('testimonialCarousel');
    var carouselInstance = new bootstrap.Carousel(carousel);
</script>




<!-- Testimonials ends -->


    <!-- Millions of Clients Starts -->

    <style>
      .clients .container {
        display: flex;
        flex-direction: column;
        margin-top: 100px;
        
      }
      .clients .container p {
        margin-top: 30px;
        text-align: justify;
        font-size: 16px;
        font-family: 'Montserrat';
        
      }
      .clients img {
        margin-top: 40px;
        height: 80%;
        border-radius: 10px;
      }
    </style>

<div class="clients">
 <div class="container">
   <div class="row">
     <div class="col-md-12 col-lg-8 col-sm-12">
          <h2 style= "font-weight: bold; font-family: 'Montserrat';">MILLIONS OF CLIENTS!</h2>
          <p>Sheelaa M Bajaj, the founder of Namecraft, has consulted and helped millions of clients throughout her illustrious career. Her expertise in numerology, astrology, and esoteric sciences has garnered widespread recognition and trust. Her shows on the Daily TVshow on TEZ news channel, part of India Today Group, as well as appearances on channels like CNBC news and CNBC AWAZ, have captivated millions of viewers. Sheelaa’s expertise has even influenced the professional success of her clients, with one actor securing a role alongside Amitabh Bachchan after following her guidance.</p>
          <p>At Namecraft, we are proud to be a sub-brand of Sheelaa M Bajaj’s renowned numerology company. We carry forward her legacy of excellence, integrity, and personalized service. Namecraft specifically focuses on serving institutions, such as maternity hospitals, and we have plans to expand our numerology services to cater to other sectors as well. With Sheelaa’s expertise and track record of success backing us, we provide the highest quality numerology reports and services. We are dedicated to helping clients make informed decisions, empowering them with the knowledge and insights needed to navigate important choices, such as selecting the perfect name for a newborn. At Namecraft, we believe in the transformative power of numerology and strive to make a positive impact on the lives of our clients.</p>
        </div>

        <div class="col-md-12 col-lg-4 col-sm-12">
          <img src="images/Mofclients.jpg" alt="image">
        </div>
      </div>
  </div>
  </div>

    <!-- Millions of Clients Ends -->

    <!-- Book Section starts -->

    <style>
      .tedx_talk {
        background-color: #eee5ef;
        margin-top: 50px;
        font-family: 'Montserrat';
        padding: 40px;
      }
      .tedx_talk p {
        font-size: 16px;
       
      }
      .tedx_talk img {
        border-radius: 10px;
        margin-top: 30px;
      }


      .button {
        background-color: #b97ebb;
        box-shadow: 0 5px 0 #a559a8;
        color: white;
        padding: 10px 20px;
        border: none;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
        letter-spacing: 2px;
      }
    </style>
      
    <div class= "tedx_talk">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xs-12">
          <img style="width: 280px; height: 400px;" src="images/Book.jpg" alt="">
        </div>

        <div class="col-md-8 col-lg-8 col-xs-12">
          <h2>IS LOVE A GAME? READ THIS BOOK</h2>
          <p>THE LOVE MIRAGE: The Game of Love Deciphered</p>
          <p>A book by Sheelaa M Bajaj</p><br>
          <p>Is love illusive and elusive like a mirage?</p>
          <p>Are relationships like a game of chess?</p>
          <p>Why do marriages become stagnant?</p>
          <p>Why are so many people unhappy in love relationships and marriage?</p><br>
          <h5>Explore these surprisingly revealing truths in this book authored by</h5>
          <h5>Sheelaa M Bajaj.</h5>
          <a href="https://www.amazon.com" target="_blank">
            <button class="button">Buy on Amazon</button>
          </a>
        </div>
      </div>
    </div>
    </div>
  
    <!-- Book Section Ends -->

    <!-- Video Section Starts -->
  <style>

  .video .video-container {
    padding: 20px;
    background-color: #f2f2f2;
    margin-top: 30px;
  }

  .video .embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
    border-radius: 10px;
    margin-top: 80px;
  }

  .video .embed-responsive::before {
    content: "";
    display: block;
    padding-top: 56.25%;
  }

  .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
  }

</style>



    
<div class="video">
<div id="video-container" class="container text-center" >
  <div class="row">
    <div class="col-md-12">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qjXbvNdbamg" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
</div>


    <!-- Video Section Ends -->

    <!-- Container Section Starts -->
    <style>
      /* Custom styles */
      .tedx .container-fluid {
        padding-top: 50px;
        background-color:  #eee5ef;
        margin-top: 150px;
        padding-bottom: 50px;


      }

      .tedx .container-fluid iframe {
        border-radius: 10px;
      }

      .tedx .container-fluid h2 {
        font-weight: bold;
        margin-bottom: 20px;
        font-family: 'Montserrat';
      }

      .tedx .container-fluid p {
        font-size: 16px;
        line-height: 1.5;
        text-align: justify;
        padding-right: 50px;
        font-family: 'Montserrat';
        margin-top: 30px;
      }
    </style>


    <div class="tedx">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-12 col-lg-6 col-sm-12" >
        <iframe width="100%" height="480px" src="https://www.youtube.com/embed/zODg8WBfR8w" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-12 col-lg-6 col-sm-12">
          <h2>A LIFE COACH AND TED-X TALKER</h2>
          <p>Sheelaa Bajaj spoke on one of the golbally respected idea-sharing platform TEDx at New Delhi in january 2019. She enlighted the audience about the topic ‘Finding the Best in the Worst’. It was lauded by hundreds and thousands of people who were present at the venue as well as online.</p>
          <p>Our lives are filled with mystic secrets. Each one of us is in search of some guiding light which will help us understand our past and present and help us peek into the future.</p>
          <p>Did you know that your life is guided by numbers? You may not even realize, but these numbers are constantly manoeuvring your life.</p>
          <p>We at namecraft.co can help you unlock the hidden secrets of your life through our numerology services</p>
        </div>
      </div>
    </div>
    </div>


    <!-- Container Section Ends -->


    <!-- video Gallery starts -->
    <style>
      .gallery .container .row {
        margin-top: 50px;
      }

      .gallery .video-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;


      }

      .gallery .video-column {
        padding: 10px;
        margin-bottom: 30px;
      }

      .gallery .video-column video {
        width: 250px;
        height: 350px;
        border: 1px solid #ccc;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      
    </style>



    <div class="gallery">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2 style= "text-align: center; font-weight: bold;">VIDEO FEEDBACK</h2>
        </div>
      </div>

      <div class="row mb-5 video-container" style = "border-radius: 5px;">
        <div class="col-md-6 col-lg-3 col-sm-12 video-column">
               <iframe width="100%" height="480" src="https://www.youtube.com/embed/lRn7rAHJ1Ts?list=PLgK6llXnqLHg06OiIXWr9GTs7GOqx54mL" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-12 video-column">
          
           <iframe width="100%" height="480" src="https://www.youtube.com/embed/ZXTYn0yMKNI?list=PLgK6llXnqLHg06OiIXWr9GTs7GOqx54mL" frameborder="0" allowfullscreen></iframe>


      
        </div>
        <div class="col-md-6 col-lg-3 col-sm-12 video-column">
        <iframe width="100%" height="480" src="https://www.youtube.com/embed/rgqss3fBgXw?list=PLgK6llXnqLHg06OiIXWr9GTs7GOqx54mL" frameborder="0" allowfullscreen></iframe>

        </div>
        <div class="col-md-6 col-lg-3 col-sm-12 video-column">
        <iframe width="100%" height="480" src="https://www.youtube.com/embed/ZIo0Q3zJTx0?list=PLgK6llXnqLHg06OiIXWr9GTs7GOqx54mL" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    </div>



    <!-- video Gallery ends -->




  <?php include("footer.php");?>

</body>

</html>