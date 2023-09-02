<!DOCTYPE html>
<html lang="en">

<?php include("head_links.php"); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-x0mQ/v/v0aWDZxAoO0Unve14mH99MdgCpN2cetKDgzzhQJdBKuQIbfa6X7y7DjGnnrMTJn/MqyJGim4tNXqO4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-Vkoo8x4CGsO3+Hq6+7F/TA2IHq0CcJ7Wif5f5RME5ePb0y1q0sAdSZ4P5Pe2Pr" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-Vkoo8x4CGsO3+Hq6+7F/TA2IHq0CcJ7Wif5f5RME5ePb0y1q0sAdSZ4P5Pe2Pr" crossorigin="anonymous">



<body>
  <!-- navbar start -->
  <?php
  $page = 'about';
   include 'navbar.php';
  ?>


  <!-- banner starts -->
  <!--<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">-->
  <!--    <div class="carousel-inner">-->
  <!--        <div class="carousel-item active">-->
  <!--            <img src="images/single_banner.png" class="d-block w-100" alt="...">-->
  <!--            <div class="carousel-caption d-flex align-items-center justify-content-center">-->
  <!--                <div class="text-center">-->
  <!--                    <h2 style="margin: 130px; font-size: 50px;">About</h2>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--</div>-->

  <!-- <div id="innerPageBanner">
    <img src="images/single_banner1.png" class="banner-image" alt="Banner Image" style="height:300px;">
    <div class="banner-overlay"></div>
    <div class="banner-content">
        <h2 style="font-size:80px;font-family:montserrat;font-weight:bold;">About</h2>
    </div>
</div> -->

  <style>
    .about h2 {
      font-family: 'Montserrat';
      color: #333;
      letter-spacing: 10px;
      font-weight: bold;
      text-align: left;
      margin-left: -20px;
      margin-top: 70px;
    }

    .about p {
      font-family: 'montserrat';
      font-size: 100%;
      color: black;
      line-height: 1.7;
      font-weight: 500;
      margin-left: -20px;
      margin-top: -20px;
      text-align: justify;



    }
  </style>
<div style=" font-family:Montserrat ;">
  <section class="tedx_talk" style="background-color:#eee5ef; padding-top:90px;">
    <div class="container pb-5">
      <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-6">
          <div class="text pt-5"><br>
            <h2 class="about" style=" letter-spacing: 8px;font-weight:bold">ABOUT OUR <span style="color: #6f3473;">BRAND</span></h2>

            <p class="about pt-2" style="font-family: 'Montserrat'; text-align: justify; color: black; font-weight: 500;">Welcome to Namecraft, a sub-brand of Sheelaa M Bajaj, a leading numerology company based in Bangalore, India. At Namecraft, we specialize in providing customized numerology reports for institutions, with a focus on maternity hospitals. Our goal is to help new parents choose the perfect name for their baby, based on numerological analysis.</p>

            <p class="about pt-1" style="font-family: 'Montserrat'; text-align: justify; color: black; font-weight: 500;">Our founder, Sheelaa M Bajaj is a renowned numerologist, life coach, and spiritual teacher with over two decades of experience in the field. She has helped countless individuals and organizations achieve their goals through her expertise in numerology, astrology, tarot reading and Feng Shui. She has been featured in numerous media outlets including The Times of India, Deccan Chronicle, Femina and among others and has trained numerous students in these fields.</p>
          </div>
        </div>
        <div class="col-md-12 col-xs-12 col-lg-6  text-center pt-1">
          <div class="pt-5"><br>
            <img src="images/sheela-8.png" alt="Image" class="border rounded border-dark img-fluid">
          </div>
  </section>
  </div>
  </div>
  </div>





<style>

.carousel-section {
   background-image: url("images/why-choose-us-1.jpg"); 
  position: relative;
  background-size: cover;
  background-position: center;
  background-color:rgba(0,0,0,0.75); 
  /* background-color: purple; */
  /* color:inherit; */
}
  
  .carousel-section::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color:rgba(0,0,0,0.75);
  
  
   
  /* Add any other background-related styles here */
}
.services__item h3.custom-heading {
      font-family: 'Montserrat' !important;
      font-weight: 600;
      text-align:center;
      font-size: 16px;
      line-height: 1.2;
    }
  /* Default Button Styles */
  .slick-next.default {
    color: rgb(184, 184, 184);
    font-size: 20px;
  } 

  /* Media Query for Mobile Devices */
  @media (max-width: 576px) {
    .services__item p {
      font-size: 14px;
    }
  }

  /* Media Query for Tablets */
  @media (min-width: 577px) and (max-width: 991px) {
    .services__item  p{
      font-size: 15px;
    }
  }

  /* Media Query for Large Devices */
  @media (min-width: 992px) {
    .services__item p{
      font-size: 16px;
    }
  }


.owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
    background: white;
    color: inherit;
    border: none;
    padding: 0!;
    font: inherit;
}
/* Styles for the carousel controls */
  .carousel-section .owl-nav button {
    font-size: 20px;
    width: 25px;
    height: 50px;
    margin:-35px;
    color: white;
    background-color: white;
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 40%;
    transform: translateY(-50%);
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .carousel-section .owl-nav button:hover {
    background-color:grey;
  }

  .carousel-section .owl-prev {
    left: 15px;
  }

  .carousel-section .owl-next {
    right: 15px;
  }
 
</style>

<section class="carousel-section" >  
    <!-- End of left and right controls -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 pt-5">
        <div class="section-title">
        <br>  
        <!-- <h2 style="text-align:center;color:white;font-weight:bold">Why Choose Us</h2> -->

        </div>
      </div>
    </div>
    <br>
   <div class="row services__list owl-carousel owl-loaded owl-drag">
    <!-- <h2 style="text-align:center;color:white;font-weight:bold">Why Choose Us?</h2> <br> <br> -->
    <h3 style="font-size: 30px;color: #ffffff;text-align: center; font-family: 'Montserrat';" class="vc_custom_heading">WHY CHOOSE US?</h3> <br> 
  <div class="owl-stage-outer">
    <div class="owl-stage">
      <div class="owl-item why_choose_box">
          
  <div class="services__item">
  <!-- <img src="types_of_dances/semi_classical.jpg" alt=""> -->
  
  <h3 class="custom-heading" style="font-family: 'Montserrat';font-size:13px;font-weight:;color:white;text-align:center; font: size 10px;">
  
  <i class="fa-solid fa-gift" aria-hidden="true" style="font-size: 38px;margin-bottom: 20px;"></i><br>
    HOLISTIC TRANSFORMATION
  </h3> <br>
  <p style= " margin-inline: 30px;font-size: 13px; text-align:center;font-family: 'Montserrat';color: white;font-weight:semi-bold;font-size;10px;">
    Our focus goes beyond a mere name change; we aim to facilitate holistic transformation in your life. By aligning your name with the principles of numerology, we strive to bring harmony and balance to various aspects of your life, including career, relationships, health, and overall well-being.
  </p> <br> 
</div>
        
      </div>
      
      
      <div class="owl-item why_choose_box">
        
          <div class="services__item">
            <!--<img src="types_of_dances/folk.png" alt="">-->
         <h3 class="custom-heading"  style=" font-size:13px;font-weight:;color:white;text-align:center;">
   <i class="fa-solid fa-hand-holding" style="font-size: 38px;margin-bottom: 20px;"></i><br>
    PERSONALIZED APPORACH</h3> <br>
    <p style= "margin-inline: 30px; font-size: 13px;text-align:center;font-family :montserrat;color: white;font-weight:;font-size;10px;"> At Namecraft, we recognize that each individual is unique, and their name correction needs should be treated with utmost care and customization. The result is a meticulously crafted name that resonates with your true essence and enhances your positive vibrations</P><br>
                  
          </div>
        
      </div>
      <div class="owl-item">
        
          <div class="services__item">
            
  <h3 class="custom-heading" style="font-size:13px;font-weight:;color:white;text-align:center;">
  <!-- <i class="fa-sharp fa-solid fa-ranking-star"></i> -->
 <i class="fa-solid fa-handshake" style="font-size: 38px;margin-bottom: 20px;"></i><br>TRUSTED EXPERIENCE</h3> <br>
 <!-- <center> <p style= " font-size: 13px;text-align:center;font-family :montserrat;color: white;font-weight:;font-size;10px;">  Namecraft is backed by the renowned numerologist </p>  <p style= " font-size: 13px;text-align:center;font-family :montserrat;color: white;font-weight:;font-size;10px;">Sheelaa M Bajaj, a highly respected figure in the </p>  field of numerology. With years of experience and a deep understanding of the profound impact of names on individuals, our team of experts is committed to delivering accurate and effective name correction solutions.</P>               -->
  <center> <p style= "margin-inline: 30px; font-size: 13px;text-align:center;font-family :montserrat;color: white;font-weight:;font-size;10px;">  Namecraft is backed by the renowned numerologist Sheelaa M Bajaj, a highly respected figure in the field of numerology. With years of experience and a deep understanding of the profound impact of names on individuals, our team of experts is committed to delivering accurate and effective name correction solutions.</P>
                <br>
            
          </div>
        
      </div>
     
      <!-- Add more carousel items here -->
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
  </div>
</section>

<!-- Services Section End -->




<!-- Add the Owl Carousel JavaScript code -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>          
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
    $(".services__list").owlCarousel({
      loop: true,
      margin: 20,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      // nav: true,
      // dots: true,
      responsive: {
        0: {
          items: 1 // 1 item for mobile view
        },
        576: {
          items: 2 // 2 items for iPad portrait view
        },
        992: {
          items: 3 // 3 items for large devices like laptops, desktops
        }
      }
    });
  });
