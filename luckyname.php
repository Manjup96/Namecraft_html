<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>
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

.submit {
        background-color: black;
        color: white;
        padding: 8px 12px;
        font-size: 13px;
        border: none;
        letter-spacing: 2px;
        cursor: pointer;
        margin-top: 10px;
        transition: background-color 0.3s, color 0.3s;
    }
    
    .submit:hover {
        background-color: #c0c0c0;
        color: white;
    }

    @media (max-width: 1024px) {
  .related-products {
    text-align: center;
  }

  .related-products .row {
    display: flex;
    flex-wrap: wrap;
   
  }

  .col-lg-4.col-md-8.col-sm-10 {
    flex-basis: calc(33.33% - 20px);
    margin: 10px;
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

        /* @media (max-width: 1024px) {
  .related-products {
    text-align: center;
  }

  .related-products .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .col-lg-4.col-md-8.col-sm-10 {
    flex-basis: calc(33.33% - 20px);
    margin: 10px;
  }
} */
</style>
<<<<<<< HEAD
=======


>>>>>>> 3cb32d1eb06d53ddba2171b0e6f5a3dfe84fb189

<head>

<style>
    input {
      margin-bottom: 10px;
    }

    #location-dropdown {
      position: relative;
      display: inline-block;
    }

    #location-dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 300px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      padding: 12px 16px;
      z-index: 1;
    }

    #location-dropdown-content a {
      color: black;
      padding: 8px 0;
      display: block;
      cursor: pointer;
    }

    #location-dropdown-content a:hover {
      background-color: #f1f1f1;
    }
  </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- navbar start -->
    <?php
    $page = 'services';
    include 'navbar.php';

    ?>


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="padding-top:110px;">
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
        <h2 style="text-align:center">Services</h2>
    </div>
