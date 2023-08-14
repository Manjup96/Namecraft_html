<!doctype html>
<html lang="en">
<?php include("head_links.php");

?>

<?php

include('config.php');



require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;





// Declare the variables as global
global  $full_name, $email, $subject, $services, $message, $entry_time,  $to, $from, $body, $subject, $website_name, $website_url;




// Define $mail_admin and $mail_user as global variables
global $mail_admin, $mail_user;

// Create $mail_admin and $mail_user objects
$mail_admin = new PHPMailer(true);
$mail_user = new PHPMailer(true);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $services = $_POST['services'];
    $message = $_POST['message'];

        
        if (!empty($full_name) && !empty($email) && !empty($services)) {

    $query = mysqli_query($con, "INSERT INTO contact_us (full_name, email, subject, services, message) values('$full_name','$email','$subject', '$services','$message')");


    if ($query) {

        // $mail_user = new PHPMailer(true);

        try {
            // SMTP Configuration for Gmail
            $mail_user->isSMTP();
            $mail_user->Host = 'smtp.titan.email';
            $mail_user->Port = 465;
            $mail_user->SMTPAuth = true;
            $mail_user->SMTPSecure = 'ssl';
            $mail_user->Username = 'manjuprasad@iiiqbets.com';
            $mail_user->Password = 'OlIrHLI09N';





            // Email Content
            $website_name = "Namecraft";
            $website_url = "https:/iiiqai.com/Namecraft_html/";
            //$website_url = "http://localhost/oneWorldHr/index.php";

            // Your email sending code here
            $to = $email;

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "From: Namecraft <" . $from . ">" . "\r\n";
            $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";


            $subject  = "Thank you for contacting us on $website_name - $website_url";

            $body = "<html>";
            $body .= "<head></head>";
            $body .= "<body>";
            $body = "<p>Dear $full_name,\n\n</p>";
            $body .= "<p>Thank you for contacting us on $website_name . We are glad to have you as a member of our community. Our team is here to serve you and provide assistance whenever needed.\n\n</p>";

            $body .= "<p>Your contact Details for $website_name : \n\n</p>";
            $body .= "<table style='border-collapse: collapse;'>";
            $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Full Name:</td><td style='padding: 5px; border: 1px solid black;'>$full_name</td></tr>";
            $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Email:</td><td style='padding: 5px; border: 1px solid black;'>$email</td></tr>";
            $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Subject:</td><td style='padding: 5px; border: 1px solid black;'>$subject</td></tr>";
            $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Services:</td><td style='padding: 5px; border: 1px solid black;'>$services</td></tr>";
            $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Message:</td><td style='padding: 5px; border: 1px solid black;'>$message</td></tr>";
            $body .= "</table>";

            $body .= "<p>If you have any questions or need any help, please feel free to contact us. We look forward to providing you with a great experience on $website_name($website_url).\n\n</p>";
            $body .= "<p>Best regards,\n</p>";
            $body .= "<p>The $website_name Team</p>";
            $body .= "</body>";
            $body .= "</html>";

            // Sender and recipient details




            $mail_user->setFrom('manjuprasad@iiiqbets.com', 'Namecraft_html');

            $mail_user->addAddress($to, $full_name);

            // Email content
            $mail_user->isHTML(true);
            $mail_user->Subject = $subject;
            $mail_user->Body = $body;


            // Send the email
            if ($mail_user->send()) {

                // Create a new $mail_admin variable for sending email to admin
                //$mail_admin = new PHPMailer(true);

                $mail_admin->isSMTP();

                //sending mail throguh hostinger titan with configuration settings 
                $mail_admin->Host = 'smtp.titan.email';
                $mail_admin->Port = 465;
                $mail_admin->SMTPAuth = true;
                $mail_admin->SMTPSecure = 'ssl';
                $mail_admin->Username = 'manjuprasad@iiiqbets.com';
                $mail_admin->Password = 'OlIrHLI09N';




                $subject  = "User Contacted on  - $website_name";

                $body = "<html>";
                $body .= "<head></head>";
                $body .= "<body>";
                $body .= "<p>Dear Admin,</p>";
                $body .= "<p>Contacted  User  Details for $website_name:</p>";
                $body .= "<table style='border-collapse: collapse;'>";
                $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Full Name:</td><td style='padding: 5px; border: 1px solid black;'>$full_name</td></tr>";
                $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Email:</td><td style='padding: 5px; border: 1px solid black;'>$email</td></tr>";
                $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Subject:</td><td style='padding: 5px; border: 1px solid black;'>$subject</td></tr>";
                $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Services:</td><td style='padding: 5px; border: 1px solid black;'>$services</td></tr>";
                $body .= "<tr><td style='padding: 5px; border: 1px solid black;'>Message:</td><td style='padding: 5px; border: 1px solid black;'>$message</td></tr>";
                $body .= "</table>";
                $body .= "<p>Best regards,<br>The $website_name Team</p>";
                $body .= "</body>";
                $body .= "</html>";


                // Sender and recipient details


                $mail_admin->setFrom('manjuprasad@iiiqbets.com', 'Namecraft_html');


                // $mail_admin->addAddress(" info@oneworldhrin.com", 'Admin');
                $mail_admin->addAddress("manjuprasad@iiiqbets.com", 'Admin');
                //$mail_user->addAddress("ssy.balu@gmail.com", Admin);

                // Email content
                $mail_admin->isHTML(true);
                $mail_admin->Subject = $subject;
                $mail_admin->Body = $body;

                if ($mail_admin->send()) {
                    echo '
                    <script>
            function showModal() {
                var myModal = new bootstrap.Modal(document.getElementById("thankYouModal"));
                myModal.show();
            }
            window.onload = showModal;
        </script>
        ';
                    echo '
        <!-- Modal -->
        <div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="thankYouModalLabel">Your message has been submitted successfully</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Thank you, we will get back to you soon.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        ';
                }
            } else {
                echo "<script>alert('Email sending failed: " . $mail_user->ErrorInfo . "');</script>";
                echo "<script type='text/javascript'> document.location ='contact.php'; </script>";
            }
        } catch (Exception $e) {
            echo "<script>alert('Email sending failed: " . $mail_user->ErrorInfo . "');</script>";
            echo "<script type='text/javascript'> document.location ='contact.php'; </script>";
        }
    } else {
        echo "<script>alert('Unable to complete contact process. Please try  agian.');</script>";
        echo "<script type='text/javascript'> document.location ='contact.php'; </script>";
    }
}
}

