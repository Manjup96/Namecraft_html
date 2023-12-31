<?php
require('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form input values
  $first_name = $_POST["first_name"];
  $surname = $_POST["surname"];
  $date_of_birth = $_POST["date_of_birth"];
  // $place_of_birth = $_POST["place_of_birth"];
  $time_of_birth = $_POST["time_of_birth"];
  $am_pm = $_POST["am_pm"];
  $father_name = $_POST["father_name"];
  $mother_name = $_POST["mother_name"];
  $spouse_name = $_POST["spouse_name"];
  $mobile_number = $_POST["mobile_number"];
  $email_id = $_POST["email_id"];
  $specific_instructions = $_POST["specific_instructions"];
  $country = $_POST["country"];
  $location = $_POST["location"];
  $latitude =$_POST["latitude"];
  $longitude = $_POST["longitude"];
  $timezone = $_POST["timezone"];
$service_name = $_POST['service_name'];
  //$service_value = $_POST['service_value'];
  $service_value = 8000;

  // Do something with the retrieved form data
  // ...

  // Redirect or display a success message
  // ...
}
?>
<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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


<div class="container pt-5">
  <div class="row">
<center><h2>You have chosen the following services:</h2> </center>
<center> <p class = "pt-3">Service Name: <?php echo $_POST['service_name']; ?></p> </center>
<center><p>Service Value: <?php echo $_POST['service_value']; ?></p> </center>

<form action="payment.php" method="POST">
  <!-- Hidden input fields for service name and service value -->
  <input type="hidden" name="service_name" value="<?php echo $_POST['service_name']; ?>">
  <input type="hidden" name="service_value" value="<?php echo $_POST['service_value']; ?>">
  
  

  <div class="row">
    <div class="col mb-3 mt-3">
      <label for="first_name">First name*</label>
      <input type="text" class="form-control" name="first_name" value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ''; ?>">
    </div>
    <div class="col mb-3 mt-3">
      <label for="surname">Surname/Second name*</label>
      <input type="text" class="form-control" name="surname" value="<?php echo isset($_POST['surname']) ? $_POST['surname'] : ''; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col mb-3 mt-3">
      <label for="date_of_birth">Date of birth*</label>
      <input type="date" class="form-control" name="date_of_birth" value="<?php echo isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : ''; ?>">
    </div>
    <div class="col mb-3 mt-3">
      <!-- <label for="place_of_birth">Place of birth*</label> -->
      <!-- <input type="text" class="form-control" name="place_of_birth" value="<?php echo isset($_POST['place_of_birth']) ? $_POST['place_of_birth'] : ''; ?>"> -->
      
                     
        <div id="location-dropdown">
    <label for="location">Place Of Birth:</label>
    <!--<input type="text" id="location" autocomplete="off">-->
    <input type="text" class="form-control" name="location" value="<?php echo isset($_POST['location']) ? $_POST['location'] : ''; ?>">
    <div id="location-dropdown-content"></div>
  </div>
                    </div>
    </div>
    <div class="row">
    <div class="col mb-3 mt-3">
         
             <label for="country">Country:</label>
             <input type="text" class="form-control" name="country" value="<?php echo isset($_POST['country']) ? $_POST['country'] : ''; ?>">
         
  </div>
  <div class="col mb-3 mt-3">
         
         <label for="latitude">Latitude:</label>
         <input type="text" class="form-control" name="latitude" value="<?php echo isset($_POST['latitude']) ? $_POST['latitude'] : ''; ?>">
     
</div>
<div class="col mb-3 mt-3">
         
         <label for="longitude">Longitude:</label>
         <input type="text" class="form-control" name="longitude" value="<?php echo isset($_POST['longitude']) ? $_POST['longitude'] : ''; ?>">
     
</div>

<div class="col mb-3 mt-3">
         
         <label for="timezone">Timezone:</label>
         <input type="text" class="form-control" name="timezone" value="<?php echo isset($_POST['timezone']) ? $_POST['timezone'] : ''; ?>">
     
</div>

  </div>



    

  <div class="row">
    <div class="col mb-3 mt-3">
      <label for="time_of_birth">Time of birth*</label>
      <input type="time" class="form-control" name="time_of_birth" value="<?php echo isset($_POST['time_of_birth']) ? $_POST['time_of_birth'] : ''; ?>">
    </div>
    <div class="col mb-3 mt-3">
      <label for="am_pm">AM/PM</label>
      <select class="form-control" name="am_pm" id="time-input">
        <option value="AM" <?php echo isset($_POST['am_pm']) && $_POST['am_pm'] === 'AM' ? 'selected' : ''; ?>>AM</option>
        <option value="PM" <?php echo isset($_POST['am_pm']) && $_POST['am_pm'] === 'PM' ? 'selected' : ''; ?>>PM</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col mb-3 mt-3">
      <label for="father_name">Father name*</label>
      <input type="text" class="form-control" name="father_name" value="<?php echo isset($_POST['father_name']) ? $_POST['father_name'] : ''; ?>">
    </div>
    <div class="col mb-3 mt-3">
      <label for="mother_name">Mother name*</label>
      <input type="text" class="form-control" name="mother_name" value="<?php echo isset($_POST['mother_name']) ? $_POST['mother_name'] : ''; ?>">
    </div>
  </div>
  <div class="mb-3 mt-3">
    <label for="spouse_name">Husband/Wife name</label>
    <input type="text" class="form-control" id="spouse_name" name="spouse_name" value="<?php echo isset($_POST['spouse_name']) ? $_POST['spouse_name'] : ''; ?>">
  </div>
  <div class="row">
    <div class="col mb-3 mt-3">
      <label for="mobile_number">Mobile number*</label>
      <input type="text" class="form-control" name="mobile_number" value="<?php echo isset($_POST['mobile_number']) ? $_POST['mobile_number'] : ''; ?>">
    </div>
    <div class="col mb-3 mt-3">
      <label for="email_id">Email ID*</label>
      <input type="text" class="form-control" name="email_id" value="<?php echo isset($_POST['email_id']) ? $_POST['email_id'] : ''; ?>">
    </div>
  </div>
  <div class="mb-3 mt-3">
    <label for="specific_instructions">Specific instruction for name</label>
    <input type="text" class="form-control" id="specific_instructions" name="specific_instructions" value="<?php echo isset($_POST['specific_instructions']) ? $_POST['specific_instructions'] : ''; ?>">
  </div>
  
  
