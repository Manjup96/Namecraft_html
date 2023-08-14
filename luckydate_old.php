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
            <img src="images/C section delivery date.jpg" style="width:600px;height:500px">
            </div>

            <div class="col-lg-6"  style="margin-top:50px">
                    <h2><p> Lucky date delivery</p></h2>
                    <h3><p>Rs:35.00</p></h3>
                    <p style="text-align: justify;">When it comes to making big decisions, like as purchasing a new home, 
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
                    <input type="text" class="form-control" id="mother_name"  name="mother_name">
                        </div>
                    <div class="mb-3">
                    <label for="father_name">Father name*</label>
                    <input type="text" class="form-control" id="father_name"  name="father_name">
                    </div>
                
                    <div class="mb-3 mt-3">
                        <label for="email_id">Email id*</label>
                    <input type="text" class="form-control" id="email_id"  name="email_id">
                        </div>
                        <div class="mb-3 mt-3">
                        <label for="mobile_number">Mobile number*</label>
                    <input type="mobile_number" class="form-control" id="mobile_number"  name="mobile_number">
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
                <p style="font-size: 20px; float: left;padding-left:30px;"> Description </p>
                <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">
                When it comes to making big decisions, like as purchasing a new home,
            beginning a new business, or choosing the delivery date for our child,
            most of us would prefer to rely on our fortunate dates. 
            We all rely on specific dates,
            such as our birthdays, to make crucial decisions. However,
            it is not required that the dates you believe to be auspicious for you are in fact lucky. 
            In order to learn which dates and times are fortunate for you,
            you will need to seek expert help, such as numerology by birth date.</p>
            </div>
            <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">A variety of elements must be considered while determining your lucky dates.
              Certain sophisticated computations may be required at times in order to get at your fortunate dates. 
              As a result, you should seek the advice of a numerologist with years of expertise in this field.
              Consult a numerologist in Bangalore for help with fortunate date numerology.
              When it comes to numerology in Bangalore, we are a household name. 
              We have assisted customers in determining their lucky numbers and dates. 
              We can also help you grasp the complexities of dates and how they affect your life and the lives of those close to you.
               We also advise you on aspects such as unlucky dates,
             times when you should avoid making key life decisions or engaging in auspicious activities, and so on.</p>
             </div>

             <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">When it comes to making big decisions, like as purchasing a new home,
                a new automobile, or beginning a new business, most of us would prefer to rely on our fortunate dates. 
                We all rely on specific dates, such as our birthdays, to make crucial decisions. However,
                it is not required that the dates you believe to be auspicious for you are in fact lucky.
                In order to learn which dates and times are fortunate for you,
                you will need to seek expert help, such as numerology by birth date.</p>
               </div>



               <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">We at Sheelaa.com are regarded as ace numerologists in India since we cover all areas of numerology, not only lucky dates. 
                We are here to help you whether you need a name idea for your baby or for your business, or you need to know when you may make an essential investment.
                We have advised a huge number of clients who have really profited from our assistance. 
                Not only that, but we can also tell you your fortune using tarot card reading as well as numerology. 
                Our extensive customer list demonstrates how competent we are at everything we do. 
                We can provide you with accurate information on how different statistics affect your life.<</p>
               </div>


               <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">We will be able to provide you with the best advise on any subject of numerology. 
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
          <p style="font-size: 20px; float: left;padding-left:30px;">Reviews</p>
          <div class="p-5">
                <p style="text-align: justify;color:black;font-size: 16px;">
          There are no reviews yet.</p>
          </div>
          
          
                <p style="text-align: justify;color:black;font-size: 16px;padding-left:30px;">
                Be the first to review “Lucky date delivery”<br>
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
            <a href="nameanalysis.php"><img src="images/Name analysis.jpg" style="width:400px;height:400px"></a>
             <h4><p style="text-align: center;">Name Analysis</p></h4>
             <p style="text-align: center;">Rs:45.00</p>
            </div>

            <div class="col-lg-4" style="margin-top:30px">
            <a href="luckyname.php"><img src="images/LUCKY ALPHABETS.jpg" style="width:400px;height:400px"></a>
            <h4><p style="text-align: center;">Lucky Name Correction</p></h4>
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