<!DOCTYPE html>
<html lang="en">

<?php include("head_links.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-x0mQ/v/v0aWDZxAoO0Unve14mH99MdgCpN2cetKDgzzhQJdBKuQIbfa6X7y7DjGnnrMTJn/MqyJGim4tNXqO4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<body>
    <!-- navbar start -->
    <?php
    $page = 'about';
    include 'navbar.php';
    ?>

    
        <!-- banner starts -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/single_banner.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h2 style="margin: 130px; font-size: 50px;">About</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner Ends -->

    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-8">
                <div class="text pt-5">
                    <h2>ABOUT OUR BRAND</h2>
                    <p style="text-align:justify"class="text pt-5">Welcome to Namecraft, a sub-brand of Sheelaa M Bajaj, a leading numerology company based in Bangalore, India. At Namecraft, we specialize in providing customized numerology reports for institutions, with a focus on maternity hospitals. Our goal is to help new parents choose the perfect name for their baby, based on numerological analysis.</p>
                   
                    <p style="text-align:justify"class="text pt-2">Our founder, Sheelaa M Bajaj is a renowned numerologist, life coach, and spiritual teacher with over two decades of experience in the field. She has helped countless individuals and organizations achieve their goals through her expertise in numerology, astrology, tarot reading and Feng Shui. She has been featured in numerous media outlets including The Times of India, Deccan Chronicle, Femina and among others and has trained numerous students in these fields.</p>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-lg-4  text-center pt-5">
                <div class="pt-5">
                    <img src="images/sheela-8.png" alt="Image" class="border rounded border-dark img-fluid">
                </div>
            </div>
        </div>
    </div>


    <div class="why_choose owl-carousel">
         <div class="container">
            <div class="row">
                <h2 style="color:black;" class="pt-5">Why Choose Us?</h2>
              <div >
               
                  <h3>HOLISTIC TRANSFORMATION</h3>
                    <p style= "text-align:justify; font-size:18px;">Our focus goes beyond a mere name change; we aim to facilitate holistic transformation in your life. By aligning your name with the principles of numerology, we strive to bring harmony and balance to various aspects of your life, including career, relationships, health, and overall well-being.</p>
                 
              </div>
              <div >
               
                  <h3>PERSONALIZED APPORACH</h3>
                   <p style= "text-align:justify; font-size:18px;">  Our focus goes beyond a mere name change; we aim to facilitate holistic transformation in your life. By aligning your name with the principles of numerology, we strive to bring harmony and balance to various aspects of your life, including career, relationships, health, and overall well-being.</P>
                  
              </div>
              <div >
               
                  <h3>TRUSTED EXPERIENCE</h3>
                  <p style= "text-align:justify; font-size:18px;">  Our focus goes beyond a mere name change; we aim to facilitate holistic transformation in your life. By aligning your name with the principles of numerology, we strive to bring harmony and balance to various aspects of your life, including career, relationships, health, and overall well-being.</P>
                  </div>
               
            </div>
            
            </div>
        </div> 
          
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
    $(".why_choose").owlCarousel({
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
        992: {
          items: 3
        }
      }
    });
  });
</script>
 


 <style>

