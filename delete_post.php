<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'simple_blog');

// Get the post ID
$id = $_GET['id'];

// Delete the post
$conn->query("DELETE FROM posts WHERE id = $id");

header('Location: index.php');
?>
