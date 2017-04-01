<?php include '../Connection.php';?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
</head>
<body>


<?php 
	try{
				if(isset($_GET['e'])){?>
					<h3><center><font color="red">Sorry there was an error while submitting this form<br/> Try again!</font></center></h3>
				<?php }				
?>
<h1><center><font color="green" > Tourist Spots Entry Form</font></center></h1>
<form action="TouristSpot.php" method="post" enctype="multipart/form-data">
	<table class="table">
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
			<td><input type="text" name="near_by_city" required="required" ></td>
		</tr>
		<tr>
			<td>distance:</td>
			<td><input type="text" name="distance" required="required"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category" required="required"></td>
		</tr>
		<tr>
			<td>Availability</td>
			<td><input type="text" name="availability" required="required" /></td>
		</tr>
		<tr>
			<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
			<!--<td><input type="submit" value="Add Image" name="submit"></td>-->
		</tr>
		<tr><td><input type="submit" name="submit" value="submit" class="btn btn-primary"></td></tr>
	</table>
</form>
<?php
	}
	catch(Exception $e){
		echo "Exception!!!!!!!!!!";
	}
?>
</body>
</html>