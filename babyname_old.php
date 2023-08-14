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
        size: 80%
    }

    .hidden {
        display: none;
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
            <div class="col-lg-6" style="margin-top:50px">
                <img src="images/babyname numerology.jpg" style="width:600px;height:500px">

            </div>



            <div class="col-lg-6" style="margin-top:50px">
                <h2>
                    <p> Baby Name Correction</p>
                </h2>
                <h3>
                    <p>Rs:35.00</p>
                </h3>
                <p style="text-align: justify;">The cosmic power of numbers may determine one’s happiness and success in life. As a result,
                    it is the obligation of the parents to choose the ideal name for their child that not only sounds great but also sums up correctly.
                    That is precisely where baby name numerology comes into play.</p>
                <div class="container mt-3">

                    <form action="/action_page.php" id="myform">
                        <div class="mb-3 mt-3">
                            <label for="baby_name1">Baby name option 1*</label>
                            <input type="text" class="form-control" id="baby_name1" name="baby_name1" onkeyup="validateName()">
                        </div>

                        <!-- <div class="mb-3">
                            <label for="baby_name2">Baby name option 2*</label>
                            <input type="text" class="form-control" id="baby_name2" name="baby_name2" onkeyup="validateName2()">
                            <div id="name2_error" class="error hidden">Please enter a validename</div>
                        </div> -->
                        <div class="mb-3">
                            <label for="baby_name2">Baby name option 2*</label>
                            <input type="text" class="form-control" id="baby_name2" name="baby_name2" onkeyup="validateName2()">
                            <div id="name2_error" class="error hidden">Please enter a valid name</div>
                        </div>


                        <div class="mb-3 mt-3">
                            <label for="baby_name3">Baby name option 3*</label>
                            <input type="baby_name3" class="form-control" id="baby_name3" name="baby_name3">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="baby_name4">Baby name option 4*</label>
                            <input type="baby_name4" class="form-control" id="baby_name4" name="baby_name4">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="baby_name5">Baby name option 5*</label>
                            <input type="baby_name5" class="form-control" id="baby_name5" name="baby_name5">
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3">
                                <label for="date of birth">Date of birth*</label>
                                <input type="text" class="form-control" name="date of birth">
                            </div>
                            <div class="col mb-3 mt-3">
                                <label for="place of birth">Place of birth*</label>
                                <input type="text" class="form-control" name="place of birth">
                            </div>
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
                                <input type="text" class="form-control" name="fathername">
                            </div>
                            <div class="col mb-3 mt-3">
                                <label for="mothername">Mothername*</label>
                                <input type="text" class="form-control" name="mothername">
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="message">Specific instruction for name</label>
                            <input type="message" class="form-control" id="specific instruction" name="specific instruction">
                        </div>
                        <button type="submit" class="btn btn-dark">Add to cart</button>
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

    <div class="container">
        <div class="row g-0">
            <div style="margin-top: 50px">
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
                                        The cosmic power of numbers may determine one’s happiness and success in life. As a result,
                                        it is the obligation of the parents to choose the ideal name for their child that not only sounds great but also
                                        sums up correctly. That is precisely where baby name numerology comes into play.
                                        Most parents seek a distinctive name for their child. In their search for a distinctive name,
                                        parents may wind up with a name that may doom their kid in the future.
                                        No parent would ever conceive of giving their child a name that will lead them down a dark path of despair.
                                    </p>
                                </div>

                                <p style="font-size: 20px; float: left;padding-left:30px;">We can recommend names with a high numerological significance:</p>
                                <div class="p-5">
                                    <p style="text-align: justify; font-size: 16px;">We can come up with names that highlight your child’s greatest qualities.
                                        We are happy to have provided some of the greatest names to numerous newborn infants, giving them the best possible start in life.</p>
                                </div>
                                <p style="font-size: 20px; float: left;padding-left:30px;">Using Numerology to Pick the Best Baby Name:</p>
                                <div class="p-5">
                                    <p style="text-align: justify;font-size: 16px;">Your name is the outcome of your actions in a previous life. The gods have predetermined it.
                                        Your good acts earn you a moniker that signifies power, success, and wealth.
                                        poor acts provide poor labels that represent depravity, jealousy, and unpleasant vibes.
                                        Your parents may have given you a name, but it reflects your former life.
                                        This article will help you choose the ideal name for your kid based on numerology.
                                        It is significant because it gives your child a personality.</p>
                                </div>

                                <p style="font-size: 20px; float: left;padding-left:30px;">Selecting the Best Vibration:</p>

                                <div class="p-5">
                                    <p style="text-align: justify;font-size: 16px;">This is determined by the baby’s natal star.
                                        Astrology has defined initial sounds for children born under a specific natal star.</p>
                                </div>
                                <p style="font-size: 20px; float: left;padding-left:30px;">Find a harmonic harmony between your name and your birthday:</p>
                                <div class="p-5">
                                    <p style="text-align: justify;font-size: 16px;">Every letter is connected with a number in numerology,
                                        and the vibration is determined based on the numerology value of the alphabet and validated using phonics.
                                        The sound’s pronunciation and vibration.The name is also determined and validated using equipment based on energy vibrations.</p>
                                </div>
                                <p style="font-size: 20px; float: left;padding-left:30px;">We Can Assist You in Making a Difference in Your Child’s Life:</p>
                                <div class="p-5">
                                    <p style="text-align: justify;font-size: 16px;">You may have already named your child only to discover that the name does not add up to a decent number or is incompatible with your child’s birth number.
                                        Don’t be concerned! We at Sheelaa.com can recommend alterations to your child’s name spelling so that he or she has a name with a better numerological equation.
                                        We will examine all circumstances, such as your child’s birth date, when recommending these modifications.
                                        We will recommend slight modifications in the spelling of your kid’s present name so that you may keep the name you chose for your child after much thought,
                                        and the tiny adjustments in spelling will assist your child acquire a name that will have a good influence on his or her life.</p>
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
                            Be the first to review “Baby name correction”<br>
                            Your email address will not be published. Required fields are marked *</p>

                        <p style="font-size: 15px; float: left;padding-left:30px;"> YOUR RATING * <i class="far fa-star"></i><i class="far fa-star"></i>
                            <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                        </p>
                        <select name="rating">
                            <option value="1">Rate</option>
                            <option value="2">Perfect</option>
                            <option value="3">Good</option>
                            <option value="4">Average</option>
                            <option value="5">Not bad</option>
                            <option value="5">Very poor</option>
                        </select><br><br>
                        <p style="font-size: 15px; float: left;padding-left:30px;"> YOUR REVIEW *</p>
                        <input type="message" class="form-control" id="specific instruction" name="specific instruction">

                        <div class="row">
                            <div class="col mb-6 mt-3">
                                <p style="font-size: 20px; float: left;padding-left:30px;">
                                    <label for="name">Name*</label>
                                </p>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="col mb-6 mt-3">
                                <p style="font-size: 20px; float: left;padding-left:30px;">
                                    <label for="email">Email*</label>
                                </p>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <input type="checkbox" id="myCheckbox" name="myCheckbox">
                        <label for="myCheckbox">
                            <p style="text-align: justify;color:black;font-size: 16px;padding-left:30px;">
                                Save my name, email, and website in this browser for the next time I comment</p>
                        </label><br>
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
                <h4>
                    <p style="text-align: center;">Lucky Date Delivery</p>
                </h4>
                <p style="text-align: center;">Rs:45.00</p>
            </div>

            <div class="col-lg-4" style="margin-top:30px">
                <a href="nameanalysis.php"><img src="images/Name analysis.jpg" style="width:400px;height:400px"></a>
                <h4>
                    <p style="text-align: center;">Name Analysis</p>
                </h4>
                <p style="text-align: center;">Rs:45.00</p>
            </div>

            <div class="col-lg-4" style="margin-top:30px">
                <a href="luckyname.php"><img src="images/LUCKY ALPHABETS.jpg" style="width:400px;height:400px"></a>
                <h4>
                    <p style="text-align: center;">Lucky Name Correction</p>
                </h4>
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
    <script>
        function validateName() {
            var nameInput = document.getElementById("baby_name1").value;
            var nameRegex = /^[a-zA-Z]+$/; // Regular expression to allow only alphabetic characters
            console.log(nameInput);
            if (!nameInput.match(nameRegex)) {
                alert("Please enter a valid name. Only alphabetic characters are allowed.");
                document.getElementById("baby_name1").value = ""; // Clear the input value
            }
        }



        
    </script>

</body>

</html>