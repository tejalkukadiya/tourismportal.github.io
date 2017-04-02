<?php
	include '../Connection.php';
	session_start();

  $_SESSION['currentUrl']="restaurant-edit.php";
  $_SESSION['heading']="Profile";
	$username=$_SESSION["username"];


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$id=$_POST['id'];
		$restaurantname=$_POST['resName'];
		$managername=$_POST['managerName'];
		$contact=$_POST['contact'];
		$altercontact=$_POST['acontact'];
		$website=$_POST['website'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$pincode=$_POST['pincode'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$cuisine=$_POST['cuisine'];
		$food=$_POST['food'];
		//$submitVal=$_POST['submit'];


	if(!strcmp($_POST['submit'],'Update'))	{
		$sql1="update restaurant set resname='$restaurantname',managername='$managername',contact='$contact',altercontact='$altercontact',website='$website',email='$email',address='$address',pincode='$pincode',city='$city',state='$state',cuisine='$cuisine',foodtype='$food'where id='$id'";
		$conn->query($sql1);
		//echo $sql1;
		
	}
	else if(!strcmp($_POST['submit'],'Delete Account')){
		$id=$_POST['id'];
		$sql1="delete  from restaurant where id='$id'";
		$conn->query($sql1);
		session_destroy();

	}
	else if(!strcmp($_POST['submit'],'Change Password')){
		header('Location:ChangePassword.php');
	}
		
	}


?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<style type="text/css">
			.center{
				width:900px;
			}
		</style>
</head>

<body style="overflow-x: hidden;">
	<?php
	include '../header.php';
?>
<?php
	
	$result=$conn->query("select * from restaurant where username='$username' ");
	if(isset($_GET['e'])){
	echo '<h3><center><font color="red">Sorry there was an error while submitting this form<br/> Try again!</font></center></h3>';
	//return;
	}
	if(mysqli_num_rows($result)==0)
		return;
	while($row = $result->fetch_assoc()){
		$id=$row['id'];
		$restaurantname=$row['resname'];
		$managername=$row['managername'];
		$contact=$row['contact'];
		$altercontact=$row['altercontact'];
		$website=$row['website'];
		$email=$row['email'];
		//$username=$row['userName'];
		//$password=$row['password'];	
		$address=$row['address'];
		$pincode=$row['pincode'];
		$city=$row['city'];
		$state=$row['state'];
		$cuisine=$row['cuisine'];
		$food=$row['foodtype'];
		//$status=$row['status'];
		$img=$row['img'];
?>
	
	<div class="container center" style="margin: 20px 300px">
		
			<table class="table">
		<tr>
			<td><b>Profile photo</b></td>
			<td><img src="<?php echo $img;?>"  height="100px" width="100px"></td>
		</tr>
		<tr>
		<?php if(!isset($_GET['eid'])){?>

		<a href="restaurant-edit.php?eid=<?php echo $id;?>" class="btn btn-primary">Change Image</a>
		<?php }
			else{
		?>
		<form action="restaurant-image-update.php" method="post" enctype="multipart/form-data">
			<td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
			<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
			<td><input type="submit" value="Add Image" name="submit"></td>
		</form>
			<td><a href="restaurant-edit.php">Cancel</a></td>
		<?php		
			}
		?>
		</tr>
	</table>

<form action="restaurant-edit.php" method="post">
	<table class="table">
		<tr>
			<td><input type="submit" name="submit" class="btn btn-danger" value="Delete Account"></td>
			<td><input type="submit" name="submit" class="btn btn-primary" value="Change Password"></td>
		</tr>
	</table>
	<table class="table">
	<input type="hidden" name="id" value="<?php echo $id;?>">
		<tr>
			<td>Restaurant name</td>
			<td><input type="text" name="resName" class="form-control" style="width: auto;" value="<?php echo $restaurantname;?>"></td>
		</tr>
		<tr>
			<td>Manager name</td>
			<td><input type="text" class="form-control" style="width: auto;" name="managerName" value="<?php echo $managername;?>"></td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td><input type="text" class="form-control" style="width: auto;" name="contact" value="<?php echo $contact;?>"></td>
		</tr>
		<tr>
			<td>Alternate Contact No</td>
			<td><input type="text" class="form-control" style="width: auto;" name="acontact" value="<?php echo $altercontact;?>"></td>
		</tr>
		<tr>
			<td>Email Id</td>
			<td><input type="text" class="form-control" style="width: auto;" name="email" value="<?php echo $email;;?>"></td>
		</tr>
		<tr>
			<td>Website</td>
			<td><input type="text" class="form-control" style="width: auto;" name="website" value="<?php echo $website;?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" class="form-control" style="width: auto;" name="address" value="<?php echo $address;?>"></td>
		</tr>
		<tr>
			<td>Pincode</td>
			<td><input type="text" class="form-control" style="width: auto;" name="pincode" value="<?php echo $pincode;?>"></td>
		</tr>
		<tr>
			<td>City</td>
			<td>
				<select class="selectpicker form-control" name="city" style="width: auto;" data-placeholder="Choose city" data-live-search="true">
				
			<?php			  
					$result1 = $conn->query("select id,city from location order by(city)");				
						while($row = $result1->fetch_assoc())
						{
								$cid=$row['id'];
								$cityname=$row["city"];

			?>				
				<option value="<?php echo $cid;?>" <?php if($cid==$city){?> selected="selected" <?php }?>><?php echo $cityname;?></option>
			<?php }?>					
			</select>
			</td>
		</tr>
		<tr>
			<td>State</td>
			<td>
				<select class="selectpicker form-control" name="state" style="width: auto;" data-placeholder="Choose state" data-live-search="true">
				
			<?php			  
				$result2 = $conn->query("select id,state from state order by(state)");				
					while($row = $result2->fetch_assoc())
					{
								$sid=$row['id'];
								$statename=$row["state"];

			?>				
				<option value="<?php echo $sid;?>" <?php if($sid==$state){?> selected="selected" <?php }?>><?php echo $statename;?></option>
			<?php }?>						
			</select>
			</td>
		</tr>
		<tr>
			<td>Cuisine</td>
			<td><input type="text" class="form-control" style="width: auto;" name="cuisine" value="<?php echo $cuisine;?>"></td>
		</tr>
		<tr>
			<td>FoodType</td>
			<td>
				<select class="selectpicker form-control" style="width: auto;" name="food" data-placeholder="" data-live-search="true">
			  		<option value="Vegetarion" <?php if(!strcmp($food,"Vegetarion")){?> selected="selected" <?php }?>>Vegetarion</option>
			  		<option value="Non-Vegetarion" <?php if(!strcmp($food,"Non-Vegetarion")){?> selected="selected" <?php }?>>Non-Vegetarion</option>
			  		<option value="Both" <?php if(!strcmp($food,"Both")){?> selected="selected" <?php }?>>Both</option>
				</select>
			</td>
		</tr>
		<!--<tr>
			<td>Image</td>
			<td><img src="<?php echo $img;?>"></td>
		</tr>-->
		<tr>
			<td><input type="submit" name="submit" class="btn btn-primary" value="Update" ></td>
			<td><a href="restaurant-edit.php" class="btn btn-danger">Cancel</a></td>
		</tr>
	</table>
<?php } ?>
</form>	
	</div>
	
</body>
</html>