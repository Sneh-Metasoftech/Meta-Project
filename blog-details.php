        <?php
        include("db.php");
        ?>

        <!doctype html>
        <html class="no-js" lang="en">


        <!-- Mirrored from thepixelcurve.com/html/techwix/techwix/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2024 10:03:54 GMT -->
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
        .mtr{
        margin: 80px 0px;
        }
        .llt{
        margin-left: 0px;
        }

            .circular-img {
    width: 80px; /* Adjust size as needed */
    height:80px; /* Same value as width for a perfect circle */
    border-radius: 50%!important;
    object-fit: cover; /* Ensures the image is properly fitted within the circle */
}
        @media only screen and (max-width: 991px) {
        .llt{
        margin-left: 50px;
        }
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
        <div class="section page-banner-section" style="background-image: url(assets/images/bg/ihhh.jpg);">
        
        
        <div class="container">
        <div class="page-banner-wrap">
        <div class="row">
        <div class="col-lg-12">
        <!-- Page Banner Content Start -->
        <div class="page-banner text-center">
        <h2 class="title text-black">Blog Details</h2>
        <ul class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
        </ul>
        </div>
        </div>
        <!-- Page Banner Content End -->
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- Page Banner End -->

        <!-- Blog Details Start -->
        <div class="section blog-details-section section-padding-02">
        <div class="container">
        <!-- Blog Details Wrap Start -->
        <div class="blog-details-wrap">
        <div class="row">


     
       <?php
    // Check if 'id' is set in the URL
    if (isset($_GET['id'])) {
        // Escape the 'id' value to prevent SQL injection
        $post_id = mysqli_real_escape_string($db, $_GET['id']);

        // Fetch the specific post using the id from URL
        $selQB = "SELECT * FROM `post` WHERE id = '$post_id'";
        $resQB = mysqli_query($db, $selQB);

        if ($resQB && mysqli_num_rows($resQB) > 0) {
            // Fetch the result row
            $row = mysqli_fetch_assoc($resQB);
        ?>
        <?php

             $post_id = $row['id'];
        $commentCountQuery = "SELECT COUNT(*) AS comment_count FROM comments WHERE posts_id = $post_id";
        $commentCountResult = mysqli_query($db, $commentCountQuery);
        $commentCountRow = mysqli_fetch_assoc($commentCountResult);
        $comment_count = $commentCountRow['comment_count'];
        ?>
        <div class="col-xl-8 col-lg-8">
        <!-- Blog Details Post Start -->
        <div class="blog-details-post">
        <!-- Single Blog Start -->
        <div class="single-blog-post single-blog">
        <div class="blog-image">
        <a href="blog-details.php?id=<?php echo $row['id']; ?>"></a>
        <a><img src="blog/<?php echo $row['featured_image'];?>"alt=""></a>
        <div class="top-meta">
        <span class="date"><h2 style="color:white;"><?php echo date(' j', strtotime($row['create_at'])); ?></h2></span>
        </div>
        </div>
        <div class="blog-content">
        <div class="blog-meta">
        <span class="tag"><i class="far fa-bookmark"></i> <?php echo $row['category_id'];?></span>
        <span><i class="fas fa-user"></i> <?php echo $row['author_id'];?></span>
        <span><i class="far fa-comments"></i><?php echo $comment_count; ?></span>
        </div>
        <h3 class="title"><?php echo $row['title'];?></h3>

        </div>
        </div>
        <!-- Single Blog End -->
        <div class="blog-details-content" style="margin-left: -45px;">
        <!-- Blog Blockquote Start -->
        <div class="blog-quote ">
        <blockquote class="blockquote mtr">
        <p><?php echo $row['slug'];?></p>
        </blockquote>
        </div>
        <!-- Blog Blockquote End -->
        <!-- Blog Details Text Start -->
        <div class="blog-details-text"
        style="color:black; cursor: auto;margin-left:50px;"> <p><?php echo $row
        ['content'];?></p> </div>
        <!-- Blog Details Text End -->
        <!-- Blog Details Tag Share Start -->
        <div class="blog-details-tag-share">
        <!-- <div class="blog-details-tag">
        <div class="sidebar-widget">
        <span class="label">Tags :</span>
        <ul class="sidebar-tag">
        <li><a href="#">LMS</a></li>
        <li><a href="#">Business</a></li>
        <li><a href="#">Courses</a></li>
        </ul>
        </div>
        </div> -->
        <div class="blog-details-share llt">
        <ul class="social-share">
        <li><a class="share-facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a class="share-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="share-pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
        </ul>
        </div>
        </div>
        <!-- Blog Details Tag Share End -->


        <!-- Commtent Wrap Start -->
        <div class="comment-wrap llt">
        <!-- Commtent Form Start -->
        <div class="comment-form">
        <h3 class="comment-title">Comments</h3>
<?php
// Ensure post_id is set and is an integer
$post_id = isset($_GET['id']) ? $_GET['id'] : 0;

if ($post_id == 0) {
   die("Invalid post ID.");
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize post_id
    $post_id = $_POST['post_id'];

    // Prepare SQL query to insert form data into the database
    $sql = "INSERT INTO comments (name, email, message, posts_id) VALUES ('$name', '$email', '$message', '$post_id')";

    if ($db->query($sql) === TRUE) {
        echo "<script>
        alert('your comment has been submmited successfully');
                location.href='';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

// Retrieve and display comments for this specific post
$sql = "SELECT * FROM comments WHERE posts_id = $post_id ORDER BY created_at DESC";
$result = $db->query($sql);

if (!$result) {
    die("Error: " . $db->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments for Post <?php echo $post_id; ?></title>
</head>
<body>

    <!-- Display Form Submissions -->
    <?php if ($result->num_rows > 0): ?>
        <ul>
            <?php while($row = $result->fetch_assoc()): ?>
                <li>
                    <strong>Name:</strong> <?php echo $row['name']; ?> <br>
                    <strong>Email:</strong> <?php echo $row['email']; ?> <br>
                    <strong>Message:</strong> <?php echo $row['message']; ?> <br>
                    <em>Submitted on:</em> <?php echo $row['created_at']; ?>
                </li>
                <hr>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No comments yet for this post.</p>
    <?php endif; ?>

    <!-- Comment Form -->
   





<!-- Comment form -->
<div class="comment-form-wrap">
    <form action="#" method="POST">
        <input type="hidden" name="post_id" value="<?php echo $post_id;?>" />
        <div class="row">
            <div class="col-md-6">
                <div class="single-form">
                    <input class="form-control" type="text" name="name" placeholder="Your Name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-form">
                    <input class="form-control" type="email" name="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-form">
                    <textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-btn">
                    <button class="btn" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>


        <!-- Commtent Form Wrap End -->
        </div>
        <!-- Commtent Form End -->
        </div>
        <!-- Commtent Wrap End -->
        </div>
        </div>
        <!-- Blog Details Post End -->
        </div>




        <div class="col-xl-3 col-lg-4">
        <!-- Blog Sidebar Start -->
        <div class="blog-sidebar">
        <!-- Sidebar Widget Start -->
        <div class="sidebar-widget sidebar-widget-1">
        <!-- Widget Search Form Start -->
        <form class="search-form" action="search.php" method="GET">
        <input type="text" name="query" placeholder="Enter date, title, or keyword...">
        <button type="submit"><i class="fas fa-search"></i></button>
        </form>

        <!-- Widget Search Form End -->
        </div>
        <!-- Sidebar Widget End -->

        <!-- Sidebar Widget Start -->
        <div class="sidebar-widget">
        <!-- Widget Title Start -->
        <div class="widget-title">
        <h3 class="title">Popular Posts</h3>
        </div>
        <!-- Widget Title End -->

        <?php

$sql = "SELECT id, title, create_at, featured_image FROM post ORDER BY create_at DESC LIMIT 3";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="recent-posts"><ul>';
   
    while($row = $result->fetch_assoc()) {
        echo '
        <li>
        <a class="post-link" href="blog-details.php?id=' . $row["id"] . '">
            <div class="post-thumb">
                <img class="circular-img" src="blog/' . $row["featured_image"] . '" alt="Post Image">
            </div>
            <div class="post-text">
                <h3 class="title">' . $row["title"] . '</h3>
                <span class="post-meta"><i class="far fa-calendar-alt"></i> ' . date("F d, Y", strtotime($row["create_at"])) . '</span>
            </div>
        </a>
        </li>';
    }
    echo '</ul></div>';
} else {
    echo 'No posts found.';
}

?>

        <!-- Widget Recent Post Start -->
       <!--  <div class="recent-posts">
        <ul>
        <li>
        <a class="post-link" href="blog-details.php">
        <div class="post-thumb">
            <img src="assets/images/blog/r-post1.jpg" alt="">
        </div>
        <div class="post-text">
            <h4 class="title">How Wireless Technology is Changing Business</h4>
            <span class="post-meta"><i class="far fa-calendar-alt"></i> May 15, 2020</span>
        </div>
        </a>
        </li>
        <li>
        <a class="post-link" href="blog-details.php">
        <div class="post-thumb">
            <img src="assets/images/blog/r-post2.jpg" alt="">
        </div>
        <div class="post-text">
            <h4 class="title">How Wireless Technology is Changing Business</h4>
            <span class="post-meta"><i class="far fa-calendar-alt"></i> May 15, 2020</span>
        </div>
        </a>
        </li>
        <li>
        <a class="post-link" href="blog-details.php">
        <div class="post-thumb">
            <img src="assets/images/blog/r-post3.jpg" alt="">
        </div>
        <div class="post-text">
            <h4 class="title">How Wireless Technology is Changing Business</h4>
            <span class="post-meta"><i class="far fa-calendar-alt"></i> May 15, 2020</span>
        </div>
        </a>
        </li>
        </ul>
        </div> -->
        <!-- Widget Recent Post End -->
        </div>
        <!-- Sidebar Widget End -->


<?php


// Fetch post count for each category
$categories = [
    "Event",
    "Technology",
    "Learning",
    "Information",
    "inovation"
];

echo '<div class="sidebar-widget">
        <div class="widget-title">
            <h3 class="title">Categories</h3>
        </div>
        <ul class="category">';

foreach ($categories as $category) {
    // SQL query to get post count for each category
    $sql = "SELECT COUNT(*) as post_count FROM post WHERE category_id = '$category'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data for each category
        while($row = $result->fetch_assoc()) {
            echo '<li class="cate-item"><a href="blog.php"><i class="flaticon-next"></i> ' . $category . ' <span class="post-count">' . $row['post_count'] . '</span></a></li>';
        }
    }
}

echo '  </ul>
    </div>';
?>
        <!-- Sidebar Widget Start -->
        <!-- <div class="sidebar-widget"> -->
        <!-- Widget Title Start -->
        <!-- <div class="widget-title">
        <h3 class="title">Categories</h3>
        </div> -->
        <!-- Widget Title End -->
        <!-- Widget Category Start -->
        <!-- <ul class="category">
        <li class="cate-item"><a href="blog.php"><i class="flaticon-next"></i> Technology <span class="post-count">3</span></a></li>
        <li class="cate-item"><a href="blog.php"><i class="flaticon-next"></i> Innovation <span class="post-count">5</span></a></li>
        <li class="cate-item"><a href="blog.php"><i class="flaticon-next"></i> Learning <span class="post-count">3</span></a></li>
        <li class="cate-item"><a href="blog.php"><i class="flaticon-next"></i> Information <span class="post-count">3</span></a></li>
        </ul> -->
        <!-- Widget Category End -->
        <!-- </div> -->
        <!-- Sidebar Widget End -->

        <!-- Sidebar Widget Start -->
        <!-- <div class="sidebar-widget"> -->
        <!-- Widget Title Start -->
        <!-- <div class="widget-title">
        <h3 class="title">Tags</h3>
        </div> -->
        <!-- Widget Title End -->
        <!-- Widget Category Start -->
        <!-- <ul class="sidebar-tag">
        <li><a href="#">Learning</a></li>
        <li><a href="#">Course</a></li>
        <li><a href="#">Business</a></li>
        <li><a href="#">Udemy</a></li>
        <li><a href="#">Online</a></li>
        <li><a href="#">Technology</a></li>
        </ul> -->
        <!-- Widget Category End -->
        <!-- </div> -->
        <!-- Sidebar Widget End -->
        </div>
        <!-- Blog Sidebar End -->
        </div>
        <?php
        } else {
        echo "<p>Blog post not found.</p>";
        }
        }
        ?>
        </div>
        </div>
        <!-- Blog Details Wrap End -->
        </div>
        </div>
        <!-- Blog Details End -->

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