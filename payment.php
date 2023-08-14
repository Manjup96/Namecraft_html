<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('config.php');
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



global $first_name, $surname, $date_of_birth, $place_of_birth, $time_of_birth, $am_pm, $father_name, $mother_name, $spouse_name, $mobile_number, $email_id, $specific_instructions, $service_name, $service_value;

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
  
  
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

  if (isset($_POST['payment'])) 
        {
            
            
  // Generate order number and other details
  $orderno = mt_rand(100000000, 999999999);
  $txnType = "Cash";
  $txnNumber = "Bhagath123";
  $razorpay_payment_id = "testing1234";
  
          // Insert into leads table
        $sql = "INSERT INTO leads (first_name, surname, date_of_birth, place_of_birth, time_of_birth, am_pm, service_name, service_value, isReportGenerated, father_name, mother_name, spouse_name, mobile_number, email_id, specific_instructions)
          VALUES ('$first_name', '$surname', '$date_of_birth', '$place_of_birth', '$time_of_birth', '$am_pm', '$service_name', '$service_value', 'No', '$father_name', '$mother_name', '$spouse_name', '$mobile_number', '$email_id', '$specific_instructions')";

        // Insert into ordersdetails table
        $query = "INSERT INTO ordersdetails (orderNumber, name, email, contactno, service_name, service_value, txnType, txnNumber, razorpay_payment_id)
          VALUES ('$orderno', '$first_name', '$email_id', '$mobile_number', '$service_name', '$service_value', '$txnType', '$txnNumber', '$razorpay_payment_id')";

// Perform the insertions
if (mysqli_query($con, $sql) && mysqli_query($con, $query)) {
    // Insertion successful, send email notifications
    $website_name = "NAME CRAFT";
    $website_url = "https://iiiqai.com/Namecraft_html/";
    
    // Create $mail_admin and $mail_user objects
    $mail_admin = new PHPMailer(true);
    $mail_user = new PHPMailer(true);

    try {
      // SMTP Configuration for Gmail
      $mail_user->isSMTP();
      $mail_user->Host = 'smtp.titan.email';
      $mail_user->Port = 465;
      $mail_user->SMTPAuth = true;
      $mail_user->SMTPSecure = 'ssl';
      $mail_user->Username = 'manjuprasad@iiiqbets.com';
      $mail_user->Password = 'OlIrHLI09N';
      $mail_user->setFrom('manjuprasad@iiiqbets.com', 'NAME CRAFT');
      $mail_user->addAddress($email_id, $first_name);
      $mail_user->isHTML(true);
      
      // Email to user
      $subject = "Your Order completed successfully for $website_name ($website_url) - Order Number: $orderno";
      $body = "<html>";
      $body .= "<head></head>";
      $body .= "<body>";
      $body .= "<p>Dear $first_name,</p>";
      $body .= "<p>Thank you for your order on $website_name. We are pleased to confirm your order with the following details:</p>";
      $body .= "<table style='border-collapse: collapse;'>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Service Name:</td><td style='padding: 5px; border: 1px solid black;'>$service_name</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Service Value:</td><td style='padding: 5px; border: 1px solid black;'>$service_value</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Order Number:</td><td style='padding: 5px; border: 1px solid black;'>$orderno</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>First Name:</td><td style='padding: 5px; border: 1px solid black;'>$first_name</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Surname:</td><td style='padding: 5px; border: 1px solid black;'>$surname</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Date of Birth:</td><td style='padding: 5px; border: 1px solid black;'>$date_of_birth</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Place of Birth:</td><td style='padding: 5px; border: 1px solid black;'>$place_of_birth</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Time of Birth:</td><td style='padding: 5px; border: 1px solid black;'>$time_of_birth</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>AM/PM:</td><td style='padding: 5px; border: 1px solid black;'>$am_pm</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Father Name:</td><td style='padding: 5px; border: 1px solid black;'>$father_name</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Mother Name:</td><td style='padding: 5px; border: 1px solid black;'>$mother_name</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Husband/Wife Name:</td><td style='padding: 5px; border: 1px solid black;'>$spouse_name</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Mobile Number:</td><td style='padding: 5px; border: 1px solid black;'>$mobile_number</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Email ID:</td><td style='padding: 5px; border: 1px solid black;'>$email_id</td></tr>";
$body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Specific Instructions:</td><td style='padding: 5px; border: 1px solid black;'>$specific_instructions</td></tr>";
$body .= "</table>";

      $body .= "<p>Please keep this email for your reference. If you have any questions or need further assistance, please feel free to contact us. We look forward to serving you.</p>";
      $body .= "<p>Best regards,</p>";
      $body .= "<p>The $website_name Team</p>";
      $body .= "</body>";
      $body .= "</html>";
      
      $mail_user->Subject = $subject;
      $mail_user->Body = $body;
      
      if (!$mail_user->send()) {
        throw new Exception('Failed to send email to user: ' . $mail_user->ErrorInfo);
      }
      
      // Email to admin
      $mail_admin->isSMTP();
      $mail_admin->Host = 'smtp.titan.email';
      $mail_admin->Port = 465;
      $mail_admin->SMTPAuth = true;
      $mail_admin->SMTPSecure = 'ssl';
      $mail_admin->Username = 'manjuprasad@iiiqbets.com';
      $mail_admin->Password = 'OlIrHLI09N';
      $mail_admin->setFrom('manjuprasad@iiiqbets.com', 'NAME CRAFT');
      $mail_admin->addAddress('bhagath.koduri@iiiqbets.com', 'Admin');
      $mail_admin->isHTML(true);
      
      $subject = "New Order completed successfully for $website_name ($website_url) - Order Number: $orderno";
      $body = "<html>";
      $body .= "<head></head>";
      $body .= "<body>";
      $body .= "<p>Dear Admin,</p>";
      $body .= "<p>New order on $website_name. The order details:</p>";
     $body .= "<table style='border-collapse: collapse;'>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Service Name:</td><td style='padding: 5px; border: 1px solid black;'>$service_name</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Service Value:</td><td style='padding: 5px; border: 1px solid black;'>$service_value</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Order Number:</td><td style='padding: 5px; border: 1px solid black;'>$orderno</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>First Name:</td><td style='padding: 5px; border: 1px solid black;'>$first_name</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Surname:</td><td style='padding: 5px; border: 1px solid black;'>$surname</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Date of Birth:</td><td style='padding: 5px; border: 1px solid black;'>$date_of_birth</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Place of Birth:</td><td style='padding: 5px; border: 1px solid black;'>$place_of_birth</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Time of Birth:</td><td style='padding: 5px; border: 1px solid black;'>$time_of_birth</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>AM/PM:</td><td style='padding: 5px; border: 1px solid black;'>$am_pm</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Father Name:</td><td style='padding: 5px; border: 1px solid black;'>$father_name</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Mother Name:</td><td style='padding: 5px; border: 1px solid black;'>$mother_name</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Husband/Wife Name:</td><td style='padding: 5px; border: 1px solid black;'>$spouse_name</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Mobile Number:</td><td style='padding: 5px; border: 1px solid black;'>$mobile_number</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Email ID:</td><td style='padding: 5px; border: 1px solid black;'>$email_id</td></tr>";
    $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Specific Instructions:</td><td style='padding: 5px; border: 1px solid black;'>$specific_instructions</td></tr>";
    $body .= "</table>";

      $body .= "</body>";
      $body .= "</html>";
      
      $mail_admin->Subject = $subject;
      $mail_admin->Body = $body;
      
      if (!$mail_admin->send()) {
        throw new Exception('Failed to send email to admin: ' . $mail_admin->ErrorInfo);
      }
      
      // Both emails sent successfully, redirect to a success page
      echo '<script>alert("Your order was placed successfully. Order number: ' . $orderno . '");</script>';
      echo "<script type='text/javascript'> document.location ='index.php'; </script>";
      exit;
    } 
catch (Exception $e) {
  echo "<script>alert('Email sending failed: " . $e->getMessage() . "');</script>";
  echo "<script type='text/javascript'> document.location ='payment.php'; </script>";
}
}

else {
  // Query execution failed, display the error message
  $error_message = mysqli_error($con);
  echo '<script>';
  echo 'alert("Query execution failed: ' . $error_message . '");';
  echo '</script>';
}
}
}
?>

