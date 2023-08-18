<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>


<body>
<!-- navbar start -->
<?php
  $page = 'index';
  include 'navbar.php';

  ?>
  <!-- navbar emds -->
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
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
    font-size: 45px;
    letter-spacing: 15px;
    max-width: 80%;
    margin: 0;
    padding-top: 25px;
    color: white;
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
.banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(5, 5, 5, 0.5); /* Adjust the overlay color and opacity as needed */
}

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



<div class="container-fluid p-0">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="banner-overlay"></div>
            <img src="images/numbers/2.jpg" class="d-block w-100" alt="..." style="image-rendering: auto;">
            <div class="carousel-caption">
                <h5>NUMBER 2</h5>
                <p style="font-size: 9px">
                    <i class="fa fa-calendar"></i>&nbsp;JUNE 2, 2023&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-user"></span>&nbsp;Sheelaa M Bajaj
                </p>
                <p><a href="index.php">Home</a> / Number 2</p>
            </div>
        </div>
    </div>
</div>





<!-- banner ends -->

<!-- Content starts -->

<style>
    
    .content .container p {
        text-align: justify;
        font-size:16px;
    }
   
    .content .container h3{
      margin-bottom:20px;
    }
</style>

<div class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
               <h3>The number 2 represents togetherness. This might be a union of anything that seeks to eliminate division.</h3>
               <p >If your birth number or life path number is 2, you are dominated by the number 2. As a 2 in numerology, you have a deep connection to the Earth and want tranquilly.</p>
               <h3>The Characteristics of Number 2 in Numerology</h3>
               <p >The Moon is represented by number two. It has an impact on your mind, ideas, and imagination. You experience mood swings of euphoria and despair every two weeks, just like the Moon does. You have a volatile personality. You would rather toe someone’s line and work hard for him in business than work for your own earnings. The moon, for example, does not produce its own light and instead receives it from the sun. Someone else gets the credit for the number two. You are suspicious, dubious, and have a tendency to be dominated or dominate if given authority. You are also susceptible to being fooled and duped by flattery. You have a keen sense of intuition. A number 2 should seek expert assistance with naming since even a minor mistake can heighten its extremely charged emotions.</p>
               <p >You think rationally and are more of a visionary than a warrior. You are also frequently guided by your emotions, and you experience intense emotions. You also have a tendency to overthink things, which causes you to become stuck when making decisions. Expecting perfection from oneself is another quality that you, as a number 2, exhibit frequently, making you feel inadequate. You also frequently stop from speaking up for fear of being misconstrued. You are a peacemaker rather than a confrontationist.</p> 
               <p >In contrast to number one, number two is delicate and feminine. People with the ruling number 2 comprehend oneness and are not driven by ego. Number twos want for connection and support, and their love language is service. Number twos prioritise others. They are also sensitive and kind. They are, nevertheless, far from helpless. Their power resides in their ability to serve others, and they will not hesitate to battle for the safety and happiness of their loved ones.</p> 
               <p >More about numerology 2 may be discovered by discovering other governing numbers in their life as well as the compatibility of these numbers.</p>  
            
            </div>
        </div>
    </div>
</div>



<!-- Content Ends -->

<!-- Share this starts -->
<style>
.share .col-md-12{
    text-align: center;
    margin-top: 70px;
    margin-bottom: 5px;
    font-family: 'Hind', 'Arial', 'sans-serif';
}
.share .icons{
    margin-top: 10px;
    letter-spacing: 10px;
    font-size: 23px;
}
.share .button{
  margin-top: 110px;
  margin-left: 950px;
  color: 
  
}
.share .button button {
    letter-spacing: 2px;

}
</style>
<style>
.icons {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10px;
  margin-right: 10px;
}

.icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  background-color: lightgray;
  border-radius: 50%;
  margin: 0 5px;
  transition: background-color 0.3s, color 0.3s;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  
  
}


.icons a i {
  color: black;
  font-size: 18px;
  margin-left:10px;
}

.icons a:hover {
  background-color: black;
}

.icons a:hover i {
  color: white;
}
</style>


<div class="share">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <p style="font-size:13px;letter-spacing:2px;">SHARE THIS</p>

        <div class="icons">
          <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
          <a href="#" target="_blank"><i class="fas fa-envelope"></i></a>
        </div>

       
      </div>
    </div>
    
<div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-md-6  d-flex justify-content-start">
            <a href="number1.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> PREVIOUS POST </a>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
            <a href="number3.php" class="btn btn-secondary">NEXT POST <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
  </div>
</div>


<!-- Share this ends -->

<!-- Related Posts Starts -->
<style>
  .related{
    background-color:#F0F0F0;
  }
  .related .container-fluid h6{
    font-size:13px;
    letter-spacing: 1.2px;
  }
