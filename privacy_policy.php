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
    height: 300px;
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
                <h5>PRIVACY POLICY</h5>
            
                <p><a href="index.php">Home</a> / PRIVACY POLICY</p>
            </div>
        </div>
    </div>
</div>

<!-- Banner End -->

<!-- Privacy policy Content Start -->

<div class="container pt-5">
    <div class="row">
        <div class="col-md-12">
            <p>This Privacy Policy describes how namecraft.co (the “Site” or “we”) collects, uses, and discloses your Personal Information when you visit or make a purchase from the Site.</p>
        <h2>Contact</h2>
        <p>After reviewing this policy, if you have additional questions, want more information about our privacy practices, or would like to make a complaint, please contact us by e-mail at connect@namecraft.co.in or by mail using the details provided below:</p>
        <p>No. 664, 5th Cross<br>
         Koramangala 4th Block<br>
         (Near Maharaja Signal)<br>
         Bangalore - 560034</p>
         <h2>Collecting Personal Information</h2>
         <p>When you visit the Site, we collect certain information about your device, your interaction with the Site, and information necessary to process your purchases. We may also collect additional information if you contact us for customer support. In this Privacy Policy, we refer to any information about an identifiable individual (including the information below) as “Personal Information”. See the list below for more information about what Personal Information we collect and why.</p>
    <h2>Device information</h2>
         <ul style="padding: 35px;  list-style-type:none;">
    <li style="list-style-type: disc; font-size:18px;margin-top:-15px;">PURPOSE OF COLLECTION:</li>
     <p> to load the Site accurately for you, and to perform analytics on Site usage to optimize our Site.</p>
     <li style="list-style-type: disc; font-size:18px;">SOURCE OF COLLECTION:</li>
   <p>Collected automatically when you access our Site using cookies, log files, web beacons, tags, or pixels</p>
     <p> [ADD OR SUBTRACT ANY OTHER TRACKING TECHNOLOGIES USED].</p>
     <li style="list-style-type: disc; font-size:18px;">DISCLOSURE FOR A BUSINESS PURPOSE:</li>
     <p>shared with our processor Shopify</p>
     <p> [ADD ANY OTHER VENDORS WITH WHOM YOU SHARE THIS INFORMATION].</p>
     <li style="list-style-type: disc; font-size:18px;">PERSONAL INFORMATION COLLECTED:</li>
   <p>version of web browser, IP address, time zone, cookie information, what sites or products you view, search terms, and how you interact with the Site</p>
   <p>[ADD OR SUBTRACT ANY OTHER PERSONAL INFORMATION COLLECTED].</p>
     </ul  style="list-style-type: disc;">
     <h2 style="margin-top:-40px;" >Order information</h2>
     <li style="list-style-type: disc; font-size:18px;margin-top:15px;">PURPOSE OF COLLECTION:</li>
    <p > to provide products or services to you to fulfill our contract, to process your payment information, arrange for shipping, and provide you with invoices and/or order confirmations, communicate with you, screen our orders for potential risk or fraud, and when in line with the preferences you have shared with us, provide you with information or advertising relating to our products or services.</p>
    <li style="list-style-type: disc; font-size:18px;">SOURCE OF COLLECTION:</li>
    <p> collected from you.</p>
    <li style="list-style-type: disc; font-size:18px;">DISCLOSURE FOR A BUSINESS PURPOSE:</li>
        <p>shared with our processor Shopify and Wordpress</p>
        <li style="list-style-type: disc; font-size:18px;">PERSONAL INFORMATION COLLECTED:</li>
