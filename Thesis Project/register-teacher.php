<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['fname'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$birthdate = $_POST['birthdate'];
	$institution =$_POST['institution'];
	$schoolname =$_POST['schoolname'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$unpassword = $_POST['password'];
	

	if ($password == $cpassword) {
		$sql = "SELECT * FROM login WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO login (fname, username, email,birthdate, institution, schoolname , password, unencrypted_password,  role)
					VALUES ('$fname', '$username','$email','$birthdate', '$institution','$schoolname','$password', $unpassword, '2')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$fname = "";
				$username = "";
				$email = "";
				$birthdate = "";
				$institution="";
				$schoolname="";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="login.css">

	<title>Register teacher</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 600; font: 2rem serif;">Sign up as Teacher</p>
			<div class="input-group">
				<input type="text" placeholder="Full Name" name="fname" value="<?php echo $fname; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="date" placeholder="BirthDate" name="birthdate" value="<?php echo $birthdate; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Institution" name="institution" value="<?php echo $institution; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="School Name" name="schoolname" value="<?php echo $schoolname; ?>" required>
			</div>
            <div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button style="width: 70%;" name="submit" class="btn">Sign up</button>
			</div>
			<p style="margin-left: 165px;" class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>