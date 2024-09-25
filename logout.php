<?php
    session_start();
    include("db.php");
    header("location:index.php");
    session_destroy();
?>