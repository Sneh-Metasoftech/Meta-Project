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
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment_id = intval($_POST['comment_id']);

    // Delete the comment
    $sql = "DELETE FROM comments WHERE id = $comment_id";
    if ($db->query($sql)) {
        echo "Comment deleted.";
        header('Location: admin.php');
    } else {
        echo "Error: " . $db->error;
    }
}
?>