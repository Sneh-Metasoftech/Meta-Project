<?php
    include("db.php");
    session_start();
    if(@$_SESSION['username']==""){
        session_destroy();
        echo '<script>
                    location.href="login.php"
            </script>';
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
    .ed{
    background-color: #0149ae;
    padding: 6px 30px;
    border-radius: 5px;
    color: white;
    }
    .ed:hover{
        background-color: green;
        color: white;
    }
    .de{
    background-color:red;
    padding: 6px 30px;
    border-radius: 5px;
    color: white;
    }
    .de:hover{
        background-color: burlywood ;
        color: black;
    }
</style>
<body>

    <div class="main-wrapper">


    <!-- Header Start  -->
    <?php
         include("header.php");
         ?>
 <!-- Header End  -->

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

                  
            <div class="containe">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th style="width:27%;">Text-content</th>
                            <!-- <th>Admin</th> -->
                            <th style="width: 22px;">Category</th>
                            <th>Images</th>
                            <th>Date & Time </th>
                            <th>operations</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
            $i=0;
            $slected="select * from post";
            $querys=mysqli_query($db,$slected);
            if(mysqli_num_rows($querys)>0){ 
            while($rows=mysqli_fetch_array($querys)){

          
        ?>
                <tr>
                    <td><?php echo ++$i;?></td>
                    <td><?php echo $rows['title']?></td>
                    <td><?php echo $rows['slug']?></td>
                    <td><?php echo $rows['content']?></td>
                    <!-- <td></td> -->
                    <td><?php echo $rows['category_id']?></td>
                    <td><img src="blog/<?php echo $rows['featured_image'];?>" alt="Lights"  style="width:100px; height:100px;"></td>
                    <td><?php echo $rows['create_at']?></td>
                    <td>
                    <a href="edit.php?edit=<?php echo $rows ['id'];?>" class="ed">Edit</a>

                    <a href="delete.php?del=<?php echo $rows ['id']?>" class="de">Delete</a>
                    </td>
                </tr>
                    </tbody>
                    <?php  } }?>
                </table>
                     <div class="text-center">
                    <button name="insert" class="btn btn-success"><a href="blogs.php">Insert-Blog</a></button>
                     <button name="insert" class="btn btn-success"><a href="logout.php">logout</a></button>
                 </div>
            </div>
                


        <?php
       
       include("footer.php");
?>
        
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