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
.overlay{
    position: absolute;
    top: 0;
    left: 4%;
    right: 4%;
    bottom: 17%;
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
    background:white;
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
.container:hover .overlay{
    opacity:0.8;
}

</style>

<body>
    <!-- navbar start -->
    <?php
    $page = 'services';
    include 'navbar.php';
    ?>


<div id="innerPageBanner">
    <img src="images/servicebanner.png" class="banner-image" alt="Banner Image">
    <div class="banner-overlay"></div>
            <div class="banner-content">
            <h2 class=" text-center" style=" color:white; font-size: 50px; font-weight: 600; letter-spacing: 15px; ">SERVICES</h2>
            </div>
</div>
<div class="container">
  
<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-6 text-center" style="margin-top:50px">
    
        <a href="babyname.php"><img src="images/babyname numerology.jpg" style="width:350px;height:350px; border: 2px solid black;"></a>
        <div class="overlay">
            <div class="content">
                <p style="margin-top:10px;">Select option</p>
            </div>
        </div>
   
        <h2>
            <b class="text-center pt-3" style="font-size: 16px; font-family:montserrat;">Baby Name Correction</b>
        </h2>
        <b class="text-center" style="font-size: 16px;">Rs:35.00</b>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-6 text-center" style="margin-top:50px">
   
    <a href="luckydate.php"> <img src="images/C section delivery date.jpg" style="width:350px;height:350px; border: 2px solid black;"></a>
        <div class="overlay">
        <div class="content">
            <p style="margin-top:10px;">Select option</p>
        </div>
    </div>
  
        <h2>
            <b class="text-center pt-3" style="font-size: 16px; font-family:montserrat;">Lucky Date Delivery</b>
        </h2>
        <b class="text-center" style="font-size: 16px;">Rs:45.00</b>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 text-center" style="margin-top:50px">
    
        <a href="luckyname.php"><img src="images/LUCKY ALPHABETS.jpg" style="width:350px;height:350px; border: 2px solid black;"></a>
        <div class="overlay">
        <div class="content">
            <p style="margin-top:10px;">Select option</p>
        </div>
    </div>
   
        <h2>
            <b class="text-center pt-3" style="font-size: 16px; font-family:montserrat;">Lucky Name Correction</b>
        </h2>
        <b class="text-center" style="font-size: 16px;">Rs:45.00</b>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 text-center" id="a" style="margin-top:50px">
       
    <a href="nameanalysis.php"> <img src="images/Name analysis.jpg" style="width:350px;height:350px; border: 2px solid black;"></a>
    <div class="overlay">
        <div class="content">
            <p style="margin-top:10px;">Select option</p>
        </div>
    </div>
  
        <h2>
            <b class="text-center pt-3" style="font-size: 16px; font-family:montserrat;">Name Analysis</b>
        </h2>
        <b class="text-center" style="font-size: 16px;">Rs:100.00</b>
    </div>
    </div>
    </div>
    <?php include("footer.php"); ?>
    

</body>

</html>