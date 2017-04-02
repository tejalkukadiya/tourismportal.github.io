<?php
  
  session_start();

  $_SESSION['currentUrl']="agencyRegister.php";
  $_SESSION['heading']="agency-detail";
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <script src="assests/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assests/registerform.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="assests/fileinput.min.js"></script>
   <script src="assests/registerform.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
 
  
</head>
<body>
	<?php
	include '../header.php';
	?>
	<form method="post" action="Agency.php" class="registerform container">
		

		<fieldset >
		<legend>Agency Details</legend>
		<div class="row">
			<div class="form-group col-md-6">
				
				<div class="form-group">

					<label for="agencyName">Agency Name</label>
		  		  	<input type="text" class="form-control" required="required" id="agencyName" name="agencyName">
		  		</div>
				<div class="form-group">
					<label for="agencyAddress">Address</label>
		  		  	<textarea cols="5" rows="4" class="form-control" required="required" name="agencyAddress" id="agencyAddress"></textarea>
		  		</div>
		  		<div class="form-group">

					<label for="agencyEmail">Agency Email Addess</label>
		  		  	<input type="email" class="form-control" required="required" id="agencyEmail" name="agencyEmail">
		  		</div>
		  		<div class="form-group">

					<label for="agencyContact">Contact No.</label>
		  		  	<input type="text" class="form-control"  required="required" id="agencyContact" name="agencyContact">
		  		</div>
		  		<div class="form-group">

					<label for="agencyUrl">WebSite URL</label>
		  		  	<input type="text" class="form-control" required="required" id="agencyUrl" name="agencyUrl">
		  		</div>
	  		</div>
	  	</fieldset>
	  	<fieldset >
			<legend>Agent Details</legend>
			<div class="row">
				<div class="form-group col-md-6">
					
					<div class="form-group">

						<label for="agentName">Agent Name</label>
			  		  	<input type="text" class="form-control" required="required" id="agentName" name="agentName">
			  		</div>
					
					
					<div class="form-group">

						<label for="userName">userName</label>
			  		  	<input type="text" class="form-control" required="required" id="userName" name="userName">
			  		</div>
					
					<div class="form-group">

						<label for="password">Password</label>
			  		  	<input type="password" class="form-control" required="required" id="password" name="password">
			  		</div>
					
					
					<div class="form-group">
						<label for="agentAddress">Address</label>
			  		  	<textarea cols="5" rows="4" class="form-control" required="required" name="agentAddress" id="agentAddress"></textarea>
			  		</div>
			  		<div class="form-group">

						<label for="agentEmail">Agent Email Addess</label>
			  		  	<input type="email" class="form-control" id="agentEmail" required="required" name="agentEmail">
			  		</div>
			  		<div class="form-group">

						<label for="agentContact">Contact No.</label>
			  		  	<input type="text" class="form-control"  required="required" id="agentContact" name="agentContact">
			  		</div>
		  		</div>
		  	</div>
	  	</fieldset>

	  	<div class="form-group">
			<input type="submit" class="btn btn-info" value="Submit">
		</div>
	
</body>
</html>
