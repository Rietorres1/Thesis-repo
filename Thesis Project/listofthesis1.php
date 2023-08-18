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
	<title>List of Thesis</title>
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
					<a href="dashboard1.php">
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
						<li> <a href="listofthesis1.php"><i class="bx bx-right-arrow-alt"></i>List of Thesis</a>
					</ul>
				</li>


				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php require_once 'thesis_process.php'; ?>
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
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">List of Thesis</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							
							
					</div>
				</div>
			</div>
				<!--end breadcrumb-->
			
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<?php
							$mysqli = new mysqli("localhost", "root", "root", "thesis_archive","3307") or die(mysqli_error($mysqli));
							$result = $mysqli->query("SELECT * FROM thesis") or die($mysqli->error);
							?>
							<form action="thesis_process.php" method="POST">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Thesis ID</th>
										<th>Name of Researchers</th>
										<th>Year and Section</th>
										<th>Thesis Title</th>
										<th>Year of Submission</th>
										<th>Study Type</th>
										<th>Adviser</th>
										<th>Technical Critic</th>
										<th>Abstract File</th>
										
									</tr>
								</thead>
								<?php 
									while ($row = $result->fetch_assoc()): ?>
										<tr>
											<td><?php echo $row["thesis_id"];?></td>
											<td><?php echo $row["name"];?></td>
											<td><?php echo $row["yrsec"];?></td>
											<td><?php echo $row["thtitle"];?></td>
											<td><?php echo $row["yrsubmit"];?></td>
											<td><?php echo $row["type"];?></td>
											<td><?php echo $row["adviser"];?></td>
											<td><?php echo $row["tc"];?></td>
											
											<td><?php echo $row["file1"];?>
												<a href="download.php?file=<?php echo $row['file1'];?>" class=""><i class='bx bxs-download'></i></a>
											</td>
											
										</tr>
									<?php endwhile; ?>
							</table>
						</form>
						<?php
													echo "<tr>";
                                                    echo  "<td>" 
						?>
					</div>
				</div>


			</div>
		</div>
				
		
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0"></p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
		
			<h6 class="mb-0">Theme Styles</h6>
		
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	
</body>

</html>