<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'simple_blog');

// Fetch all posts
$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
</head>
<body>
    <h1>Simple Blog</h1>
    <a href="create_post.php">Create New Post</a>
    <hr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <h2><a href="view_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h2>
        <p><?php echo substr($row['content'], 0, 100); ?>...</p>
        <a href="edit_post.php?id=<?php echo $row['id']; ?>">Edit</a> | 
        <a href="delete_post.php?id=<?php echo $row['id']; ?>">Delete</a>
        <hr>
    <?php endwhile; ?>
</body>
</html>