</script>


  <section class="tedx_talk" style="background-color:#eee5ef;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-8">
          <div class="text pt-5">
            <h2 class="about" style=" letter-spacing: 8px;font-weight:bold; font-family: 'Montserrat';">AT NAMECRAFT</h2>
            <p class="about pt-2" style="font-family: 'Montserrat'; text-align: justify; color: black; font-weight: 500;">At Namecraft, we have built on Sheelaa’s legacy by bringing her knowledge to institutions, helping them make informed decisions about names and other numerology-based services. We understand the importance of choosing the right name for a child, as it can have a significant impact on their life and future. Our numerology reports are based on a combination of traditional numerology principles and modern scientific research, ensuring accuracy and reliability.</p>
            <p class="about pt-2" style="font-family: 'Montserrat'; text-align: justify; color: black; font-weight: 500;">We work closely with maternity hospitals to understand their requirements and provide customized reports that are easy to understand and implement. We also offer a wide range of other numerology-based services, such as business name analysis, Lucky name numerology, and movie name numerology to help organizations achieve their goals.</p>
            <p class="about pt-2" style="font-family: 'Montserrat'; text-align: justify; color: black; font-weight: 500;">At Namecraft, we are committed to providing exceptional service and support to our clients. We believe in building long-term relationships with our clients, and we are always available to answer any questions or provide additional guidance. We are constantly exploring new ways to enhance our services and improve the experiences of our clients.</p>
            <p class="about pt-1" style="font-family: 'Montserrat'; text-align: justify; color: black; font-weight: 500;">Thank you for considering Namecraft for your numerology needs. We look forward to working with you and helping you achieve your goals.</p>
          </div>
        </div>
        <div class="col-md-12 col-xs-12 col-lg-4 text-center pt-5">
          <div class="pt-5">
            <img src="images/sheela-3.png" alt="Image" class="border rounded border-dark img-fluid">
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
  </section>

<!-- <style>
   @media (max-width: 768px) {
        #award {
           padding-top:-50px ; /* Adjust the value as needed */
        }
    }
</style> -->


  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center pt-5 mt-5 mb-3">
        <h2 class="about" style=" letter-spacing: 8px;font-weight:bold; font-family: 'Montserrat';" id="award">AWARDS & RECOGNITION</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
        <img src="images/sheela-4.png" alt="Image 1" class="img-fluid border rounded ">
      </div>
      <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
        <img src="images/sheela-5.png" alt="Image 2" class="img-fluid border rounded ">
      </div>
      <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
        <img src="images/sheela-9.png" alt="Image 3" class="img-fluid border rounded ">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
        <img src="images/sheela-6.png" alt="Image 4" class="img-fluid border rounded ">
      </div>
      <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
        <img src="images/sheela-8.png" alt="Image 5" class="img-fluid border rounded ">
      </div>
      <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
        <img src="images/sheela-7.png" alt="Image 6" class="img-fluid border rounded ">
      </div>
    </div>
  </div>
  <!-- image section end -->

  <!-- Video start -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center pt-5 mt-5 mb-3">
        <h2 style=" letter-spacing: 7px; font-weight:bold ; font-family: 'Montserrat';">VIDEO & PRESENTATIONS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6 col-xs-12">
        <div class="video-container border-radius pt-5">
          <!-- <iframe max-width="500" min-width="200" height="315" src="https://www.youtube.com/embed/qtYiXuh27_4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
          <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;border-radius: 20px;" class="border  border-dark">
            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/qtYiXuh27_4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-xs-12">
        <div class="video-container pt-5">
         
          <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;border-radius: 20px;" class="border  border-dark ">
            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/plBqTLGooAc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Video Section Starts -->
  <style>
    #video-container {
      padding: 18px;
      /* background-color: #f2f2f2; */
    }

    .embed-responsive {
      position: relative;
      display: block;
      width: 100%;
      padding: 0;
      overflow: hidden;
    }

    .embed-responsive::before {
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

    .rounded-border {
      border: 2px solid #000;
      border-radius: 15px;
      /* Adjust the radius value to control the curve */
      overflow: hidden;
      /* Clip the curved border */
    }
  </style>





  <div id="video-container" class="container text-center pt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="embed-responsive embed-responsive-16by9 " style="border-radius: 30px;">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HmMEkwW36uw?start=7" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
        </div>
  <!-- Video Section Ends -->



  <!-- Add this at the end of the <body> section -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha384-a5ziQVY83aa1uaNgggxg1P52s4PBp6W6Vr0U5EiQNtWPG6BfU1EFQgP5UZpa18I" crossorigin="anonymous"></script>

  <?php include("footer.php"); ?>

</body>

</html>