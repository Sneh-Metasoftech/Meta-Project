<?php
	include("db.php");
	session_start();
   
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


	.box{
		border-radius: 20px;
    width: 400px;
    padding: 30px;
    border: 3px solid #004cae !important;
    background-color: rgba(0, 0, 0, .4);
    box-shadow: 1px 1px 2px #004cae;
    display: flex;
    flex-direction: column;
    margin-top: 29px;
		margin-left: 140px;
}

.box h1{
    color:#0149ae;
    text-transform: uppercase;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
}

.username,
.password{
    position: relative;
}

.user{
	position: absolute;
  top: 15px;
  left: 13px;
	font-size:18px;
}

.box input[type="text"],
.box input[type="password"]{
    font-size: 20px;
    border: none;
    background: none;
    display: block;
    margin: 30px auto;
    text-align: center;
    border: 3px solid #0367fd;
    padding: 14px 10px;
    width: 350px;
    color: #fff;
    border-radius: 24px;
    transition: all .2s ease-in;
    outline: none;
}

.box input[type="text"]:focus,
.box input[type="password"]:focus{
    border-color: #ffc400ec;
}

.wrapper{
    /* border: 2px solid orangered; */
    display: flex;
    height: 100vh;
    align-items: center;
    justify-content: center;
}

#btn{
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 3px solid #0149ae;
    padding: 14px 35px;
    outline: none;
    font-size: 18px;
    font-weight: 700;
    color: rgb(256, 256, 256);
    border-radius: 20px;
    transition: all .2s ease-in-out;
    cursor: pointer;
}

#btn:hover{
    background-color:#0149ae;
}
@media only screen and (max-width: 991px) {
	.box{
		margin-left: 43px;
    width: 80%;
	}
}
</style>

<body>



    <!-- Header Start  -->
    <?php
         include("header.php");
         ?>
         <br><br><br><br><br><br>
 <!-- Header End  -->

 <?php
    if(isset($_POST['submit'])){
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $hide=md5($password);
        $select="select * from login where  username='$username' and password='$hide'";
        $query=mysqli_query($db,$select);
        if(mysqli_num_rows($query)>0){
            $_SESSION['username']=$username;
            echo '<script>
            location.href="blogs.php"
               Swal.fire({
                  
                    title: "Success!",
                    text: "you are login Sucessfully !",
                    icon: "success",
                    showConfirmButton: true,
                 
                    });
               
            </script>';
        }


        else{
            echo   '<script>
             
            Swal.fire({
            title: "Failed!",
            text: "your username and password incorrect",
            icon: "error",
            showConfirmButton: true,
            
            });
           
       </script>';
    
        }
        
        //   echo '<pre>';
        //      print_r($select);
        //   echo '</pre>';
        //   die;
    }
 
 ?>

				<div class="container">
                    <div class="row">
                        <div class="col-md-6">
                                <div class="bg-login">
                                    
                                </div>
                        </div> 
          <div class="col-md-6">                    
        <div class="box">
            <form action="" method="post">
                <h1>Login</h1>

                <div class="username">
                    <input type="text" placeholder="Enter username" name="user" autocomplete="off" required>
                    <i class='fas fa-user-alt user'></i>
                </div>

                <div class="password">
                    <input type="password" placeholder="Enter password" name="pass" autocomplete="off" required>
                    <i class="fa fa-lock user"></i>
                </div>

                <button id="btn" type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</div>
                </div>
		<?php
       
			 include("footer.php");
?>
<!-- back to top start -->
<div class="progress-wrap">
<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
	 <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
</svg>
</div>
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