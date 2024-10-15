<?php
include("db.php");
?>

<!doctype html>
<html class="no-js" lang="en">




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

.mty{
    margin-top: 15px;
}

.hero {
    padding: 100px 20px;
    background: url('hero-bg.jpg') no-repeat center center/cover;
}

.hero h2 {
    font-size: 3rem;
    margin-bottom: 10px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.cta-btn {
    background: #ff6600;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background 0.3s;
}

.cta-btn:hover {
    background: #e55b00;
}

section {
    padding: 60px 20px;
    text-align: center;
}

#about {
    background: #fff;
}

.image-container img {
    width: 100%;
    height: auto;
}

#process .step {
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}

#process .icon {
    flex: 1;
    text-align: center;
}

#process .icon img {
    width: 80px;
    height: 80px;
}

#process .content {
    flex: 3;
    padding: 20px;
    text-align: left;
}

#process .content h3 {
    margin-bottom: 10px;
}


     .service-section {
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        .service-card {
            perspective: 1000px; /* Define perspective for 3D effect */
        }

        .service-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .service-card:hover .service-inner {
            transform: rotateY(180deg); /* Flip the card horizontally on hover */
        }

        .service-front, .service-back {
            position: absolute;
            width: 100%;
            backface-visibility: hidden; /* Hide the backside during the flip */
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }

        .service-front {
            z-index: 2;
        }

        .service-back {
            transform: rotateY(180deg); /* Backside content is rotated */
            z-index: 1;
        }

        .service-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .service-list {
            list-style: none;
            padding-left: 0;
        }

        .service-list li {
            margin-bottom: 10px;
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
<div class="container">
    <h2 class="text-center">Website and Web Application Development</h2>
    <p class="text-center">In today’s digital age, having a robust online presence is essential for every business. At Meta-Softech Private Limited, we specialize in building high-performance websites and dynamic web applications tailored to your unique business needs.</p>
</div>   
   <div class="container">
    <!-- Development Process Section -->
    <section id="process">
        <h2>Our Approach</h2>
        <div class="step">
            <div class="icon"><img src="assets/images/technology-logo/Vision.png" alt="Consultation Icon"></div>
            <div class="content">
                <h3>Step 1: Understanding Your Vision</h3>
                <p>We begin by diving deep into your business objectives and target audience to craft a solution that meets your specific goals.</p>
            </div>
        </div>

        <div class="step">
            <div class="icon"><img src="assets/images/technology-logo/idea.png" alt="Planning Icon"></div>
            <div class="content">
                <h3>Step 2: Planning & Strategy</h3>
                <p>Our development roadmap covers every phase of the project, from wireframes to the final product.</p>
            </div>
        </div>

        <div class="step">
            <div class="icon"><img src="assets/images/technology-logo/ux.png" alt="UX Design Icon"></div>
            <div class="content">
                <h3>Step 3: Design & UX</h3>
                <p>Beautiful, intuitive design that engages users while offering a seamless experience on every device.</p>
            </div>
        </div>

        <!-- Add more steps here as needed -->

    </section>
     </div>
   <div class="container service-section">
        <h1 class="text-center mb-5">Our Services</h1>
        <div class="row">
            <!-- Custom Website Development -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-inner">
                        <!-- Front Side of the Card -->
                        <div class="service-front">
                            <h2 class="service-title">Custom Website Development</h2>
                            <p>Our team of skilled developers and designers works together to create websites that are tailored to your brand's vision.</p>
                        </div>
                        <!-- Back Side of the Card -->
                        <div class="service-back">
                            <h2 class="service-title">Key Features</h2>
                            <ul class="service-list">
                                <li>Responsive design for all devices</li>
                                <li>SEO-optimized to improve visibility</li>
                                <li>Scalable architecture for future expansion</li>
                                <li>Easy-to-navigate UI/UX</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Web Application Development -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-inner">
                        <!-- Front Side of the Card -->
                        <div class="service-front">
                            <h2 class="service-title">Web Application Development</h2>
                            <p>We develop highly scalable, secure, and efficient web applications tailored to meet your business objectives.</p>
                        </div>
                        <!-- Back Side of the Card -->
                        <div class="service-back">
                            <h2 class="service-title">Key Features</h2>
                            <ul class="service-list">
                                <li>Custom-built solutions for your business</li>
                                <li>Cross-browser compatibility</li>
                                <li>Robust security protocols</li>
                                <li>Easy third-party integrations (APIs, payment gateways, etc.)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- E-Commerce Solutions -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-inner">
                        <!-- Front Side of the Card -->
                        <div class="service-front">
                            <h2 class="service-title">E-Commerce Solutions</h2>
                            <p>Boost your online sales with our fully integrated e-commerce development services.</p>
                        </div>
                        <!-- Back Side of the Card -->
                        <div class="service-back">
                            <h2 class="service-title">Key Features</h2>
                            <ul class="service-list">
                                <li>Fully customizable e-commerce platforms</li>
                                <li>Secure payment gateways</li>
                                <li>Product management systems</li>
                                <li>User-friendly admin dashboards</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Management Systems (CMS) -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-inner">
                        <!-- Front Side of the Card -->
                        <div class="service-front">
                            <h2 class="service-title">Content Management Systems (CMS)</h2>
                            <p>Take control of your website's content with our custom CMS development.</p>
                        </div>
                        <!-- Back Side of the Card -->
                        <div class="service-back">
                            <h2 class="service-title">Key Features</h2>
                            <ul class="service-list">
                                <li>Easy-to-use admin interface</li>
                                <li>Quick content updates</li>
                                <li>Multi-language support</li>
                                <li>SEO-friendly structure</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-around">
                                <div>
                                    <img src="assets/images/technology-logo/html.png" alt="Logo 1" class="img-fluid" style="max-height: 100px;">
                                    <h4 class="text-center mty">HTML5</h4>
                                </div>
                                <div>
                                    <img src="assets/images/technology-logo/css.png" alt="Logo 2" class="img-fluid" style="max-height: 100px;">
                                    <h4 class="text-center mty">CSS3</h4>
                                </div>
                                <div>
                                    <img src="assets/images/technology-logo/angular.png" alt="Logo 3" class="img-fluid" style="max-height: 100px;">
                                    <h4 class="text-center mty">Angular</h4>
                                </div>
                            </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-around">
                            <div>
                                <img src="assets/images/technology-logo/laravel logo.png" alt="Logo 4" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center mty">Laravel</h4>
                            </div>
                            <div>
                                <img src="assets/images/technology-logo/node.png" alt="Logo 5" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center mty">Node.js</h4>
                            </div>
                            <div>
                                <img src="assets/images/technology-logo/php.png" alt="Logo 6" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center mty">PHP</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-around">
                            <div>
                                <img src="assets/images/technology-logo/react.png" alt="Logo 7" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center mty">React</h4>
                            </div>
                            <div>
                                <img src="assets/images/technology-logo/wordpress.png" alt="Logo 8" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center mty">WordPress</h4>
                            </div>
                            <div>
                                <img src="assets/images/technology-logo/php.png" alt="Logo 9" class="img-fluid" style="max-height: 100px;">
                                <h4 class="text-center mty">PHP</h4>
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
//css animations
document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.step');

    // Adding a scroll event listener for animations
    window.addEventListener('scroll', () => {
        steps.forEach(step => {
            const rect = step.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                step.classList.add('animate');
            }
        });
    });
});

    
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




<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>



</html>