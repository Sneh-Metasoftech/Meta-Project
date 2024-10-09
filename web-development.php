<?php
include("db.php");
?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from thepixelcurve.com/html/techwix/techwix/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2024 10:03:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Meta Softech Private Limited</title>
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


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>
<style>
    .star-rating .fa-star,
    .star-rating .fa-star-half-alt {
        color: #FFD700;
        /* Gold color for yellow stars */
    }

    /* Change the color of the carousel control icons to red */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(32%) sepia(100%) saturate(5268%) hue-rotate(360deg) brightness(100%) contrast(105%);
    }



  .zigzag-section {
      padding: 50px 0;
    }

    .zigzag-section .row:nth-child(even) .content {
      order: 2;
    }

    .zigzag-section img {
      width: 100%;
      height: auto;
    }

    /* Fade-in animations for left and right */
    .fade-in-left {
      opacity: 0;
      transform: translateX(-50px);
      transition: opacity 1s ease, transform 1s ease;
    }

    .fade-in-right {
      opacity: 0;
      transform: translateX(50px);
      transition: opacity 1s ease, transform 1s ease;
    }

    /* Add visible class when in view */
    .visible {
      opacity: 1;
      transform: translateX(0);
    }
</style>

<body>

    <div class="main-wrapper">


        <!-- Header Start  -->
        <?php
        include("header.php");
        ?>
        <!-- Page Banner Start -->
<div class="section page-banner-section" style="background-image: url(assets/images/bg/ihhh.jpg);">
<div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title text-black">Website and Web Application Development</h2>
                                <!-- <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Career</li>
                                </ul> -->
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>

</div>
<section class="zigzag-section">
    <div class="container">
      
      <!-- Zigzag Block 1 -->
      <div class="row align-items-center mb-5">
        
        <div class="col-md-6 content fade-in-right">
        <h1>Website Development</h1>
        
        <h2>Introduction to Website Development</h2>
        <p>Website development refers to the process of building and maintaining websites for the internet. It includes aspects such as web design, web content creation, client-side/server-side scripting, and network security configuration.</p>

        <h2>Front-end Development</h2>
        <p>Front-end development involves the part of a website that users interact with directly. Technologies like HTML, CSS, and JavaScript are used to design the layout, style, and functionality of a webpage.</p>

        </div>


        <div class="col-md-6 fade-in-left">
          <img src="https://media.licdn.com/dms/image/D5612AQEhKguQVjXr4g/article-cover_image-shrink_600_2000/0/1693971265825?e=2147483647&v=beta&t=vRAWRIEHIp6sKRbLxQ_QmHTgjmTRYhj8vOLwlhskjzg" alt="Image 1">
        </div>
      </div>

      <!-- Zigzag Block 2 -->
      <div class="row align-items-center mb-5">
      <div class="col-md-6 fade-in-right">
          <img src="https://img.freepik.com/premium-vector/web-developer-illustration-concept-flat-illustration-isolated-white-background_701961-2117.jpg" alt="Image 2">
        </div>
        <div class="col-md-6 content fade-in-left">
        <h1>Web Application Development</h1>
        
        <h2>What is a Web Application?</h2>
        <p>A web application is software that runs on a web server and can be accessed through a web browser. Examples include Gmail, Google Docs, and Facebook.</p>

        <h2>Testing and Deployment</h2>
        <p>Before launching a web application, thorough testing is required to ensure there are no bugs. Once testing is complete, the web application is deployed on a web server for public access.</p>
        </div>
       
      </div>

      
      
    </div>
  </section>
        <!-- Header End  -->
     
        <!-- Testimonials Slider Section -->
        <section id="testimonials" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">What Our Clients Say</h2>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- First Testimonial -->
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p class="card-text">"Excellent service and fast delivery!"</p>
                                            <h5 class="card-title">- John Doe</h5>
                                            <!-- Star Rating -->
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i> <!-- 4 stars out of 5 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Testimonial -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p class="card-text">"Highly recommend for anyone looking for quality products."</p>
                                            <h5 class="card-title">- Jane Smith</h5>
                                            <!-- Star Rating -->
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i> <!-- 5 stars -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Third Testimonial -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p class="card-text">"Great experience overall. Will shop again!"</p>
                                            <h5 class="card-title">- Sam Johnson</h5>
                                            <!-- Star Rating -->
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i> <!-- 3.5 stars -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Logo Slider Section -->
        <section id="logo-slider" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Our Technologies</h2>
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <<div class="carousel-item active">
                            <div class="d-flex justify-content-around">
                                <div>
                                    <img src="assets/images/technology-logo/html.png" alt="Logo 1" class="img-fluid" style="max-height: 100px;">
                                    <h4 class="text-center">HTML5</h4>
                                </div>
                                <div>
                                    <img src="assets/images/technology-logo/css.png" alt="Logo 2" class="img-fluid" style="max-height: 100px;">
                                    <h4 class="text-center">CSS3</h4>
                                </div>
                                <div>
                                    <img src="assets/images/technology-logo/angular.png" alt="Logo 3" class="img-fluid" style="max-height: 100px;">
                                    <h4 class="text-center">Angular</h4>
                                </div>
                            </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-around">
                            <div>
                                <img src="assets/images/technology-logo/laravel logo.png" alt="Logo 4" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center">Laravel</h4>
                            </div>
                            <div>
                                <img src="assets/images/technology-logo/node.png" alt="Logo 5" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center">Node.js</h4>
                            </div>
                            <div>
                                <img src="assets/images/technology-logo/php.png" alt="Logo 6" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center">PHP</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-around">
                            <div>
                                <img src="assets/images/technology-logo/react.png" alt="Logo 7" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center">React</h4>
                            </div>
                            <div>
                                <img src="assets/images/technology-logo/wordpress.png" alt="Logo 8" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center">WordPress</h4>
                            </div>
                            <div>
                                <img src="assets/images/technology-logo/php.png" alt="Logo 9" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center">PHP</h4>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </section>


</body>





<?php
include("footer.php");
?>

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->
<script>
    // JavaScript to add scroll-triggered left/right fade-in effect
    const fadeInLeftElements = document.querySelectorAll('.fade-in-left');
    const fadeInRightElements = document.querySelectorAll('.fade-in-right');

    const observerOptions = {
      threshold: 0.1 // Trigger when 10% of the element is visible
    };

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, observerOptions);

    // Observe each element
    fadeInLeftElements.forEach(el => observer.observe(el));
    fadeInRightElements.forEach(el => observer.observe(el));
  </script>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- FontAwesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
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


<!-- Mirrored from thepixelcurve.com/html/techwix/techwix/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2024 10:03:49 GMT -->

</html>