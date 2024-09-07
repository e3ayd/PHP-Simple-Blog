<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'simple_blog');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Post</title>
</head>
<body>
    <h1>Create New Post</h1>
    <form action="" method="POST">
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title"><br><br>
        <label for="content">Content</label><br>
        <textarea id="content" name="content"></textarea><br><br>
        <button type="submit">Create Post</button>
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>
