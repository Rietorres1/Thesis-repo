<?php

  session_start ();

  if(!isset($_SESSION['username'])){

        header("location:index.php");

  }


  $msg = "";
  $currentUser = $_SESSION['username'];
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "root", "thesis_archive", "3307");
  if (isset($_POST['save_profile'])) {
    // for the database
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }


    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "Update login SET profile_image='$profileImageName' where username = '$currentUser'";
        if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }
  }
if(isset($_POST['save_profile'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $upassword = $_POST['password'];

  $conn->query("UPDATE login SET fname='$fname', email='$email', password='$password', unencrypted_password = '$upassword' WHERE username = '$currentUser'") or die($conn->error);

  $_SESSION['message'] = "Announcement has been Updated";
  $_SESSION['msg_type'] = "Warning";

  header("location: users3.php");
}

?>