?>

<style>
    .error {
        color: red;
        size: 80%
    }

    .hidden {
        display: none;
    }

    .mandatory-symbol {
        color: red;
    }

    /* .contact-info {
        text-align: center;
    }

    .contact-info div {
        margin-bottom: 20px;
    }

    .contact-info h2 {
        margin-bottom: 5px;
    } */

    .card {
        box-shadow: 0 2px 4px #007bff;
    }

    /* contact form style */
    .bg-secondary {
        background-color: #f8f9fa;
    }

    .php-email-form {
        width: 100%;
        box-shadow: 0 0 20px 0 #007bff;
        padding: 30px;
        background: #fff;
    }

    .php-email-form .form-floating {
        padding-bottom: 8px;
    }

    .php-email-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .php-email-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .php-email-form .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
    }

    .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #18d26e;
        border-top-color: #eee;
        -webkit-animation: animate-loading 1s linear infinite;
        animation: animate-loading 1s linear infinite;
    }

    .php-email-form input,
    .php-email-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
    }

    .php-email-form input {
        height: 44px;
    }

    .php-email-form textarea {
        padding: 10px 12px;
    }


    .php-email-form button[type="submit"] {
        background: #600060;
        border: 0;
        padding: 10px 24px;
        color: #fff;
        transition: 0.4s;
        border-radius: 15px;
    }

    .php-email-form button[type="submit"]:hover {
        background: #600060;
    }

    /* contact style endss */

    html,
    body {
        overflow-x: hidden;
    }
</style>

<body>
    <!-- navbar start -->
    <?php
    $page = 'contact';
    include 'navbar.php';

    ?>
   <div id="innerPageBanner">
    <img src="images/single_banner1.png" class="banner-image" alt="Banner Image" >
    <div class="banner-overlay"></div>
    <div class="banner-content">
        <h2 style="font-size:80px;font-family:montserrat;font-weight:bold;">Contact</h2>
    </div>
