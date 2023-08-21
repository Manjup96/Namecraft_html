<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    
  .error {
    color: red;
    display: none;
  }

  .error.show {
    display: block;
    font-size: 80%;
  }

  .hidden {
    display: none;
  }
  .button1 {
        display: inline-block;
        background-color: #343a40; /* Set the desired background color */
        color: white; /* Set the text color */
        border: none;
        padding: 10px 20px;
    }
    .zoom-container {
    /* width: 300px;
    height: 600px;
    margin: 100px; */
    overflow: hidden;
}

.zoom-container img {
    width: 100%;
    transition: 1s;
}

.zoom-container img:hover {
     transform: scale(1.5);
     cursor:pointer;
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
       <div class="row justify-content-center zoom-container">
            <div class="col-md-6"  style="margin-top:50px">
            <div class="zoom-container">
              <br>
              <br>
              <br>
              <br>
            <img src="images/C section delivery date.jpg" style="width:500px;height:400px;  border: 2px solid black;">
            </div>
            </div>

            <div class="col-md-6"  style="margin-top:50px; ">
                    <h2><b class="text-center" style=" font-family:montserrat;"> Lucky date delivery</b></h2>
                    <b class="text-center" style="font-size: 16px;">Rs:35.00</b>
                    <p style="text-align: justify; font-size: 16px; font-family:montserrat;">When it comes to making big decisions, like as purchasing a new home, 
                       beginning a new business, or choosing the delivery date for our child, 
                       most of us would prefer to rely on our fortunate dates. We all rely on specific dates, 
                       such as our birthdays, to make crucial decisions. However,
                       it is not required that the dates you believe to be auspicious for you are in fact lucky. 
                       In order to learn which dates and times are fortunate for you, 
                       you will need to seek expert help, such as numerology by birth date.</p>
                    <div class="container mt-3">
                        
                    <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                        <label for="mother_name">Mother name*</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name" onkeyup="validateMotherNameForm()">
                    <div id="mothername_error" class="error hidden">Please enter a valid mother name</div>
                        </div>
                    <div class="mb-3">
                    <label for="father_name">Father name*</label>
                    <input type="text" class="form-control" id="father_name" name="father_name" onkeyup="validateFatherNameForm()">
                      <div id="fathername_error" class="error hidden">Please enter a valid father name</div>
                    </div>
                
                    <div class="mb-3 mt-3">
                        <label for="email_id">Email id*</label>
                        <input type="text" class="form-control"  id="email" name="email" onkeyup="validateEmailForm()">
                      <div id="email_error" class="error hidden">Please enter a valid email</div>
                        </div>
                        <div class="mb-3 mt-3">
                        <label for="mobile_number">Mobile number*</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" onkeyup="validateMobileForm()">
                      <div id="mobile_error" class="error hidden">Please enter a valid phone number</div>
                        </div>
                        <div class="mb-3 mt-3">
                        <label for="expected_delivery">Expected delivery date*</label>
                    <input type="text" class="form-control" id="expected_delivery"  name="expected_delivery">
                        </div>
                        <div class="row">
                        <div class="col mb-3 mt-3">
                        <label for="date of birth">Date of birth*</label>
                            <input type="text" class="form-control"  name="date of birth">
                        </div>
                        
                        <div class="button-container">
                      <button type="button" class="btn btn-dark button1">Add to cart</button>
                    </div>
                        </form>
                        <div class="mb-3 mt-3">
                        <a href="services.php"> <p> Category: Uncategorized</p></a>
                       </div>
                        </div>
            </div>
        </div>
   </div>
</div>

   <div class="container">
       <div class="row g-0">
            <div  style="margin-top:50px">
            <div class="tabContainer">
        <div class="buttonContainer" style="margin-left:10px">
          <button onclick="showPanel(0,'#F5F5F5')" style="background: none; border: none; padding: 0; color: blue; cursor: pointer; font-weight:bold">Description</button>
          <button onclick="showPanel(1,'#F5F5F5')" style="background: none; border: none; padding: 0; color: blue; cursor: pointer; font-weight:bold">Review</button>
        </div>
        <div class="tabPanel mt-3">
            <div class="row">
                <div class="col-md-12 mt-4">
                <h2 style="text-align: justify; font-family:montserrat; font-size: 1.5em; float: left;padding-left:30px;"> Description </h2>
                <div class="p-5">
                <p style="text-align: justify; font-size: 16px; font-family:montserrat;">
                When it comes to making big decisions, like as purchasing a new home,
            beginning a new business, or choosing the delivery date for our child,
            most of us would prefer to rely on our fortunate dates. 
            We all rely on specific dates,
            such as our birthdays, to make crucial decisions. However,
            it is not required that the dates you believe to be auspicious for you are in fact lucky. 
            In order to learn which dates and times are fortunate for you,
            you will need to seek expert help, such as numerology by birth date.</p>
           
            
            <p style="text-align: justify; font-size: 16px; font-family:montserrat;">A variety of elements must be considered while determining your lucky dates.
              Certain sophisticated computations may be required at times in order to get at your fortunate dates. 
              As a result, you should seek the advice of a numerologist with years of expertise in this field.
              Consult a numerologist in Bangalore for help with fortunate date numerology.
              When it comes to numerology in Bangalore, we are a household name. 
              We have assisted customers in determining their lucky numbers and dates. 
              We can also help you grasp the complexities of dates and how they affect your life and the lives of those close to you.
               We also advise you on aspects such as unlucky dates,
             times when you should avoid making key life decisions or engaging in auspicious activities, and so on.</p>
            

             
             <p style="text-align: justify; font-size: 16px; font-family:montserrat;">When it comes to making big decisions, like as purchasing a new home,
                a new automobile, or beginning a new business, most of us would prefer to rely on our fortunate dates. 
                We all rely on specific dates, such as our birthdays, to make crucial decisions. However,
                it is not required that the dates you believe to be auspicious for you are in fact lucky.
                In order to learn which dates and times are fortunate for you,
                you will need to seek expert help, such as numerology by birth date.</p>
               



               
               <p style="text-align: justify; font-size: 16px; font-family:montserrat;">We at Sheelaa.com are regarded as ace numerologists in India since we cover all areas of numerology, not only lucky dates. 
                We are here to help you whether you need a name idea for your baby or for your business, or you need to know when you may make an essential investment.
                We have advised a huge number of clients who have really profited from our assistance. 
                Not only that, but we can also tell you your fortune using tarot card reading as well as numerology. 
                Our extensive customer list demonstrates how competent we are at everything we do. 
                We can provide you with accurate information on how different statistics affect your life.</p>
               


              
               <p style="text-align: justify; font-size: 16px; font-family:montserrat;">We will be able to provide you with the best advise on any subject of numerology. 
            You ask us all of your numerology inquiries, and we will respond with answers.
            With our extensive understanding of numerology, we will assist you in moulding your future.
            If you believe anything has gone wrong and ill luck is following you, please contact us. 
            We will evaluate the impact of the various figures and try to provide you suggestions that will help you become more confident and shape a brighter future.
            Make an appointment with us now to learn the intricacies of numerology!</p>
          </div>
</div>
            </div>
       </div>


       <div class="tabPanel">
          <h2><b style=" float: left; font-family:montserrat; padding-left:30px;">Reviews</b></h2>
          <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">
          There are no reviews yet.</p>
          </div>
          
          
                <p style="text-align: justify;color:black; font-family:montserrat; font-size: 16px;padding-left:30px;">
                Be the first to review “Lucky date delivery”<br>
                Your email address will not be published. Required fields are marked *</p>
          
                <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;"> YOUR RATING * <i class="far fa-star"></i><i class="far fa-star"></i>
            <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </p> 
            <select name="rating">
            <option value="1">Rate</option>
            <option value="2">Perfect</option>
            <option value="3">Good</option>
            <option value="4">Average</option>
            <option value="5">Not bad</option>
            <option value="5">Very poor</option>
            </select><br><br>
<div class="container">

            <p style="font-size: 16px; float: font-family:montserrat; left;padding-left:30px;"> YOUR REVIEW *</p>
                <input type="message" class="form-control" id="specific instruction"  name="specific instruction">
                    <div class="row">
                        <div class="col mb-6 mt-3">
                        <p style="font-size: 20px;  font-family:montserrat; float: left;padding-left:30px;">
                        <label for="name">Name*</label></p>
                            <input type="text" class="form-control"  name="name">
                        </div>
                        <div class="col mb-6 mt-3">
                        <p style="font-size: 20px; float: left; font-family:montserrat; padding-left:30px;">
                        <label for="email">Email*</label></p>
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <input type="checkbox" id="myCheckbox" name="myCheckbox">
                     <label for="myCheckbox" class="mt-3"><p style="text-align: justify; font-family:montserrat; color:black;font-size: 16px;padding-left:30px;">
                    
                     Save my name, email, and website in this browser for the next time I comment</p></label><br>
                    <button type="submit" class="btn btn-dark mb-5">Submit</button>
                    </div>


        </div>
        
      </div>
    </div>
</div>
</div>

<script src="myscript.js"></script>
<style>
    /* CSS for responsive images */
    .product-column img {
        width: 350px;
        height: 350px;
        border: 2px solid black;
    }

    /* Media query for iPad and smaller screens */
    @media (max-width: 1024px) {
        .product-column {
            text-align: center;
        }

        .product-column img {
            max-width: 100%;
            height: auto;
        }
    }
</style>

<div class="container">
    <div class="row g-4 mt-5 justify-content-center align-items-center">
        <h2 class="text-center mb-4"><b style="font-family: montserrat;">Related products</b></h2>

        <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column align-items-center product-column">
            <a href="nameanalysis.php">
                <img src="images/Name analysis.jpg" alt="Name Analysis">
            </a>
            <h2 class="text-center mt-3"><b style="font-size: 16px; font-family: montserrat;">Name Analysis</b></h2>
            <b class="text-center" style="font-size: 16px;">Rs: 45.00</b>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column align-items-center product-column">
            <a href="luckyname.php">
                <img src="images/LUCKY ALPHABETS.jpg" alt="Lucky Name Correction">
            </a>
            <h2 class="text-center mt-3"><b style="font-size: 16px; font-family: montserrat;">Lucky Name Correction</b></h2>
            <b class="text-center" style="font-size: 16px;">Rs: 45.00</b>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column align-items-center product-column">
            <a href="babyname.php">
                <img src="images/babyname numerology.jpg" alt="Baby Name Correction">
            </a>
            <h2 class="text-center mt-3"><b style="font-size: 16px; font-family: montserrat;">Baby Name Correction</b></h2>
            <b class="text-center" style="font-size: 16px;">Rs: 35.00</b>
        </div>
    </div>
</div>

    <?php include("footer.php"); ?>

    <script>
      window.onload = function() {
    showPanel(0, '#F5F5F5');
  }; 
  </script>

<script>
    function validateMotherName(input_str) {
    var re = /^([a-zA-Z ]){2,30}$/;
    return re.test(input_str);
  }

  function validateMotherNameForm() {
    var name = document.getElementById('mother_name').value;
    var motherNameError = document.getElementById('mothername_error');

    if (!validateMotherName(name)) {
      motherNameError.classList.add('show');
    } else {
      motherNameError.classList.remove('show');
    }

    enableSubmitButton();
  }
  document.getElementById('mother_name').addEventListener('keyup', validateMotherNameForm);

  function validateFatherName(input_str) {
    var re = /^([a-zA-Z ]){2,30}$/;
    return re.test(input_str);
  }

  function validateFatherNameForm() {
    var name = document.getElementById('father_name').value;
    var fatherNameError = document.getElementById('fathername_error');

    if (!validateFatherName(name)) {
      fatherNameError.classList.add('show');
    } else {
      fatherNameError.classList.remove('show');
    }

    enableSubmitButton();
  }
  document.getElementById('father_name').addEventListener('keyup', validateFatherNameForm);

  function validateEmail(input_str) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(input_str);
  }

  function validateEmailForm() {
    var email = document.getElementById('email').value;
    var emailError = document.getElementById('email_error');

    if (!validateEmail(email)) {
      emailError.classList.add('show');
    } else {
      emailError.classList.remove('show');
    }

    enableSubmitButton();
  }
  document.getElementById('email').addEventListener('keyup', validateEmailForm);

  function validateMobile(input_str) {
    var re = /^[0-9]{10}$/;
    return re.test(input_str);
  }

  function validateMobileForm() {
    var mobile = document.getElementById('phone_number').value;
    var mobileError = document.getElementById('mobile_error');

    if (!validateMobile(mobile)) {
      mobileError.classList.add('show');
    } else {
      mobileError.classList.remove('show');
    }

    enableSubmitButton();
  }

  document.getElementById('phone_number').addEventListener('keyup', validateMobileForm);
  </script>
</body>

</html>