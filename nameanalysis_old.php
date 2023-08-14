<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>

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
            <div class="col-lg-6"  style="margin-top:50px">
            <img src="images/Name analysis.jpg" style="width:600px;height:500px">
            
            </div>
      


            <div class="col-lg-6"  style="margin-top:50px">
                    <h2><p>Name Analysis</p></h2>
                    <h3><p>Rs:35.00</p></h3>
                    <p style="text-align: justify;"> Name analysis in numerology entails analysing the letters of a person’s name
                     to get insight into their personality, attributes, and probable life events.
                     Numerologists think that each letter contains a distinct vibration or energy, 
                     and that by analysing the numerical values connected with these letters,
                     they may learn about a person’s personality and life path.</p>
                    <div class="container mt-3">
                        
                    <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                        <label for="full_name">Full name*</label>
                    <input type="full_name" class="form-control" id="full_name1"  name="full_name1">
                        </div>
                    <div class="mb-3">
                    <label for="date_of_birth">Date of birth*</label>
                    <input type="date_of_birth" class="form-control" id="date_of_birth"  name="date_of_birth">
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

   <div class="container">
       <div class="row g-0">
            <div  style="margin-top:50px">
            <div class="tabContainer">
        <div class="buttonContainer">
          <button onclick="showPanel(0,'#F5F5F5')">Description</button>
          <button onclick="showPanel(1,'#F5F5F5')">Review</button>
        </div>
        <div class="tabPanel ">
        <div class="row">
                <div class="col-md-12">
                <p style="font-size: 20px; float: left;padding-left:30px;">Description</p>
                <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">
<p style="text-align: justify;">The cosmic power of numbers may determine one’s happiness and success in life.
 As a result, it is the obligation of the parents to choose the ideal name for their child that not only sounds great but also sums up correctly.
 That is precisely where baby name numerology comes into play.Most parents seek a distinctive name for their child.
  In their search of a distinctive name, parents may wind up with a name that may doom their kid in the future. 
  No parent would ever conceive of giving their child a name that will lead them down a dark path of despair.</p>



<p style="text-align: justify;">We can come up with names that highlight your child’s greatest qualities. 
We are happy to have provided some of the greatest names to numerous newborn infants, giving them the best possible start in life.</p>



<p style="text-align: justify;">Name analysis in numerology entails analysing the letters 
of a person’s name to get insight into their personality, attributes, and probable life events. 
Numerologists think that each letter contains a distinct vibration or energy,
 and that by analysing the numerical values connected with these letters, 
they may learn about a person’s personality and life path.</p>



<p style="text-align: justify;">The entire makeup of the name is considered, including the number of letters, the individual letters present, and their numerical values.
 It delves into the patterns, meanings, and vibrations linked with each letter, as well as how they interact within the name.
 Numerologists analyse these variables to determine a person’s strengths, weaknesses, abilities, and possible obstacles.</p>



<p style="text-align: justify;">We at NameCraft, use name analysis to understand the underlying influences and energy that shape a person’s existence.
 They may indicate prominent personality traits, possible areas for improvement, and life lessons to be learnt.
 Name analysis may also provide information about a person’s compatibility with others, professional possibilities, and overall life purpose.</p>



<p style="text-align: justify;">Name analysis is a method of tapping into the power and importance of names in numerology.
 It enables people to obtain a better awareness of themselves, their potentials, and their distinguishing characteristics.
 Individuals may make intentional decisions that enhance personal growth, self-expression,
 and fulfilment in different spheres of life by aligning their name with their intrinsic energies and desires.</p>

 <p style="text-align: justify;">Overall, numerology name analysis gives a basic summary of 
  the traits and influences linked with a person’s name,
  providing vital insights into their personality and life journey.</p>
            
            </div>
</div>
</div>
</div>

<div class="tabPanel">
          <p style="font-size: 20px; float: left;padding-left:30px;">Reviews</p>
          <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">
          There are no reviews yet.</p>
          </div>
          
          
                <p style="text-align: justify;color:black;font-size: 16px;padding-left:30px;">
                Be the first to review “Name Analysis”<br>
                Your email address will not be published. Required fields are marked *</p>
          
                <p style="font-size: 15px; float: left;padding-left:30px;"> YOUR RATING * <i class="far fa-star"></i><i class="far fa-star"></i>
            <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </p> 
            <select name="rating">
            <option value="1">Rate</option>
            <option value="2">Perfect</option>
            <option value="3">Good</option>
            <option value="4">Average</option>
            <option value="5">Not bad</option>
            <option value="5">Very poor</option>
            </select><br><br>
            <p style="font-size: 15px; float: left;padding-left:30px;"> YOUR REVIEW *</p>
                <input type="message" class="form-control" id="specific instruction"  name="specific instruction">

                    <div class="row">
                        <div class="col mb-6 mt-3">
                        <p style="font-size: 20px; float: left;padding-left:30px;">
                        <label for="name">Name*</label></p>
                            <input type="text" class="form-control"  name="name">
                        </div>
                        <div class="col mb-6 mt-3">
                        <p style="font-size: 20px; float: left;padding-left:30px;">
                        <label for="email">Email*</label></p>
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <input type="checkbox" id="myCheckbox" name="myCheckbox">
                     <label for="myCheckbox"><p style="text-align: justify;color:black;font-size: 16px;padding-left:30px;">
                    Save my name, email, and website in this browser for the next time I comment</p></label><br>
                    <button type="submit" class="btn btn-dark">Submit</button>
          


        </div>
      </div>
    </div>
  </div>
</div>
<script src="myscript.js"></script>
            <div class="container">
    <div class="row g-0 mt-5">
           
            <h4>Related products</h4>

            <div class="col-lg-4" style="margin-top:30px">
            <a href="luckydate.php"> <img src="images/C section delivery date.jpg" style="width:400px;height:400px"></a>
            <h4><p style="text-align: center;">Lucky Date Delivery</p></h4>
            <p style="text-align: center;">Rs:45.00</p>
            </div>

            <div class="col-lg-4"  style="margin-top:30px">
            <a href="babyname.php"><img src="images/babyname numerology.jpg" style="width:400px;height:400px"></a>
           <h4><p style="text-align: center;">Baby Name Correction</p></h4>
            <p style="text-align: center;">Rs:35.00</p>
            </div>

            <div class="col-lg-4" style="margin-top:30px">
            <a href="luckyname.php"><img src="images/LUCKY ALPHABETS.jpg" style="width:400px;height:400px"></a>
            <h4><p style="text-align: center;">Lucky Name Correction</p></h4>
            <p style="text-align: center;">Rs:45.00</p>
            </div>
</div>
</div>
    <?php include("footer.php"); ?>

    <script>
      window.onload = function() {
    showPanel(0, '#F5F5F5');
  };
</script>
</body>

</html>