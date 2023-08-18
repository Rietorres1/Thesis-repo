<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];

	$password = md5($_POST['password']);

	$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['role'] = $row['role'];
		if($_SESSION['role'] == '1'){
		header("Location: dashboard1.php");
		}
			elseif ($_SESSION['role'] == '2') {
			header("Location: dashboard2.php");
			}
			elseif ($_SESSION['role'] == '3') {
			header("Location: dashboard3.php");
			}
			elseif ($_SESSION['role'] == '0') {
			header("Location: dashboard.php");
			}
		} 
	else {
		echo "<script>alert('wrong email or password')</script>";
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
			<div>
				<img style="margin-left: 250px;" src="assets/images/cvsu-logo.png" alt="logo icon" width="100" height="89" class="logo-icon">
			</div>
			<h1 style="font-size: 2rem; font-weight: 800; font: 2rem serif; align-items: center; margin-left: 15px;" >
			Cavite State University - Cavite City Campus</h1>
			<p class="login-text" style="font-size: 2rem; font-weight: 600; font: 2rem serif;" >Thesis Archive</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button style="width: 70%;" name="submit" class="btn">Login</button>
			</div>
			<p style="margin-left: 140px;" class="login-register-text">Don't have an account? <a href="choose.php">Register Here</a>.</p>
			<p style="margin-left: 140px;" class="login-register-text">Forgot Password? <a href="forgot.php">Click Here</a>.</p>
		</form>
	</div>
</body>
</html>
