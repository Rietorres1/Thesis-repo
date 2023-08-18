<?php
    
    session_start();

     if(!isset($_SESSION['username'])){

        header("location:index.php");

    }


?>

<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!--end switcher-->
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<link rel="stylesheet" href="style.css" />
	 <link rel="stylesheet" href="main.css">
	<title>Thesis Archive</title>
</head>
<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<h4 class="logo-text">Thesis Archive</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="dashboard2.php">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-folder-open"></i>
						</div>
						<div class="menu-title">Thesis</div>
					</a>
					<ul>
						<li> <a href="listofthesis2.php"><i class="bx bx-right-arrow-alt"></i>List of Thesis</a>
					</ul>
				</li>
				
				
				
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="top-menu-left d-none d-lg-block">
						<ul class="nav">
					  </ul>
					 </div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box"> <span class="position-absolute top-50 search-show translate-middle-y"></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon"> </li>
							
							<li class="nav-item dropdown dropdown-large">
<div class="dropdown-menu dropdown-menu-end">
				  <a href="javascript:;">
					  <div class="msg-header">
											
										</div>
									</a>
									
										</a>
									</div>
									
								</div>
							</li>
							
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?php
								 $db_user = $_SESSION['username'];
                  include("config.php");

                  //when user logged in 'select id from login'
                  $query = "SELECT * FROM login WHERE username='$db_user'";
                  $result = mysqli_query($conn, $query);

                  if(mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
										$db_image = $row['profile_image'];
                      echo "<img src='images/".$db_image."' class='user-img'>";
                    }

                  }
                ?>
							<!--<img src="assets/images/avatars/rie.jpg" class="user-img" alt="user avatar"> -->
							<div class="user-info ps-3">
							<p class="user-name mb-0">
								<?php
									$db_user = $_SESSION['username'];
                  include("config.php");

                  //when user logged in 'select id from login'
                  $query = "SELECT * FROM login WHERE username='$db_user'";
                  $result = mysqli_query($conn, $query);

                  if(mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    	$db_id = $row['id'];
                      $db_name = $row['fname'];
         


                      echo $db_name;
                    }

                  }
                ?></p>
								<p class="designattion mb-0"><?php
									$db_user = $_SESSION['username'];
                  echo $db_user;
                ?></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="users.php"><i class="bx bx-cog"></i><span>Account Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="dashboard.php"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a  href="logout.php" class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
	<div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
      		<?php
							$mysqli = new mysqli("localhost", "root", "root", "thesis_archive","3307") or die(mysqli_error($mysqli));
							$result = $mysqli->query("SELECT * FROM login") or die($mysqli->error);
						?>
        <form action="processForm2.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Update profile</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
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
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Profile Image</label>
          </div>
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" placeholder="Full Name" name="fname" value="<?php echo $fname; ?>">
          </div>
          <div class="form-group">
            <label>Email</label>
           <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
            <label>Pasword</label>
            <input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>">
          </div>
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block">Update User</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</li>

		<!--end header -->
		<!--start page wrapper -->
		
		<!--end page wrapper -->
		<!--start overlay-->
		
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="script.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/highcharts/js/highcharts.js"></script>
	<script src="assets/plugins/highcharts/js/exporting.js"></script>
	<script src="assets/plugins/highcharts/js/variable-pie.js"></script>
	<script src="assets/plugins/highcharts/js/export-data.js"></script>
	<script src="assets/plugins/highcharts/js/accessibility.js"></script>
	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>

</body>

</html>
<script src="scripts.js"></script>
