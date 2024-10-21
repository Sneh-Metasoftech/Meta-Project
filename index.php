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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['sub'];
    $message = $_POST['msg'];

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
    $mail->Password   = 'guttcodwkyiinwoe';
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

    // Instead of showing a success message directly, redirect the user
    echo '<script>
        Swal.fire({
            title: "Success!",
            text: "Your request has been submitted successfully!",
            icon: "success",
            showConfirmButton: true
        });

        setTimeout(function () {
            // Redirect to the same page without query parameters
            window.location.href = window.location.href.split("?")[0]; 
        }, 5000); // Wait 5 seconds before redirecting
    </script>';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
<!-- Service Section Start -->
<div class="section techwix-service-section-03">
    <div class="container">
        <div class="service-wrap-03">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-03">
                        <!-- Front Content -->
                        <div class="service-content">
                            <img src="assets/images/counter-1.png" alt="Infrastructure Technology">
                            <h3 class="title">Infrastructure Technology</h3>
                        </div>
                        <!-- Back Content (Visible on Flip) -->
                        <div class="service-back">
                            <h3 class="title">Infrastructure Technology</h3>
                            <div class="read-more">
                                <a href="infra.php"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-03">
                        <!-- Front Content -->
                        <div class="service-content">
                            <img src="assets/images/ser-icon12.png" alt="Blockchain System">
                            <h3 class="title">Blockchain System</h3>
                        </div>
                        <!-- Back Content -->
                        <div class="service-back">
                            <h3 class="title">Blockchain System</h3>
                            <div class="read-more">
                                <a href="blockchain.php"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-03">
                        <!-- Front Content -->
                        <div class="service-content">
                            <img src="assets/images/counter-2.png" alt="Data Management">
                            <h3 class="title">Data Management</h3>
                        </div>
                        <!-- Back Content -->
                        <div class="service-back">
                            <h3 class="title">Data Management</h3>
                            <div class="read-more">
                                <a href="data-management.php"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-03">
                        <!-- Front Content -->
                        <div class="service-content">
                            <img src="assets/images/ser-icon9.png" alt="IT Consultancy">
                            <h3 class="title">IT Consultancy</h3>
                        </div>
                        <!-- Back Content -->
                        <div class="service-back">
                            <h3 class="title">IT Consultancy</h3>
                            <div class="read-more">
                                <a href="It-consultant.php"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Section End -->

<!-- Service Section (Newly Added) Start -->
<div class="section techwix-service-section-03">
    <div class="container" style="    position: absolute;
    left: 0;
    right: 0;
    bottom:0;
    top:1381px;" >
        <!-- Service Wrap Start -->
        <div class="service-wrap-03">
            <div class="row" style="--bs-gutter-y: 1.0rem;">
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-03">
                        <!-- Front Content -->
                        <div class="service-content">
                            <div class="choose-us-img">
                                <img src="assets/images/counter-3.png" alt="">
                            </div>
                            <h3 class="title">Data Science</h3>
                        </div>
                        <!-- Back Content -->
                        <div class="service-back">
                            <h3 class="title">Data Science</h3>
                            <div class="read-more">
                                <a href="#"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-03">
                        <!-- Front Content -->
                        <div class="service-content">
                            <div class="choose-us-img">
                                <img src="assets/images/ser-icon10.png" alt="">
                            </div>
                            <h3 class="title">IT Security</h3>
                        </div>
                        <!-- Back Content -->
                        <div class="service-back">
                            <h3 class="title">IT Security</h3>
                            <div class="read-more">
                                <a href="#"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-03">
                        <!-- Front Content -->
                        <div class="service-content">
                            <div class="choose-us-img">
                                <img src="assets/images/ser-icon21.png" alt="">
                            </div>
                            <h3 class="title">IT Management</h3>
                        </div>
                        <!-- Back Content -->
                        <div class="service-back">
                            <h3 class="title">IT Management</h3>
                            <div class="read-more">
                                <a href="it-management.php"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-03">
                        <!-- Front Content -->
                        <div class="service-content">
                            <div class="service-img">
                                <img src="assets/images/ser-icon22.png" alt="">
                            </div>
                            <h3 class="title">Data Securet</h3>
                        </div>
                        <!-- Back Content -->
                        <div class="service-back">
                            <h3 class="title">Data Securet</h3>
                            <div class="read-more">
                                <a href="#" class="toggle-description" data-show-text="Read More" data-hide-text="Read Less"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
        <!-- Service Wrap End -->
    </div>
