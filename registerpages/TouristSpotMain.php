<?php 
	include '../Connection.php';
	include 'adminHome.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">
		td{
			min-width:100px;
		}
		.pad form table tr td{
			width: 0px;
		}
	</style>
</head>
<body>
<div>
<h1><center><font color="green" > Tourist Spots Entry Form</font></center></h1>

<div class="col-md-4">
	<?php
if(isset($_GET['e']))
	echo '<h3><center><font color="red">Sorry there was an error while submitting this form<br/> Try again!</font></center></h3>';
if(isset($_GET['e1']))
 	echo '<h3><center><font color="red">Sorry there was an error while updating image <br/> Try again!</font></center></h3>';
   
		if(isset($_GET['did']))
		{
			$did=$_GET['did'];
			$query1="select * from touristspot where id=$did";
			$result1 = $conn->query($query1);
			if(mysqli_num_rows($result1)!=0)
			{
				$row = $result1->fetch_assoc();
				$id=$row['id'];
				$name=$row['name'];
				$famousFor=$row['famousFor'];
				$near_by_city=$row['near_by_city'];
				$distance=(int)$row['distance'];
				$category=$row['category'];
				$timing=$row['timing'];
				$img=$row['img'];
			}
			$query4="select city from location where id='$near_by_city'";
			$result4 = $conn->query($query4);
			if(mysqli_num_rows($result4)!=0){
				$row = $result4->fetch_assoc();
				$cityname=$row['city'];
			}
?>
<a href="TouristSpotMain.php">Create New Record</a>
<table  border="5" class="table" style="border-collapse: unset;">
	<tr>
		<td>Name</td>
		<td><?php echo $name;?></td>
	</tr>
	<tr>
		<td>Famous For</td>
		<td><?php echo $famousFor;?></td>
	</tr>
	<tr>
		<td>Near_by_city</td>
		<td><?php echo $cityname;?></td>
	</tr>
	<tr>
		<td>Distance</td>
		<td><?php echo $distance;?></td>
	</tr>
	<tr>
		<td>Category</td>
		<td><?php echo $category;?></td>
	</tr>
	<tr>
		<td>Timing</td>
		<td><?php echo $timing;?></td>
	</tr>
	<tr>
		<td>Image</td>
		<td><img src="<?php echo $img;?>" height="100px" width="100px"></td>
	</tr>
</table>
<?php 
	}
	else if(isset($_GET['tid'])){
		$tid=$_GET["tid"];
		$query2="select * from touristspot where id=$tid";
		$result2 = $conn->query($query2);
		if(mysqli_num_rows($result2)!=0)
		{
			$row = $result2->fetch_assoc();
			$id=$row['id'];
			$name=$row['name'];
			$famousFor=$row['famousFor'];
			$near_by_city=$row['near_by_city'];
			$distance=(int)$row['distance'];
			$category=$row['category'];
			$timing=$row['timing'];
			$img=$row['img'];
		}
?>
<form action="TouristSpot.php" method="post" enctype="multipart/form-data">
	<table  border="5" class="table" style="border-collapse: unset;">
		<input type="hidden" name="id" value="<?php echo $id;?>"/>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" required="required" value="<?php echo $name;?>"></td>
		</tr>
		<tr>
			<td>Famous for:</td>
			<td><textarea name="famousFor" rows="4" cols="24" required="required"><?php echo $famousFor;?></textarea></td>
		</tr>
		<tr>
			<td>near_by_city</td>
			<td><select name="near_by_city">
			<?php 
				$query3="select id,city from location";
				$result3 = $conn->query($query3);
				while($row = $result3->fetch_assoc()){
					$cityId=$row['id'];
					$cityname=$row['city'];
			?>
			<option value="<?php echo $cityId;?>" <?php if($near_by_city==$cityId){ ?> selected="selected" <?php } ?> > <?php echo $cityname;?> </option>
			<?php } ?>
		</select></td>
		</tr>
		<tr>
			<td>distance:</td>
			<td><input type="text" name="distance" required="required" value="<?php echo $distance;?>"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td>
			<select name="category">
				<option value="Temple">Temple</option>
				<option value="Mosque">Mosque</option>
				<option value="Church">Church</option>
				<option value="Waterfall">Waterfall</option>
				<option value="River">River</option>
				<option value="NationalPark">NationalPark</option>
				<option value="HeritageSite">HeritageSite</option>
				<option value="Museums">Museums</option>
				<option value="Lake">Lake</option>
				<option value="Garden">Garden</option>
				<option value="Park">Park</option>
				<option value="Island">Island</option>
				<option value="Monastery">Monastery</option>
				<option value="Other">Other</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Timing</td>
			<td><input type="text" name="timing" required="required" value="<?php echo $timing;?>" /></td>
		</tr>
		<tr><td><input type="submit" name="submit" value="update" class="btn btn-primary"></td>
		<td><a href='TouristSpotMain.php' > Cancel</a></td></tr>
	</table>
</form>
<?php 
	}
	else{		
		$id=0;
?>
<form action="TouristSpot.php" method="post" enctype="multipart/form-data" >
	<table  border="5" class="table" style="border-collapse: unset;">
		<input type="hidden" name="id" value="<?php echo $id; ?>" required="required" />
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" required="required"></td>
		</tr>
		<tr>
			<td>Famous for:</td>
			<td><textarea name="famousFor" rows="4" cols="24" required="required"></textarea></td>
		</tr>
		<tr>
			<td>near_by_city</td>
			<td>
			<select name="near_by_city">
			<?php 
				$query3="select id,city from location";
				$result3 = $conn->query($query3);
				while($row = $result3->fetch_assoc()){
					$cityId=$row['id'];
					$cityname=$row['city'];
			?>
			<option value="<?php echo $cityId;?>"><?php echo $cityname;?></option>
			<?php } ?>
			</select>
			</td>
		</tr>
		<tr>
			<td>distance:</td>
			<td><input type="text" name="distance" required="required"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td>
			<select name="category">
				<option value="Temple">Temple</option>
				<option value="Mosque">Mosque</option>
				<option value="Church">Church</option>
				<option value="Waterfall">Waterfall</option>
				<option value="River">River</option>
				<option value="NationalPark">NationalPark</option>
				<option value="HeritageSite">HeritageSite</option>
				<option value="Museums">Museums</option>
				<option value="Lake">Lake</option>
				<option value="Garden">Garden</option>
				<option value="Park">Park</option>
				<option value="Island">Island</option>
				<option value="Monastery">Monastery</option>
				<option value="Other">Other</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Timing</td>
			<td><input type="text" name="timing" required="required" /></td>
		</tr>
	</table>
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
<?php } ?>
</div>



