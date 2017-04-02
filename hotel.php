<?php
  
  session_start();

  $_SESSION['currentUrl']="hotel.php";
  $_SESSION['heading']="Hotels";
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>hotels</title>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/hotel.css">

	
</head>
<body>
	<?php 
		include 'header.php';
	?>
<div class="row">
	<div class=" col-md-4 one">
	<form action="hotel.php" method="post" class="form one"  >
		<h3>Search by</h3>
		<div class="">
		<input type="radio" name="gfilter" value="rating">
		<label for="rating">Rating</label>
		</div>

		<div class="">
		<input type="radio" name="gfilter" value="city">
		<label for="city">City</label>
		</div>
		
		<input type="text" name="searchkey" class="form-control">
		<br>
		<input type="submit" name="search" class="btn btn-primary" value="Search">
	</form>
	</div>
	



	<?php
        
        include 'Connection.php';
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
    ?>
	<div class="container hotel col-md-8" >
	
		<div class=" find-hotel">
		 	<div class=" hotel-info">	
		 		<div class="details">
		 			<div class="row hotel-des">
		 				<h2> most popular hotels</h2>
		 				<?php while($row = $res->fetch_assoc()){
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
							//echo $hotelname;
						?>
						
							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/Hotels/chatur musafir.jpg"> 
									<figcaption><?php echo $hotelname;?><br>
									<?php
										for($i=1 ; $i<=$rating ; $i++)
											echo '<i class="fa fa-star"></i>';
									?>
									<br>
									<!--<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									international<br>-->
									Address:<?php echo $address;?><br><br><br>
									City:<?php echo $city;?>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
							</div>

							<?php } ?>
		 			</div>
		 		</div>
		 	</div>
		 </div>

	</div>
	</div>





	<footer class="quick-links container" style="background-color: rgba(0,0,0,0.7);  color:white;border-radius: 6px;padding: 42px 76px;margin-top: 10px;">
		<div class="row">
			<div class="col-md-4 contact" style="color: rgb(203,203,203);">
				<h2 style="color: white;">
					Contact
				</h2>
				<p>
				<span><i class="fa fa-phone"></i></span>
					telephone: (212)888-77-88<br>
				<span><i class="fa fa-envelope"></i></span>
					email: xyz@abc.com<br>
				<span><i class="fa fa-link"></i></span>
					website: www.yewsdbgyw.com<br>
				<br>
				</p>
			</div>
			<div class="col-md-4 link-details">
				<h2 style="margin-left: -56px;"> Quick links </h2>
				<ul >
					<li> <a href="#" class="fa fa-angle-right">History</a></li>
					<li> <a href="#" class="fa fa-angle-right">Guide-register</a></li>
					<li> <a href="#" class="fa fa-angle-right">Booking</a></li>
					<li> <a href="#" class="fa fa-angle-right">ContactUs</a></li>
					<li> <a href="#" class="fa fa-angle-right">AboutUs</a></li>
				</ul>
			</div>
			<div class="col-md-4 news-letter">
				<h2>
					For news-letter
				</h2>
				<p style="color: rgb(203,203,203);">
				Sign up for our newsletter for all the 
				latest news and information
				</p>
				<input type="text" name="news-letter" class="form-control"><br>
				<button type="button" class="btn btn-success">subscribe</button>
			</div>
		</div>
	</footer>
</body>
</html>