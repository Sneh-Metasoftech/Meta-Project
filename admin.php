<?php
// Database connection (assuming it's already included)
include('db.php');
session_start();
     if(@$_SESSION['username']==""){
         session_destroy();
       echo '<script>
              location.href="login.php"
           </script>';
// Fetch pending comments (approved = 0)
}
?>
<?php $sql = "SELECT * FROM comments WHERE approved = 0 ORDER BY created_at DESC";
$result = $db->query($sql);

if (!$result) {
    die("Error: " . $db->error);
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Comment Approval</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<h2>Pending Comments for Approval</h2>

<?php if ($result->num_rows > 0): ?>
    <?php while($row = $result->fetch_assoc()): ?>
        <div style="padding-left: 15px;">
            <strong>Name:</strong> <?php echo htmlspecialchars($row['name']); ?><br>
            <strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?><br>
            <strong>Message:</strong> <?php echo htmlspecialchars($row['message']); ?><br>
            <em>Submitted on:</em> <?php echo $row['created_at']; ?><br>

            <!-- Approve Comment -->
            <form action="approve_comment.php" method="POST" style="display:inline-block;padding-top: 10px;">
                <input type="hidden" name="comment_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="btn btn-success">Approve</button>
            </form>

            <!-- Delete Comment -->
            <form action="delete.php" method="POST" style="display:inline-block;">
                <input type="hidden" name="comment_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        <hr>
    <?php endwhile; ?>
<?php else: ?>
    <p>No pending comments.</p>
<?php endif; ?>

</body>
</html>