<div class="col-md-8">
	<table border="5" class="table" style="border-collapse: unset;">
	<tr>	
	<th></th>
	<th>NAME</th>
	<th>FAMOUS FOR</th>
	<!--<th>NEAR BY CITY</th>
	<th>DISTANCE</th>
	<th>CATEGORY</th>
	<th>AVAILABILITY</th>-->
	<th>IMAGE</th>
	<th colspan="2"></th>
	</tr>
	<?php
	$sql ="select * from touristspot ";		
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc())
	{
			$id=$row['id'];
			$name=$row['name'];
			$famousFor=$row['famousFor'];
			//$near_by_city=$row['near_by_city'];
			//$distance=(int)$row['distance'];
			//$category=$row['category'];
			//$timing=$row['timing'];
			$img=$row['img'];			
	
?>
<tr>
	<td>
	<ul>
	<li><a href="TouristSpotMain.php?did=<?php echo $id;?>">Details</a></li><br>
	<li><a href='TouristSpotMain.php?tid=<?php echo $id;?>'>Edit</a></li><br>
	<li><a href="t_spot_image_display.php?tid=<?php echo $id;?>">View Gallery</a></li><br>
	<li><a href='TouristSpot.php?tid=<?php echo $id;?>'>Delete</a></li></ul></td>
	<td><?php echo $name;?></td>
	<td><?php echo $famousFor;?></td>
	<!--<td><?php echo $near_by_city;?></td>
	<td><?php echo $distance;?></td>
	<td><?php echo $category;?></td>
	<td><?php echo $timing;?></td>-->
	<td><img src="<?php echo $img;?>" height=80px width=100px></td>

	<?php
	// echo ( isset($_GET['cid']));
	 if (! isset($_GET['cid']))
	 { 
	?>
	
	<td><a href="TouristSpotMain.php?cid=<?php echo $id; ?>">Change Image</a></td>
	
	<?php
	}else{
		$id=$_GET['cid'];
	?>
	
	<td>
		<form action="ImageUpdate.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>" required="required" />
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" name="submit" value="update">
		</form>
		<a href='TouristSpotMain.php' >Cancle</a>
	</td>
		
</tr>
<?php } } ?>
</table>
	
</div>
</div>
</body>
</html>