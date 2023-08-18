<?php

session_start ();


$conn = new mysqli("localhost", "root", "root", "thesis_archive","3307") or die(mysqli_error($conn));

$thesis_id = 0;
$fname ="";
$yrsec = "";
$thtitle = "";
$yrsubmit = "";
$type = "";
$adviser = "";
$tc = "";
$update = false;


if (isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$yrsec = $_POST['yrsec'];
	$thtitle = $_POST['thtitle'];
	$yrsubmit = $_POST['yrsubmit'];
	$type = $_POST['type'];
	$adviser = $_POST['adviser'];
	$tc = $_POST['tc'];

	 #file name with a random number so that similar dont get replaced
	 $pname1 = $_FILES['pdfsss']['name'] ? $_FILES['pdfsss']['name'] : 'null';
     $pname = $_FILES['pdfss']['name'] ? $_FILES['pdfss']['name'] : 'null';
 	
    #temporary file name to store file
    $tname1 = $_FILES['pdfsss']['tmp_name'];
    $tname = $_FILES['pdfss']['tmp_name'];
     #upload directory path
	$uploads_dir = 'assets';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/pdf/'.$pname);
    move_uploaded_file($tname1, $uploads_dir.'/pdf/'.$pname1);

	$conn->query("INSERT INTO thesis (name,yrsec,thtitle,yrsubmit,type,adviser,tc,file,file1) VALUES('$fname','$yrsec','$thtitle','$yrsubmit',
		'$type','$adviser','$tc','$pname','$pname1')") or die($conn->error);

	header("location: listofthesis.php");
}
if(isset($_GET['delete'])){
	$thesis_id = $_GET['delete'];
	$conn->query("DELETE FROM thesis WHERE thesis_id = $thesis_id") or die($conn->error);

	$_SESSION['message'] = "thesis has been deleted!";
	$_SESSION['msg_type'] = "Danger";

	header("location: listofthesis.php");
}

if(isset($_GET['edit'])){
	$thesis_id = $_GET['edit'];
	$update = true;
	$result = $conn->query("SELECT * FROM thesis WHERE thesis_id=$thesis_id") or die($conn->error());
	if ($result->num_rows){
	$row = $result->fetch_array();
		$thesis_id = $row['thesis_id'];
		$fname = $row['name'];
		$yrsec = $row['yrsec'];
		$thtitle = $row['thtitle'];
		$yrsubmit = $row['yrsubmit'];
		$type = $row['type'];
		$adviser = $row['adviser'];
		$tc = $row['tc'];
		#file name with a random number so that similar dont get replaced
	 	$pname1 = $row['file1'];
     	$pname = $row['file'];
 	

	}

}


if(isset($_POST['update'])){
	$thesis_id = $_POST['thesis_id'];
	$fname = $_POST['fname'];
	$yrsec = $_POST['yrsec'];
	$thtitle = $_POST['thtitle'];
	$yrsubmit = $_POST['yrsubmit'];
	$type = $_POST['type'];
	$adviser = $_POST['adviser'];
	$tc = $_POST['tc'];

	#file name with a random number so that similar dont get replaced
	 $pname1 = $_FILES['pdfsss']['name'] ? $_FILES['pdfsss']['name'] : 'null';
     $pname = $_FILES['pdfss']['name'] ? $_FILES['pdfss']['name'] : 'null';
 	
    #temporary file name to store file
    $tname1 = $_FILES['pdfsss']['tmp_name'];
    $tname = $_FILES['pdfss']['tmp_name'];
     #upload directory path
	$uploads_dir = 'assets';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/pdf/'.$pname);
    move_uploaded_file($tname1, $uploads_dir.'/pdf/'.$pname1);


	$conn->query("UPDATE thesis SET name='$fname', yrsec='$yrsec' , thtitle='$thtitle', yrsubmit='$yrsubmit', type='$type' 
		, adviser='$adviser' , tc='$tc', file1='$pname1', file='$pname' WHERE thesis_id= $thesis_id") or die($conn->error);

	$_SESSION['message'] = "thesis has been Updated";
	$_SESSION['msg_type'] = "Warning";

	header("location: listofthesis.php");
}



