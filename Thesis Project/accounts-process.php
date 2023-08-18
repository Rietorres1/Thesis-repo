
<?php

session_start ();


$conn = new mysqli("localhost", "root", "root", "thesis_archive","3307") or die(mysqli_error($conn));

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$conn->query("DELETE FROM login WHERE id = $id") or die($conn->error);

	$_SESSION['message'] = "Accounts has been deleted!";
	$_SESSION['msg_type'] = "Danger";

	header("location: Accounts.php");
}

