<?php

session_start ();


$conn = new mysqli("localhost", "root", "root", "thesis_archive","3307") or die(mysqli_error($conn));

$id = 0;
$update = false;
$title ="";
$content = "";
if (isset($_POST['add'])){
	$title = $_POST['title'];
	$content = $_POST['content'];

	$conn->query("INSERT INTO announcement (title,content,createddt) VALUES('$title','$content', SYSDATE())") or die($conn->error);

	$_SESSION['message'] = "Announcement Added!";
	$_SESSION['msg_type'] = "Success";

	header("location: announcement.php");
}
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$conn->query("DELETE FROM announcement WHERE id = $id") or die($conn->error);

	$_SESSION['message'] = "Announcement has been deleted!";
	$_SESSION['msg_type'] = "Danger";

	header("location: announcement.php");
}

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $conn->query("SELECT * FROM announcement WHERE id=$id") or die($conn->error());
	if ($result->num_rows){
	$row = $result->fetch_array();
		$title = $row['title'];
		$content = $row['content'];

	}

}

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$content = $_POST['content'];

	$conn->query("UPDATE announcement SET title='$title', content='$content' WHERE id= $id") or die($conn->error);

	$_SESSION['message'] = "Announcement has been Updated";
	$_SESSION['msg_type'] = "Warning";

	header("location: announcement.php");
}

