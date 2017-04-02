<?php
  
  session_start();

  $_SESSION['currentUrl']="restaurant-display.php";
  $_SESSION['heading']="Restaurant";
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
			<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		.pad {
			padding: 100px 300px;
		}
		.card {
			    border: 1px solid black;
			    border-radius: 5px;
			    height: 100%;
			    margin-top: 30px;
			    padding: 10px;
			    box-shadow: 1px 1px 13px #888;
		}
		.card p{
			margin-bottom: 6px;
		}
	</style>
</head>


<body>
	<?php
	include 'header.php';
?>
<div class="container pad">
	<form action="restaurant-display.php" method="post" >
		<h3>Search by</h3>
		<input type="radio" name="gfilter" value="city">
		<label for="city">City</label>
		<input type="radio" name="gfilter" value="cuisine">
		<label for="cuisine">Cuisine</label>
		<input type="radio" name="gfilter" value="food">
		<label for="food">Food Type</label>		
		<br>
		<div class="row">
			<div class="col-lg-12">
			    <div class="input-group">
			      <input type="text" class="form-control" name="searchkey" placeholder="Search for...">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button">Search</button>
			      </span>
			    </div><!-- /input-group -->
		  	</div><!-- /.col-lg-6 -->
		</div>	
	</form>
	<?php
		include '../Connection.php';
		if($_SERVER["REQUEST_METHOD"]== "POST"){											
			 $radio=$_POST["gfilter"];
			//echo 'radio'.$radio;				
		if(!strcmp($radio,"city")){
			$city=$_POST["searchkey"];
			$res=$conn->query("select * from restaurantlocationstateview where lower(city)=lower('$city')");
		}	
		else if(!strcmp($radio,"cuisine")){
			$cuisine=$_POST["searchkey"];
			$res=$conn->query("select * from restaurantlocationstateview where lower(cuisine)=lower('$cuisine')");
		}
		else if(!strcmp($radio,"food")){
			$food=$_POST["searchkey"];
			$res=$conn->query("select * from restaurantlocationstateview where lower(foodtype)=lower('$food')");
		}}
		else{
			//echo "Bhavi";
			$res=$conn->query("select * from restaurantlocationstateview");
		}


		if( mysqli_num_rows($res) == 0 )
		{	  
			echo "Reasult Not Found";
			return;				
		}

		while($row = $res->fetch_assoc()){
			$resname=$row['resname'];
			$managername=$row['managername'];
			$contact=$row['contact'];
			$altercontact=$row['altercontact'];
			$website=$row['website'];
			$email=$row['email'];
			$address=$row['address'];
			$pincode=$row['pincode'];
			$cuisine=$row['cuisine'];
			$foodtype=$row['foodtype'];
			$status=$row['status'];
			$city=$row['city'];
			$state=$row['state'];
			$img=$row['img'];
	?>

	<div class="card">
		<div class="row">
			<div class="col-md-4"><img src="<?php echo $img;?>" width="100%" height="100%"></div>
			<div class="col-md-8">
				<h4><?php echo $resname; ?></h4><p><b>City</b>:<?php echo $city; ?>&nbsp;&nbsp;&nbsp;<b>State</b>:<?php echo $state; ?></p>
				<p><b>Address</b>: <?php echo $address; ?></p>
				<p><b>Contact No.</b> +91-<?php echo $contact; ?>, +91-<?php echo $altercontact; ?></p>
				<p><b>Cuisine</b>: <?php echo $cuisine; ?></p>
				<h6><b>Website</b>: <?php echo $website; ?>&nbsp;&nbsp;&nbsp;<b>Email</b>: <?php echo $email; ?></h6>
			</div>
		</div>
	</div>
	<?php } ?>
<div>

<!--	<?php
		include 'Connection.php';
		if(isset($_GET['e']))
				echo '<h3><center><font color="red">Sorry there was an error while submitting this form<br/> Try again!</font></center></h3>';
		if($_SERVER["REQUEST_METHOD"]== "POST"){											
			 $radio=$_POST["gfilter"];				
		if(!strcmp($radio,"city")){
			$city=$_POST["searchkey"];
			$res=$conn->query("select * from restaurantlocationstateview where city='$city'");
		}	
		if(!strcmp($radio,"cuisine")){
			$cuisine=$_POST["searchkey"];
			$res=$conn->query("select * from restaurantlocationstateview where cuisine='$cuisine'");
		}
		if(!strcmp($radio,"food")){
			$food=$_POST["searchkey"];
			$res=$conn->query("select * from restaurantlocationstateview where foodtype='$food'");
		}}
		else{
			$res=$conn->query("select * from restaurantlocationstateview");
		}


		if( mysqli_num_rows($res) == 0 )
		{	  
			echo "Reasult Not Found";
			return;				
		}?>


		<table class="table">

	<?php	while($row = $res->fetch_assoc()){
			$resname=$row['resname'];
			$managername=$row['managername'];
			$contact=$row['contact'];
			$altercontact=$row['altercontact'];
			$website=$row['website'];
			$email=$row['email'];
			$address=$row['address'];
			$pincode=$row['pincode'];
			$cuisine=$row['cuisine'];
			$foodtype=$row['foodtype'];
			$status=$row['status'];
			$city=$row['city'];
			$state=$row['state'];
			$img=$row['img'];
		?>
		
			<tr>
				<td><b>Restaurant Name</b></td>
				<td><?php echo $resname; ?></td>
			</tr>
			<tr>
				<td>Manager Name</td>
				<td><?php echo $managername; ?></td>
			</tr>
			<tr>
				<td>Contact No:</td>
				<td><?php echo $contact; ?></td>
			</tr>
			<tr>
				<td>Altercontact No</td>
				<td><?php echo $altercontact; ?></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><?php echo $website; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $email; ?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $address; ?></td>
			</tr>
			<tr>
				<td>Pincode</td>
				<td><?php echo $pincode; ?></td>
			</tr>
			<tr>
				<td>Cuisine</td>
				<td><?php echo $cuisine; ?></td>
			</tr>
			<tr>
				<td>Food Type</td>
				<td><?php echo $foodtype; ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><?php echo $status; ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td><?php echo $city; ?></td>
			</tr>
			<tr>
				<td>State</td>
				<td><?php echo $state; ?></td>
			</tr>
			<tr>
				<td><img src="<?php echo $img;?>"></td>
			</tr>
			

		<?php } ?>
		</table>
</div>
</div>
 <?php
       include 'footer.php';
  ?>
</body>
</html>