.carousel-section {
   background-image: url("images/why-choose-us-1.jpg"); 
  
  background-size: cover;
  background-position: center;
  background-color:rgba(0,0,0,0.75); 
  /* background-color: purple; */
  /* color:inherit; */
  
  
  
   
  /* Add any other background-related styles here */
}
.services__item h3.custom-heading {
      font-family: 'Open Sans';
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
    height: 25px;
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
      <div class="col-lg-12">
        <div class="section-title">
        <br>  
        <h2 style="text-align:center;color:white;font-weight:bold">Why Choose Us</h2>

        </div>
      </div>
    </div>
    <br>
   <div class="row services__list owl-carousel owl-loaded owl-drag">
  <div class="owl-stage-outer">
    <div class="owl-stage">
      <div class="owl-item why_choose_box">
        
          <div class="services__item ">
            <img src="types_of_dances/semi_classical.jpg" alt="">
    <h3 class="custom-heading " style="font-weight:bold;color:white">HOLISTIC TRANSFORMATION</h3>
                    <p style= "text-align:justify;font-size;20px; font-weight:bold;color:white">Our focus goes beyond a mere name change; we aim to facilitate holistic transformation in your life. By aligning your name with the principles of numerology, we strive to bring harmony and balance to various aspects of your life, including career, relationships, health, and overall well-being.</p>
           
          </div>
        
      </div>
      <div class="owl-item why_choose_box">
        
          <div class="services__item">
            <img src="types_of_dances/folk.png" alt="">
       <h3 class="custom-heading " style="font-weight:bold;color:white;" >PERSONALIZED APPORACH</h3>
                   <p style= "text-align:justify;color:white;font-size;20px;font-weight:bold; "> At Namecraft, we recognize that each individual is unique, and their name correction needs should be treated with utmost care and customization. The result is a meticulously crafted name that resonates with your true essence and enhances your positive vibrations</P>
                  
            <!--<p>-->
            <!--  Grab the opportunity to deepen your own yoga practice, relax,-->
            <!--  restore and experience India!-->
            <!--</p>-->
          </div>
        
      </div>
      <div class="owl-item">
        
          <div class="services__item">
            <img src="types_of_dances/bollywood.jpg" alt="">
<h3 class="custom-heading " style="font-weight:bold;color:white;">TRUSTED EXPERIENCE</h3>
                  <p style= "text-align:justify;color: white;font-weight:bold;font-size;20px;">  Namecraft is backed by the renowned numerologist Sheelaa M Bajaj, a highly respected figure in the field of numerology. With years of experience and a deep understanding of the profound impact of names on individuals, our team of experts is committed to delivering accurate and effective name correction solutions.</P>
            
          </div>
        
      </div>
      <!-- Add more carousel items here -->
    </div>
  </div>
</div>

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
      nav: true,
      dots: true,
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











<!-- 

<div class="col-md-12 text-center pt-5">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/single_banner11.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-flex align-items-center justify-content-center">
         <div class="container">
  <div class="row justify-content-center pt-5">
    <div class="col-md-12 text-center">
      <h2 style="color:black;" class="pt-5">Why Choose Us?</h2>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="aio-icon-component style_1 slick-slide slick-current slick-active" style="width: 290px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="0" aria-hidden="false">
        <div id="Info-box-wrap-1628" class="aio-icon-box top-icon" style="font-size:20px;color:black;">
          <h3>HOLISTIC TRANSFORMATION</h3>
          <p style="text-align:justify; font-size:18px;">Our focus goes beyond a mere name change; we aim to facilitate holistic transformation in your life. By aligning your name with the principles of numerology, we strive to bring harmony and balance to various aspects of your life, including career, relationships, health, and overall well-being.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="aio-icon-component style_1 slick-slide slick-active" style="width: 290px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="1" aria-hidden="false">
        <div id="Info-box-wrap-7025" class="aio-icon-box top-icon" style="font-size:23px;color:black;">
          <h3>PERSONALIZED APPROACH</h3>
          <p style="text-align:justify; font-size:18px;">Our focus goes beyond a mere name change; we aim to facilitate holistic transformation in your life. By aligning your name with the principles of numerology, we strive to bring harmony and balance to various aspects of your life, including career, relationships, health, and overall well-being.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="aio-icon-component style_1 slick-slide slick-active" style="width: 290px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="2" aria-hidden="false">
        <div id="Info-box-wrap-7936" class="aio-icon-box top-icon" style="font-size:23px;color:black;">
          <h3>TRUSTED EXPERIENCE</h3>
          <p style="text-align:justify; font-size:18px;">Our focus goes beyond a mere name change; we aim to facilitate holistic transformation in your life. By aligning your name with the principles of numerology, we strive to bring harmony and balance to various aspects of your life, including career, relationships, health, and overall well-being.</p>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
      </div>
    </div>
  </div>
</div> -->



    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-8">
                <div class="text pt-5">
                    <h2>AT NAMECRAFT</h2>
                    <p style="text-align:justify"class="text pt-4">At Namecraft, we have built on Sheelaa’s legacy by bringing her knowledge to institutions, helping them make informed decisions about names and other numerology-based services. We understand the importance of choosing the right name for a child, as it can have a significant impact on their life and future. Our numerology reports are based on a combination of traditional numerology principles and modern scientific research, ensuring accuracy and reliability.</p>
                    <p style="text-align:justify"class="text pt-2">We work closely with maternity hospitals to understand their requirements and provide customized reports that are easy to understand and implement. We also offer a wide range of other numerology-based services, such as business name analysis, Lucky name numerology, and movie name numerology to help organizations achieve their goals.</p>
                    <p style="text-align:justify"class="text pt-2">At Namecraft, we are committed to providing exceptional service and support to our clients. We believe in building long-term relationships with our clients, and we are always available to answer any questions or provide additional guidance. We are constantly exploring new ways to enhance our services and improve the experiences of our clients.</p>
                    <p style="text-align:justify"class="text pt-2">Thank you for considering Namecraft for your numerology needs. We look forward to working with you and helping you achieve your goals.</p>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-lg-4 text-center pt-5">
                <div class="pt-5">
                    <img src="images/sheela-3.png" alt="Image" class="border rounded border-dark img-fluid">
                </div>
            </div>
        </div>
    </div>



    

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-5">
                <h2>AWARDS & RECOGNITION</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
                <img src="images/sheela-4.png" alt="Image 1" class="img-fluid border rounded border-dark">
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
                <img src="images/sheela-5.png" alt="Image 2" class="img-fluid border rounded border-dark">
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
                <img src="images/sheela-6.png" alt="Image 3" class="img-fluid border rounded border-dark">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
                <img src="images/sheela-7.png" alt="Image 4" class="img-fluid border rounded border-dark">
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
                <img src="images/sheela-8.png" alt="Image 5" class="img-fluid border rounded border-dark">
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-center pt-4">
                <img src="images/sheela-9.png" alt="Image 6" class="img-fluid border rounded border-dark">
            </div>
        </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-md-12 text-center pt-5">
            <h2>VIDEO & PRESENTATIONS</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="video-container pt-5">
                 <!-- <iframe max-width="500" min-width="200" height="315" src="https://www.youtube.com/embed/qtYiXuh27_4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;">
  <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/qtYiXuh27_4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>



            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="video-container pt-5">
                  <!-- <iframe max-width="500" min-width="200" height="315" src="https://www.youtube.com/embed/plBqTLGooAc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;">
  <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/plBqTLGooAc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


            </div>
        </div>
    </div>
</div>

 <!-- Video Section Starts -->
        <style>
            #video-container {
                padding: 20px;
                background-color: #f2f2f2;
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
        </style>





        <div id="video-container" class="container text-center pt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-16by9">
                       <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HmMEkwW36uw?start=7" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>


        <!-- Video Section Ends -->


    





    <?php include("footer.php"); ?>
</body>

</html>
