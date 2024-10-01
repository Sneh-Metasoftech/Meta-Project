<?php 
include("db.php");
?>
<?php
    $delt=$_GET['del'];
    $delte="delete from post where id='$delt'";
    $query=mysqli_query($db,$delte);
    if($query){
        header("location:dashboard.php?succes=deleted succesfully");
    }
?>