</div>
<!-- Service Section (Newly Added) End -->


        <!-- About Start -->
        <div class="section techwix-about-section-04 section-padding">
            <div class="shape-1"></div>
            <div class="container">
                <!-- About Wrapper Start -->
                <div class="about-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- About Content Wrap Start -->
                            <div class="about-content-wrap">
                                <div class="section-title">
                                    <h3 class="sub-title">Who we are</h3>
                                    <h2 class="title">Highly Tailored IT Design, Management & Support Services.</h2>
                                </div>
                                <p class="text">
    We are a dynamic IT consulting and software development company committed to delivering innovative and tailored technology solutions. Our mission is to empower businesses by transforming their ideas into high-quality software products and enhancing their digital presence through expert IT consulting services.
</p>
<div id="hiddenContent">
    <p class="text" id="text">
        With a team of experienced developers, business analysts, and tech consultants, we offer a unique blend of technical expertise and industry knowledge. From startups to established enterprises, we collaborate closely with our clients to understand their goals and challenges, providing customized solutions that drive growth, 
        <span id="dots"> </span><span id="more" style="display: none;">Our expertise spans across a range of industries and technologies, ensuring that we remain at the forefront of the rapidly evolving tech landscape. We pride ourselves on delivering reliable, scalable, and secure solutions that meet the specific needs of each client.
    
    
        At the heart of our approach is a dedication to agility, collaboration, and excellence. We believe in building long-term partnerships with our clients, ensuring their success through continuous support, cutting-edge technology, and a commitment to delivering results that exceed expectations. Whether you're looking to optimize your IT infrastructure, develop custom software, or streamline your operations, we are here to guide you through every step of the digital transformation journey.
        </span>
        <a onclick="readMore()" id="readMoreBtn" style="color:#086ad8; text-decoration :underline">Read more</a>
    </p>
