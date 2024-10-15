<?php
// Database connection
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment_id = intval($_POST['comment_id']);

    // Update comment as approved
    $sql = "UPDATE comments SET approved = 1 WHERE id = $comment_id";
    if ($db->query($sql)) {
        echo "Comment approved.";
        header('Location: admin.php');
    } else {
        echo "Error: " . $db->error;
    }
}
?>
