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

    /* Custom dropdown styles */
    .custom-dropdown {
        position: relative;
        display: inline-block;
    }

    .custom-dropdown-select {
        padding: 5px 30px 10px 10px;
        /* padding: 5px; */
        font-size: 16px;
        width: 200px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        cursor: pointer;
        position: relative;
        z-index: 1;
    }

    .custom-dropdown-select::after {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
        /* This prevents the arrow from interfering with the input's click event */

    }

    .custom-dropdown-options {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        display: none;
        padding: 5px;
        max-height: 200px;
        overflow-y: auto;
        z-index: 2;
    }

    .custom-dropdown-options.show {
        display: block;
    }

    .custom-dropdown-option {
        cursor: pointer;
        padding: 8px;
        transition: background-color 0.2s;
        width: 140px;
    }

    .custom-dropdown-option:hover {
        background-color: rgba(0, 123, 255, 0.5);
    }

    /* Container for the time select */
    .time-container {
        margin-top: 20px;
        text-align: center;
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
                        <!-- <div class="row">
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
                        </div> -->

                        <div class="row">
                            <div class="col mb-3 mt-3">
                                <!-- <h2 style="margin-right: 10px;">Time:</h2> -->


                                <div class="custom-dropdown" id="hourPickerDropdown">
                                    <label for="time of birth">Time of birth*</label>
                                    <input type="text" class="custom-dropdown-select" placeholder="Select an hour" name="time of birth" onclick="showOptions('hour')" readonly>
                                    <div class="custom-dropdown-options" id="hourOptions">
                                        <!-- Hour options will be generated here -->
                                    </div>
                                </div>
                            </div>

                            <div class="col mb-3 mt-5">

                                <div class="custom-dropdown" id="minutePickerDropdown" style="margin-left: 10px;">
                                    <input type="text" class="custom-dropdown-select" placeholder="Select minutes" onclick="showOptions('minute')" readonly>
                                    <div class="custom-dropdown-options" id="minuteOptions">
                                        <!-- Minute options will be generated here -->
                                    </div>
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
                                <h2><b style=" font-family:montserrat; float: left;padding-left:30px;">Description</b></h2>
                                <div class="p-5">
                                    <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">
                                        The cosmic power of numbers may determine one’s happiness and success in life. As a result,
                                        it is the obligation of the parents to choose the ideal name for their child that not only sounds great but also
                                        sums up correctly. That is precisely where baby name numerology comes into play.
                                        Most parents seek a distinctive name for their child. In their search for a distinctive name,
                                        parents may wind up with a name that may doom their kid in the future.
                                        No parent would ever conceive of giving their child a name that will lead them down a dark path of despair.
                                    </p>


                                    <h2><b style="font-size: 20px; font-family:montserrat; float: left;padding-left:30px;">We can recommend names with a high numerological significance:</b></h2>

                                    <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">We can come up with names that highlight your child’s greatest qualities.
                                        We are happy to have provided some of the greatest names to numerous newborn infants, giving them the best possible start in life.</p>

                                    <h2> <b style="font-size: 20px; font-family:montserrat; float: left;padding-left:30px;">Using Numerology to Pick the Best Baby Name:</b></h2>

                                    <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">Your name is the outcome of your actions in a previous life. The gods have predetermined it.
                                        Your good acts earn you a moniker that signifies power, success, and wealth.
                                        poor acts provide poor labels that represent depravity, jealousy, and unpleasant vibes.
                                        Your parents may have given you a name, but it reflects your former life.
                                        This article will help you choose the ideal name for your kid based on numerology.
                                        It is significant because it gives your child a personality.</p>


                                    <h2><b style="font-size: 20px; font-family:montserrat; float: left;padding-left:30px;">Selecting the Best Vibration:</b></h2>


                                    <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">This is determined by the baby’s natal star.
                                        Astrology has defined initial sounds for children born under a specific natal star.</p>

                                    <h2> <b style="font-size: 20px; font-family:montserrat; float: left;padding-left:30px;">Find a harmonic harmony between your name and your birthday:</b></h2>

                                    <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">Every letter is connected with a number in numerology,
                                        and the vibration is determined based on the numerology value of the alphabet and validated using phonics.
                                        The sound’s pronunciation and vibration.The name is also determined and validated using equipment based on energy vibrations.</p>

                                    <h2><b style="font-size: 20px; font-family:montserrat; float: left;padding-left:30px;">We Can Assist You in Making a Difference in Your Child’s Life:</b></h2>

                                    <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">You may have already named your child only to discover that the name does not add up to a decent number or is incompatible with your child’s birth number.
                                        Don’t be concerned! We at Sheelaa.com can recommend alterations to your child’s name spelling so that he or she has a name with a better numerological equation.
                                        We will examine all circumstances, such as your child’s birth date, when recommending these modifications.
                                        We will recommend slight modifications in the spelling of your kid’s present name so that you may keep the name you chose for your child after much thought,
                                        and the tiny adjustments in spelling will assist your child acquire a name that will have a good influence on his or her life.</p>
                                </div>


                            </div>
                        </div>

                    </div>


                    <div class="tabPanel">
                        <h2> <b style=" float: left; font-family:montserrat; padding-left:30px;">Reviews</b></h2>
                        <div class="p-5">
                            <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">
                                There are no reviews yet.</p>
                        </div>


                        <p style="text-align: justify;color:black; font-family:montserrat; font-size: 16px;padding-left:30px;">
                            Be the first to review “Baby name correction”<br>
                            Your email address will not be published. Required fields are marked *</p>

                        <p style="font-size: 16px;  font-family:montserrat; float: left;padding-left:30px;"> YOUR RATING * <i class="far fa-star"></i><i class="far fa-star"></i>
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
                        <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;"> YOUR REVIEW *</p>
                        <input type="message" class="form-control" id="specific instruction" name="specific instruction">

                        <div class="row">
                            <div class="col mb-6 mt-3">
                                <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">
                                    <label for="name">Name*</label>
                                </p>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="col mb-6 mt-3">
                                <p style="font-size: 16px; font-family:montserrat; float: left;padding-left:30px;">
                                    <label for="email">Email*</label>
                                </p>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <input type="checkbox" id="myCheckbox" name="myCheckbox">
                        <label for="myCheckbox">
                            <p style="text-align: justify;color:black; font-family:montserrat; font-size: 16px;padding-left:30px;">
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

            <h2>
                <b class="text-center" style="font-family:montserrat;">Related products</b>
            </h2>

            <div class="col-lg-4" style="margin-top:30px">
                <a href="luckydate.php"> <img src="images/C section delivery date.jpg" style="width:400px;height:400px"></a>
                <h2>
                    <b class="text-center" style="font-size: 16px; font-family:montserrat;">Lucky Date Delivery</b>
                </h2>
                <b class="text-center" style="font-size: 16px;">Rs:45.00</b>
            </div>

            <div class="col-lg-4" style="margin-top:30px">
                <a href="nameanalysis.php"><img src="images/Name analysis.jpg" style="width:400px;height:400px"></a>
                <h2>
                    <b class="text-center" style="font-size: 16px; font-family:montserrat;">Name Analysis</b>
                </h2>
                <b class="text-center" style="font-size: 16px;">Rs:45.00</b>
            </div>

            <div class="col-lg-4" style="margin-top:30px">
                <a href="luckyname.php"><img src="images/LUCKY ALPHABETS.jpg" style="width:400px;height:400px"></a>
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

    <!-- script for time-->
    <script>
        document.addEventListener("click", function(event) {
            const hourOptions = document.getElementById("hourOptions");
            const minuteOptions = document.getElementById("minuteOptions");

            if (!event.target.classList.contains("custom-dropdown-select")) {
                hourOptions.classList.remove("show");
                minuteOptions.classList.remove("show");
            }
        });

        function showOptions(type) {
            const hourOptions = document.getElementById("hourOptions");
            const minuteOptions = document.getElementById("minuteOptions");

            if (type === 'hour') {
                hourOptions.innerHTML = generateHourOptions();
                hourOptions.classList.toggle("show");
                minuteOptions.classList.remove("show");
            } else {
                minuteOptions.innerHTML = generateMinuteOptions();
                minuteOptions.classList.toggle("show");
                hourOptions.classList.remove("show");
            }
        }

        function generateHourOptions() {
            let optionsHTML = "";

            for (let hour = 0; hour < 24; hour++) {
                const formattedHour12 = String(hour % 12 === 0 ? 12 : hour % 12).padStart(2, "0");
                const amPm = hour < 12 ? "AM" : "PM";
                optionsHTML += `<div class="custom-dropdown-option" onclick="selectTime('${hour}(${formattedHour12} ${amPm})', 'hour')">${hour} (${formattedHour12} ${amPm})</div>`;
            }

            return optionsHTML;
        }

        function generateMinuteOptions() {
            let optionsHTML = "";

            for (let minute = 0; minute < 60; minute++) {
                const formattedMinute = String(minute).padStart(2, "0");
                optionsHTML += `<div class="custom-dropdown-option" onclick="selectTime('${formattedMinute}', 'minute')">${formattedMinute}</div>`;
            }

            return optionsHTML;
        }

        function selectTime(selectedTime, type) {
            if (type === 'hour') {
                const hourDropdown = document.getElementById("hourPickerDropdown");
                const hourSelect = hourDropdown.querySelector(".custom-dropdown-select");
                const hourOptions = document.getElementById("hourOptions");
                hourSelect.value = selectedTime;
                hourOptions.classList.remove("show");
            } else {
                const minuteDropdown = document.getElementById("minutePickerDropdown");
                const minuteSelect = minuteDropdown.querySelector(".custom-dropdown-select");
                const minuteOptions = document.getElementById("minuteOptions");
                minuteSelect.value = selectedTime;
                minuteOptions.classList.remove("show");
            }
        }
    </script>

</body>

</html>