<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
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
<p>Service Name: <?php echo isset($_POST['service_name']) ? $_POST['service_name'] : ''; ?></p>
<p>Service Value: <?php echo isset($_POST['service_value']) ? $_POST['service_value'] : ''; ?></p>


<div>
  <h3>Payment </h3>
  <form action="payment.php" method="POST">
  <!-- Include the necessary input fields for the global variables -->
  <input type="hidden" name="first_name" value="<?php echo $first_name; ?>">
  <input type="hidden" name="surname" value="<?php echo $surname; ?>">
  <input type="hidden" name="date_of_birth" value="<?php echo $date_of_birth; ?>">
  <input type="hidden" name="place_of_birth" value="<?php echo $place_of_birth; ?>">
  <input type="hidden" name="time_of_birth" value="<?php echo $time_of_birth; ?>">
  <input type="hidden" name="am_pm" value="<?php echo $am_pm; ?>">
  <input type="hidden" name="father_name" value="<?php echo $father_name; ?>">
  <input type="hidden" name="mother_name" value="<?php echo $mother_name; ?>">
  <input type="hidden" name="spouse_name" value="<?php echo $spouse_name; ?>">
  <input type="hidden" name="mobile_number" value="<?php echo $mobile_number; ?>">
  <input type="hidden" name="email_id" value="<?php echo $email_id; ?>">
  <input type="hidden" name="specific_instructions" value="<?php echo $specific_instructions; ?>">
  <input type="hidden" name="service_name" value="<?php echo $service_name; ?>">
  <input type="hidden" name="service_value" value="<?php echo $service_value; ?>">
  <!-- Include other input fields -->

  <!-- Submit button -->
  <input type="submit" name="payment" value="Payment">
</form>

</div>




 <?php include("footer.php"); ?>

   


        
    </script>

</body>

</html>