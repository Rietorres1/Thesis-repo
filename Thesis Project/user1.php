<?php
    
    session_start();

     if(!isset($_SESSION['username'])){

        header("location:index.php");

    }


?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="addfile.css">
	
	<link rel="stylesheet"  href="addfile.js">
	<title>add thesis</title>
</head>

<body class="bg-login">

	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">

									</div>
									<div class="form-body">
										<?php
							$mysqli = new mysqli("localhost", "root", "root", "thesis_archive","3307") or die(mysqli_error($mysqli));
							$result = $mysqli->query("SELECT * FROM login") or die($mysqli->error);
						?>
										<form action="" method="POST" class="row g-3">
											 <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
              <?php
								 $db_user = $_SESSION['username'];
                  include("config.php");

                  //when user logged in 'select id from login'
                  $query = "SELECT * FROM login WHERE username='$db_user'";
                  $result = mysqli_query($conn, $query);

                  if(mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
											$db_image = $row['profile_image'];
											$fname = $row['fname'];
											$email = $row['email'];
											$password = $row['unencrypted_password'];
                      echo "<img src='images/".$db_image."' onClick='triggerClick()' id='profileDisplay'>";
                    }

                  }
               ?>
            </span>
											<div class="col-sm-12">
												<input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
											</div>
												<div class="col-sm-12">
												<input type="text" style="display: none;" class="form-control" name="thesis_id" value="<?php echo $thesis_id; ?>">
												<label for="inputEmailAddress" class="form-label">Full Name</label>
												<input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" required>
											</div>
											<div class="col-6">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Password</label>
												<input type="password" class="form-control" name="Password" value="<?php echo $password; ?>"  required>
											</div>
											<div class="col-12">
										<button type="submit" name="save_profile" class="btn btn-primary px-5">Save Profile</button>
								
											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	

	</script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<!--Password show & hide js -->
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>