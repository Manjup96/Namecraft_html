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

</style>

<head>
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

<div id="innerPageBanner">
    <img src="images/servicebanner.png" class="banner-image" alt="Banner Image">
    <div class="banner-overlay"></div>
    <div class="banner-content">
    <h2 class=" text-center" style=" color:white; font-size: 50px; font-weight: 600; letter-spacing: 15px; ">SERVICES</h2>
    </div>
</div>

    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-6"  style="margin-top:50px">
            <div class="zoom-container">
            <img src="images/LUCKY ALPHABETS.jpg" class="img-fluid" style="width:500px;height:400px;  border: 2px solid black;">
            </div>
            </div>

            <div class="col-md-6"  style="margin-top:50px;">
           <h2> <b class="text-center" style=" font-family:montserrat;">Lucky name correction</b></h2>
            <b class="text-center" style="font-size: 16px;">Rs:35.00</b>
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
                      <label for="surname">Last Name*</label>
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
                  <button type="submit" class="btn btn-dark">Add to cart</button>
                </form>

                         
                        <div class="mb-3 mt-3">
                        <a href="services.php"> <p> Category: Uncategorized</p></a>
                       </div>
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
        <div class="tabPanel mt-3 ">
        <div class="row">
                <div class="col-md-12 mt-4">
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
      <h2><b style=" font-family:montserrat; float: left;padding-left:30px;">Reviews</b></h2>
          <div class="p-5">
                <p style="text-align: justify; font-family:montserrat; color:black;font-size: 16px;">
          There are no reviews yet.</p>
          </div>
          
          
                <p style="text-align: justify;color:black;font-size: 16px; font-family:montserrat; padding-left:30px;">
                Be the first to review “Lucky name correction”<br>
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

            <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;"> YOUR REVIEW *</p>
                <input type="message" class="form-control" id="specific instruction"  name="specific instruction">

                    <div class="row">
                        <div class="col mb-6 mt-3">
                        <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">
                        <label for="name">Name*</label></p>
                            <input type="text" class="form-control"  name="name">
                        </div>
                        <div class="col mb-6 mt-3">
                        <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">
                        <label for="email">Email*</label></p>
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <input type="checkbox" id="myCheckbox" name="myCheckbox">
                     <label for="myCheckbox"><p style="text-align: justify ; font-family:montserrat; color:black;font-size: 16px;padding-left:30px;">
                    Save my name, email, and website in this browser for the next time I comment</p></label><br>
                    <button type="submit" class="btn btn-dark">Submit</button>
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
            <a href="luckydate.php">
                <img src="images/C section delivery date.jpg" alt="Name Analysis">
            </a>
            <h2 class="text-center mt-3"><b style="font-size: 16px; font-family: montserrat;">Lucky Date Delivery</b></h2>
            <b class="text-center" style="font-size: 16px;">Rs: 45.00</b>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column align-items-center product-column">
            <a href="nameanalysis.php">
                <img src="images/Name analysis.jpg" alt="Name Analysis">
            </a>
            <h2 class="text-center mt-3"><b style="font-size: 16px; font-family: montserrat;">Name Analysis</b></h2>
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