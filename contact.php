<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>
<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<style>

   body,
html {
  overflow-x: hidden;
}

@media (min-width: 992px) {
    /* Add your desktop-specific styles here */
    /* For example, you can adjust the width of the images to show them side by side */
    #a = justify-content: center; {
       
    }
}

.banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(5, 5, 5, 0.67);
}
@media only screen and (max-width: 767px) {
            .carousel-inner .carousel-item img {
                height: 200px;
                max-width: 100%;
            }
    
            .carousel-caption h2 {
                font-size: 18px;
                padding-top: 20%;
                display:flex;
            
                justify-content:center;
    
            }
        }
    
        .carousel-caption {
            display: grid;
            place-items: center;
            height: 100%;
            text-align: center;
    
        }
    
        .carousel-caption h2 {
            display:flex;
            text-align:center;
            font-size:45px;
            letter-spacing:15px;
            max-width: 80%;
    
            margin: 0;
    
            padding-top: 35px;
    
            color: white;
    
        }
    
</style>



<body>
<?php
    $page = 'contact';
    include 'navbar.php';

    ?>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/servicebanner1.png" class="d-block w-100" alt="...">
                <div class="banner-overlay"></div>
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h2 style="margin: 130px; font-size: 50px;">CONTACT US</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact start -->
    <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }

    #form{
        font-size:13px;
    }
    #location{
        font-size:15px;
    }

  </style>

    <div class="container-fluid bg-light px-0  d-flex justify-content-center  " id="form"> <!-- Added class "d-flex justify-content-center" -->
       
              
    <div class="container-fluid" style="background-color:#eee5ef">
    <div class="container" >
        <div class="row ">
            <div class="col-md-12 mt-5">
                <p style="font-size: 40px;letter-spacing:5px;">GET&nbsp; IN &nbsp;TOUCH</p>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-6 mt-5">
                <label>Your Name (required)</label>
                <input type="text" name="name"  class="form-control"  style="width: 100%;height:45px;" required/>
            </div>
            <div class="col-md-6 mt-5">
                <label>Your Email (required)</label>
                <input type="text" name="email" class="form-control"  style="width: 100%;height:45px;" required/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6  mt-5">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control"  style="width: 100%;height:45px;" required/>
            </div>
            <div class="col-md-6  mt-5">
                <label for="entity_type" class="form-label d-block">Service Desired</label>
                                    <div class="d-flex" >
                                        <select id="form" id="entity_type" name="entity_type" class="form-select flex-grow-1" style="width: 100%;height:45px;" required>
                                            <option value="Baby name correction">Baby name correction</option>
                                            <option value="Lucky name correction">Lucky name correction</option>
                                            <option value="comLucky date deliverypany">Lucky date delivery</option>
                                            <option value="Name analysis">Name analysis</option>
                                        </select>
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
</div>
    


    
    <!-- media icons -->

    <div class="container mt-5 ">
        <div class="row justify-content-center"  id="location">
            <div class=" col-md-4 pt-4">
                
                        <i class="fas fa-map-marker-alt fa-2x d-flex justify-content-center mb-3"></i>
                        <h6 class="text-center">Address:</h6>
                        <!-- <p class="text-center fs-5">No 664, 5th Cross road,<br> Koramangala 4th block,<br> Bengaluru-560034</p> -->
                        <p class="text-center ">
                            Number 654, 5ft Cross,</br>
                            4th block, Koramangala</br>
                            Near Maharaja Signal,</br>
                            Bangaluru-560034</br>


                        </p>

                   
            </div>
            

            <div class=" col-md-4 pt-5"  id="location">
                
                    <i class="fa-solid fa-at fa-2xl d-flex justify-content-center mb-3"></i>
                        <h6 class="text-center">Email:</h6>
                        <p class="text-center ">connect@namecraft.co</p>
                   
            </div>

            

            <div class=" col-md-4 pt-4"  id="location">
              
                   
                        <i class="fas fa-phone fa-2x d-flex justify-content-center mb-3"></i>
                        <h6 class="text-center">Mobile:</h6>
                        <p class="text-center ">+91-8880030213</p>
                    
                
            </div>
        </div>
    </div>

    <!-- media icons end-->


      <!-- map & address starts -->
      <h4 style="text-align:center;font-weight:bold;"class="mt-5">OFFICE LOCATION</h4>
      <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 col-sm-12 mb-4 mb-md-0">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124440.57691830404!2d77.53763210639211!3d12.922625484182667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1554df96be99%3A0xbc16940514de3df5!2sName%20Craft!5e0!3m2!1sen!2sin!4v1688198017930!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
            <div>
                <div class="text-center">
                    <img src="images/final-logo.png" alt="Logo" style="height:80px;width:300px;">
                </div>
                <div class="text-center">
                    <br>
                    <p style="font-size:15px;color:black"><i class="fa fa-map-marker"></i>
                        Number 654, 5ft Cross,</p>
                    <p style="font-size:15px;"> 4th block, Koramangala</p>
                    <p style="font-size:15px;"> Near Maharaja Signal,</p>
                    <p style="font-size:15px;"> Bangaluru-560034</p>

                    <p style="font-size:15px;"><i class="fa fa-phone"></i><a href="tel:+91-8880030213"> +91&nbsp;&nbsp;8880030213</a></p>

                   
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- map & address Ends -->
    <?php include("footer.php"); ?>


</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</html>