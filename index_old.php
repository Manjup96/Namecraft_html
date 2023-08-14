<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>

<style>
    body,
html {
  overflow-x: hidden;
}
</style>
<body>
    <!-- navbar start -->
    <?php
    $page = 'index';
    include 'navbar.php';

    ?>
    <!-- navbar emds -->
    <!-- banner starts -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
          <h5 class="fs-4 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center" style="color:white;font-weight:bold;">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <a class="btn btn-primary btn-border btn-lg fs-4" href="services.php">Our services</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner/2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="fs-1 text-center" style="color:white">NAME CRAFT</h2>
          <h5 class="fs-4 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center" style="color:white;font-weight:bold;">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <a class="btn  btn-primary btn-border btn-lg fs-4" href="services.php">Our services</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner/3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="fs-1 text-center" style="color:white">NAME CRAFT</h2>
          <h5 class="fs-4 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center" style="color:white;font-weight:bold;">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <a class="btn  btn-primary btn-border btn-lg fs-4" href="services.php">Our services</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner/5.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="fs-1 text-center" style="color:white">NAME CRAFT</h2>
          <h5 class="fs-4 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center" style="color:white;font-weight:bold;">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <a class="btn  btn-primary btn-border btn-lg fs-4" href="services.php">Our services</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner/4.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="fs-1 text-center" style="color:white">NAME CRAFT</h2>
          <h5 class="fs-4 text-center">BY SHEELAA M BAJAJ</h5>
          <p class="fs-5 text-center">A Corrected name as per numerology can correct the defect of the date of birth and</br> turn things around for individual or the business.</p>
          <a class="btn  btn-primary btn-border btn-lg fs-4" href="services.php">Our services</a>
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
    <!-- Our Association starts -->
    <style>
        .container-fluid h1 {
            font-family: 'Hind', 'Arial', 'sans-serif';
            letter-spacing: 3px;
            text-align: center;
            font-size: 30px;
        }

        .custom-bg {
            background-color: lavender;
            color: black;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            /* Added flex-wrap to wrap items onto a new line */
            margin-top: 4px;
        }

        .logo-container .logo-item {
            margin: 0.5rem;
            /* Increased margin for better spacing */
            flex: 1 0 100px;
            /* Added flex to distribute items evenly */
        }

        .logo-container .logo-item img {
            max-width: 100%;
            /* Ensures the images don't exceed their container */
            height: auto;
            /* Allows images to resize proportionally */
        }
    </style>



    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <div class="container-fluid p-3 my-5 custom-bg ">
        <h1 class="text-center"><b>OUR ASSOCIATIONS</b></h1>
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
        .container {
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
            flex-direction: row;

        }

        .col-6 {
            flex-basis: 10%;
        }

        h1 {
            font-family: Montserrat;
            font-size: 200%;
            color: #333;
            letter-spacing: 5px;
            font-weight: bold;

        }

        p {
            font-family: 'Mulish', 'Arial', 'sans-serif';
            font-size: 16px;
            color: black;
            line-height: 1.5;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>

    <div class="container pb-5">
        <div class="row">

            <div class="col-md-12 col-lg-6 col-sm-12">
                <h1>ABOUT NAMECRAFT</h1><br>
                <p style="text-align: justify">Welcome to Namecraft, a sub-brand of Sheelaa M Bajaj, a leading numerology company based in Bangalore, India. At Namecraft, we specialize in providing customized numerology reports for institutions, with a focus on maternity hospitals. Our goal is to help new parents choose the perfect name for their baby, based on numerological analysis.
                    Our founder, Sheelaa M Bajaj, is a renowned numerologist, life coach, and spiritual teacher with over two decades of experience in the field. She has helped countless individuals and organizations achieve their goals through her expertise in numerology, astrology, tarot reading, and Feng Shui. She has been featured in numerous media outlets, including The Times of India, Deccan Chronicle, and Femina, among others, and has trained numerous students in these fields.</p>
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12">
                <img src="images/about.png" alt="image">
            </div>

        </div>
    </div>



    <!-- About Namecraft ends -->


    <!-- Our Services starts -->

    <style>
        .container-fluid1 {
            background-color: lavender;
            padding: 10px;
        }

        .col-md-12 h1 {
            font-family: 'Hind', 'Arial', 'sans-serif';
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: 5px;
            padding: 30px;
        }

        .col-md-3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .col-md-3 img {
            max-width: 30%;
            height: auto;
        }

        .col-md-3 h6 {
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 5px;
            letter-spacing: 3px;
        }

        .col-md-3 p {
            font-size: 14px;
            line-height: 1.5;
        }

        .read-more {
            color: #b8b8b8;
            font-weight: 600;
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
        <div class="container-fluid1">
            <div class="row">
                <div class="col-md-12">
                    <h1>OUR SERVICES</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <img src="images/Service1-home.png" alt="logo"><br><br>
                    <h6>BABY NAME CORRECTION</h6><br>
                    <p>If you are looking for a lucky baby name, Sheelaa M Bajaj can help. She has assisted hundreds of couples and families in choosing a suitable lucky baby name based on parents preferences.</p>
                    <a href="services.php" class="read-more" style="color:black;">READ MORE &raquo;</a>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12">
                    <img src="images/service2.png" alt="logo"><br><br>
                    <h6>LUCKY DATE DELIVERY</h6><br>
                    <p>Is your brand name numerologically lucky? Learn what leading brand names have in common, good numerology, lucky names which give them a boost over their competitors.</p>
                    <a href="services.php" class="read-more" style="color:black;">READ MORE &raquo;</a>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12">
                    <img src="images/service3.png" alt="logo"><br><br>
                    <h6>LUCKY NAME CORRECTION</h6><br>
                    <p>A rectified name according to numerology can rectify the date of birth flaw and turn things around for the individual or business. There are Chaldean and Pythagorean numerology systems.</p>
                    <a href="services.php" class="read-more" style="color:black;">READ MORE &raquo;</a>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12">
                    <img src="images/service4.png" alt="logo"><br><br>
                    <h6>NAME ANALYSIS</h6><br>
                    <p>Uncover the hidden meanings behind names with our expert name analysis services. Explore the fascinating stories behind names through our personalized name analysis.</p>
                    <a href="services.php" class="read-more" style="color:black;">READ MORE &raquo;</a>
                </div>
            </div>
        </div>
        <!-- Our Services ends -->

        <!-- Testimonials starts -->
        
        <style>
        


            .testimonial .col-md-12 {
  margin-top: 10px;
  text-align: center;
   margin-top: 30px; 
}

.card {
  width: 100%;
  
  height: 300px;
  perspective: 500px;
  border: none;
  padding-bottom: 100px;
}

.card .box {
  position: absolute;
  color: #262626;
  width: 100%;
  height: 100%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
  border-radius: 15px;
  background: #fff;
  transform-style: preserve-3d;
  transition: 0.5s;
  backface-visibility: hidden;
}
.card .box.front {
  background-image: url(img/pattern.png);
  background-repeat: repeat;
}
.card .box.front,
.card .box.back {
  position: absolute;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.card .box.front img {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  border: 5px solid #262626;
  margin-bottom: 25px;
}

.card:hover .box.front {
  transform: rotateY(180deg);
}

.box.front p1 {
  font-size: 18px;
  letter-spacing: 1px;
  margin-left: 10px;
  text-align: center;
  padding: 4px;
   height:50%;
}
.card .box.back {
  position: absolute;
  background: #fff;
  transform: rotateY(180deg);
  padding: 20px 30px;
  text-align: center;
  user-select: none;
}

.card:hover .box.back {
  transform: rotateY(360deg);
}

@media (max-width: 767px) {
  .col-md-4 {
    margin-top: 40px;
    margin-bottom: 20px;
  }
  .box.back p {
    text-align: center;
    width: auto;
    height:50px;
    margin-bottom: 150px;
    margin-top: 50px;
    font-size: 10px;
  }
  .box.front {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
     
  }
  .box.front .profile-pic {
    width: 100%;
    max-width: 200px; /* Adjust the size as needed */
  }
}
        </style>


        <div class="testimonial ">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <h1>TESTIMONIALS</h1>
                    </div>
                </div>


                <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleSlidesOnly">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <div class="card">
                                        <div class="box front">
                                            <img class="profile-pic" src="images/testimonial-1.jpg" alt="Profile Picture">
                                            <p1>"Truly amazing and wonderful person I have ever met, Thank you, mam"</p1>
                                        </div>
                                        <div class="box back mb-3">
                                            <span class="fa fa-quote-left"></span>
                                            <p>Sheelaa M Bajaj is very down to earth and always smiling and ready to solve your problems. Simple remedies but very effective and life-changing. Once you meet her, you'll have lots and lots of positivity filled within you.</p>
                                            <p>Apoorva S</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <div class="card">
                                        <div class="box front">
                                            <img class="profile-pic" src="images/testimonial-2.jpg" alt="Profile Picture">
                                            <p1>"Sheelaa mam is a magnanimous, flamboyant & magnetic human being"</p1>
                                        </div>
                                        <div class="box back">
                                            <span class="fa fa-quote-left"></span>
                                            <p>With her solutions, I was able to successfully complete my Masters in spite of the million hurdles I faced. More than anything, being in her extremely positive aura makes you feel good, energetic & hopeful. I will be forever thankful to her.</p>
                                            <p1>Amitta Sanjeev Sawantt</p1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <div class="card">
                                        <div class="box front">
                                            <img class="profile-pic" src="images/testimonial-3.jpg" alt="Profile Picture">
                                            <p1>"Consult her for magicology! She creates magic with numbers"</p1>
                                        </div>
                                        <div class="box back">
                                            <span class="fa fa-quote-left"></span>
                                            <p>That's the spark and energy she adds to everyone's life. I feel she is the healer of mind, body, and soul. The wealth of her knowledge and keys to unlock doors is phenomenal.</p>
                                            <p1>Janakie Thakur</p1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <div class="card">
                                        <div class="box front">
                                            <img class="profile-pic" src="images/testimonial-4.jpg" alt="Profile Picture">
                                            <p1>"Please follow her remedies to see magic! Sheelaa mam is magic"</p1>
                                        </div>
                                        <div class="box back">
                                            <span class="fa fa-quote-left"></span>
                                            <p>Sheela ma'am has also been a life coach to me, helped me get over my emotional imbalances, poverty consciousness, and has made me a very positive person, opening myself to receive more.</p>
                                            <p1>Varun Appaiah</p1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <div class="card">
                                        <div class="box front">
                                            <img class="profile-pic" src="images/testimonial-5.jpg" alt="Profile Picture">
                                            <p1>"Thanks, Sheela, for being an amazing human being she is"</p1>
                                        </div>
                                        <div class="box back">
                                            <span class="fa fa-quote-left"></span>
                                            <p>Sheelaa is selfless enough to give so much valuable information which is beyond belief. I thank you from the core of my heart, and I am so proud of being associated with you.</p>
                                            <p1>Sharmistha Chakraborty</p1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <div class="card">
                                        <div class="box front">
                                            <img class="profile-pic" src="images/testimonial-6.jpg" alt="Profile Picture">
                                            <p1>"Loads of gratitude & being associated with Sheelaa has been a life changer"</p1>
                                        </div>
                                        <div class="box back">
                                            <span class="fa fa-quote-left"></span>
                                            <p>Sheelaa has been an excellent mentor, and just a few seconds of talking with her can uplift anybody's mind. She is a life coach, an excellent businesswoman, a lady who believes in magic and has shown how to create from nowhere.</p>
                                            <p1>Arnaaubh Chakraborrty</p1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials ends -->


        <!-- Millions of Clients Starts -->

        <style>
            .container {
                display: flex;
                flex-direction: column;
                margin-top: 100px;
            }

            img {
                margin-top: 60px;
            }
        </style>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9 col-sm-12">
                    <h1>MILLIONS OF CLIENTS!</h1>
                    <p style="text-align: justify;">Sheelaa M Bajaj, the founder of Namecraft, has consulted and helped millions of clients throughout her illustrious career. Her expertise in numerology, astrology, and esoteric sciences has garnered widespread recognition and trust. Her shows on the Daily TVshow on TEZ news channel, part of India Today Group, as well as appearances on channels like CNBC news and CNBC AWAZ, have captivated millions of viewers. Sheelaa’s expertise has even influenced the professional success of her clients, with one actor securing a role alongside Amitabh Bachchan after following her guidance.</p>
                    <p style="text-align: justify;">At Namecraft, we are proud to be a sub-brand of Sheelaa M Bajaj’s renowned numerology company. We carry forward her legacy of excellence, integrity, and personalized service. Namecraft specifically focuses on serving institutions, such as maternity hospitals, and we have plans to expand our numerology services to cater to other sectors as well. With Sheelaa’s expertise and track record of success backing us, we provide the highest quality numerology reports and services. We are dedicated to helping clients make informed decisions, empowering them with the knowledge and insights needed to navigate important choices, such as selecting the perfect name for a newborn. At Namecraft, we believe in the transformative power of numerology and strive to make a positive impact on the lives of our clients.</p>
                </div>

                <div class="col-md-12 col-lg-3 col-sm-12 text-center">
                    <img src="images/Mofclients.jpg" alt="image">
                </div>
            </div>
        </div>





        <!-- Millions of Clients Ends -->

        <!-- Book Section starts -->

        <style>
            .tedx_talk {
                background-color: lavender;
                margin-top: 50px;
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
                margin-top: 20px;  
                margin-bottom: 20px;
                letter-spacing: 2px;
            }
        </style>


        <!-- <div class="book"> -->
        <!-- <div class="container-fluid"> -->

        <section class="tedx_talk" style="background-color: lavender;">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12 text-center">
                        <img style="width: 280px; height: 400px;" src="images/Book.jpg" alt="">
                    </div>

                    <div class="col-md-8 col-lg-8 col-xs-12 pt-5">
                        <h1>IS LOVE A GAME? READ THIS BOOK</h1>
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
        </section>
        <!-- </div> -->
        <!-- Book Section Ends -->

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





        <div id="video-container" class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qjXbvNdbamg" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>


        <!-- Video Section Ends -->

        <!-- Container Section Ends -->
        <style>
            /* Custom styles */
            .container-fluid-vid {
                padding-top: 50px;
                background-color: lavender;
                margin-top: 200px;
                padding-bottom: 50px;

            }

            .container-fluid-vid video {
                width: 80%;
                height: auto;
                margin-left: 50px;
                margin-top: 50px;
            }

            .container-fluid-vid h2 {
                font-size: 27px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .container-fluid-vid p {
                font-size: 16px;
                line-height: 1.5;
                text-align: justify;
                padding-right: 50px;
            }

            /* Media query for mobile devices */
            @media only screen and (max-width: 767px) {
                .container-fluid-vid {
                    margin-right: 30px;
                    padding-bottom: 50px;
                }

                .container-fluid-vid h2 {}

                .container-fluid-vid p {}
            }
        </style>



        <div class="container" style="background-color: lavender; ">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12">
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


        <!-- Container Section Ends -->


        <!-- video Gallery starts -->
        <style>
            .container .row {
                margin-top: 20px;
            }

            .video-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;


            }

            .video-column {
                padding: 10px;
                margin-bottom: 30px;
            }

            .video-column video {
                width: 250px;
                height: 350px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            /* Media query for mobile devices */
            @media (max-width: 767px) {
                .video-column {
                    width: 100%;
                }
            }
        </style>




        <div class="container">
            <div class="row mb-2">
                <div class="col-md-12">
                    <h1>VIDEO FEEDBACK</h1>
                </div>
            </div>

            <div class="row mb-2 video-container">
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



        <!-- video Gallery ends -->

        <?php include("footer.php"); ?>


    </body>

</html>