</div>


                              
                                <!-- About Author Info Wrap Start -->
                                <!-- <div class="about-author-info-wrap">
                                    <div class="about-author">
                                        <img src="assets/images/sign.png" alt="">
                                        <h3 class="name text-center">Amit Ramteke</h3>
                                        <span class="designation text-center"><p class="text-center">CEO, The Meta Softech Pvt Ltd.</p></span>
                                    </div>
                                    <div class="about-info">
                                        <p>Call to ask any question </p>
                                        <h3 class="number">07714919414</h3>
                                    </div>
                                </div> -->
                                <!-- About Author Info Wrap End -->
                            </div>
                            <!-- About Content Wrap End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- About Image Wrap Start -->
                            <div class="about-img-wrap">
                                <div class="play-btn-02">
                                    <a class="popup-video" href="https://www.youtube.com/watch?time_continue=3&amp;v=_X0eYtY8T_U"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="about-img about-img-big">
                                    <img src="assets/images/technology-logo/web1.jpeg" alt="">
                                </div>
                                <div class="about-img about-img-sm">
                                    <img src="assets/images/technology-logo/web2.jpeg" alt="">
                                </div>
                            </div>
                            <!-- About Image Wrap End -->
                          
                        </div>
                    </div>
                </div>
                <!-- About Wrapper End -->
            </div>
        </div>
        <!-- About End -->

        <!-- Counter Start -->
        <div class="section techwix-counter-section-02">
            <div class="container" style="padding-top: 50px;">
                <div class="counter-wrap">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter">
                                <div class="counter-img">
                                    <img src="assets/images/counter-1.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <span class="counter">1790</span>
                                    <p>Happy clients</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter">
                                <div class="counter-img">
                                    <img src="assets/images/counter-2.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <span class="counter">491</span>
                                    <p>Finished projects</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter">
                                <div class="counter-img">
                                    <img src="assets/images/counter-3.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <span class="counter">245</span>
                                    <p>Skilled Experts</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter single-counter-4">
                                <div class="counter-img">
                                    <img src="assets/images/counter-1.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <span class="counter">1090</span>
                                    <p>Media Posts</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->

        <!-- Choose Us Start -->
        <div class="section techwix-choose-us-section section-padding" style="background-image: url(assets/images/bg/choose-us-bg.jpg);">
            <div class="container">
                <!-- Choose Us Wrap Start -->
                <div class="choose-us-wrap">
                    <div class="section-title text-center">
                        <h3 class="sub-title">REASON TO CHOOSE US</h3>
                        <h2 class="title">We provide truly prominent IT solutions.</h2>
                    </div>
                    <div class="choose-us-content-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Choose Us Item Start -->
                                <div class="choose-us-item">
                                    <div class="choose-us-img">
                                        <img src="assets/images/choose-us1.jpg" alt="">



                                        <div class="choose-us-content">
                                            <h3 class="title">Information managemnet system</h3>
                                            <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your software development needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Choose Us Item End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Choose Us Item Start -->
                                <div class="choose-us-item">
                                    <div class="choose-us-img">
                                        <img src="assets/images/choose-us2.jpg" alt="">
                                        <div class="choose-us-content">
                                            <h3 class="title">Information Database Security</h3>
                                            <p>Database security safeguards data through encryption, access controls, and monitoring to prevent unauthorized access and ensure data integrity and availability</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Choose Us Item End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Choose Us Item Start -->
                                <div class="choose-us-item">
                                    <div class="choose-us-img">
                                       <img src="assets/images/choose-us3.jpg" alt="">
                                        <div class="choose-us-content">
                                            <h3 class="title">Multifunctional Technology</h3>
                                            <p>Multifunctional technology integrates multiple capabilities or functions into a single device or system, enhancing efficiency and versatility across various tasks.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Choose Us Item End -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Choose Us Wrap End -->
            </div>
        </div>
        <!-- Choose Us End -->

        <!-- Skill Start -->
        <div class="section techwix-skill-section-02 section-padding">
            <div class="container">
                <div class="skill-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Skill Left Start -->
                            <div class="skill-left">
                                <div class="section-title">
                                    <h2 class="title">Preparing for your success, we provide truly prominent IT solutions</h2>
                                </div>
                                <div class="experience-wrap">
                                    <div class="experience">
                                        <h2 class="number">25</h2>
                                        <span>Years of <br> experience</span>
                                    </div>
                                    <div class="experience-text">
                                        <p>We focus on your success by offering cutting-edge IT solutions that enhance efficiency, innovation, and business growth..</p>
                                        <!-- <a class="learn-more" href="#">learn More About Us <i class="fas fa-long-arrow-alt-right"></i></a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Skill Left End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Skill Right Start -->
                            <div class="skill-right">
                                <div class="counter-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skill-item">
                                        <span class="title">IT Managment</span>
                                        <div class="skill-bar">
                                            <div class="bar-inner">
                                                <div class="bar progress-line color-1" data-width="80">
                                                    <span class="skill-percent"><span class="counter">80</span>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                    <!-- Skill Item Start -->
                                    <div class="skill-item">
                                        <span class="title">Data Security</span>
                                        <div class="skill-bar">
                                            <div class="bar-inner">
                                                <div class="bar progress-line color-1" data-width="95">
                                                    <span class="skill-percent"><span class="counter">95</span>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                    <!-- Skill Item Start -->
                                    <div class="skill-item">
                                        <span class="title">Information Technology</span>
                                        <div class="skill-bar">
                                            <div class="bar-inner">
                                                <div class="bar progress-line color-1" data-width="80">
                                                    <span class="skill-percent"><span class="counter">80</span>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                    <!-- Skill Item Start -->
                                    <div class="skill-item">
                                        <span class="title">Technology Consultant</span>
                                        <div class="skill-bar">
                                            <div class="bar-inner">
                                                <div class="bar progress-line color-1" data-width="90">
                                                    <span class="skill-percent"><span class="counter">90</span>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                            </div>
                            <!-- Skill Right End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skill End -->

        <!-- Case Study Start -->
        <!-- <div class="section techwix-case-study-section-02 section-padding" style="background-image: url(assets/images/bg/case-study-bg.jpg);">
            <div class="container">
                <div class="case-study-wrap">
                    <div class="section-title text-center">
                        <h3 class="sub-title">From our Case studies</h3>
                        <h2 class="title white">We delivered best solution</h2>
                    </div>
                </div>
            </div>
           
            <div class="case-study-content-wrap">
                <div class="swiper-container case-study-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          
                            <div class="single-case-study-02">
                                <div class="case-study-img">
                                    <img src="assets/images/case-4.jpg" alt="">
                                </div>
                                <div class="case-study-content">
                                    <p class="sub-title">Database Security</p>
                                    <h3 class="title"><span>Structure</span> <br> <span>of Malnufication</span></h3>
                                    <p class="text">Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your </p>
                                </div>
                            </div>
                         
                        </div>
                        <div class="swiper-slide">
                            
                            <div class="single-case-study-02">
                                <div class="case-study-img">
                                    <img src="assets/images/case-5.jpg" alt="">
                                </div>
                                <div class="case-study-content">
                                    <p class="sub-title">Database Security</p>
                                    <h3 class="title"><span>Multifunctional</span> <br> <span>of Technology</span></h3>
                                    <p class="text">Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your </p>
                                </div>
                            </div>
                      
                        </div>
                        <div class="swiper-slide">
                           
                            <div class="single-case-study-02">
                                <div class="case-study-img">
                                    <a href="#"><img src="assets/images/case-6.jpg" alt=""></a>
                                </div>
                                <div class="case-study-content">
                                    <p class="sub-title">Database Security</p>
                                    <h3 class="title"><span>Blockchain</span> <br> <span>of technology</span></h3>
                                    <p class="text">Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            >
        </div> -->
        <!-- Case Study End -->

        <!-- Testimonial Start  -->
        <div class="section techwix-testimonial-section-02 techwix-testimonial-section-03 section-padding-02">
            <div class="container">
                <!-- Testimonial Wrap Start  -->
                <div class="testimonial-wrap-02">
                    <div class="section-title text-center">
                        <h3 class="sub-title">Testimonial</h3>
                        <h2 class="title">20k+ satisfied clients worldwide</h2>
                    </div>
                    <div class="testimonial-content-wrap-02">
                        <div class="swiper-container testimonial-02-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!--  Single Testimonial Start  -->
                                    <div class="single-testimonial-02">
                                        <!-- <div class="testimonial-thumb">
                                            <img src="assets/images/testi-3.jpg" alt="">
                                        </div> -->
                                        <div class="testimonial-content">
                                            <img src="assets/images/testi-icon.png" alt="">
                                            <p>Impressive IT services. The team is professional, skilled, and delivered on time, improving our system's security and performance.</p>
                                            <span class="name">Shashank Tripathi </span>
                                            <span class="designation"></span>
                                        </div>
                                    </div>
                                    <!--  Single Testimonial End  -->
                                </div>
                                <div class="swiper-slide">
                                    <!--  Single Testimonial Start  -->
                                    <div class="single-testimonial-02">
                                        <!-- <div class="testimonial-thumb">
                                            <img src="assets/images/testi-4.jpg" alt="">
                                        </div> -->
                                        <div class="testimonial-content">
                                            <img src="assets/images/testi-icon.png" alt="">
                                            <p>Outstanding IT company with knowledgeable team. Delivered reliable, efficient solutions on time, greatly enhancing our business operations. Highly recommend! </p>
                                            <span class="name">Ajeet Kumar Pandey </span>
                                            <span class="designation"> </span>
                                        </div>
                                    </div>
                                    <!--  Single Testimonial End  -->
                                </div>
                                <div class="swiper-slide">
                                    <!--  Single Testimonial Start  -->
                                    <div class="single-testimonial-02">
                                        <!-- <div class="testimonial-thumb">
                                            <img src="assets/images/testi-3.jpg" alt="">
                                        </div> -->
                                        <div class="testimonial-content">
                                            <img src="assets/images/testi-icon.png" alt="">
                                            <p>Excellent IT company! Provided innovative solutions, responsive support, and seamless project delivery. Boosted our business efficiency significantly.</p>
                                            <span class="name">Anirudh Narayan </span>
                                            <span class="designation"> </span>
                                        </div>
                                    </div>
                                    <!--  Single Testimonial End  -->
                                </div>
                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Wrap End  -->
            </div>
        </div>
        <!-- Testimonial End  -->

        <!-- Brand Logo Start -->
        <div class="section techwix-brand-section techwix-brand-section-03">
            <div class="container">
                <!-- Brand Wrapper Start -->
                <div class="brand-wrapper text-center">

                    <!-- Brand Active Start -->
                    <div class="brand-active">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-1.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-2.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-3.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-4.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-5.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-2.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                            </div>
                        </div>
                    </div>
                    <!-- Brand Active End -->
                </div>
                <!-- Brand Wrapper End -->
            </div>
        </div>
        <!-- Brand Logo End -->

        <!-- Team Start -->
        <div class="section techwix-team-section section-padding-02">
            <div class="container">
                <!-- Team Wrap Start -->
                <div class="team-wrap">
                    <div class="section-title text-center">
                        <h3 class="sub-title">Our expert team </h3>
                        <h2 class="title"> We have world expert team</h2>
                    </div>
                    <!-- Team Content Wrap Start -->
                    <div class="team-content-wrap">
                        <div class="swiper-container team-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Single Team Start -->
                                    <div class="single-team">
                                        <div class="team-img">
                                        <img src="assets/images/team/team-1.jpg" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name text-white">Andrew <br> Max Fetcher</h3>
                                            <span class="designation">CEO, techwix</span>
                                            <div class="team-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Team Start -->
                                    <div class="single-team">
                                        <div class="team-img">
                                            <img src="assets/images/team/team-2.jpg" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name text-white">Arnold <br> human</h3>
                                            <span class="designation">CEO, techwix</span>
                                            <div class="team-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Team Start -->
                                    <div class="single-team">
                                        <div class="team-img">
                                            <img src="assets/images/team/team-3.jpg" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name text-white">Mike <br> Holder</h3>
                                            <span class="designation">CEO, techwix</span>
                                            <div class="team-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Team Start -->
                                    <div class="single-team">
                                        <div class="team-img">
                                        <img src="assets/images/team/team-4.jpg" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name text-white">Joakim <br> Ken</h3>
                                            <span class="designation">CEO, techwix</span>
                                            <div class="team-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team End -->
                                </div>
                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Team Content Wrap End -->
                </div>
                <!-- Team Wrap End -->
            </div>
        </div>
        <!-- Team End -->

        <!-- Blog Start -->
        <!-- <div class="section techwix-blog-section section-padding-02">
            <div class="container"> -->
                <!-- Section Title Start -->
                <!-- <div class="section-title text-center">
                    <h4 class="sub-title">latest Blog</h4>
                    <h2 class="title">From the news room</h2>
                </div> -->
                <!-- Section Title End -->
                <!-- <div class="techwix-blog-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6"> -->
                            <!-- Single Blog Start -->
                            <!-- <div class="single-blog">
                                <div class="blog-image">
                                    <a href="blog-details.php"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>08</span>Aug</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="fas fa-user"></i> <a href="#">Andrew Paker</a></span>
                                        <span><i class="far fa-comments"></i> 0 Comments</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.php">How to become a successful businessman </a></h3>
                                    <div class="blog-btn">
                                        <a class="blog-btn-link" href="blog-details.php">Read Full <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Single Blog End -->
                        <!-- </div>
                        <div class="col-lg-4 col-md-6"> -->
                            <!-- Single Blog Start -->
                            <!-- <div class="single-blog">
                                <div class="blog-image">
                                    <a href="blog-details.php"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>10</span>Aug</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="fas fa-user"></i> <a href="#">Andrew Paker</a></span>
                                        <span><i class="far fa-comments"></i> 0 Comments</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.php">Who Needs Extract Value From Data? </a></h3>
                                    <div class="blog-btn">
                                        <a class="blog-btn-link" href="blog-details .php">Read Full <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Single Blog End -->
                        <!-- </div>
                        <div class="col-lg-4 col-md-6"> -->
                            <!-- Single Blog Start -->
                            <!-- <div class="single-blog">
                                <div class="blog-image">
                                    <a href="blog-details.php"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>12</span>Aug</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="fas fa-user"></i> <a href="#">Andrew Paker</a></span>
                                        <span><i class="far fa-comments"></i> 0 Comments</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.php">Easy and Most Powerful Server and Platform.</a></h3>
                                    <div class="blog-btn">
                                        <a class="blog-btn-link" href="blog-details .php">Read Full <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Single Blog End -->
                        <!-- </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->
      
          <!-- footer Start -->
          <?php
                include("footer.php");
            ?>
             <!-- footer End -->

 <!-- back to top start -->
 <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

    </div>
