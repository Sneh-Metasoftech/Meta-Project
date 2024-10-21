<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Meta Softtech Private Limited</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>
<style>
    .sp{
        font-size:small;
    }
.buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 50px !important;
    margin-left: -335px;
}

.btn-primary {
     background-color:#0040dab3 !important;
    
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    font-size: 16px;
}

.btn-primary:hover {
    background-color: #086ad8 !important;
    color:white;
}

.btn-secondary {
    background-color:#0040dab3 !important;
    border: 2px solid #1f5aea !important;
    color: white !important;
    padding: 12px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    font-size: 16px;
}

.btn-secondary:hover {
    background-color: #086ad8 !important;
    color:white;
}
 #more, #additionalText {
    display: none; /* Initially hide the additional content */
}
       /* Basic container adjustments */
       .techwix-service-section-03 {
            background-image: url(assets/images/bg/service-bg3.jpg);
            padding: 50px 0;
        }

        /* Smaller box container */
        .service-wrap-03 .row {
            --bs-gutter-y: 1.5rem;
        }

        /* Smaller service box */
        .service-item-03 {
            width: 200px;
            height: 250px;
            perspective: 1000px;
            position: relative;
            margin: 0 auto;
        }

        /* Flip effect */
        .service-item-03 .service-content,
        .service-item-03 .service-back {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            backface-visibility: hidden;
            transition: transform 0.6s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Front of the flip box */
        .service-item-03 .service-content {
            background-color: #ffffff;
            z-index: 2;
            transform: rotateY(0deg);
        }

        /* Back of the flip box */
        .service-item-03 .service-back {
            background-color: #f5f5f5;
            transform: rotateY(180deg);
        }

        /* Hover flip effect */
        .service-item-03:hover .service-content {
            transform: rotateY(180deg);
        }

        .service-item-03:hover .service-back {
            transform: rotateY(360deg);
        }

        /* Image adjustment */
        .service-item-03 img {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }

        /* Hide Read More initially */
        .service-item-03 .read-more {
            display: none;
        }

        /* Show Read More on the back after flip */
        .service-back .read-more {
            display: block;
            margin-top: 15px;
        }

        /* Modal styles */
.modal {
  display: none; 
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.7); /* Modal background */
}

.modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 20px;

  width: 35% !important; /* Adjust width */
  position: relative;
  box-shadow: 0px 6px 27px 7px rgb(8 106 216)!important;
  animation: slideIn 0.5s ease; /* Adding animation */
}

@keyframes slideIn {
  from {
    transform: translateY(-100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Close button */
.close {
  position: absolute;
  right: 20px;
  top: 10px;
  font-size: 30px;
  font-weight: bold;
  color: #333;
  cursor: pointer;
  transition: transform 0.3s ease;
}

.close:hover {
  transform: rotate(90deg); /* Animated close button */
  color: red;
}

/* Button hover effect */
.btn-secondary:hover {
  background-color: #007bff;
  color: #fff;
  transition: 0.3s;
}
  /* Preloader container styling */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* Shrinking circle animation */
        .shrink-circle {
            width: 100px;
            height: 100px;
            background-color: #3498db;
            border-radius: 50%;
            animation: shrink 1.5s infinite ease-in-out;
        }

        /* Animation keyframes */
        @keyframes shrink {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(0.5);
            }
            100% {
                transform: scale(1);
            }
        }
        .fot{
                box-shadow: 0px 6px 27px 7px rgb(8 106 216)!important;
                width: 70%;
                padding: 4px 10px;
                margin-left: 188px!important;
        }
        @media only screen and (max-width: 991px) {
            .fot{
                width: 81%;
                margin-left: 50px!important;
            }
        }



          .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form input[type="tel"],
        .contact-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

      

        .contact-form button:hover {
            background-color: #009acd;
        }

</style>
<body>
  <div id="preloader">
        <div class="shrink-circle"></div>
    </div>
<!-- Preloader End -->
  

    <div class="main-wrapper">
          <!-- Header Start  -->
        <?php
         include("header.php");
         ?>
 <!-- Header End  -->
<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['name'])); // Sanitize input
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['sub']));
    $message = htmlspecialchars(trim($_POST['msg']));

    // Load Composer's autoloader
    require 'PHP-Mailer/Exception.php';
    require 'PHP-Mailer/PHPMailer.php';
    require 'PHP-Mailer/SMTP.php';

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tripathisneh8858@gmail.com';
        $mail->Password   = 'guttcodwkyiinwoe'; // Consider using environment variables for security
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('tripathisneh786@gmail.com', 'Meta Softech Private Limited');
        $mail->addAddress('tripathisneh8858@gmail.com', 'Meta Softech');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "Sender Name: $name <br> Sender Email: $email <br> Phone No: $phone <br> Message: $message";

        // Send email
        $mail->send();

        // Show success message
        echo '<script>
            sessionStorage.setItem("formSubmitted", "true"); // Set form submitted flag
            Swal.fire({
                title: "Success!",
                text: "Your request has been submitted successfully!",
                icon: "success",
                showConfirmButton: true
            }).then(() => {
                setTimeout(function () {
                    location.replace(location.href); // This will reload the page without resubmitting the form
                }, 5000); // Wait 5 seconds before redirecting
            });
        </script>';

    } catch (Exception $e) {
        echo '<script>
            Swal.fire({
                title: "Error!",
                text: "Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '",
                icon: "error",
                showConfirmButton: true
            });
        </script>';
    }
}
?>



        <!-- Hero Start -->
        <div class="section techwix-hero-section-03 d-flex align-items-center" style="background-image: url(assets/images/hero-bg3.jpg);">
            
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                           
                            <h2 class="title" data-aos="fade-up" data-aos-delay="800">We transform ideas into technology</h2>
                            <p data-aos="fade-up" data-aos-delay="900">We provide the most responsive and functional IT design for companies and businesses worldwide.</p>
                            <div class="hero-btn" data-aos="fade-up" data-aos-delay="1000">
                                <!-- <a class="btn" href="about.php">Read More</a> -->
                            </div>
       

                        </div>
                        <!-- Hero Content End -->
               
                    </div>
                    <div class="buttons">
            <a href="It-consultant.php" class="btn-primary">Explore innovative IT solutions  <i class="fa-thin  fa fa-arrow-right sp"></i></a>
            <a href="#" class="btn-secondary">Reach out for IT consulting services <i class="fa-thin  fa fa-arrow-down sp"></i></a>
        </div>
                </div>
            
            </div>
        </div>
        <!-- Hero End -->
        
 
 <!-- Modal Popup -->
