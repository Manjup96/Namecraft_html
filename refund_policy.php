<!DOCTYPE html>
<html lang="en">

<?php include("head_links.php"); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-x0mQ/v/v0aWDZxAoO0Unve14mH99MdgCpN2cetKDgzzhQJdBKuQIbfa6X7y7DjGnnrMTJn/MqyJGim4tNXqO4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
   /* Banner style start for all 3 views */
@media only screen and (max-width: 767px) {
    .carousel-inner .carousel-item img {
        height: 200px;
        max-width: 100%;
    }

    .carousel-caption h5 {
        font-size: 18px;
        display: flex;
        justify-content: center;
    }

    .carousel-caption p {
        font-size: 18px;
        display: inline;
    }
}

.carousel-caption {
    display: grid;
    place-items: center;
    height: 100%;
    text-align: center;
}

.carousel-caption h5 {
    text-align: center;
    font-size: 35px;
    letter-spacing: 15px;
    max-width: 80%;
    margin: 0;
    padding-top: 25px;
    color: white;
    font-family: 'Montserrat', sans-serif;
}

/* Separate h1 and p in carousel-caption */
.carousel-caption h5,
.carousel-caption p {
    display: block;
    margin: 0;
    padding: 5px; /* Add padding for spacing */
}

.carousel-caption h5{
  margin-top:50px;
}
.carousel-caption p {
    margin-top: -50px;
}

/* Additional styles for p element */
.carousel-caption p {
    font-size: 13px;
}

/* Banner style start end for all 3 views */
/* .banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(5, 5, 5, 0.5); 
} */

.carousel-item img {
    width: 1600px;
    height: 382px;
    object-fit: cover;
}
@media only screen and (max-width: 500px) {
    .carousel-caption {
        text-align: left;
    }

    .carousel-caption h5 {
        font-size: 20px;
        letter-spacing:10px;
        margin-bottom:30px;
        
    }

    .carousel-caption p {
        font-size: 9px;
    }
}
</style>
<style>
        #email-link {
            cursor: pointer;
            color: gray;

        }
    </style>


<body>
    <!-- navbar start -->
    <?php
    $page = 'about';
    include 'navbar.php';
    ?>

<!-- Banner Start -->


<div class="container-fluid p-0">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="banner-overlay"></div>
            <img src="images/policy_banner.jpg" class="d-block w-100" alt="..." style="image-rendering: auto;">
            <div class="carousel-caption">
                <h5>REFUND POLICY</h5>
            
                <p><a href="index.php">Home</a> / REFUND POLICY</p>
            </div>
        </div>
    </div>
</div>

<!-- Banner End -->

<!-- Refund Content start -->

     <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <p>We have a 15 day policy for reworking/revising the report, which means you have 15 days after receiving your item to request a revised report.</p>
           <p>You can always contact us for any return question at <span id="email-link" onclick="openEmailOptions()">connect@namecraft.co.in</span></p>
           
           <h2 style="margin-top:45px;">Refunds:</h2>
            <p style="margin-top:25px;">We don't do refunds for name correction reports. You can request for a report to be reworked/revised on, within 15 days of receiving a report. </p>
        <p>If more than 15 days have passed since you've requested for a revised report, please contact us at connect@namecraft.co.in</p>
        </div>
        </div>
    </div>
    <script>
        function openEmailOptions() {
            const email = "connect@namecraft.co.in";
            const subject = encodeURIComponent("Subject of the email");
            const body = encodeURIComponent("Body of the email");

            const mailtoLink = `mailto:${email}?subject=${subject}&body=${body}`;

            const mailtoWindow = window.open(mailtoLink, "_blank");
            if (!mailtoWindow) {
                alert("Please allow pop-ups to open the email options.");
            }
        }
    </script>
    <!-- Refund Content End -->


<?php include("footer.php"); ?>
</body>

</html>