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
	<link rel="stylesheet" type="text/css" href="selects.css">
	<title>add thesis</title>
</head>

<body class="bg-login">
	<?php require_once 'thesis_process.php'; ?>
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
										<h3 class="">Add Thesis</h3>
									</div>
									<div class="form-body">
										<form action="thesis_process.php" method="POST" class="row g-3" enctype="multipart/form-data">
											<div class="col-sm-12">
												<input type="text" style="display: none;" class="form-control" name="thesis_id" value="<?php echo $thesis_id; ?>">
												<label for="inputEmailAddress" class="form-label">Name of Researchers</label>
												<input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" required>
											</div>
											<div class="col-6">
												<label for="inputEmailAddress" class="form-label">Year and Section</label>
												<input type="text" class="form-control" name="yrsec" value="<?php echo $yrsec; ?>" required>
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Thesis Title</label>
												<input type="text" class="form-control" name="thtitle" value="<?php echo $thtitle; ?>"  required>
											</div>
											<div class="col-6">
												<label for="inputEmailAddress" class="form-label">Year of Submission</label>
												<input type="text" class="form-control" name="yrsubmit" value="<?php echo $yrsubmit; ?>" required>
											</div>
											<div class="col-12">
												<div class="select">
  												 <select name="type" id="type">
                             <option selected disabled>Choose Study Type</option>
    										     <option value="Thesis">Thesis</option>
                             <option value="Narrative">Narrative Report</option>
  											    </select>
  											</div>
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Name of Adviser</label>
												<input type="text" class="form-control" name="adviser" value="<?php echo $adviser; ?>" required>
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Name of Technical Critic</label>
												<input type="text" class="form-control" name="tc" value="<?php echo $tc; ?>" required>
											</div>
											
											<div class="col-12">
												
  													<input class="file-upload__input" type="file" name="pdfsss" id="pdfsss" required>
  													<button class="file-upload__button" type="button">Choose File for Abstract</button>
  													<span class="file-upload__label"></span>
												
											</div>
											<div class="col-12">
												
  													<input class="file-upload__input" type="file" name="pdfss" id="pdfss" required>
  													<button class="file-upload__button" type="button">Choose File</button>
  													<span class="file-upload__label"></span>
												
											</div>

											<div class="col-12">
									<?php
										if ($update == true):
									?>	
									<button type="submit" name="update" class="btn btn-info px-5">Update</button>
									<?php else: ?>	
										<button type="submit" name="submit" class="btn btn-primary px-5">Submit</button>
									<?php endif; ?>
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
	<script>
		Array.prototype.forEach.call(
  document.querySelectorAll(".file-upload__button"),
  function(button) {
    const hiddenInput = button.parentElement.querySelector(
      ".file-upload__input"
    );
    const label = button.parentElement.querySelector(".file-upload__label");
    const defaultLabelText = "No file(s) selected";

    // Set default text for label
    label.textContent = defaultLabelText;
    label.title = defaultLabelText;

    button.addEventListener("click", function() {
      hiddenInput.click();
    });

    hiddenInput.addEventListener("change", function() {
      const filenameList = Array.prototype.map.call(hiddenInput.files, function(
        file
      ) {
        return file.name;
      });

      label.textContent = filenameList.join(", ") || defaultLabelText;
      label.title = label.textContent;
    });
  }
);

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