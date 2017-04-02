<?php
  
  session_start();

  $_SESSION['currentUrl']="hotel-form.php";
  $_SESSION['heading']="Register";
  
 ?>

<?php include '../Connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <script src="assests/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assests/registerform.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="assests/fileinput.min.js"></script>
   <script src="assests/registerform.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
 
  
</head>
<body>
	<?php
	include 'header.php';
?>
<?php

?>
<div class="container hotelreg" >
	<form method="post" action="hotel-entry.php" class="registerform" enctype="multipart/form-data" >
		
		<div class="row">
			<div class="form-group col-md-6">
				<div class="form-group">
					<label for="ghotelName">Hotel Name</label>
		  		  	<input type="text" class="form-control"  required="required" id="hotelName" name="hotelName">
		  		</div>
				<div class="form-group">
					<label for="gmanagerName">Manager Name</label>
		  		  	<input type="text" class="form-control"  required="required" id="managerName" name="managerName">
		  		</div>	

					</div>
		  		<div class=" form-group col-md-6">
		  		<div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
				    <div class="kv-avatar center-block" style="width:200px">
				    <input id="avatar-2" name="avatar-2" required="required" type="file" class="file-loading">
					</div>
					</div>
				</div>
		  		<div class="form-group">
				<label for="contact">Contact No.</label>
	  		  	<input type="number" class="form-control" required="required" id="contact" size="10" name="contact">
			</div>
			<div class="form-group">
				<label for="acontact">Alternate Contact No.</label>
	  		  	<input type="number" class="form-control" required="required" id="acontact" size="10" name="acontact">
			</div>		
			<div class="form-group">
				<label for="Website">Hotel Website</label>
	  		  	<input type="Website" class="form-control" required="required" id="Website" size="10" name="Website">
			</div>	
			<div class="form-group">
				<label for="email">Email address:</label>
	  		  	<input type="email" class="form-control" id="email" name="email">
	  		</div>
	  		<div class="form-group">
				<label for="userName">userName</label>
	  		  	<input type="text" class="form-control" required="required" id="userName" name="userName">

		  	</div>
  			<div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="password" id="pwd" aria-describedby="passwordHelpBlock">
		    <p id="passwordHelpBlock" class="form-text text-muted">
  				Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
			</p>
		</div>		
			
		<div class="form-group">
		<label for="address">Address</label>
  		  <textarea class="form-control" id="address" required="required" name="address" cols="5" rows="4"></textarea>
		</div>	
		<div class="form-group">
				<label for="pincode">Pincode</label>
	  		  	<input type="number" class="form-control" required="required" id="pincode" size="10" name="pincode">
		</div>
		<div class="form-group from-inline">
    		<label for="city">City</label>
			<select class="selectpicker form-control" name="city"  data-placeholder="Choose city" data-live-search="true">
						<option disabled selected value> -- select a City -- </option>
			  <?php			  
					$result = $conn->query("select id,city from location order by(city)");				
						while($row = $result->fetch_assoc())
						{
								$id=$row['id'];
								$city=$row["city"];

			?>				
						<option value="<?php echo $id;?>"><?php echo $city;?></option>
			<?php }?>	
					
						
			</select>
		</div>
		<div class="form-group from-inline">
    		<label for="state">State</label>
			<select class="selectpicker form-control" name="state" data-placeholder="Choose state" data-live-search="true">
			  	<option disabled selected value> -- select a State -- </option>
			<?php			  
				$results = $conn->query("select id,state from state order by(state)");				
					while($row = $results->fetch_assoc())
					{
								$sid=$row['id'];
								$state=$row["state"];

			?>				
				<option value="<?php echo $sid;?>"><?php echo $state;?></option>
			<?php }?>	
					
						
			</select>
		</div>
		<div class="form-group">
				<label for="rating">Rating</label>
	  		  	<input type="text" class="form-control"  required="required" id="rating" name="rating">
	  	</div>
		
		<div class="form-group">
				<label for="status">Status</label>
	  		  	<input type="text" class="form-control"  required="required" id="status" name="status">
	  	</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-info" value="Submit">
		</div>
	</form>
</div>
 <?php
       include 'footer.php';
  ?>
</body>
</html>