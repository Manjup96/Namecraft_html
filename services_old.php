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
    $page = 'services';
    include 'navbar.php';

    ?>


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/single_banner.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h2 style="margin: 130px; font-size: 50px;">Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div class="container">
        <div class="row g-0">
            <div class="col-lg-4 text-center " style="margin-top:50px">
                <a href="babyname.php"><img src="images/babyname numerology.jpg" style="width:400px;height:400px"></a>
                <h4>
                    <p class="text-center pt-3">Baby Name Correction</p>
                </h4>
                <p class="text-center">Rs:35.00</p>
            </div>
            
 

            <div class="col-lg-4 text-center" style="margin-top:50px">
                <a href="luckydate.php"> <img src="images/C section delivery date.jpg" style="width:400px;height:400px"></a>
                <h4>
                    <p class="text-center pt-3">Lucky Date Delivery</p>
                </h4>
                <p class="text-center">Rs:45.00</p>
            </div>

            <div class="col-lg-4 text-center" style="margin-top:50px">
                <a href="luckyname.php"><img src="images/LUCKY ALPHABETS.jpg" style="width:400px;height:400px"></a>
                <h4>
                    <p class="text-center pt-3">Lucky Name Correction</p>
                </h4>
                <p class="text-center">Rs:100.00</p>
            </div>
        </div>
    </div>


    <div class="container-fluid  mt-5">

        <div class="row g-0">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4 text-center" style="margin-top:50px">
                <a href="nameanalysis.php"> <img src="images/Name analysis.jpg" style="width:400px;height:400px"></a>
                <h4>
                    <p class="text-center">Name Analysis</p>
                </h4>
                <p class="text-center">Rs:35.00</p>
            </div>
        </div>

    </div>


    <?php include("footer.php"); ?>
    

</body>

</html>