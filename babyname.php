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
        <div class="row g-0">
        
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-10" style="margin-top:50px">
    <div class="zoom-container">
      <img src="images/babyname numerology.jpg" style="width:100%; height:auto; border: 2px solid black;">
    </div>
    </div>
            <div class="col-lg-6 col-md-8 col-sm-10" style="margin-top:50px;padding-left: 50px;">
                <h2>
                <b class="text-center" style=" font-family:montserrat;"> Baby Name Correction</b>
                </h2>
                
                <b class="text-center" style="font-size: 16px;">Rs:35.00</b>
                
                <p style="text-align: justify; font-size: 16px; font-family:montserrat;">The cosmic power of numbers may determine one’s happiness and success in life. As a result,
                    it is the obligation of the parents to choose the ideal name for their child that not only sounds great but also sums up correctly.
                    That is precisely where baby name numerology comes into play.</p>
                <div class="container mt-3">

                    <form action="/action_page.php" id="myform">
                        <div class="mb-3 mt-3">
                            <label for="baby_name1">Baby name option 1*</label>
                            <input type="text" class="form-control" id="baby_name1" name="baby_name1" onkeyup="validateBabyName1Form()">
                       <div id="name1_error" class="error hidden">Please enter a valid baby name1</div>
                        </div>

                        <!-- <div class="mb-3">
                            <label for="baby_name2">Baby name option 2*</label>
                            <input type="text" class="form-control" id="baby_name2" name="baby_name2" onkeyup="validateName2()">
                            <div id="name2_error" class="error hidden">Please enter a validename</div>
                        </div> -->
                        <div class="mb-3">
                            <label for="baby_name2">Baby name option 2*</label>
                            <input type="text" class="form-control" id="baby_name2" name="baby_name2" onkeyup="validateBabyName2Form()">
                            <div id="name2_error" class="error hidden">Please enter a valid baby name2</div>
                        </div>


                        <div class="mb-3 mt-3">
                            <label for="baby_name3">Baby name option 3*</label>
                            <input type="baby_name3" class="form-control" id="baby_name3" name="baby_name3" onkeyup="validateBabyName3Form()">
                            <div id="name3_error" class="error hidden">Please enter a valid baby name3</div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="baby_name4">Baby name option 4*</label>
                            <input type="baby_name4" class="form-control" id="baby_name4" name="baby_name4" onkeyup="validateBabyName4Form()">
                            <div id="name4_error" class="error hidden">Please enter a valid baby name4</div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="baby_name5">Baby name option 5*</label>
                            <input type="baby_name5" class="form-control" id="baby_name5" name="baby_name5" onkeyup="validateBabyName5Form()">
                            <div id="name5_error" class="error hidden">Please enter a valid baby name5</div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3">
                                <label for="date of birth">Date of birth*</label>
                                <input type="text" class="form-control" name="date of birth">
                            </div>
                            <div class="col mb-3 mt-3">
                                <label for="place of birth">Place of birth*</label>
                                <input type="text" class="form-control"id="place_birth" name="place_of_birth" onkeyup="validatePlaceOfBirthForm()"> 
                       <div id="place_error" class="error hidden">Please enter a valid place of birth</div>
                            
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3">
                                <label for="time of birth">Time of birth*</label>
                                <input type="time" class="form-control" name="time of birth">
                            </div>

                            <div class="col mb-3 mt-3">
                                <label for="am/pm">AM/PM</label>
                                <select class="form-control" name="time" id="time-input">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3">
                                <label for="fathername">Father name*</label>
                                <input type="text" class="form-control" id="father_name" name="father_name" onkeyup="validateFatherNameForm()">
                      <div id="fathername_error" class="error hidden">Please enter a valid father name</div>
                            </div>
                            <div class="col mb-3 mt-3">
                                <label for="mothername">Mothername*</label>
                                <input type="text" class="form-control"  id="mother_name" name="mother_name" onkeyup="validateMotherNameForm()">
                      <div id="mothername_error" class="error hidden">Please enter a valid mother name</div>
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="message">Specific instruction for name</label>
                            <input type="message" class="form-control" id="specific instruction" name="specific instruction">
                        </div>
                        <div class="button-container">
                      <button type="button" class="btn btn-dark button1">Add to cart</button>
                    </div>
                    </form>
                    <div class="mb-3 mt-3">
                        <a href="services.php">
                            <p> Category: Uncategorized</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <div class="container">
        <div class="row g-0">
            <div style="margin-top: 50px">
                <div class="tabContainer">
                    <div class="buttonContainer">
                    <button onclick="showPanel(0,'#F5F5F5')" style="background: none; border: none; padding: 0; color: blue; cursor: pointer; font-weight:bold">&nbsp;Description &nbsp;</button>
                        <button onclick="showPanel(1,'#F5F5F5')" style="background: none; border: none; padding: 0; color: blue; cursor: pointer; font-weight:bold">&nbsp;Review &nbsp;</button>
                    </div>
                    <div class="tabPanel ">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <h2 style="text-align: justify; font-family:montserrat; font-size: 1.5em; float: left;padding-left:30px;">Description</h2>
                                <div class="p-5">
                                <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">
                                        The cosmic power of numbers may determine one’s happiness and success in life. As a result,
                                        it is the obligation of the parents to choose the ideal name for their child that not only sounds great but also
                                        sums up correctly. That is precisely where baby name numerology comes into play.
                                        Most parents seek a distinctive name for their child. In their search for a distinctive name,
                                        parents may wind up with a name that may doom their kid in the future.
                                        No parent would ever conceive of giving their child a name that will lead them down a dark path of despair.
                                    </p>
                                

                               <p style="font-size:22px;text-align: justify; font-family:montserrat;  padding-left:30px;">We can recommend names with a high numerological significance:</p>
                                
                               <p style="text-align: justify; font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">We can come up with names that highlight your child’s greatest qualities.
                                        We are happy to have provided some of the greatest names to numerous newborn infants, giving them the best possible start in life.</p>
                                
                                        <p style="font-size:22px;text-align: justify; font-family:montserrat; padding-left:30px;">Using Numerology to Pick the Best Baby Name:</p>
                                
                             <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">Your name is the outcome of your actions in a previous life. The gods have predetermined it.
                                        Your good acts earn you a moniker that signifies power, success, and wealth.
                                        poor acts provide poor labels that represent depravity, jealousy, and unpleasant vibes.
                                        Your parents may have given you a name, but it reflects your former life.
                                        This article will help you choose the ideal name for your kid based on numerology.
                                        It is significant because it gives your child a personality.</p>
                                

                                        <p style="font-size:22px;text-align: justify; font-family:montserrat; padding-left:30px;">Selecting the Best Vibration:</p>

                                
                                       <p style="text-align: justify; font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">This is determined by the baby’s natal star.
                                        Astrology has defined initial sounds for children born under a specific natal star.</p>
                               
                                        <p style="font-size:22px;text-align: justify; font-family:montserrat; padding-left:30px;">Find a harmonic harmony between your name and your birthday:</p>
                                
                                        <p style="text-align: justify; font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">Every letter is connected with a number in numerology,
                                        and the vibration is determined based on the numerology value of the alphabet and validated using phonics.
                                        The sound’s pronunciation and vibration.The name is also determined and validated using equipment based on energy vibrations.</p>
                               
                                        <p style="font-size:22px;text-align: justify; font-family:montserrat; padding-left:30px;">We Can Assist You in Making a Difference in Your Child’s Life:</p>
                                
                                        <p style="text-align: justify; font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">You may have already named your child only to discover that the name does not add up to a decent number or is incompatible with your child’s birth number.
                                        Don’t be concerned! We at Sheelaa.com can recommend alterations to your child’s name spelling so that he or she has a name with a better numerological equation.
                                        We will examine all circumstances, such as your child’s birth date, when recommending these modifications.
                                        We will recommend slight modifications in the spelling of your kid’s present name so that you may keep the name you chose for your child after much thought,
                                        and the tiny adjustments in spelling will assist your child acquire a name that will have a good influence on his or her life.</p>
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
                    <button type="submit" class="btn btn-dark">Submit</button>
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

    <div class="container">
        <div class="row g-0 mt-5">

            <h2>
                <b class="text-center" style="font-family:montserrat;">Related products</b></h2>

            <div class="col-lg-4 col-md-8 col-sm-10" style="margin-top:30px">
                <a href="luckydate.php"> <img src="images/C section delivery date.jpg" style="width:350px;height:350px;  border: 2px solid black;"></a>
                <h2>
                <b class="text-center" style="font-size: 16px; font-family:montserrat;">Lucky Date Delivery</b>
                </h2>
                <b class="text-center" style="font-size: 16px;">Rs:45.00</b>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-10"style="margin-top:30px">
                <a href="nameanalysis.php"><img src="images/Name analysis.jpg" style="width:350px;height:350px;  border: 2px solid black;"></a>
                <h2>
                <b class="text-center" style="font-size: 16px; font-family:montserrat;">Name Analysis</b>
                </h2>
                <b class="text-center" style="font-size: 16px;">Rs:45.00</b>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-10" style="margin-top:30px">
                <a href="luckyname.php"><img src="images/LUCKY ALPHABETS.jpg" style="width:350px;height:350px;  border: 2px solid black;"></a>
                <h2>
                <b class="text-center" style="font-size: 16px; font-family:montserrat;">Lucky Name Correction</b>
                </h2>
                <b class="text-center" style="font-size: 16px;">Rs:45.00</b>
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
      var enteredNames = [];

