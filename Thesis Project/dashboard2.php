
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
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
	<script src="assets/plugins/highcharts/js/highcharts.js"></script>
	<script src="assets/plugins/highcharts/js/exporting.js"></script>
	<script src="assets/plugins/highcharts/js/export-data.js"></script>
	<script src="assets/plugins/highcharts/js/accessibility.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<link rel="stylesheet" href="style.css" />
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
							<li><a class="dropdown-item" href="users2.php"><i class="bx bx-cog"></i><span>Account Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="dashboard2.php"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
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
		<div class="page-wrapper">
			<div class="page-content">
			
			  <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
			    <div class="col">
						<div class="card radius-10 overflow-hidden bg-danger">
							<div class="card-body">

								<div class="d-flex align-items-center">
									<div>
										
									  <h2 class="mb-0 text-white">Number of Registered Students</h2>
									  <?php
									  //when user logged in 'select id from login'
                  	$query = "SELECT count(*) 'typecount' FROM login where role = 1";
                  	$result = mysqli_query($conn, $query);
									  ?>
									  <h1 class="mb-0 text-white">
									  		<?php 
									  			$data = '';
										  		if (mysqli_num_rows($result) >0){
						                            while ($row = mysqli_fetch_assoc($result)){
						                                $data = $row['typecount'];
						                            }
						                        } 

									  		echo $data;
									  		?>
									  			
									  </h1>
									</div>
									<div class="ms-auto text-white">	<i class='bx bx-user-pin font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart1"></div>
						</div>
				</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden bg-primary">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
									  <h2 class="mb-0 text-white">Number of Registered Guest</h2>
									  <h1 class="mb-0 text-white">
									  	<?php
									  //when user logged in 'select id from login'
                  	$query = "SELECT count(*) 'typecount' FROM login where role = 3";
                  	$result = mysqli_query($conn, $query);
									  ?>
									  <h1 class="mb-0 text-white">
									  		<?php 
									  			$data = '';
										  		if (mysqli_num_rows($result) >0){
						                            while ($row = mysqli_fetch_assoc($result)){
						                                $data = $row['typecount'];
						                            }
						                        } 

									  		echo $data;
									  		?>
									  </h1>
									</div>
										
									<div class="ms-auto text-white">	<i class='bx bx-user-circle font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart2"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
									  <h2 class="mb-0 text-dark">Number of Registered Teachers</h2>
									  <h1 class="mb-0 text-dark">
									  	<?php
									  //when user logged in 'select id from login'
                  	$query = "SELECT count(*) 'typecount' FROM login where role = 2";
                  	$result = mysqli_query($conn, $query);
									  ?>
									  <h1 class="mb-0 text-white">
									  		<?php 
									  			$data = '';
										  		if (mysqli_num_rows($result) >0){
						                            while ($row = mysqli_fetch_assoc($result)){
						                                $data = $row['typecount'];
						                            }
						                        } 

									  		echo $data;
									  		?>
									  </h1>
									</div>
									<div class="ms-auto text-dark">	<i class='bx bx-group font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart3"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden bg-success">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
									  <h2 class="mb-0 text-white">Number of Administrator</h2>
									  <h1 class="mb-0 text-white">
									  	<?php
									  //when user logged in 'select id from login'
                  	$query = "SELECT count(*) 'typecount' FROM login where role = 0";
                  	$result = mysqli_query($conn, $query);
									  ?>
									  <h1 class="mb-0 text-white">
									  		<?php 
									  			$data = '';
										  		if (mysqli_num_rows($result) >0){
						                            while ($row = mysqli_fetch_assoc($result)){
						                                $data = $row['typecount'];
						                            }
						                        } 

									  		echo $data;
									  		?>
									  </h1>
									</div>
									<div class="ms-auto text-white">	<i class='bx bx-chat font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart4"></div>
						</div>
					</div>
		</div>
		 <div class="row">
			    <div class="col-12 col-xl-8 d-flex">
				  <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="container1">
    							<center>
        							<div id="container1" ></div>
    							</center>
    
 							</div>
<script>
    // Build the chart
    Highcharts.chart('container1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Total Number Of Narrative Report and Thesis'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Thesis type',
            colorByPoint: true,
            data: [{
                    name: 'Thesis',
                    //color: '#00FF00',
                    y: <?php
                    	$db_user = $_SESSION['username'];

                    	include("config.php");
                    	$queryThesis = "SELECT count(*) 'typecount' FROM thesis where type = 'Thesis'";
                    	$getData =  mysqli_query($conn, $queryThesis);
                        $dataT = '';
                        if (mysqli_num_rows($getData) >0){
                            while ($row = mysqli_fetch_assoc($getData)){
                                $dataT = $row['typecount'];
                            }
                        } 
                        echo $dataT;
                            ?>
                }, 
                {
                    name: 'Narrative',
                    //color: '#FF00FF',
                    y: <?php
                    	$db_user = $_SESSION['username'];

                    	include("config.php");
                    	$queryNarrative = "SELECT count(*) 'typecount' FROM thesis where type = 'Narrative'";
                    	$getData1 = mysqli_query($conn, $queryNarrative);
                        $dataN = '';
                        if (mysqli_num_rows($getData1)>0){
                            while ($row = mysqli_fetch_assoc($getData1)){
                                $dataN = $row['typecount'];
                            }
                        }
                        echo $dataN;
                            ?>
                }]
                
        }]
    });
</script>
						</div>
					</div>
				</div>
				<div class="col-12 col-xl-4 d-flex">
				  <div class="card radius-10 w-100 overflow-hidden">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
								  <h1 class="mb-0">Announcements</h1>
								</div>
</div>
						</div>

						<div class="store-metrics p-3 mb-3">
							
                            <div class="card mt-3 radius-10 border shadow-none">
								<div class="card-body">
                                    <div class="d-flex align-items-center">
                                    <form action="process.php" method="POST" class="table-responsive">
										<div>
											<p class="mb-0 text-secondary"></p>
											 <?php

                                             include("config.php");


                                                   $query = "SELECT * FROM announcement";
                                                  $result = mysqli_query($conn, $query);

                                                  if(mysqli_num_rows($result) > 0) {
                                                      while ($row = mysqli_fetch_assoc($result)) {

                                                          $db_id = $row['id'];
                                                          $db_title = $row['title'];
                                                          $db_content = $row['content'];
                                                          $createddt = $row['createddt'];

                                                         $createddt = date("l jS \of F Y h:i:s A", strtotime($createddt));
                                                         
                                                        echo "<li>";
                                                        echo $createddt . "<br>";

                                                        echo "
                                                         <div id='openModal?id=$db_id' class='modalWindow'>
                                                              <div>
                                                                  <h1>$db_title</h1><br>
                                                                  <h2>$db_content</h2>
                                                              </div>
                                                          </div>";
                                                        echo "</li>";
                                                      }
                                                    } 
                                        ?>
											
											<h4 class="mb-0" value="<?php echo $content; ?>"></h4>
										</div>
								</div>
								</div>
							</div>
								
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </div><!--end row-->

		<!--end header -->
		<!--start page wrapper -->
		
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
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
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
	<script src="script.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>

	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>

</body>

</html>