<p>name, billing address, shipping address, payment information (including credit card numbers, UPI Id), email address, and phone number.</p>
<h2>Customer support information</h2>
<li style="list-style-type: disc; margin-top:15px;">Purpose of collection: to provide customer support.</li>
<li style="list-style-type: disc;">Source of collection: collected from you</li>
<li style="list-style-type: disc;">Disclosure for a business purpose</li>
<li style="list-style-type: disc;">Personal Information collected</li>
<h2 style="margin-top:15px;">Sharing Personal Information</h2>
<p style="margin-top:15px;">We share your Personal Information with service providers to help us provide our services and fulfill our contracts with you, as described above. For example:</p>
<li style="list-style-type: disc;">We use Wordpress to power our online store.</li>
<li style="list-style-type: disc;">We may share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant or other lawful request for information we receive, or to otherwise protect our rights.</li>
<h2 style="margin-top:25px;">Behavioural Advertising</h2>
<p>As described above, we use your Personal Information to provide you with targeted advertisements or marketing communications we believe may be of interest to you. For example:</p>
<li style="list-style-type: disc;">We use Google Analytics to help us understand how our customers use the Site. You can read more about how Google uses your Personal Information here</li>
<p>: https://www.google.com/intl/en/policies/privacy/. You can also opt-out of Google Analytics here: https://tools.google.com/dlpage/gaoptout.</p>
<li style="list-style-type: disc;">We share information about your use of the Site, your purchases, and your interaction with our ads on other websites with our advertising partners. We collect and share some of this information directly with our advertising partners, and in some cases through the use of cookies or other similar technologies (which you may consent to, depending on your location).</li>
<li style="list-style-type: disc; margin-top:15px;">We use Shopify Audiences to help us show ads on other websites with our advertising partners to buyers who made purchases with other Shopify merchants and who may also be interested in what we have to offer. We also share information about your use of the Site, your purchases, and the email address associated with your purchases with Shopify Audiences, through which other Shopify merchants may make offers you may be interested in.</li>
<p style="margin-top:15px;">For more information about how targeted advertising works, you can visit the Network Advertising Initiative’s (“NAI”) educational page at https://www.networkadvertising.org/understanding-online-advertising/how-does-it-work.</p>
<p style="margin-top:15px;"> You can opt out of targeted advertising by:</p>
<li style="list-style-type: disc;">FACEBOOK - https://www.facebook.com/settings/?tab=ads</li>
<li style="list-style-type: disc; margin-top:15px;">GOOGLE - https://www.google.com/settings/ads/anonymous</li>
<p>Additionally, you can opt out of some of these services by visiting the Digital Advertising Alliance’s opt-out portal at</p>
<p>: https://optout.aboutads.info/.</p>
<h2>Cookies</h2>
<p>A cookie is a small amount of information that’s downloaded to your computer or device when you visit our Site. We use a number of different cookies, including functional, performance, advertising, and social media or content cookies. Cookies make your browsing experience better by allowing the website to remember your actions and preferences (such as login and region selection). This means you don’t have to re-enter this information each time you return to the site or browse from one page to another. Cookies also provide information on how people use the website, for instance whether it’s their first time visiting or if they are a frequent visitor.</p>
<p>We use the following cookies to optimize your experience on our Site and to provide our services.</p>
<p>The length of time that a cookie remains on your computer or mobile device depends on whether it is a “persistent” or “session” cookie. Session cookies last until you stop browsing and persistent cookies last until they expire or are deleted. Most of the cookies we use are persistent and will expire between 30 minutes and two years from the date they are downloaded to your device.</p>
<p>You can control and manage cookies in various ways. Please keep in mind that removing or blocking cookies can negatively impact your user experience and parts of our website may no longer be fully accessible.</p>
<p>Most browsers automatically accept cookies, but you can choose whether or not to accept cookies through your browser controls, often found in your browser’s “Tools” or “Preferences” menu. For more information on how to modify your browser settings or how to block, manage or filter cookies can be found in your browser’s help file or through such sites as: www.allaboutcookies.org.</p>
<p>Additionally, please note that blocking cookies may not completely prevent how we share information with third parties such as our advertising partners. To exercise your rights or opt-out of certain uses of your information by these parties, please follow the instructions in the “Behavioural Advertising” section above.</p>
<h2>Do Not Track</h2>
<p>Please note that because there is no consistent industry understanding of how to respond to “Do Not Track” signals, we do not alter our data collection and usage practices when we detect such a signal from your browser.</p>
<h2>Changes</h2>
<p>We may update this Privacy Policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal, or regulatory reasons.</p>
<h2>Complaints</h2>
<p>As noted above, if you would like to make a complaint, please contact us by e-mail or by mail using the details provided under “Contact” above.</p>
<p>Last updated: 09/06/2023</p>
</div>
    </div>
</div>


  
<?php include("footer.php"); ?>
</body>

</html>