<?php
include("db.php");
?>
<?php


// Retrieve form data
$post_id = $_POST['posts_id'];  // Pass this hidden value in the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert the comment into the database
$sql = "INSERT INTO comments (posts_id, name, email, message) VALUES ('$post_id', '$name', '$email', '$message')";

if ($db->query($sql) === TRUE) {
    // Redirect back to the blog page with a success message
    header("Location: blog-details.php?id=$post_id&success=1");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$conn->close();
?>
