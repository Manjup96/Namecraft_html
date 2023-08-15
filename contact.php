<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
        .dropdown-menu-up {
            bottom: auto;
            top: 100%;
        }
        .banner-image {
            width: 100%;
            height: auto;
        }
        
        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(5, 5, 5, 0.67);
        }
        
        .banner-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
    
        #innerPageBanner {
            position: relative;
            background: #f2f2f2;
        }
        
        .banner-image {
            width: 100%;
            height: auto;
        }
        
        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(5, 5, 5, 0.67);
        }
        
        .banner-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
        
        @media (max-width: 768px) {
            #innerPageBanner {
    
        .banner-content {
                top: 30%;
            }
        }}
    </style>

<body>
<?php
    $page = 'numbers';
    include 'navbar.php';

    ?>
    <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
  </style>


    <div id="innerPageBanner">
        <img src="images/single_banner.png" class="banner-image" alt="Banner Image">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h2 style="letter-spacing:15px;font-size:45px">CONTACT US</h2>
        </div>
    </div>

    <div class="container-fluid" style="background-color:#CCCCCC">
    <div class="container" >
        <div class="row ">
            <div class="col-md-12 mt-5">
                <p style="font-size: 40px;letter-spacing:2px">GET&nbsp; IN &nbsp;TOUCH</p>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-6 mt-5">
                <label>Your Name (required)</label>
                <input type="text" name="name"  class="form-control"/>
            </div>
            <div class="col-md-6 mt-5">
                <label>Your Email (required)</label>
                <input type="text" name="email" class="form-control"/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6  mt-5">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control"/>
            </div>
            <div class="col-md-6  mt-5">
                <label>Service Desired</label>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle form-control" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Baby name correction
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Lucky name correction</a></li>
                        <li><a class="dropdown-item" href="#">Lucky date delivery</a></li>
                        <li><a class="dropdown-item" href="#">Name analysi</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <label>Message</label>
                <textarea name="message" class="form-control " rows="5"></textarea>
            </div>
        </div>

       <center> <button type="button"  style="font-size: 25px;background-color:black;color:white" class="mt-5 mb-5 p-2 " >&nbsp;Send Email&nbsp;</button></center>
    </div>
</div>
    


    
    <!-- media icons -->

<style>
    .container .card p{
        font-size: 18px;
    }
</style>
    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class=" col-md-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-map-marker-alt fa-2x d-flex justify-content-center mb-3"></i>
                        <h4 class="text-center">Address:</h4>
                        <!-- <p class="text-center fs-5">No 664, 5th Cross road,<br> Koramangala 4th block,<br> Bengaluru-560034</p> -->
                        <p class="text-center ">
                            Number 654, 5ft Cross,</br>
                            4th block, Koramangala</br>
                            Near Maharaja Signal,</br>
                            Bangaluru-560034</br>


                        </p>

                    </div>
                </div>
            </div>
            

            <div class=" col-md-4 pt-2">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-instagram fa-2x d-flex justify-content-center mb-3"></i>
                        <h4 class="text-center">Instagram:</h4>
                        <p class="text-center fs-5">sheelaambajaj</p>
                    </div>
                </div>
            </div>

            

            <div class=" col-md-4 pt-2">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-phone fa-2x d-flex justify-content-center mb-3"></i>
                        <h4 class="text-center">Mobile:</h4>
                        <p class="text-center fs-5">+91-8880030213</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- media icons end-->


      <!-- map & address starts -->
      <div class="container  mt-5">
        <div class="row ">
            <div class="col-md-6 col-sm-12 "  >
                <div >

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124440.57691830404!2d77.53763210639211!3d12.922625484182667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1554df96be99%3A0xbc16940514de3df5!2sName%20Craft!5e0!3m2!1sen!2sin!4v1688198017930!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
           <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-12 d-flex pt-2" style="min-height: 400px;">

                <div  >
                    <div class="text-center">
                        <img src="images/final-logo.png" alt="Logo" style="height:80px;width:300px;">
                    </div>
                    <div class="text-center">
                        <p style="font-size:20px;color:black"><i class="fa fa-map-marker"></i>
                            Number 654, 5ft Cross,</p>
                           <p style="font-size:18px;"> 4th block, Koramangala</p>
                           <p style="font-size:18px;"> Near Maharaja Signal,</p>
                          <p style="font-size:18px;">  Bangaluru-560034</p>

                        
                        <p style="font-size:18px;"><i class="fa fa-phone"></i><a href="tel:+91-8880030213"> +91&nbsp;&nbsp;8880030213</a></p>
                        
                        <p style="font-size:18px;" >
                            <i class="fab fa-instagram"></i>
                            <a href="https://www.instagram.com/your_instagram_account">sheelaambajaj</a>
                        </p>

                    </div>


                </div>
            </div>
        </div>
    </div
    <!-- map & address Ends -->
    <?php include("footer.php"); ?>


</body>

</html>

