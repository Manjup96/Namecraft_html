<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>
<style>
    body,
html {
  overflow-x: hidden;
}

/* CSS for desktop view */
@media (min-width: 992px) {
    /* Add your desktop-specific styles here */
    /* For example, you can adjust the width of the images to show them side by side */
    #a = justify-content: center; {
       
    }
}
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  transition: opacity 0.4s ease-in-out;
  background: white;
  cursor: pointer;
}

.image-container {
  position: relative;
  overflow: hidden;
}

.image-container:hover .overlay {
  opacity: 0.8;
}
.content {
position: absolute;
top: 93.5%;
left: 50%;
width:100%;
transform: translate(-50%, -50%);
color: white;
background-color:black;
border: 1px solid;
font-family: verdana;
text-align: center;
}

@media (max-width: 767px) {
  /* Your CSS styles for mobile devices */
 .overlay{
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  transition: opacity 0.4s ease-in-out;
  background: white;
  cursor: pointer;
 }
 .content {
position: absolute;
top: 93.5%;
left: 50%;
width:91%;
transform: translate(-50%, -50%);
color: white;
background-color:black;
border: 1px solid;
font-family: verdana;
text-align: center;
}
}

/* iPad view styles */
@media (min-width: 768px) and (max-width: 1023px) {
  /* Your CSS styles for iPad devices */
  .overlay{
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  transition: opacity 0.4s ease-in-out;
  background: white;
  cursor: pointer;
 }
 .content {
position: absolute;
top: 93.5%;
left: 50%;
width:100%;
transform: translate(-50%, -50%);
color: white;
background-color:black;
border: 1px solid;
font-family: verdana;
text-align: center;
}
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

@media (max-width: 768px) {
    #innerPageBanner .banner-content {
        top: 30%;
    }

    .banner-image {
        height: auto;
    }
}

@media (max-width: 480px) {
    #innerPageBanner .banner-content {
        top: 20%;
    }
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
    
        /* Banner style start end for all 3 views*/
        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(5, 5, 5, 0.67); /* Adjust the overlay color and opacity as needed */
        }
</style>

<body>
    <!-- navbar start -->
    <?php
    $page = 'services';
    include 'navbar.php';
    ?>


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"  style="padding-top:110px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/servicebanner1.png" class="d-block w-100" alt="...">
                <div class="banner-overlay"></div>
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h2 style="margin: 130px; font-size: 50px;">SERVICES</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- <div id="innerPageBanner">
    <img src="images/servicebanner.png" class="banner-image" alt="Banner Image">
    <div class="banner-overlay"></div>
            <div class="banner-content">
            <h2 class=" text-center" style=" color:white; font-size: 50px; font-weight: 600; letter-spacing: 15px; ">SERVICES</h2>
            </div> -->
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 text-center" style="margin-top: 50px">
      <a href="babyname.php">
        <div class="image-container">
          <img src="images/babyname numerology.jpg" class="img-fluid" style="width: 350px; height: 350px; border: 2px solid black;">
          <div class="overlay">
            <div class="content">
              <p style="margin-top: 10px;">Select option</p>
            </div>
          </div>
        </div>
      </a>
      <h5 class="text-center pt-3" style=" font-family: montserrat;">Baby Name Correction</b>
      </h5>
      <p class="text-center" style="font-size: 16px;">Rs: 35.00</p>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-6 text-center" style="margin-top: 50px">
    <a href="luckydate.php">
        <div class="image-container">
            <img src="images/C section delivery date.jpg" class="img-fluid" style="width: 350px; height: 350px; border: 2px solid black;">
            <div class="overlay">
                <div class="content">
                    <p style="margin-top: 10px;">Select option</p>
                </div>
            </div>
        </div>
    </a>
    <h5 class="text-center pt-3" style=" font-family: montserrat;">Lucky Date Delivery</b>
    </h5>
    <p class="text-center" style="font-size: 16px;">Rs: 45.00</p>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 text-center" style="margin-top: 50px">
    <a href="luckyname.php">
        <div class="image-container">
            <img src="images/LUCKY ALPHABETS.jpg" class="img-fluid" style="width: 350px; height: 350px; border: 2px solid black;">
            <div class="overlay">
                <div class="content">
                    <p style="margin-top: 10px;">Select option</p>
                </div>
            </div>
        </div>
    </a>
    <h5 class="text-center pt-3" style=" font-family: montserrat;">Lucky Name Correction</b>
    </h5>
    <p class="text-center" style="font-size: 16px;">Rs: 100.00</p>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 text-center" style="margin-top: 50px">
    <a href="nameanalysis.php">
        <div class="image-container">
            <img src="images/Name analysis.jpg" class="img-fluid" style="width: 350px; height: 350px; border: 2px solid black;">
            <div class="overlay">
                <div class="content">
                    <p style="margin-top: 10px;">Select option</p>
                </div>
            </div>
        </div>
    </a>
    <h5 class="text-center pt-3" style="font-family: montserrat;">Name Analysis</b>
    </h5>
    <p class="text-center" style="font-size: 16px;">Rs: 35.00</p>
</div>
    </div>
    </div>
    <?php include("footer.php"); ?>
    

</body>

</html>