</style>
<style>
  .Readmore-button {
    background-color: #c0c0c0;
    color: white;
    border: none;
    padding: 6px 12px;
    cursor: pointer;
    font-size:12px;
    transition: background-color 0.3s, color 0.3s;
  }

  .Readmore-button:hover {
    background-color: black;
    color: white;
  }
  img {
        
        transition: transform 0.3s ease-in-out;
    }

    img:hover {
        transform: scale(1.1);
    }
</style>


<div class="related">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center mt-5 mb-5">
        <h6>RELATED POSTS</h6>
      </div>
    </div>

    
<div class="container">
  <div class="row">
   <div class="col-md-4 mb-5 ">
    <div class="card p-4">
        <img src="images/numbers/9.jpg" alt="Image of Number 9">

    <h5 class="mt-3 mb-3">Number 9</h5>
    <p>Number 9 According to Numerology. If you were born on the 9th, 18th, or 27th, your numerology number is 9.</p>
    <div>
    <a href="number9.php">

        <input type="submit" class="Readmore-button mt-3 mb-3" value="READ MORE"></a>
    </div>
</div>
   </div>
   <div class="col-md-4  ">
    <div class="card p-4">
        <img src="images/numbers/8.jpg" alt="Image of Number 8">

   <h5 class="mt-3 mb-3">Number 8</h5>
<p>Number 8 According to Numerology. If you were born on the 8th, 17th, or 26th, your numerology number is 8.</p>
<div>
<a href="number8.php">

        <input type="submit" class="Readmore-button mt-3 mb-3" value="READ MORE"></a>
    </div>
</div></div>
   <div class="col-md-4 ">
    <div class="card p-4">
        <img src="images/numbers/7.jpg" alt="Image of Number 7">

    <h5 class="mt-3 mb-3">Number 7</h5>
    <p>Number 7 According to Numerology. If you were born on the 7th, 16th, or 25th, your numerology number is 7.</p>
    <div>
    <a href="number7.php">

        <input type="submit" class="Readmore-button mt-3 mb-3" value="READ MORE"></a>
    </div>
   </div></div>
   </div>
   </div>


  </div>
</div>



<!-- Related Posts Ends -->

<!-- comments Starts -->
<style>


.card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 100%;
        border-radius: 5px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

</style>

<!-- comments Starts -->

<!-- give a reply Starts -->
<style>
    .form {
        margin-top: 100px;
        font-family: Arial, sans-serif;
        color: #333;
    }
    
    .form p {
        font-size: 13px;
        margin-bottom: 10px;
    }
    
    .form p1 {
        font-size: 28px;
        margin-bottom: 20px;
        letter-spacing: 2px;
    }
    
    .form .col-md-12 form {
        margin-top: 20px;
    }
    
    .form label {
        font-weight: bold;
        margin-top: 10px;
    }
    
    .form textarea,
    .form input[type="text"],
    .form input[type="email"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-top: 5px;
    }
    
    .post-comment-button {
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
    
    .post-comment-button:hover {
        background-color: black;
        color: white;
    }
</style>



<div class="form">
    <div class="container" style="font-size:13px">
        <div class="row">
            <div class="col-md-12">
                <p1>Leave a Reply</p1>
                <p style="font-family:'Montserrat';font-size;16px;">Your email address will not be published. Required fields are marked *</p>
            </div>
            <div class="col-md-12">
            <form>
            <div class="container">
    <div class="row">
        <div class="col-md-12">
            <label class="mb-3">COMMENT *</label>
            <textarea type="text" rows="10"  name="message" class="form-control" required></textarea>
        </div>
    </div>
    
    <div class="row mb-3 mt-3">
        <div class="col-md-4">
            <label  class="mb-3">NAME *</label><br>
            <input type="text" name="name" class="form-control" required/>
        </div>
        <div class="col-md-4">
            <label  class="mb-3">EMAIL *</label><br>
            <input type="email" name="email" class="form-control" required/>
        </div>
        <div class="col-md-4">
            <label  class="mb-3">WEBSITE</label><br>
            <input type="text" name="website" class="form-control" required/>
        </div>
    </div>

    <div class="row mt-3 mb-3">
        <div class="col-md-12">
            <label>
                <input type="checkbox" name="save_info"/> Save my name, email, and website in this browser for the next time I comment.
            </label><br>
        </div>
    </div>
    <div>
        <input type="submit" value="POST COMMENT" class="post-comment-button">
    </div>
</div>            </form>
            </div>
        </div>
    </div>
</div>

<!-- give a reply Ends --> 


<?php include("footer.php");?>
</body>
</html>