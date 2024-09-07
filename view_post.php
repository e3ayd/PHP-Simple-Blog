<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'simple_blog');

// Get the post ID
$id = $_GET['id'];

// Fetch the post
$result = $conn->query("SELECT * FROM posts WHERE id = $id");
$post = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $post['title']; ?></title>
</head>
<body>
    <h1><?php echo $post['title']; ?></h1>
    <p><?php echo $post['content']; ?></p>
    <a href="index.php">Back to Home</a>
</body>
</html>
