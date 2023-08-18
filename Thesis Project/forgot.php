<?php 

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$bday = $_POST['bday'];
	$password = "0";
	$sql = "SELECT * FROM login WHERE email='$email' AND birthdate='$bday'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$password = $row['unencrypted_password'];

		echo "<script>alert('Your password is: $password')</script>";
	}
	else {
		echo "<script>alert('wrong email or birthdate')</script>";
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

	<title></title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
		
			<p class="login-text" style="font-size: 2rem; font-weight: 600; font: 2rem serif;" >Forgot Password</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="bday" name="bday" value="<?php echo $bday; ?>" required>
			</div>
			<div class="input-group">
				<button style="width: 70%;" name="submit" class="btn">Submit</button>
			</div>
			<p style="margin-left: 260px;" class="login-register-text"> <a href="index.php">Back</a></p>
		</form>
	</div>
</body>
</html>