</div> -->

    <div class="container">
       <div class="row justify-content-center">

            <div class="col-lg-6 col-md-8 col-sm-10"  style="margin-top:50px">
            <div class="zoom-container">
            <img src="images/LUCKY ALPHABETS.jpg" class="img-fluid" style="width:500px;height:400px;border: 1px solid black; ">
            </div>
            </div>

            <div class="col-lg-6 col-md-8 col-sm-10"  style="margin-top:50px;">
           <p class="text" style=" font-size: 36px">Lucky name correction</p>
            <h2 class="text" style="font-family:Mulish,Arial,sans-serif;font-size: 26px;">Rs:7,500.00</h2>

           
            <p style="text-align: justify; font-size: 16px; font-family:montserrat;">When a person is born under the influence of a negative number,
                     their life is filled with hardship and battle. They labour really hard yet receive little results or appreciation.
                     Their relationships deteriorate as a result, and others take credit for their efforts.
                     All of your hard effort might be depleted at times, making completion nearly difficult.
                    A rectified name according to numerology can rectify the date of birth flaw and turn things around for the individual or business. 
                     There are other numerology systems, such as Chaldean and Pythagorean numerology.</p>
                    <div class="container mt-3">
                        
                   <form action="cart.php" method="POST">
                  <div class="row">
                        <!-- Hidden fields for service name and value -->
  <input type="hidden" name="service_name" value="Lucky Name Correction">
  <input type="hidden" name="service_value" value="8000">

  <div class="col mb-3 mt-3">
                      <label for="first_name">First name*</label>
                      <input type="text" class="form-control" id="first_name" name="first_name" onkeyup="validateFirstNameForm()">
                       <div id="name_error" class="error hidden">Please enter a valid first name</div>
                    </div>
                    <div class="col mb-3 mt-3">
                      <label for="surname">Sur name/Second name*</label>
                      <input type="text" class="form-control" id="sur_name" name="surname" onkeyup="validateSurNameForm()">
                      <div id="surname_error" class="error hidden">Please enter a valid sur name</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3 mt-3">
                      <label for="date_of_birth">Date of birth*</label>
                      <input type="date" class="form-control" name="date_of_birth">
                    </div>
                    <div class="col mb-3 mt-3">
                      <label for="place_of_birth">Place of birth*</label>
                      <input type="text" class="form-control"id="place_birth" name="place_of_birth" onkeyup="validatePlaceOfBirthForm()"> 
                       <div id="place_error" class="error hidden">Please enter a valid place of birth</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3 mt-3">
                      <label for="time_of_birth">Time of birth*</label>
                      <input type="time" class="form-control" name="time_of_birth">
                    </div>
                    <div class="col mb-3 mt-3">
                      <label for="am_pm">AM/PM</label>
                      <select class="form-control" name="am_pm" id="time-input">
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3 mt-3">
                      <label for="father_name">Father name*</label>
                      <input type="text" class="form-control" id="father_name" name="father_name" onkeyup="validateFatherNameForm()">
                      <div id="fathername_error" class="error hidden">Please enter a valid father name</div>
                   </div>
                    <div class="col mb-3 mt-3">
                      <label for="mother_name">Mother name*</label>
                      <input type="text" class="form-control"  id="mother_name" name="mother_name" onkeyup="validateMotherNameForm()">
                      <div id="mothername_error" class="error hidden">Please enter a valid mother name</div>
                    </div>
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="spouse_name">Husband/Wife name</label>
                    <input type="text" class="form-control" id="spouse_name" name="spouse_name" onkeyup="validateSpouseNameForm()">
                    <div id="spousename_error" class="error hidden">Please enter a valid spouse name</div>
                  </div>
                  <div class="row">
                    <div class="col mb-3 mt-3">
                      <label for="mobile_number">Mobile number*</label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" onkeyup="validateMobileForm()">
                      <div id="mobile_error" class="error hidden">Please enter a valid phone number</div>
                    </div>
                    <div class="col mb-3 mt-3">
                      <label for="email_id">Email id*</label>
                      <input type="text" class="form-control"  id="email" name="email" onkeyup="validateEmailForm()">
                      <div id="email_error" class="error hidden">Please enter a valid email</div>
                    </div>
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="specific_instructions">Specific instruction for name</label>
                    <input type="text" class="form-control" id="specific_instructions" name="specific_instructions">
        
                  </div>
                  <input type="submit" value="Add to cart" class="submit">
                  <!-- <div class="mb-3 mt-3">
                        <a href="services.php"> <p> Category: Uncategorized</p></a>
                       </div> -->
  </div>
 
                  
                </form>

                         
                       
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

            <div class="buttonContainer">
          <button onclick="showPanel(0,'#F5F5F5')" style="background: none; border: none; padding: 5px; color: blue; cursor: pointer; font-weight:bold">Description</button>
          <button onclick="showPanel(1,'#F5F5F5')" style="background: none; border: none; padding: 5px; color: blue; cursor: pointer; font-weight:bold">Review</button>
        </div>
        <div class="tabPanel ">
        <div class="row">
                <div class="col-md-12 mt-4 ">
                <h2 style="text-align: justify; font-family:montserrat; font-size: 1.5em; float: left;padding-left:30px;">Description </h2>
                <div class="p-5">
                <p style="text-align: justify; font-size: 16px; font-family:montserrat;">When a person is born under the influence of a negative number, 
            their life is filled with hardship and battle.
             They labour really hard yet receive little results or appreciation.
             Their relationships deteriorate as a result, and others take credit for their efforts. 
            All of your hard effort might be depleted at times, making completion nearly difficult.</p>
         
           
           <p style="text-align: justify; font-size: 16px; font-family:montserrat;">A rectified name according to numerology can rectify the date of birth
             flaw and turn things around for the individual or business. 
            There are other numerology systems, such as Chaldean and Pythagorean numerology.</p>
           

           
            <p style="text-align: justify; font-size: 16px; font-family:montserrat;">For example, a 4 signifies Rahu, an 8 represents Shani, and a 7 represents Ketu;
                 persons with these birth or life numbers should have their names corrected.</p>
           

            
            <p style="text-align: justify; font-size: 16px; font-family:montserrat;">People with difficult birth dates or life path numbers require a name adjustment.
                 Their name might be their only salvation.</p>
           


            
            <p style="text-align: justify; font-size: 16px; font-family:montserrat;">Before we go into name correction,
             you should realise that a person’s name may have a significant impact on the development and consequences of his endeavours.
             Sometimes the date of birth is correct but the name is not.
             The name must be analysed in order to rule out a problematic name.</p>
            
              
           
            <p style="text-align: justify; font-size: 16px; font-family:montserrat;">Each letter and sound represents a number value.</p>
           

            
            <p style="text-align: justify; font-size: 16px; font-family:montserrat;">The number represents planetary energy</p>
           


             <p style="text-align: justify; font-size: 16px; font-family:montserrat;">When the number in the date of birth is weak, it must be strengthened by a name change.</p>

             <p style="text-align: justify; font-size: 16px; font-family:montserrat;">A 4 signifies Rahu, an 8 represents Shani, and a 7 represents Ketu; anyone with these birth or life numbers should have their names corrected.</p>

             <p style="text-align: justify; font-size: 16px; font-family:montserrat;">You may learn your strengths and weaknesses, inner needs, emotional reactions, and methods of dealing with others, as well as your skills, by using numerology.
            You may assist yourself by being more conscious of your own personality and learning how to comprehend and interact with others,
            such as family, friends, lovers, employers, and workers.
            You can even discover what forms of potential energy and tension exist in your life and the lives of people around you.</p>

            <p style="text-align: justify; font-size: 16px; font-family:montserrat;">If you are an employer, numerology can help you determine if a candidate has the intrinsic ability to complete your employment needs. 
             Indeed, numerology may assist you in better understanding everyone with whom you work,
             and with this new insight, it is possible to improve tough work relationships.
             Numerology may also be used to predict the optimal periods to marry, change employment, relocate, speculate, and travel.</p>

             <p style="text-align: justify; font-size: 16px; font-family:montserrat;">Whether you use numerology to evaluate your life, take advantage of undiscovered chances, affirm skills that you know exist in your heart, or just figure out where to go next, numerology can be a powerful tool for helping you better understand yourself and others you care about. Numerology provides the complete picture, 
             allowing you to see all of the many aspects of your personality and how they combine together to form the person you are.
              With this comprehensive perspective,
              you can make the most of your skills in ways that were previously impossible.</p>
            </div>
         </div>
      </div>
