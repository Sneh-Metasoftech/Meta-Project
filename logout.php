<?php
    // session_start();
    // include("db.php");
    // header("location:index.php");
    // session_destroy();

session_start();
session_unset();
session_destroy(); // Completely destroy the session

// Message to user after logging out
echo "Your session has expired due to inactivity. Please log in again.<br>";
header("location:login.php");; // Redirects to login page



?>