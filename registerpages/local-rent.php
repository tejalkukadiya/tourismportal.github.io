

<?php include '../Connection.php';?>

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
	<form method="post" action="local-rent-entry.php" class="registerform container" enctype="multipart/form-data" >
		
		<div class="row">
			<div class="form-group col-md-6">
				<div class="form-group">
					<label for="gfirstName">First Name</label>
		  		  	<input type="text" class="form-control"  required="required" id="firstName" name="firstName">
		  		</div>
				<div class="form-group">
					<label for="glastName">Last Name</label>
		  		  	<input type="text" class="form-control"  required="required" id="lastName" name="lastName">
		  		</div>	
		  		<div class="form-group">
				<label for="contact">Contact No.</label>
	  		  	<input type="number" class="form-control" required="required" id="contact" size="10" name="contact">
			</div>
			<div class="form-group">
				<label for="acontact">Alternate Contact No.</label>
	  		  	<input type="number" class="form-control" required="required" id="acontact" size="10" name="acontact">
			</div>		
				
			</div>
	  		<div class=" form-group col-md-6">
				<div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
				    <div class="kv-avatar center-block" style="width:200px">
				    <input id="avatar-2" name="avatar-2" required="required" type="file" class="file-loading">
					</div>
				</div>
			</div>
  		
  		<div class=" form-group form-inline">
	  		
			
			<div class="form-group">
				<label for="type">Gender </label>
		          <label class="form-check-label">
		            <input class="form-check-input" type="radio"  required="required" name="gender" id="male" value="Male">
		            Male
		          </label>
		          
		          <label class="form-check-label">
		            <input class="form-check-input" type="radio" required="required" name="gender" id="female" value="Female">
		           		Female
		           </label>
		        </div>
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
		<div class="form=group">
		<label for="idproofno">Adhar Card number</label>
			<input type="text" name="idproofno" placeholder="Enter id proof number" required="required"  class="form-control"></input>
		</div>	
		<div class="form-group">
		<label for="address">Address</label>
  		  <textarea class="form-control" id="address" required="required" name="address" cols="5" rows="4"></textarea>
		</div>	
		<div class="form-group">
				<label for="gfirstName">Flat</label>
	  		  	<input type="text" class="form-control"  required="required" id="flat" name="flat" placeholder="e.g. 2BHK">
		</div>
		<div class="form-group">
				<label for="gfirstName">Area (m<sup>2</sup>)</label>
	  		  	<input type="text" class="form-control"  required="required" id="area" name="area">
	  		</div>
		<div class="form-group">
				<label for="gfirstName">Amenities</label>
	  		  	<input type="text" class="form-control"  required="required" id="type" name="type">
	  		</div>
		<div class="form-group">
				<label for="gfirstName">Price(Rs.)</label>
	  		  	<input type="text" class="form-control"  required="required" id="price" name="price">
	  		</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-info" value="Submit">
		</div>
</form>

</body>
</html>