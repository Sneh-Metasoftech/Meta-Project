<?php
    include("db.php");
    // session_start();
    // if(@$_SESSION['username']==""){
    //     session_destroy();
    //     echo '<script>
    //                 location.href="login.php"
    //         </script>';
    // }

session_start();

// Set the session duration (in seconds)
$inactive = 300; // 3 minutes

if (isset($_SESSION['loggedin']) && isset($_SESSION['username'])) {
    // Check if the timeout has been set
    if (isset($_SESSION['timeout'])) {
        // Calculate the session's lifetime
        $session_life = time() - $_SESSION['timeout'];

        // If the session life exceeds the inactive time, log the user out
        if ($session_life > $inactive) {
            session_unset();    // Unset all session variables
            session_destroy();  // Destroy the session
            header("Location: logout.php"); // Redirect to logout page
            exit();
        }
    }

    // Reset the timeout if the user is still active
    $_SESSION['timeout'] = time();

    // Display the username and dashboard content
    echo "Welcome, " . $_SESSION['username'] . "!<br>";
    echo "You are on the dashboard. You'll be logged out automatically after 3 minutes of inactivity.";
} else {
    // If user is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}


?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from thepixelcurve.com/html/techwix/techwix/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2024 10:03:55 GMT -->
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
        /* Blinking animation */
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Class that will make the timer blink */
        .blinking {
            animation: blink 1s infinite; /* Blink every 1 second */
            color: red; /* Change color to red while blinking */
        }
    </style>

<body>

    <div class="main-wrapper">


    <!-- Header Start  -->
    <?php
         include("header.php");
         ?>
 <!-- Header End  -->
 <?php 
  if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $txt =mysqli_real_escape_string($db,$_POST['text']);
    $author = $_POST['author'];
    $cate = $_POST['category'];
    $img = $_FILES['image'] ['name'];
    $img_tmp = $_FILES['image'] ['tmp_name'];
    date_default_timezone_set("Asia/Kolkata");
    $creadted=date("Y-m-d H:i:s"); 
    $insert ="insert into post (title,slug,content,author_id,category_id,featured_image,create_at) value ('$title','$slug','$txt','$author','$cate','$img','$creadted')";
    
    $query= mysqli_query($db,$insert);
    if($query){
        move_uploaded_file("$img_tmp","blog/".$img);
        echo '<script>
                location.href="";
               Swal.fire({
                    title: "Success!",
                    text: "your Blog has been Uploaded Sucessfully !",
                    icon: "success",
                    showConfirmButton: true,
                    
                    });
               
            </script>';
    }
    else{
        echo 'your blog inserted failed..!';
    }
    
    
  }
  // echo '<pre>';
    // print_r($insert);
    // echo '</pre>';
    // die;
?>

        <!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-image: url(assets/images/web.jpeg);">
            <div class="shape-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="944px" height="894px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="88.295%" x2="0%" y1="0%" y2="46.947%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)" d="M39.612,410.76 L467.344,29.824 C516.51,-13.476 590.638,-9.93 633.938,39.613 L914.192,317.344 C957.492,366.50 953.109,440.637 904.402,483.938 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z" />
                    <path fill="url(#PSgrad_0)" d="M39.612,410.76 L467.344,29.824 C516.51,-13.476 590.638,-9.93 633.938,39.613 L914.192,317.344 C957.492,366.50 953.109,440.637 904.402,483.938 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z" />
                </svg>
            </div>
            <div class="shape-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="726.5px" height="726.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.302" fill="none" d="M28.14,285.269 L325.37,21.217 C358.860,-8.851 410.655,-5.808 440.723,28.14 L704.777,325.36 C734.846,358.859 731.802,410.654 697.979,440.722 L400.955,704.776 C367.132,734.844 315.338,731.802 285.269,697.978 L21.216,400.954 C-8.852,367.132 -5.808,315.337 28.14,285.269 Z" />
                </svg>
            </div>
            <div class="shape-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="515px" height="515px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="0%" x2="89.879%" y1="0%" y2="43.837%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)" d="M19.529,202.280 L230.531,14.698 C254.559,-6.661 291.353,-4.498 312.714,19.528 L500.295,230.531 C521.656,254.558 519.493,291.353 495.466,312.713 L284.463,500.295 C260.436,521.655 223.641,519.492 202.281,495.465 L14.699,284.462 C-6.660,260.435 -4.498,223.640 19.529,202.280 Z" />
                    <path fill="url(#PSgrad_0)" d="M19.529,202.280 L230.531,14.698 C254.559,-6.661 291.353,-4.498 312.714,19.528 L500.295,230.531 C521.656,254.558 519.493,291.353 495.466,312.713 L284.463,500.295 C260.436,521.655 223.641,519.492 202.281,495.465 L14.699,284.462 C-6.660,260.435 -4.498,223.640 19.529,202.280 Z" />
                </svg>
            </div>
            <div class="shape-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="972.5px" height="970.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M38.245,381.102 L435.258,28.158 C480.467,-12.32 549.697,-7.964 589.888,37.244 L942.832,434.257 C983.23,479.466 978.955,548.697 933.746,588.888 L536.733,941.832 C491.524,982.23 422.293,977.955 382.103,932.745 L29.158,535.732 C-11.32,490.523 -6.963,421.293 38.245,381.102 Z" />
                </svg>
            </div>
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Blog</h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ul>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->
<br><br><br><br>


