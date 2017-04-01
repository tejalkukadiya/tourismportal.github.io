<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="hotel-display.php" method="post" >
		<h3>Search by</h3>
		<input type="radio" name="gfilter" value="rating">
		<label for="rating">Rating</label>
		<input type="radio" name="gfilter" value="city">
		<label for="city">City</label>
		<br>
		<input type="text" name="searchkey">
		<input type="submit" name="search" value="Search">
</form>
<div>
	<?php
		include '../Connection.php';
		if(isset($_GET['e']))
			echo '<h3><center><font color="red">Sorry there was an error while submitting this form<br/> Try again!</font></center></h3>';
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			 $radio=$_POST["gfilter"];				
		if(!strcmp($radio,"city")){
			$city=$_POST["searchkey"];
			$res=$conn->query("select * from hotellocationstateview where lower(city)=lower('$city')");
		}	
		if(!strcmp($radio,"rating")){
			$rating=$_POST["searchkey"];
			$res=$conn->query("select * from hotellocationstateview where lower(rating)=lower('$rating')");
		}}
		else{
			$res=$conn->query("select * from hotellocationstateview");
		}


		if( mysqli_num_rows($res) == 0 )
		{	  
			echo "Reasult Not Found";
			return;				
		}
		echo '<table>';
		while($row = $res->fetch_assoc()){
			$hotelname=$row['hotelname'];
			$managername=$row['managername'];
			$contact=$row['contact'];
			$altercontact=$row['altercontact'];
			$website=$row['websites'];
			$email=$row['email'];
			$address=$row['address'];
			$pincode=$row['pincode'];
			$rating=$row['rating'];
			$status=$row['status'];
			$city=$row['city'];
			$state=$row['state'];
			$img=$row['img'];
		?>
		
			<tr>
				<td><b>Hotel Name</b></td>
				<td><?php echo $hotelname; ?></td>
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
				<td>Rating</td>
				<td><?php echo $rating; ?></td>
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
				<td><img src="<?php echo $img;?>" height="100px" width="100px"></td>
			</tr>
			

		<?php } ?>
		</table>
</div>
</body>
</html>