</div>
    <!-- contact start -->

    <div class="container-fluid bg-light px-0 text-center d-flex justify-content-center"> <!-- Added class "d-flex justify-content-center" -->
        <div class="row g-0">
            <div class="col-lg-12 py-6 px-5">
                <h1 class="display-5 mb-4 pt-5">Get In Touch</h1>



                <form method="POST" action="#" class="php-email-form pt-5" id="responsive_view">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border border-dark" id="name" name="full_name" placeholder="Name" onkeyup="validateNameForm()">
                                <label for="form-floating-1">Full Name <span class="mandatory-symbol">*</span></label>
                                <div id="name_error" class="error hidden">Please Enter a Valid Name</div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border border-dark" id="email" name="email" placeholder="Email" onkeyup="validateEmailForm()">
                                <label for="form-floating-2">Email Address <span class="mandatory-symbol">*</span></label>
                                <div id="email_error" class="error hidden">Please Enter a Valid Email </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border border-dark" id="subject" name="subject" placeholder="Subject" onkeyup="validateSubjectForm()">
                                <label for="form-floating-2">Subject </label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-control border border-dark" id="services" name="services">
                                    <option value="" selected disabled>Choose a service</option>
                                    <option value="Baby name correction">Baby name correction</option>
                                    <option value="Lucky name correction">Lucky name correction</option>
                                    <option value="Lucky date delivery">Lucky date delivery</option>
                                    <option value="Name analysis">Name analysis</option>
                                    <!-- Add more options as needed -->
                                </select>
                                <label for="services">Services <span class="mandatory-symbol">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-12">


                            <div class="form-floating">
                                <textarea class="form-control border border-dark" name="message" placeholder="Message" id="tArea" style="height: 150px" oninput="limitChar(this)" maxlength="150"></textarea>
                                <label for="message">Message (Max 150 characters)</label>

                            </div>
                        </div>

                        <div class="col-12">
                            <button class=" fs-5" type="submit">Send Email</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- contact ends -->

    <!-- media icons -->


    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-map-marker-alt fa-2x d-flex justify-content-center mb-3"></i>
                        <h4 class="text-center">Address:</h4>
                        <!-- <p class="text-center fs-5">No 664, 5th Cross road,<br> Koramangala 4th block,<br> Bengaluru-560034</p> -->
                        <p class="text-center fs-5">
                            Number 654, 5ft Cross,</br>
                            4th block, Koramangala</br>
                            Near Maharaja Signal,</br>
                            Bangaluru-560034</br>


                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-1">

            </div>

            <div class="col-sm-8 col-md-3 pt-2">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-instagram fa-2x d-flex justify-content-center mb-3"></i>
                        <h4 class="text-center">Instagram:</h4>
                        <p class="text-center fs-5">sheelaambajaj</p>
                    </div>
                </div>
            </div>

            <div class="col-md-1">

            </div>

            <div class="col-sm-8 col-md-3 pt-2">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-phone fa-2x d-flex justify-content-center mb-3"></i>
                        <h4 class="text-center">Mobile:</h4>
                        <p class="text-center fs-5">+91-8880030213</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- media icons end-->


    <!-- map & address starts -->
    <div class="container-fluid bg-light pb-3 pt-5 mt-5">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3502.9424023490756!2d77.18340307434593!3d28.6015046756817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sA9%2C%201st%20floor%2C%20Malcha%20Marg%2C%20Chanakyapuri%2C%20New%20Delhi-%20110021!5e0!3m2!1sen!2sin!4v1686239309371!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124440.57691830404!2d77.53763210639211!3d12.922625484182667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1554df96be99%3A0xbc16940514de3df5!2sName%20Craft!5e0!3m2!1sen!2sin!4v1688198017930!5m2!1sen!2sin" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-1">

            </div>
            <div class="col-lg-5 pt-2" style="min-height: 400px;">

                <div class="contact_message content border border-dark rounded p-3" style="box-shadow: 0 0 24px 0 #007bff;border-radius:10px;">
                    <div class="text-center">
                        <img src="images/final-logo.png" alt="Logo" style="height:80px;width:300px;">
                    </div>
                    <ul class="pt-5">
                        <li style="font-size:25px;color:black"><i class="fa fa-map-marker"></i>
                            Number 654, 5ft Cross,</br>
                            4th block, Koramangala</br>
                            Near Maharaja Signal,</br>
                            Bangaluru-560034</br>


                        </li>

                        </br>
                        <li style="font-size:25px"><i class="fa fa-phone"></i><a href="tel:+91-8880030213"> +91&nbsp;&nbsp;8880030213</a></li>
                        </br>
                        <li style="font-size: 25px">
                            <i class="fab fa-instagram"></i>
                            <a href="https://www.instagram.com/your_instagram_account">sheelaambajaj</a>
                        </li>

                    </ul>


                </div>
            </div>
        </div>
    </div>
    <!-- map & address Ends -->







    <?php include("footer.php"); ?>

    <script>
        function validateName(input_str) {
            var re = /^([a-zA-Z ]){2,30}$/

            return re.test(input_str);
        }

        function validateNameForm(event) {
            var name = document.getElementById('name').value;
            console.log(name)
            if (!validateName(name)) {
                document.getElementById('name_error').classList.remove('hidden');
            } else {
                document.getElementById('name_error').classList.add('hidden');

            }

        }

        document.getElementById('myform').addEventListener('submit', validateNameForm);


        // function validateMobile(input_str) {
        //     var re = /^(\+\d{1,3}[- ]?)?\d{10}$/;

        //     return re.test(input_str);
        // }

        // function validateMobileForm(event) {
        //     var mobile = document.getElementById('mobile').value;
        //     console.log(mobile)
        //     if (!validateMobile(mobile)) {
        //         document.getElementById('mobile_error').classList.remove('hidden');
        //     } else {
        //         document.getElementById('mobile_error').classList.add('hidden');

        //     }

        // }

        // document.getElementById('myform').addEventListener('submit', validateMobileForm);

        function validateEmail(input_str) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            return re.test(input_str);
        }

        function validateEmailForm(event) {
            var email = document.getElementById('email').value;
            console.log(email)
            if (!validateEmail(email)) {
                document.getElementById('email_error').classList.remove('hidden');
            } else {
                document.getElementById('email_error').classList.add('hidden');

            }

        }

        document.getElementById('myform').addEventListener('submit', validateEmailForm);


        // script for message
        let limitChar = (element) => {
            const maxChar = 20;

            let ele = document.getElementById(element.id);
            let charLen = ele.value.length;

            let p = document.getElementById('charCounter');
            p.innerHTML = maxChar - charLen + ' characters remaining';

            if (charLen > maxChar) {
                ele.value = ele.value.substring(0, maxChar);
                p.innerHTML = 0 + ' characters remaining';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Redirect after alert is closed
            const closeButton = document.querySelector("#thankYouModal .btn.btn-danger");
            closeButton.addEventListener("click", function() {
                window.location.href = "contact.php";
            });
        });
    </script>

    <script>
        function showSelectedService() {
            var selectElement = document.getElementById('services');
            var selectedService = selectElement.options[selectElement.selectedIndex].text;
            var selectedServiceElement = document.getElementById('selectedService');
            selectedServiceElement.innerHTML = selectedService;
        }
    </script>
    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the unique identifier exists in the session
        if (isset($_SESSION['form_submission']) && $_SESSION['form_submission'] === $_POST['submission_id']) {
            echo "Form already submitted!";
            exit();
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "namecraft_html_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $services = $_POST['services'];
        $message = $_POST['message'];

        // Set the timezone to Indian Standard Time
        $timezone = new DateTimeZone('Asia/Kolkata');

        // Create a new DateTime object with the current date and time
        $current_time = new DateTime('now', $timezone);

        // Format the date and time in Indian format
        $entry_time = $current_time->format('d-m-Y H:i:s');

        // Prepare and bind the insert statement
        $stmt = $conn->prepare("INSERT INTO contact_us (full_name, email, subject, services, message, entry_time) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $full_name, $email, $subject, $services, $message, $entry_time);

        // Execute the insert statement
        if ($stmt->execute()) {
            echo "Data inserted successfully!";

            // Generate a unique identifier
            $submission_id = uniqid();

            // Store the unique identifier in the session
            $_SESSION['form_submission'] = $submission_id;
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>


</body>

</html>