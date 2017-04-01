

<?php 
	session_start();
	$userId=$_SESSION["username"];
		include 'Connection.php';
		
				
		$res = $conn->query("select * from guide where guideId = '$userId'");
		if( mysqli_num_rows($res) == 0 )
		{
				  
							echo "record not found";
							return;
							
		}
					
			$row =  $res->fetch_assoc();
				
				$name=$row["name"];
				$dob=$row["dob"];
				$contactNo=$row["contactNo"];
				$acontactNo=$row["alternateCno"];
				$email=$row["email"];
				$langId=$row["langId"];
				$spotId=$row["spotId"];
				$imgurl=$row["imgurl"];
				$idprooftype=$row["idproof"];
				$idproofno=$row["idproofId"];
				$exp=$row["experience"];
				$address=$row["address"];
				
				
			
			
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				
				$name=$_POST["name"];
				$dob=$_POST["dob"];
				$contactNo=$_POST["contact"];
				$acontactNo=$_POST["acontact"];
				$email=$_POST["email"];
			//	$langId=implode("," ,$_POST["language"]);
			//	$spotId=implode("," ,$_POST["places"]);
				
				$idprooftype=$_POST["idprooftype"];
				$idproofno=$_POST["idproofno"];
				$exp=$_POST["gexp"];
				$address=$_POST["address"];
				
				$submitVal=$_POST["submit"];
				
				if(!strcmp($submitVal,"Update Profile")){
					$sql="update guide set  name = '$name ', dob = '$dob'
							, address = '$address ', idproof = '$idprooftype ', 
							idproofId = '$idproofno', experience = '$exp', status = ' ', langId = '$langId', 
							spotId = '$spotId', email= '$email', 
							contactNo = '$contactNo', alternateCno = '$acontactNo '
							where guideId = '$userId'; ";
				}else if(!strcmp($submitVal,"Delete Account")){
					$sql="delete  from guide where guideId= '$userId'";
					$conn->query("delete  from login where userId='$userId'");
					session_destroy();
					header('Location:main-page.php');
					
					
				}
				else if(!strcmp($submitVal,"Cancel")){
					header('Location:GuideProfile.php');
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
 	<style type="text/css">
			.center{
				width:900px;
			}
		</style>
  
</head>
<body><center>
	<table class="table" style="width: 770px;">
		<tr>
			<td></td>
			<td><img src="<?php echo $imgurl;?>" class="pull-right" height="100px" width="100px"></td>
		</tr>
		<tr>
		<?php if(!isset($_GET['eid'])){?>
		<td></td>
		<td>
		<a href="GuideProfile.php?eid=<?php echo $userId;?>" class="btn btn-primary pull-right">Change Image</a></td>
		<?php }
			else{
		?>
		<form action="GuideImageUpdate.php" method="post" enctype="multipart/form-data">
			<!--<td><input type="hidden" name="id" value="<?php// echo $userId;?>"></td>-->
			<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
			<td><input type="submit" value="Add Image" name="submit"></td>
		</form>
			<td><a href="GuideProfile.php">Cancel</a></td>
		<?php		
			}
		?>
		</tr>
	</table> </center>


	<form method="post" action="GuideProfile.php" class="registerform container" enctype="multipart/form-data" style="margin-top: -68px;">
		
		<div class="row">
			<div class="form-group">
				<div class="form-group">
							<input type="submit" name="submit" class="btn btn-danger" value="Delete Account"/>
							<input type="submit" name="submit" class="btn btn-primary	" value="Change Password"/>
				</div>
				<div class="form-group">

					<label for="name">Name</label>
		  		  	<input type="text" class="form-control"  required="required" id="name" name="name" value="<?php echo $name;?>">
		  		</div>
				
							
				<div class="form-group">
					<label for="dob">Birthdate</label>
					<input type="date" class="form-control" required="required" id="dob" name="dob" value="<?php echo $dob;?>">
	  		
				</div>
			
			</div>
	  	</div>
  		
  		<div class=" form-group">
	  		
			<div class="form-group form-inline">
				<label for="contact">Contact No.</label>
	  		  	<input type="text" class="form-control" required="required" id="contact" size="10" name="contact" value="<?php echo $contactNo;?>">
			</div>
			<div class="form-group form-inline">
				<label for="acontact">Alternate Contact No.</label>
	  		  	<input type="text" class="form-control" required="required" id="acontact" size="10" name="acontact" value="<?php echo $acontactNo;?>">
			</div>
			
		
			<div class="form-group">
				<label for="email">Email address:</label>
	  		  	<input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>">
	  		</div>
  			
		
    	<!--<div class="form-group from-inline">
    		<label for="language">Languages known</label>
			<select class="selectpicker form-control" name="language[]" multiple data-placeholder="Choose language" data-live-search="true">
			  <?php
			  
					/*$resLang = $conn->query("select * from languages");
				
				
						while($row = $resLang->fetch_assoc())
						{
								$langId=$row["id"];
								$language=$row["name"];

			?>
				
						<option value="<?php echo $langId;?>" if><?php echo $language;?></option>
						<?php }*/?>	
					
						
			</select>
		</div>-->
		
		<!--<div class="form-group from-inline">
    		<label for="places">Places</label>
			<select class="selectpicker form-control" name="places[]" multiple data-placeholder="Choose places" data-live-search="true">
			  <?php
			  
					/*$resSpot = $conn->query("select * from touristspot");
				
				
						while($row = $resSpot->fetch_assoc())
						{
								$spotId=$row["id"];
								$spotName=$row["name"];

			?>
				
						<option value="<?php echo $spotId;?>"><?php echo $spotName;?></option>
						<?php }*/?>	
					
						
			</select>
		</div>-->
    
    
		   
			<label for="idprooftype" >Proof Type</label>
			<select name="idprooftype" class="form-control"> 
			<option value="<?php echo $idprooftype?>"><?php echo $idprooftype?></option>
			<option value="Driving licence">Driving licence</option>
			<option value="Addhar Card">Addhar Card</option>
			<option value="Pan-card">Pan-card</option>
			</select>
		
		<div class="form=group">
		<label for="idproofno">Id Proof number</label>
			<input type="text" name="idproofno" placeholder="Enter id proof number" required="required"  class="form-control" value="<?php echo $idproofno?>"></input>
		</div>
		 <div class="form-group " style="width:20%;">
		 	<label for="gexp">Experience (In Years)</label>
	  		  	<input type="number" class="form-control" required="required" id="gexp" name="gexp" value="<?php echo $exp?>"/>
		 </div>  
	
		

		
		<div class="form-group">
		<label for="address">Address</label>
  		  <textarea class="form-control" id="address" required="required" name="address" cols="5" rows="4"><?php echo $address?></textarea>
		</div>

			<div class="form-group">
				<input type="submit"  class="btn btn-info" name="submit" value="Update Profile" />
				<input type="submit"  class="btn btn-info" name="submit" value="Cancel" />
		
		</div>
</form>

</body>
</html>