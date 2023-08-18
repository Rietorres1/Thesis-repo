

<?php
    
	header("location: login.php");
    $email=$password="";
    $emailErr=$passwordErr="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST['email'])) {
            $emailErr = "Email is required";
        }
        else {
            $email = $_POST['email'];
        }

        if(empty($_POST['password'])) {
            $passwordErr = "Password is required";
        }
        else {
            $password = $_POST['password'];
        }

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
	<title>Login</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">

						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<div>
											<img src="assets/images/cvsu-logo.png" class="logo-icon" alt="logo icon">
										</div>
										<h3 class="">CAVITE STATE UNIVERSITY - CAVITE CITY CAMPUS</h3>
										<div class="login-separater text-center mb-4">
										<hr/>
									</div>
										<h4 class="">THESIS ARCHIVE</h4>
									</div>
									<div class="d-grid">
		
									</div>
									
									<div class="form-body" method="POST">
										<form class="row g-3" action="<?php htmlspecialchars("PHP_SELF"); ?>" method="POST">
											<div class="col-12">
												<label for="email" class="form-label">Email Address</label>
												<input type="email" class="form-control" id="email" placeholder="Email Address" value="<?php echo $email; ?>">
											</div>
											<div class="col-12">
												<label for="password" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="password"  placeholder="Enter Password" value="<?php echo $password; ?>"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-outline-info px-5"><i class="bx bxs-lock-open"></i>Sign in</button>																<p></p>	
													<p>Don't have an account yet? <a href="authentication-signup.html">Sign up here</a></p>					
												</div>
												
												
												
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
	 <?php 

    include("connection.php");

    if($email && $password) {

        $query = "SELECT * FROM login1 WHERE email='$email'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {

                $db_pass = $row['password'];
                $db_id = $row['id'];	

                if($password == $db_pass) {

                        header("location: dashboard.php?id='$db_id'"); 
                    }
                  
                    
                }

                else {

                    echo "<script>alert('Incorrect Password');</script>";
                    $email = $_POST['email'];
                    $password = "root";

                }

            


        }
        else {

            $username = $_POST['email'];
            $password = "root";

            echo "<script>alert('Email does not exist!');</script>";
               
        }

    }

    ?>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>