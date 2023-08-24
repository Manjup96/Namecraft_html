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
        background-color: #c0c0c0;
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
        background-color: black;
        color: white;
    }

    
    @media (max-width: 1024px) {
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

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/servicebanner1.png" class="d-block w-100" alt="...">
                <div class="banner-overlay"></div>
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h2 style="margin: 130px;  font-size: 50px;">SERVICES</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- <div id="innerPageBanner">
  
    <img src="images/servicebanner.png" class="banner-image" alt="Banner Image">
    <div class="banner-overlay"></div>
    <div class="banner-content">
    <h2 class=" text-center" style=" color:white; font-size: 50px; font-weight: 500; letter-spacing: 15px; ">SERVICES</h2>
    </div>
</div> -->


    <div class="container">
       <div class="row justify-content-center zoom-container">
            <div class="col-lg-6 col-md-8 col-sm-10"  style="margin-top:50px">
            <div class="zoom-container">
            <img src="images/Name analysis.jpg" class="img-fluid" style="width:500px;height:400px;  border: 2px solid black;">
            </div>
            </div>
      


            <div class="col-lg-6"  style="margin-top:50px;">
            <p class="text" style=" font-size:36px;">Name Analysis</p>
            <h2 class="text" style="font-family:Mulish,Arial,sans-serif;font-size: 26px;">Rs:35.00</h2>
            <p style="text-align: justify; font-size: 16px; font-family:montserrat;"> Name analysis in numerology entails analysing the letters of a person’s name
                     to get insight into their personality, attributes, and probable life events.
                     Numerologists think that each letter contains a distinct vibration or energy, 
                     and that by analysing the numerical values connected with these letters,
                     they may learn about a person’s personality and life path.</p>
                    <div class="container mt-3">
                        
                    <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                        <label for="full_name">Full name*</label>
                        <input type="full_name" class="form-control" id="full_name1"  name="full_name1" onkeyup="validateFullNameForm()">  
                    <div id="name_error" class="error hidden">Please enter a valid full name</div>
                        </div>
                    <div class="mb-3">
                    <label for="date_of_birth">Date of birth*</label>
                    <input type="date" class="form-control" id="date_of_birth"  name="date_of_birth">
                    </div>
                
                    
                    <input type="submit" value="Add to cart" class="submit">
                        </form>
                        <div class="mb-3 mt-3">
                        <a href="services.php"> <p> Category: Uncategorized</p></a>
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
                <div class="col-md-12 mt-4">
                <h2 style=" font-family:montserrat; float: left;font-size: 1.5em; padding-left:30px;">Description</h2>
                <div class="p-5">
               
                <p style="text-align: justify; font-size: 16px; font-family:montserrat;">The cosmic power of numbers may determine one’s happiness and success in life.
 As a result, it is the obligation of the parents to choose the ideal name for their child that not only sounds great but also sums up correctly.
 That is precisely where baby name numerology comes into play.Most parents seek a distinctive name for their child.
  In their search of a distinctive name, parents may wind up with a name that may doom their kid in the future. 
  No parent would ever conceive of giving their child a name that will lead them down a dark path of despair.</p>



  <p style="text-align: justify; font-size: 16px; font-family:montserrat;">We can come up with names that highlight your child’s greatest qualities. 
We are happy to have provided some of the greatest names to numerous newborn infants, giving them the best possible start in life.</p>



<p style="text-align: justify; font-size: 16px; font-family:montserrat;">Name analysis in numerology entails analysing the letters 
of a person’s name to get insight into their personality, attributes, and probable life events. 
Numerologists think that each letter contains a distinct vibration or energy,
 and that by analysing the numerical values connected with these letters, 
they may learn about a person’s personality and life path.</p>



<p style="text-align: justify; font-size: 16px; font-family:montserrat;">The entire makeup of the name is considered, including the number of letters, the individual letters present, and their numerical values.
 It delves into the patterns, meanings, and vibrations linked with each letter, as well as how they interact within the name.
 Numerologists analyse these variables to determine a person’s strengths, weaknesses, abilities, and possible obstacles.</p>



 <p style="text-align: justify; font-size: 16px; font-family:montserrat;">We at NameCraft, use name analysis to understand the underlying influences and energy that shape a person’s existence.
 They may indicate prominent personality traits, possible areas for improvement, and life lessons to be learnt.
 Name analysis may also provide information about a person’s compatibility with others, professional possibilities, and overall life purpose.</p>



 <p style="text-align: justify; font-size: 16px; font-family:montserrat;">Name analysis is a method of tapping into the power and importance of names in numerology.
 It enables people to obtain a better awareness of themselves, their potentials, and their distinguishing characteristics.
 Individuals may make intentional decisions that enhance personal growth, self-expression,
 and fulfilment in different spheres of life by aligning their name with their intrinsic energies and desires.</p>

 <p style="text-align: justify; font-size: 16px; font-family:montserrat;">Overall, numerology name analysis gives a basic summary of 
  the traits and influences linked with a person’s name,
  providing vital insights into their personality and life journey.</p>
            
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
            <div class="container related-products">
    <div class="row g-0 mt-5">
           
            <h5 class="text" style="font-family:montserrat;">Related products</h5>

            <div class="col-lg-4 col-md-8 col-sm-10 " style="margin-top:10px">
            <a href="luckydate.php"> <img src="images/C section delivery date.jpg" style="width:350px;height:350px; border: 2px solid black;"></a>
            <h2 class="text-center mt-3" style="font-size: 16px; font-family:montserrat; font-color:#595959;">Lucky Date Delivery</h2>
            <p class="text-center" style="font-size: 16px;">Rs:45.00</p>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-10"  style="margin-top:10px">
            <a href="babyname.php"><img src="images/babyname numerology.jpg" style="width:350px;height:350px; border: 2px solid black;"></a>
            <h2 class="text-center mt-3" style="font-size: 16px; font-family:montserrat; font-color:#595959;">Baby Name Correction</h2>
            <p class="text-center" style="font-size: 16px;">Rs:35.00</p>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-10" style="margin-top:10px">
            <a href="luckyname.php"><img src="images/LUCKY ALPHABETS.jpg" style="width:350px;height:350px; border: 2px solid black;"></a>
            <h2 class="text-center mt-3" style="font-size: 16px; font-family:montserrat; font-color:#595959;">Lucky Name Correction</h2>
            <p class="text-center" style="font-size: 16px;">Rs:100.00</p>
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
  function validateFullName(input_str) {
    var re = /^([a-zA-Z ]){2,30}$/;
    return re.test(input_str);
  }

  function validateFullNameForm() {
    var name = document.getElementById('full_name1').value;
    var fullNameError = document.getElementById('name_error');

    if (!validateFullName(name)) {
      fullNameError.classList.add('show');
    } else {
      fullNameError.classList.remove('show');
    }

    enableSubmitButton();
  }
  document.getElementById('full_name').addEventListener('keyup', validateFullNameForm);

  </script>
</body>

</html>