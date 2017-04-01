<?php
  
  session_start();

  $_SESSION['currentUrl']="guideRegister.php";
  $_SESSION['heading']="GuideRegister";
  
 ?>
<?php include '../Connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <script src="assests/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
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
	<form method="post" action="Guide.php" class="registerform container"enctype="multipart/form-data" >
		
		<div class="row">
			<div class="form-group col-md-6">
				<div class="form-group">

					<label for="gfirstName">First Name</label>
		  		  	<input type="text" class="form-control"  required="required" id="firstName" name="gfirstName">
		  		</div>
				<div class="form-group">
					<label for="glastName">Last Name</label>
		  		  	<input type="text" class="form-control"  required="required" id="lastName" name="glastName">
		  		</div>
				
				<div class="form-group">
					<label for="userName">userName</label>
		  		  	<input type="text" class="form-control" required="required" id="userName" name="userName">
		  		</div>
				
				
				<div class="form-group">
					<label for="dob">Birthdate</label>
					<input type="date" class="form-control" required="required" id="dob" name="dob">
	  		
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
	  		
			<div class="form-group form-inline">
				<label for="contact">Contact No.</label>
	  		  	<input type="text" class="form-control" required="required" id="contact" size="10" name="contact">
			</div>
			<div class="form-group form-inline">
				<label for="acontact">Alternate Contact No.</label>
	  		  	<input type="text" class="form-control" required="required" id="acontact" size="10" name="acontact">
			</div>
			<div class="form-group from-inline">
				<label for="type">Gender </label>
		          <label class="form-check-label">
		            <input class="form-check-input" type="radio"  required="required" name="gender" id="male" value="male">
		            Male
		          </label>
		          
		          <label class="form-check-label">
		            <input class="form-check-input" type="radio" required="required" name="gender" id="female" value="female">
		           		Female
		           </label>
		        </div>
		    </div>
		
		
			<div class="form-group">
				<label for="email">Email address:</label>
	  		  	<input type="email" class="form-control" id="email" name="email">
	  		</div>
  			<div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="password" id="pwd" aria-describedby="passwordHelpBlock">
		    <p id="passwordHelpBlock" class="form-text text-muted">
  				Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
			</p>
		</div>
		
		
    	<div class="form-group from-inline">
    		<label for="language">Languages known</label>
			<select class="selectpicker form-control" name="language[]" multiple data-placeholder="Choose language" data-live-search="true">
			  <?php
			  
					$resLang = $conn->query("select * from languages");
				
				
						while($row = $resLang->fetch_assoc())
						{
								$langId=$row["id"];
								$language=$row["name"];

			?>
				
						<option value="<?php echo $langId;?>"><?php echo $language;?></option>
						<?php }?>	
					
						
			</select>
		</div>
		
		<div class="form-group from-inline">
    		<label for="places">Places</label>
			<select class="selectpicker form-control" name="places[]" multiple data-placeholder="Choose places" data-live-search="true">
			  <?php
			  
					$resSpot = $conn->query("select * from touristspot");
				
				
						while($row = $resSpot->fetch_assoc())
						{
								$spotId=$row["id"];
								$spotName=$row["name"];

			?>
				
						<option value="<?php echo $spotId;?>"><?php echo $spotName;?></option>
						<?php }?>	
					
						
			</select>
		</div>
    
    
		   
			<label for="idprooftype" >Proof Type</label>
			<select name="idprooftype" class="form-control"> 
			<option value="dr">Driving licence</option>
			<option value="add">Addhar Card</option>
			<option value="pan">Pan-card</option>
			</select>
		
		<div class="form=group">
		<label for="idproofno">Enter id Proof number</label>
			<input type="text" name="idproofno" placeholder="Enter id proof number" required="required"  class="form-control"></input>
		</div>
		 <div class="form-group " style="width:20%;">
		 	<label for="gexp">Experience (In Years)</label>
	  		  	<input type="number" class="form-control" required="required" id="gexp" name="gexp">
		 </div>  
	
		

		
		<div class="form-group">
		<label for="address">Address</label>
  		  <textarea class="form-control" id="address" required="required" name="address" cols="5" rows="4"></textarea>
		</div>

		<div class="form-group">
			<label for="certificate">Upload Valid Certificated (PDF)</label>
			<input type="file" required="required" name="certificate">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-info" value="Submit">
		</div>
</form>

</body>
</html>