</div>


<div class="tabPanel">
  <div class="container">
<div class="row">
     <div class="col-md-12 mt-4">
<h2 style="text-align: justify; font-family:montserrat; font-size: 1.5em; float: left;padding-left:30px;">Reviews</h2>
          <div class="p-5">
          <p style="text-align: justify; font-size: 16px; font-family:montserrat;">
          There are no reviews yet.</p>
          <p style="text-align: justify; font-size: 16px; font-family:montserrat;">
                Be the first to review “Name Analysis”<br>
                Your email address will not be published. Required fields are marked *</p>
          
                <p style="text-align: justify; font-size: 16px; font-family:montserrat;"> YOUR RATING * <i class="far fa-star"></i><i class="far fa-star"></i>
            <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </p> 
            <select name="rating">
            <option value="1">Rate</option>
            <option value="2">Perfect</option>
            <option value="3">Good</option>
            <option value="4">Average</option>
            <option value="5">Not bad</option>
            <option value="5">Very poor</option>
            </select><br><br>
            <p style="text-align: justify; font-size: 16px; font-family:montserrat;"> YOUR REVIEW *</p>
                <input type="message" class="form-control" id="specific instruction"  name="specific instruction">

                <div class="form">
                    <div class="row">
                    <div class="col-md-6">
            <label  class="mb-3 mt-3">NAME *</label><br>
            <input type="text" name="name" class="form-control" required/>
        </div>
        <div class="col-md-6">
            <label  class="mb-3 mt-3">EMAIL *</label><br>
            <input type="email" name="email" class="form-control" required/>
        </div>
                    </div>
                    
                    <div class="row mt-3 mb-3">
        <div class="col-md-12">
            <label>
                <input type="checkbox" name="save_info"/> Save my name, email, and website in this browser for the next time I comment.
            </label><br>
        </div>
    </div>
    </div>
    <input type="submit" value="Submit" class="submit">
                    </div>
                    </div>
             </div>
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

