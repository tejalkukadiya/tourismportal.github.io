<?php
    
    session_start();

    $_SESSION['currentUrl']="local-rent-show.php";
    $_SESSION['heading']="Rent";
    
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="assests/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/local-rent-show.css">
    <style type="text/css">
    	.pad {
			padding: 20px 300px;
		}
		.card {
			    border: 1px solid black;
			    border-radius: 5px;
			    height: 100%;
			    margin-top: 30px;
			    padding: 20px;
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
<div class="container " style="padding-top: 80px">
	<!-- <div class="col-md-2d-6 card">
		<div class="col-md-2 image">
			<img src="">
		</div>
		<div class="col-md-2 detail">
			<p>3Bhk</p>
			<p>Address</p>
			<p>Price/month</p>
			<p>Facility:abc,xyz</p>
		</div>
		<div class="col-md-2 owner">
			<p>bhavi patel</p>
			<p>Contact No.7894561230</p>
			<p>Email:asdfgh@gmail.com</p>
		</div>
	</div> -->

<?php 
	include '../Connection.php';
	$sql="select * from localaccomodation";
	$res=$conn->query($sql);

	while ($row=$res->fetch_assoc()) {
		$firstname=$row["firstname"];
		$lastname=$row["lastname"];
		$contact=$row["contact"];
		$altercontact=$row["altercontact"];
		$gender=$row["gender"];
		$email=$row["email"];
		$address=$row["address"];
		$flat=$row["flat"];
		$area=$row["area"];
		$facilities=$row["amenities"];
		$price=$row["price"];
		$img=$row["photo"];
		//$username=

		
	


?>

	<div class="card">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4"><img src="<?php echo $img;?>" width="250px" height="200px"></div>
				<div class="col-md-4">
					<p><b><?php echo $flat;?></b></p><br>
					<p><b>Address</b>: <?php echo $address;?></p><br>
					
					<p><b>Price</b>: <?php echo $price;?> Rs.</p><br>
					<p><b>Facility</b>: <?php echo $facilities;?></p>
				</div>
				<div class="col-md-4">
					<p><b>Owner: </b><?php echo $firstname." ".$lastname; ?></p><br>
					<p><b>Contact No. </b><?php echo $contact." , ".$altercontact;?></p><br>
					<p><b>Email: </b><?php echo $email;?></p>
				</div>
			</div>
		</div>
	</div>	
	<?php } ?>
</div>
<?php
       include 'footer.php';
  ?>
</body>
</html>