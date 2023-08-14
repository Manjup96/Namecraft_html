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
            
            <img src="images/LUCKY ALPHABETS.jpg" style="width:600px;height:500px">
            </div>

            <div class="col-lg-6"  style="margin-top:50px">
                    <h2><p> Lucky name correction</p></h2>
                    <h3><p>Rs:35.00</p></h3>
                    <p style="text-align: justify;">When a person is born under the influence of a negative number,
                     their life is filled with hardship and battle. They labour really hard yet receive little results or appreciation.
                     Their relationships deteriorate as a result, and others take credit for their efforts.
                     All of your hard effort might be depleted at times, making completion nearly difficult.
                    A rectified name according to numerology can rectify the date of birth flaw and turn things around for the individual or business. 
                     There are other numerology systems, such as Chaldean and Pythagorean numerology.</p>
                    <div class="container mt-3">
                        
                    <form action="/action_page.php">
                    
                        <div class="row">
                        <div class="col mb-3 mt-3">
                        <label for="date of birth">First name*</label>
                            <input type="text" class="form-control"  name="date of birth">
                        </div>
                        
                        <div class="col mb-3 mt-3">
                        <label for="place of birth">Sur name/Second name*</label>
                            <input type="text" class="form-control" name="place of birth">
                        </div>
                        <div class="row">
                        <div class="col mb-3 mt-3">
                        <label for="date of birth">Date of birth*</label>
                            <input type="text" class="form-control"  name="date of birth">
                        </div>
                        
                        <div class="col mb-3 mt-3">
                        <label for="place of birth">Place of birth*</label>
                            <input type="text" class="form-control" name="place of birth">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col mb-3 mt-3">
                        <label for="time of birth">Time of birth*</label>
                            <input type="time" class="form-control"  name="time of birth">
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
                            <input type="text" class="form-control"  name="fathername">
                        </div>
                        <div class="col mb-3 mt-3">
                        <label for="am/pm">Mothername*</label>
                            <input type="text" class="form-control" name="mothername">
                        </div>
                        </div>
                        <div class="mb-3 mt-3">
                        <label for="message">Husband/Wife name</label>
                    <input type="message" class="form-control" id="specific instruction"  name="specific instruction">
                        </div>
                        <div class="row">
                        <div class="col mb-3 mt-3">
                        <label for="date of birth">Mobile number*</label>
                            <input type="text" class="form-control"  name="date of birth">
                        </div>
                        
                        <div class="col mb-3 mt-3">
                        <label for="place of birth">Email id*</label>
                            <input type="text" class="form-control" name="place of birth">
                        </div>
                        <div class="mb-3 mt-3">
                        <label for="message">Specific instruction for name</label>
                    <input type="message" class="form-control" id="specific instruction"  name="specific instruction">
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
        <div class="buttonContainer">
          <button onclick="showPanel(0,'#F5F5F5')">Description</button>
          <button onclick="showPanel(1,'#F5F5F5')">Review</button>
        </div>
        <div class="tabPanel ">
        <div class="row">
                <div class="col-md-12">
                <p style="font-size: 20px; float: left;padding-left:30px;">Description </p>
                <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">When a person is born under the influence of a negative number, 
            their life is filled with hardship and battle.
             They labour really hard yet receive little results or appreciation.
             Their relationships deteriorate as a result, and others take credit for their efforts. 
            All of your hard effort might be depleted at times, making completion nearly difficult.</p>
           </div>
           <div class="p-5">
           <p style="text-align: justify;color:black;font-size: 16px;">A rectified name according to numerology can rectify the date of birth
             flaw and turn things around for the individual or business. 
            There are other numerology systems, such as Chaldean and Pythagorean numerology.</p>
            </div>

            <div class="p-5">
            <p style="text-align: justify;color:black;font-size: 16px;">For example, a 4 signifies Rahu, an 8 represents Shani, and a 7 represents Ketu;
                 persons with these birth or life numbers should have their names corrected.</p>
            </div>

            <div class="p-5">
                 <p style="text-align: justify;color:black;font-size: 16px;">People with difficult birth dates or life path numbers require a name adjustment.
                 Their name might be their only salvation.</p>
            </div>


            <div class="p-5">
                 <p style="text-align: justify;color:black;font-size: 16px;">Before we go into name correction,
             you should realise that a person’s name may have a significant impact on the development and consequences of his endeavours.
             Sometimes the date of birth is correct but the name is not.
             The name must be analysed in order to rule out a problematic name.</p>
            </div>
              
            <div class="p-5">
             <p style="text-align: justify;color:black;font-size: 16px;">Each letter and sound represents a number value.</p>
            </div>

            <div class="p-5">
             <p style="text-align: justify;color:black;font-size: 16px;">The number represents planetary energy</p>
             </div>


             <p style="text-align: justify;color:black;font-size: 16px;"> When the number in the date of birth is weak, it must be strengthened by a name change.</p>

             <p style="text-align: justify;color:black;font-size: 16px;">A 4 signifies Rahu, an 8 represents Shani, and a 7 represents Ketu; anyone with these birth or life numbers should have their names corrected.</p>

             <p style="text-align: justify;color:black;font-size: 16px;">You may learn your strengths and weaknesses, inner needs, emotional reactions, and methods of dealing with others, as well as your skills, by using numerology.
            You may assist yourself by being more conscious of your own personality and learning how to comprehend and interact with others,
            such as family, friends, lovers, employers, and workers.
            You can even discover what forms of potential energy and tension exist in your life and the lives of people around you.</p>

            <p style="text-align: justify;color:black;font-size: 16px;">If you are an employer, numerology can help you determine if a candidate has the intrinsic ability to complete your employment needs. 
             Indeed, numerology may assist you in better understanding everyone with whom you work,
             and with this new insight, it is possible to improve tough work relationships.
             Numerology may also be used to predict the optimal periods to marry, change employment, relocate, speculate, and travel.</p>

             <p style="text-align: justify;color:black;font-size: 16px;">Whether you use numerology to evaluate your life, take advantage of undiscovered chances, affirm skills that you know exist in your heart, or just figure out where to go next, numerology can be a powerful tool for helping you better understand yourself and others you care about. Numerology provides the complete picture, 
             allowing you to see all of the many aspects of your personality and how they combine together to form the person you are.
              With this comprehensive perspective,
              you can make the most of your skills in ways that were previously impossible.</p>
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
                Be the first to review “Lucky name correction”<br>
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

            

            <div class="col-lg-4" style="margin-top:30px">   
            <a href="nameanalysis.php"><img src="images/Name analysis.jpg" style="width:400px;height:400px"></a>
             <h4><p style="text-align: center;">Name Analysis</p></h4>
             <p style="text-align: center;">Rs:45.00</p>
            </div>


            <div class="col-lg-4"  style="margin-top:30px">
            <a href="babyname.php"><img src="images/babyname numerology.jpg" style="width:400px;height:400px"></a>
           <h4><p style="text-align: center;">Baby Name Correction</p></h4>
            <p style="text-align: center;">Rs:35.00</p>
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