<!-- Make sure you have included the jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Your HTML code for the coupon input field and the apply coupon button -->
<div class="col mb-3 mt-3">
  <label for="coupon_code">Coupon Code</label>
  <input type="text" class="form-control" name="coupon_code" id="coupon_code">
  <input type="button" class="btn btn-dark" id="apply_coupon" name="apply_coupon" style="background-color: purple; color: white; font-weight: bold; justify-content: center;" value="Apply Coupon">
</div>

<script>
$(document).ready(function() {
  // Attach a click event listener to the "apply_coupon" button
  $("#apply_coupon").click(function() {
    // Get the coupon code entered by the user
    var couponCode = document.getElementById('coupon_code').value;
    var serviceValue = 8000; // Change this to get the service value from the appropriate element

    // Use AJAX to send the coupon code and service value to the server-side PHP script (coupon_apply.php)
    $.ajax({
      url: 'coupon_apply.php', // URL of the PHP file to handle the coupon code
      method: 'POST',
      data: { coupon_code: couponCode, service_value: serviceValue },
      dataType: 'json',
      success: function(response) {
        if (response.valid) {
          // If the coupon is valid, update the displayed coupon discount using JavaScript
          var couponDiscount = response.discount;
          var currentServiceValue = parseFloat(serviceValue);
         // document.getElementById('service_value').value = currentServiceValue - couponDiscount;
         var service_value = currentServiceValue - couponDiscount;
          // Display a message to the user indicating the coupon discount has been applied
          alert('Coupon discount of ' + couponDiscount + ' applied!');
          alert('service_value ' + service_value + ' !');
          
        } else {
          // If the coupon is invalid or expired, show an error message to the user
          alert('Invalid or expired coupon code.');
        }
      },
     error: function(jqXHR, textStatus, errorThrown) {
  // Handle any errors that occurred during the AJAX request
  if (jqXHR.status === 0) {
    alert('Not connected. Verify network.');
  } else if (jqXHR.status == 404) {
    alert('Requested page not found (404).');
  } else if (jqXHR.status == 500) {
    alert('Internal Server Error (500).');
  } else if (textStatus === 'parsererror') {
    alert('Requested JSON parse failed.');
  } else if (textStatus === 'timeout') {
    alert('Time out error.');
  } else if (textStatus === 'abort') {
    alert('Ajax request aborted.');
  } else {
    alert('Uncaught Error.\n' + jqXHR.responseText);
  }
}

    });
  });
});
</script>






    


   
  <div class="form-check mb-3 mt-3">
    <center><input class="form-check-input" type="checkbox" value="" id="terms_and_conditions"> 
     <label class="form-check-label" for="terms_and_conditions">I agree to the terms and conditions</label> </center>
  </div>
  
  <!-- Terms and Conditions Modal -->
  <div class="modal fade" id="terms_and_conditions_modal" tabindex="-1" role="dialog" aria-labelledby="terms_and_conditions_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="terms_and_conditions_modal_label">Terms and Conditions</h5> 
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.

</p>
                  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary" onclick="acceptTermsAndConditions()">Accept</button>
        </div>
      </div>
    </div>
  </div>

 <center> <button type="submit" class="btn btn-dark" id="payment_button" style="background-color: purple; color: white; font-weight: bold;justify-content: center;" disabled>Proceed to Payment</button> </center>
</form>
</div>
</div>


<!-- Include jQuery and Bootstrap JavaScript -->
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
  // Handle terms and conditions checkbox
  const termsCheckbox = document.getElementById('terms_and_conditions');
  const paymentButton = document.getElementById('payment_button');
  termsCheckbox.addEventListener('change', function() {
    if (termsCheckbox.checked) {
      showTermsAndConditionsModal();
      paymentButton.disabled = true;
    } else {
      paymentButton.disabled = true;
    }
  });

  // Show terms and conditions modal
  function showTermsAndConditionsModal() {
    const modal = document.getElementById('terms_and_conditions_modal');
    $(modal).modal('show');
  }

  // Handle 'OK' button click in terms and conditions modal
  function acceptTermsAndConditions() {
    const modal = document.getElementById('terms_and_conditions_modal');
    $(modal).modal('hide');
    paymentButton.disabled = false;
  }
</script>
 <?php include("footer.php"); ?>

   
  
</body>

</html>