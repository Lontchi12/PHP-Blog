<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$title = "";
	$post = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$title = $_POST['title'];
		$post = $_POST['post'];

		mysqli_query($db, "INSERT INTO info (`title`, `post`) VALUES ('$title', '$post')"); 
		$_SESSION['message'] = "Blog Post saved"; 
		header('location: index.php');
	}

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $post = $_POST['post'];
    
        mysqli_query($db, "UPDATE info SET title='$title', post='$post' WHERE id=$id");
        $_SESSION['message'] = "Blog Post updated!"; 
        header('location: index.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM info WHERE id=$id");
        $_SESSION['message'] = "Blog Post deleted!"; 
        header('location: index.php');
    }