function validateBabyName(input_str) {
  var re = /^([a-zA-Z ]){2,30}$/;
  return re.test(input_str);
}

function validateBabyNameForm(inputElementId, errorElementId) {
  var name = document.getElementById(inputElementId).value;
  var errorElement = document.getElementById(errorElementId);

  if (!validateBabyName(name)) {
    errorElement.classList.add('show');
    errorElement.innerText = "Invalid name";
  } else if (enteredNames.includes(name.toLowerCase())) {
    errorElement.classList.add('show');
    errorElement.innerText = "Name already exists";
  } else {
    errorElement.classList.remove('show');
    // Add the lowercase version of the name to the enteredNames array
    enteredNames.push(name.toLowerCase());
  }

  enableSubmitButton();
}

document.getElementById('baby_name1').addEventListener('keyup', function() {
  validateBabyNameForm('baby_name1', 'name1_error');
});

document.getElementById('baby_name2').addEventListener('keyup', function() {
  validateBabyNameForm('baby_name2', 'name2_error');
});

document.getElementById('baby_name3').addEventListener('keyup', function() {
  validateBabyNameForm('baby_name3', 'name3_error');
});

document.getElementById('baby_name4').addEventListener('keyup', function() {
  validateBabyNameForm('baby_name4', 'name4_error');
});

document.getElementById('baby_name5').addEventListener('keyup', function() {
  validateBabyNameForm('baby_name5', 'name5_error');
});

function enableSubmitButton() {
  // Add your logic here to enable/disable the submit button based on the validation status
}
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


        
    </script>


</body>

</html>