<!-- Modal Popup -->
<!-- Modal Popup -->
<div id="contactModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="container">
            <!-- Registration Form Start -->
            <div class="contact-form">
               <div class="heading-wrap text-center">
                  <span class="sub-title">Request a quote</span>
                  <h3 class="title">How May We Help You!</h3>
                </div>
              <form action="#" method="post"> <!-- Make sure action points to your PHP script -->
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Single Form Start -->
                      <div class="single-form">
                        <input type="text" placeholder="Name *" name="name" required>
                      </div>
                      <!-- Single Form End -->
                    </div>
                    <div class="col-sm-6">
                      <!-- Single Form Start -->
                      <div class="single-form">
                        <input type="email" placeholder="Email *" name="email" required>
                      </div>
                      <!-- Single Form End -->
                    </div>
                    <div class="col-sm-12">
                      <!-- Single Form Start -->
                      <div class="single-form">
                        <input type="tel" placeholder="Phone" maxlength="10" name="phone" required>
                      </div>
                      <!-- Single Form End -->
                    </div>
                    <div class="col-sm-12">
                      <!-- Single Form Start -->
                      <div class="single-form">
                        <input type="text" placeholder="Subject" name="sub" required>
                      </div>
                      <!-- Single Form End -->
                    </div>
                    <div class="col-sm-12">
                      <!-- Single Form Start -->
                      <div class="single-form">
                        <textarea placeholder="Write A Message" name="msg"></textarea>
                      </div>
                      <!-- Single Form End -->
                    </div>
                    <div class="col-sm-12">
                      <!--  Single Form Start -->
                      <div class="form-btn text-center">
                        <button class="btn" type="submit" name="submit">Send Message</button>
                      </div>
                      <!--  Single Form End -->
                    </div>
                  </div>
                </form>
                
            </div>
            <!-- Registration Form End -->
        </div>
    </div>
</div>


<script>
// Get modal element
var modal = document.getElementById("contactModal");
// Get the button that opens the modal
var btn = document.querySelector(".btn-secondary");
// Get the <span> element that closes the modal
var span = document.querySelector(".close");
// Get the form element
var form = document.querySelector('form');

// Function to clear the form inputs
function clearForm() {
    form.reset(); // Resets all form fields to their default values
}

// When the user clicks the button, open the modal 
btn.onclick = function() {
    clearForm(); // Clear the form inputs each time the modal is opened
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Form submission logic: set a flag in sessionStorage after form is submitted
form.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission for testing

    // Set the flag to indicate the form was submitted
    sessionStorage.setItem('formSubmitted', 'true');

    // Show success message using SweetAlert or any other method you prefer
    Swal.fire({
        title: "Success!",
        text: "Your request has been submitted successfully!",
        icon: "success",
        showConfirmButton: true
    });

    // Clear the form inputs after submission
    clearForm();

    // Redirect after 5 seconds
    setTimeout(function () {
        window.location.href = window.location.href.split("?")[0]; // Redirect to the same page without parameters
    }, 5000);
});

// Check if the form has already been submitted; if not, show the modal
if (!sessionStorage.getItem('formSubmitted')) {
    modal.style.display = "block"; // Optionally show the modal on page load if not submitted
}
</script>
/script>
    <!-- JS
    ============================================ -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/plugins/back-to-top.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/appear.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>



    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
