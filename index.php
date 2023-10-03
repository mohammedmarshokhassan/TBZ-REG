 
<html lang="en">
<head>
	<meta charset="utf-8">
	 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/colors/switch.css">
	<!-- Color Alternatives -->
 
</head>
<style>
   

.image--cover {
    /* width: 100px; */
     height: 100px; 
    /* border-radius: 100%; */
    margin: 20px;
    object-fit: cover;
    object-position: center;
    /*width: 10%;*/
    aspect-ratio: 4/3;
    object-fit: contain;
}
</style>

<body style=" background-color: #dc3545;">
<?php
require_once "db.php";

if (isset($_POST['signup'])) {
    // Sanitize form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $DOB = mysqli_real_escape_string($conn, $_POST['DOB']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $phone1 = mysqli_real_escape_string($conn, $_POST['phone1']);
    $Address = mysqli_real_escape_string($conn, $_POST['address']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $Education = mysqli_real_escape_string($conn, $_POST['Education']);
    $YOE = mysqli_real_escape_string($conn, $_POST['YOE']);
    
    $AE = mysqli_real_escape_string($conn, $_POST['AE']);

        
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
     
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    
     #upload directory path
    $uploads_dir = 'assets';
    
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    
    // Prepared statement to insert data
    $stmt = mysqli_prepare($conn, "INSERT INTO interview_Form(name, gender, DOB, email, phone, phone1, address, location, education, YOE, about, resume) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters to prepared statement
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $name, $gender, $DOB, $email, $phone, $phone1, $Address, $location, $Education, $YOE, $AE, $pname);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
       header("Location: thanks-3.html");

    } else {
       echo "Error inserting data: " . mysqli_stmt_error($stmt);

    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}
?>


<div class="wrapper clearfix">
		<div class="wizard-part-title text-center">
		 
			 <img src="assets/img/horizontal hr.png" alt="" width="500" height="600">
		</div>
		<!--multisteps-form-->
		<div class="multisteps-form">
			<!--progress bar-->
		 
			<!--form panels-->
			<div class="row">
				<div class="col-12 col-lg-12 m-auto">
					<form class="multisteps-form__form clearfix"  method="post" enctype="multipart/form-data"  >
						
						<!--single form panel-->
						<div class="multisteps-form__panel js-active" data-animation="slideVert">
							<div class="inner pb-100">
								 <div class="text-center">
   <img src="medshyne fixed.png" alt="" class="image--cover" />
  <img src="affa logo copy.png" class="image--cover">
  
  <img src="lt.jpg" alt="" class="image--cover" />
  
  <img src="horizontal 1 small.png" alt="" class="image--cover" />
  
  <img src="Travelcarts logo (2).png" alt="" class="image--cover" />
  <img src="VISION TECH.jpg" alt="" class="image--cover" />
 
</div>
								 
								<div class="wizard-content-form">
									<div class="wizard-form-field">
										<div class="wizard-form-input position-relative form-group has-float-label">
											<input type="text" name="name" class="form-control" placeholder="Name" required="">
											<label>Name</label>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="wizard-form-input position-relative form-group has-float-label">
														<select  name="gender" required>
			<option disabled selected>Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Others</option>
      
		</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="wizard-form-input position-relative form-group has-float-label" required>
													<input type="date" class="form-control" name="DOB" placeholder="DOB">
													<label>DOB</label>
												</div>
											</div>
										</div>
										<div class="wizard-form-input position-relative form-group has-float-label">
											<input type="email" class="form-control" name="email" placeholder="Email Address" required>
											<label>Email Address</label>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="wizard-form-input position-relative form-group has-float-label">
													<input type="tel" class="form-control" name="phone" placeholder="Phone" autocomplete="nope" required max="10"   required>
													<label>Phone</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="wizard-form-input position-relative form-group has-float-label">
													<input type="tel" class="form-control" name="phone1" placeholder="Phone"  >
													<label>Phone(optional)</label>
												</div>
											</div>
										</div>
										
										<div class="wizard-form-input position-relative form-group has-float-label">
											<input type="text" class="form-control" name="address" placeholder="Address" required>
											<label>Address</label>
										</div>
										<div class="row">
										    	<div class="col-md-6">
												<div class="wizard-form-input position-relative form-group has-float-label">
													<input type="text" class="form-control" name="location" placeholder="Location" required>
													<label>Location</label>
												</div>
											</div>
											<div class="col-md-6">
											  
  
	<div class="option-item-list">
		<select name="Education" required>
			<option disabled selected>Education</option>
      <option value="10th">10th</option>
      <option value="12th">12th</option>
      <option value="ITI">ITI or Diplamo</option>
      <option value="UG">UG</option>
      <option value="PG">PG</option>
      <option value="na">Other</option>
		</select>
	</div>
	
											</div>
										
											 
											 
										</div>
										<div class="row">
											<div class="col-md-12">
                                 	<div class="option-item-list">
		<select  name="YOE" required>
			<option disabled selected>Year Of Experience </option>
      <option value="0-1">0-1</option>
      <option value="1-2">1-2</option>
      <option value="2-3">2-3</option>
      <option value="3-5">3-5</option>
		</select>
	</div>
	
											</div>
										 
											 
											 
										</div>
											<div class="row">
		<div class="col-md-12">
			<div class="wizard-form-input position-relative form-group has-float-label">
				<input type="text" class="form-control" name="AE" placeholder="About Experience"  >
				<label>About Experience</label>
			</div>
		</div>
		 
	</div>
	<div class="wizard-form-input position-relative form-group has-float-label">
											<input type="file" name="file" class="form-control" placeholder="file" required accept=".pdf" style="padding-top: 20px;" required>
											<label>Upload Documents</label>
										</div>
										<div class="wizard-footer">
										 
											<div class="actions">
												<ul>
													<li><button type="submit" id="submit-form"  name="signup" title="NEXT">SUMBIT <i class="fa fa-arrow-right"></i></button></li>
												</ul>
											</div>
										</div>
										 
									</div>
									 
								</div>
								 
							</div>
						</div>
						</form>
				</div>
			</div>
		</div>

	</div>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/switch.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		$("#files").change(function() {
			filename = this.files[0].name
			console.log(filename);
		});
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>

</html>