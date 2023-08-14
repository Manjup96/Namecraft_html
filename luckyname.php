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

        <img src="images/LUCKY ALPHABETS.jpg" style="width:600px;height:500px">
      </div>

      <div class="col-lg-6" style="margin-top:50px">
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
                <input type="text" class="form-control" name="first_name">
              </div>
              <div class="col mb-3 mt-3">
                <label for="surname">Sur name/Second name*</label>
                <input type="text" class="form-control" name="surname">
              </div>
            </div>
            <div class="row">
              <div class="col mb-3 mt-3">
                <label for="date_of_birth">Date of birth*</label>
                <input type="date" class="form-control" name="date_of_birth">
              </div>
              <div class="col mb-3 mt-3">
                <label for="place_of_birth">Place of birth*</label>
                <input type="text" class="form-control" name="place_of_birth">
              </div>
            </div>
            <!-- <div class="row">
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
                  </div> -->

            <div class="row">
              <div class="col mb-3 mt-3">
            

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
                  <label for="father_name">Father name*</label>
                  <input type="text" class="form-control" name="father_name">
                </div>
                <div class="col mb-3 mt-3">
                  <label for="mother_name">Mother name*</label>
                  <input type="text" class="form-control" name="mother_name">
                </div>
              </div>
              <div class="mb-3 mt-3">
                <label for="spouse_name">Husband/Wife name</label>
                <input type="text" class="form-control" id="spouse_name" name="spouse_name">
              </div>
              <div class="row">
                <div class="col mb-3 mt-3">
                  <label for="mobile_number">Mobile number*</label>
                  <input type="text" class="form-control" name="mobile_number">
                </div>
                <div class="col mb-3 mt-3">
                  <label for="email_id">Email id*</label>
                  <input type="text" class="form-control" name="email_id">
                </div>
              </div>
              <div class="mb-3 mt-3">
                <label for="specific_instructions">Specific instruction for name</label>
                <input type="text" class="form-control" id="specific_instructions" name="specific_instructions">
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
  </div>
  </div>

  <div class="container">
    <div class="row g-0">
      <div style="margin-top:50px">
        <div class="tabContainer">
          <div class="buttonContainer">
            <button onclick="showPanel(0,'#F5F5F5')">Description</button>
            <button onclick="showPanel(1,'#F5F5F5')">Review</button>
          </div>
          <div class="tabPanel ">
            <div class="row">
              <div class="col-md-12">
                <h2><b style=" font-family:montserrat; float: left;padding-left:30px;">Description </b></h2>
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
              <p style="text-align: justify ; font-family:montserrat; color:black;font-size: 16px;padding-left:30px;">
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

      <h2><b class="text-center" style="font-family:montserrat;">Related products</b></h2>

      <div class="col-lg-4" style="margin-top:30px">
        <a href="luckydate.php"> <img src="images/C section delivery date.jpg" style="width:400px;height:400px"></a>
        <h2><b class="text-center" style="font-size: 16px; font-family:montserrat;">Lucky Date Delivery</b></h2>
        <b class="text-center" style="font-size: 16px;">Rs:45.00</b>
      </div>



      <div class="col-lg-4" style="margin-top:30px">
        <a href="nameanalysis.php"><img src="images/Name analysis.jpg" style="width:400px;height:400px"></a>
        <h2><b class="text-center" style="font-size: 16px; font-family:montserrat;">Name Analysis</b></h2>
        <b class="text-center" style="font-size: 16px;">Rs:45.00</b>
      </div>


      <div class="col-lg-4" style="margin-top:30px">
        <a href="babyname.php"><img src="images/babyname numerology.jpg" style="width:400px;height:400px"></a>
        <h2><b class="text-center" style="font-size: 16px; font-family:montserrat;">Baby Name Correction</b></h2>
        <b class="text-center" style="font-size: 16px;">Rs:35.00</b>
      </div>

    </div>
  </div>
  <?php include("footer.php"); ?>
  <script>
    window.onload = function() {
      showPanel(0, '#F5F5F5');
    };
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