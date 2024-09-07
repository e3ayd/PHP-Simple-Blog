<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'simple_blog');

// Get the post ID
$id = $_GET['id'];

// Fetch the post
$result = $conn->query("SELECT * FROM posts WHERE id = $id");
$post = $result->fetch_assoc();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("UPDATE posts SET title = '$title', content = '$content' WHERE id = $id");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="" method="POST">
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="<?php echo $post['title']; ?>"><br><br>
        <label for="content">Content</label><br>
        <textarea id="content" name="content"><?php echo $post['content']; ?></textarea><br><br>
        <button type="submit">Update Post</button>
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>