<script>
    // Get modal element
    // Check if the form was already submitted in this session
if (!sessionStorage.getItem('formSubmitted')) {
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Show success message
        Swal.fire({
            title: "Success!",
            text: "Your request has been submitted successfully!",
            icon: "success",
            showConfirmButton: true
        });

        // Set form submission flag
        sessionStorage.setItem('formSubmitted', 'true');

        // Clear the form inputs
        form.reset();

        // Redirect after 5 seconds
        setTimeout(function () {
            window.location.href = window.location.href.split("?")[0];
        }, 5000);
    });
}

// Optional: Clear form submission flag when reloading the page or opening the form again
window.onload = function() {
    sessionStorage.removeItem('formSubmitted'); // Clear the submission flag if you want
};

var modal = document.getElementById("contactModal");
// Get the button that opens the modal
var btn = document.querySelector(".btn-secondary");
// Get the <span> element that closes the modal
var span = document.querySelector(".close");

// When the user clicks the button, open the modal 
btn.onclick = function() {
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

//     document.addEventListener('DOMContentLoaded', function () {
//     const toggleLinks = document.querySelectorAll('.toggle-description');

//     toggleLinks.forEach(link => {
//         link.addEventListener('click', function (e) {
//             e.preventDefault();

//             const shortDescription = this.closest('.service-content').querySelector('.short-description');
//             const fullDescription = this.closest('.service-content').querySelector('.full-description');
            
//             if (fullDescription.style.display === 'none' || fullDescription.style.display === '') {
//                 fullDescription.style.display = 'block';
//                 shortDescription.style.display = 'none';
//                 this.innerHTML = '<i class="fas fa-minus"></i> Read Less';
//             } else {
//                 fullDescription.style.display = 'none';
//                 shortDescription.style.display = 'block';
//                 this.innerHTML = '<i class="fas fa-plus"></i> Read More';
//             }
//         });
//     });
// });





function readMore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var additionalText = document.getElementById("additionalText");
    var btnText = document.getElementById("readMoreBtn");

    if (dots.style.display === "none") {
        // Collapse the text
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
        additionalText.style.display = "none"; // Hide additional text
    } else {
        // Expand the text
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
        additionalText.style.display = "block"; // Show additional text
    }
}

</script>
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


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>