<div class="container related-products">
    <div class="row g-0 mt-5">
        <h5 class="text" style="font-family: montserrat;">Related products</h5>

        <div class="col-lg-4 col-md-6 col-sm-10" style="margin-top:10px">
            <a href="luckydate.php">
                <img src="images/C section delivery date.jpg" style="width:350px;height:350px;border: 2px solid black;" >
            </a>
            <h2 class="text-center mt-3" style="font-size: 16px; font-family: montserrat;">Lucky C-Section Date</h2>
            <p class="text-center" style="font-size: 16px;">Rs: 3,000.00</p>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10" style="margin-top:10px">
            <a href="nameanalysis.php">
                <img src="images/Name analysis.jpg" style="width:350px;height:350px;border: 2px solid black;">
            </a>
            <h2 class="text-center mt-3" style="font-size: 16px; font-family: montserrat;">Name Analysis</h2>
            <p class="text-center" style="font-size: 16px;">Rs: 500.00</p>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10" style="margin-top:10px">
            <a href="babyname.php">
                <img src="images/babyname numerology.jpg" style="width:350px;height:350px;border: 2px solid black;">
            </a>
            <h2 class="text-center mt-3" style="font-size: 16px; font-family: montserrat;">Lucky Baby Name</h2>
            <p class="text-center" style="font-size: 16px;">Rs: 7,500.00</p>
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
  function validateFirstName(input_str) {
    var re = /^([a-zA-Z ]){2,30}$/;
    return re.test(input_str);
  }

  function validateFirstNameForm() {
    var name = document.getElementById('first_name').value;
    var firstNameError = document.getElementById('name_error');

    if (!validateFirstName(name)) {
      firstNameError.classList.add('show');
    } else {
      firstNameError.classList.remove('show');
    }

    enableSubmitButton();
  }
  document.getElementById('first_name').addEventListener('keyup', validateFirstNameForm);


  function validateSurName(input_str) {
    var re = /^([a-zA-Z ]){2,30}$/;
    return re.test(input_str);
  }

  function validateSurNameForm() {
    var name = document.getElementById('sur_name').value;
    var surNameError = document.getElementById('surname_error');

    if (!validateSurName(name)) {
      surNameError.classList.add('show');
    } else {
      surNameError.classList.remove('show');
    }

    enableSubmitButton();
  }
  document.getElementById('sur_name').addEventListener('keyup', validateSurNameForm);


  function validatePlaceOfBirth(input_str) {
    var re = /^([a-zA-Z ]){2,30}$/;
    return re.test(input_str);
  }

  function validatePlaceOfBirthForm() {
    var name = document.getElementById('place_birth').value;
    var placeofbirthError = document.getElementById('place_error');

    if (!validatePlaceOfBirth(name)) {
      placeofbirthError.classList.add('show');
    } else {
      placeofbirthError.classList.remove('show');
    }

    enableSubmitButton();
  }
  document.getElementById('place_birth').addEventListener('keyup', validatePlaceOfBirthForm);


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

  function validateSpouseName(input_str) {
    var re = /^([a-zA-Z ]){2,30}$/;
    return re.test(input_str);
  }

  function validateSpouseNameForm() {
    var name = document.getElementById('spouse_name').value;
    var spouseNameError = document.getElementById('spousename_error');

    if (!validateSpouseName(name)) {
      spouseNameError.classList.add('show');
    } else {
      spouseNameError.classList.remove('show');
    }

    enableSubmitButton();
  }
  document.getElementById('spouse_name').addEventListener('keyup', validateSpouseNameForm);


  
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
</script>

</body>

</html>