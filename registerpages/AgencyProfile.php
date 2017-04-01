

<?php
	session_start();
	$userId=$_SESSION["username"];
		include '../Connection.php';
		
				
		$res = $conn->query("select * from agent where agentId = '$userId'");
		if( mysqli_num_rows($res) == 0 )
		{
				  
							echo "record not found";
							return;
							
		}
					
			$row =  $res->fetch_assoc();
				$agencyName=$row["agencyName"];
				$agencyAddress=$row["address"];
				$agencyEmail=$row["agencyEmail"];
				$agencyCno=$row["agencyCno"];
				$agencyUrl=$row["websiteUrl"];
				$agentName=$row["agentName"];
				$agentAddress=$row["agentAddress"];
				$agentEmail=$row["agentEmail"];
				$agentCno=$row["agentCno"];
							
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				
				$agencyName=$_POST["agencyName"];
				$agencyAddress=$_POST["agencyAddress"];
				$agencyEmail=$_POST["agencyEmail"];
				$agencyCno=$_POST["agencyContact"];
				$agencyUrl=$_POST["agencyUrl"];
				$agentName=$_POST["agentName"];
				$agentAddress=$_POST["agentAddress"];
				$agentEmail=$_POST["agentEmail"];
				$agentCno=$_POST["agentContact"];
				
				$submitVal=$_POST["submit"];
				
				if(!strcmp($submitVal,"Update Profile")){
					$sql="update agent set agencyName = '$agencyName',address = '$agencyAddress ',
						agencyEmail = '$agencyEmail', agencyCno = '$agencyCno', 
						websiteUrl = '$agencyUrl', agentName = '$agentName ', agentAddress = '$agentAddress ',
						agentEmail = '$agentEmail', agentCno = '$agentCno'
						where agentId = '$userId' ";
				}else if(!strcmp($submitVal,"Delete Account")){
							$sql="delete  from agent where agentId= '$userId'";
							$conn->query("delete  from login where userId='$userId'");
				session_destroy();
				header('Location:main-page.php');
					
					
				}
				else if(!strcmp($submitVal,"Cancel")){
					header('Location:AgencyProfile.php');
				}
				else if(!strcmp($submitVal,"Change Password")){
					header('Location:ChangePassword.php');
				}
				
				
				
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
				}
	
				
		}	
		
?>

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
	<form method="post" action="AgencyProfile.php" class="registerform container">
		
		<div class="form-group">

							<input type="submit" name="submit" value="Delete Account"/>
							<input type="submit" name="submit" value="Change Password"/>
		</div>
		
		<fieldset >
				
		<legend>Agency Details</legend>
		<div class="row">
			<div class="form-group col-md-6">
								
				<div class="form-group">

					<label for="agencyName">Agency Name</label>
		  		  	<input type="text" class="form-control" required="required" id="agencyName" name="agencyName" value="<?php echo $agencyName; ?>">
		  		</div>
				<div class="form-group">
					<label for="agencyAddress">Address</label>
		  		  	<textarea cols="5" rows="4" class="form-control" required="required" name="agencyAddress" id="agencyAddress" ><?php echo $agencyAddress; ?></textarea>
		  		</div>
		  		<div class="form-group">

					<label for="agencyEmail">Agency Email Addess</label>
		  		  	<input type="email" class="form-control" required="required" id="agencyEmail" name="agencyEmail" value="<?php echo $agencyEmail; ?>">
		  		</div>
		  		<div class="form-group">

					<label for="agencyContact">Contact No.</label>
		  		  	<input type="text" class="form-control"  required="required" id="agencyContact" name="agencyContact" value="<?php echo $agencyCno; ?>">
		  		</div>
		  		<div class="form-group">

					<label for="agencyUrl">WebSite URL</label>
		  		  	<input type="text" class="form-control" required="required" id="agencyUrl" name="agencyUrl" value="<?php echo $agencyUrl; ?>">
		  		</div>
	  		</div>
	  	</fieldset>
	  	<fieldset >
			<legend>Agent Details</legend>
			<div class="row">
				<div class="form-group col-md-6">
					
					<div class="form-group">

						<label for="agentName">Agent Name</label>
			  		  	<input type="text" class="form-control" required="required" id="agentName" name="agentName" value="<?php echo $agentName; ?>">
			  		</div>
																		
					<div class="form-group">
						<label for="agentAddress">Address</label>
			  		  	<textarea cols="5" rows="4" class="form-control" required="required" name="agentAddress" id="agentAddress" rows="200" cols="5"><?php echo $agentAddress; ?></textarea>
			  		</div>
			  		<div class="form-group">

						<label for="agentEmail">Agent Email Addess</label>
			  		  	<input type="email" class="form-control" id="agentEmail" required="required" name="agentEmail" value="<?php echo $agentEmail; ?>">
			  		</div>
			  		<div class="form-group">

						<label for="agentContact">Contact No.</label>
			  		  	<input type="text" class="form-control"  required="required" id="agentContact" name="agentContact" value="<?php echo $agentCno; ?>">
			  		</div>
		  		</div>
		  	</div>
	  	</fieldset>

	  	<div class="form-group">
			<input class="btn btn-info" type="submit" name="submit" value="Update Profile" />
			<input class="btn btn-info" type="submit" name="submit" value="Cancel" />
					
			
		</div>
	
</body>
</html>
