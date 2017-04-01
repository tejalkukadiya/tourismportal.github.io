
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
</head>
<body>
<?php 
	include '../Connection.php';
	try{
		$tid=-1;
		if ( isset($_GET["tid"]))
			$tid=$_GET["tid"];
		$sql ="select * from touristspot ";		
		$result = $conn->query($sql);
?>
	<table border="-10" class="table">
		<tr>
			<th>NAME</th>
			<th>FAMOUS FOR</th>
			<th>NEAR BY CITY</th>
			<th>DISTANCE</th>
			<th>CATEGORY</th>
			<th>AVAILABILITY</th>
			<th>IMAGE</th>
			<th colspan="2"></th>
		</tr>
		<?php
			while($row = $result->fetch_assoc())
			{
					$id=$row['id'];
					$name=$row['name'];
					$famousFor=$row['famousFor'];
					$near_by_city=$row['near_by_city'];
					$distance=(int)$row['distance'];
					$category=$row['category'];
					$availability=$row['availability'];
					$img=$row['img'];			
			if($tid != $id )
			{
		?>
		<tr>
			<td><?php echo $name;?></td>
			<td><?php echo $famousFor;?></td>
			<td><?php echo $near_by_city;?></td>
			<td><?php echo $distance;?></td>
			<td><?php echo $category;?></td>
			<td><?php echo $availability;?></td>
			<td><img src="<?php echo $img;?>" height=80px width=100px></td>
			<td><a href='TouristSpotDisplay.php?tid=<?php echo $id;?>'>Edit</a></td>
			<td><a href='TouristSpot.php?tid=<?php echo $id;?>'>Delete</a></td>
		</tr>
		<?php }else{ ?>
				
		<form action="TouristSpot.php" method="post">
		<tr>
			<input type="hidden" name="id" value="<?php echo $id; ?>" required="required" />
			<td><input type="text" name="name" value="<?php echo $name; ?>" required="required" /></td>
			<td><textarea name="famousFor" rows="2" cols="24"><?php echo $famousFor;?></textarea></td>
			<td><input type="text" name="near_by_city" value="<?php echo $near_by_city; ?>" required="required" /></td>
			<td><input type="number" name="distance"  min="0" value="<?php echo $distance; ?>"required="required" /></td>
			<td><input type="text" name="category" value="<?php echo $category; ?>" required="required"/></td>
			<td><input type="text" name="availability" value="<?php echo $availability; ?>" required="required"/></td>
			<td><img src=""></td>
			<td><input type="submit" name="submit" value="update" /></td>
			<td><a href='TouristSpotDisplay.php' > Cancle</a></td>
		</tr>		
		</form>
	</table>
<?php
	}}}
	catch(Exception $e){
		echo "Exception!!!!!!!!!!";
	}
?>	
</body>
</html>