<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form input values
  $first_name = $_POST["first_name"];
  $surname = $_POST["surname"];
  $date_of_birth = $_POST["date_of_birth"];
  $place_of_birth = $_POST["place_of_birth"];
  $time_of_birth = $_POST["time_of_birth"];
  $am_pm = $_POST["am_pm"];
  $father_name = $_POST["father_name"];
  $mother_name = $_POST["mother_name"];
  $spouse_name = $_POST["spouse_name"];
  $mobile_number = $_POST["mobile_number"];
  $email_id = $_POST["email_id"];
  $specific_instructions = $_POST["specific_instructions"];
  
$service_name = $_POST['service_name'];
  $service_value = $_POST['service_value'];

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


<h2>You have chosen the following services:</h2>
<p>Service Name: <?php echo $_POST['service_name']; ?></p>
<p>Service Value: <?php echo $_POST['service_value']; ?></p>

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
      <input type="text" class="form-control" name="date_of_birth" value="<?php echo isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : ''; ?>">
    </div>
    <div class="col mb-3 mt-3">
      <label for="place_of_birth">Place of birth*</label>
      <input type="text" class="form-control" name="place_of_birth" value="<?php echo isset($_POST['place_of_birth']) ? $_POST['place_of_birth'] : ''; ?>">
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
  <div class="form-check mb-3 mt-3">
    <input class="form-check-input" type="checkbox" value="" id="terms_and_conditions">
    <label class="form-check-label" for="terms_and_conditions">I agree to the terms and conditions</label>
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
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p>Suspendisse potenti. Vestibulum sit amet quam et lacus placerat eleifend.</p>
          <p>Nullam accumsan rhoncus est, at malesuada dolor venenatis a.</p>
          <p>Donec semper sodales tristique. Duis pulvinar ipsum nec aliquet consequat.</p>
          <p>Praesent non ipsum at enim eleifend tempus at sit amet velit.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="acceptTermsAndConditions()">Accept</button>
        </div>
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-dark" id="payment_button" disabled>Proceed to Payment</button>
</form>


<!-- Include jQuery and Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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