<section>

            <div class="container mtt">
                <h2 class="text-center">Blog Section</h2>
                <h2 id="timer">Time remaining: 3m 0s</h2>
    <h4>You are on the dashboard. You'll be logged out automatically after 3 minutes of inactivity.</h4>
            <div class="container-6  mtt mtl">
    
                <form  action="#"  method="post" enctype="multipart/form-data" class="p-1 " style="box-shadow: 0px 4px 7px 1px;border-radius: 10px; padding:15px!important;">
                <h3 style="color:red; background-color:yellow;margin:0;padding:0;text-align:center;">Welcome Admin  <?php echo($_SESSION['username'])?></h3>
                <div class="mb-3" style="margin-top: 10px;">
                    <!-- <label for="exampleFormControlInput1" class="form-label">Name:</label> -->
                    <input type="text" class="form-control" name="title" placeholder="Enter the Blog Title" required>
                </div>

                <div class="mb-3">
                    <!-- <label for="exampleFormControlInput1" class="form-label">Category:</label> -->
                    <input type="text" class="form-control" name="slug" placeholder="Enter the Blog Slug" required>
                </div>    

                <div class="mb-3">
                    <!-- <label for="exampleFormControlInput1" class="form-label">Category:</label> -->
                    <textarea class="form-control" name="text" aria-label="With textarea" placeholder="Enter the Blog Text-Content" required></textarea>
                </div>  

                <div class="mb-3">
                    <!-- <label for="exampleFormControlInput1" class="form-label">Category:</label> -->
                    <input type="text" class="form-control" name="author" value="<?php echo($_SESSION['username'])?>" placeholder="Enter the Blog Author Id" readonly>
                </div>  

                <div class="mb-3">
                    
              
                <select class="form-select" name="category" aria-label="Default select example"required>
                        <option selected> </option>
                        <option value="event">Event</option>
                            <option value="technology">Technology</option>
                            <option value="inovation">Innovation</option>
                            <option value="learning">Learning</option>
                            <option value="information">Information</option>
</select>
                </div>  

                

                <div class="mb-3">
                    <!-- <label for="exampleFormControlInput1" class="form-label">Category:</label> -->
                    <input type="file" class="form-control" name="image" placeholder="Enter the Blog featured image" required>
                </div> 

              

                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    <button name="danger" class="btn btn-success"><a href="dashboard.php">Dashboard</a></button>
                    <button name="submit" class="btn btn-danger"><a href="logout.php">Logout </a></button>
                 </div>
                </form>
            </div>
            </div>
               
</section>

        <?php
       
       include("footer.php");
?>
       <script>
        // Set the countdown timer duration (in seconds)
        const countdownDuration = 300; // 3 minutes
        let timeRemaining = countdownDuration;

        function updateTimer() {
            const minutes = Math.floor(timeRemaining / 60);
            const seconds = timeRemaining % 60;

            // Display the time remaining
            const timerElement = document.getElementById("timer");
            timerElement.innerText = `Time remaining: ${minutes}m ${seconds}s`;

            // Start blinking if 1 minute or less is remaining
            if (timeRemaining <= 120) {
                timerElement.classList.add('blinking');
            }

            if (timeRemaining <= 0) {
                clearInterval(timerInterval);
                // Automatically log out
                window.location.href = 'logout.php'; // Redirect to logout page
            }

            timeRemaining--;
        }

        // Update the timer every second
        const timerInterval = setInterval(updateTimer, 1000);
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


<!-- Mirrored from thepixelcurve.com/html/techwix/techwix/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2024 10:03:57 GMT -->
</html>