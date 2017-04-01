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
	<div class="container hotel" >
	
		<div class="row find-hotel">
		 	<div class="col-md-3 place-info">
		 		<h3>find hotels</h3>
		 		<input type="text" name="place" placeholder="enter place name"><br>
		 		<p> check-in date</p>
		 		<input type="date" name="check-in">
		 		<p> check-out date</p>
		 		<input type="date" name="check-out">
		 		<p>persons: </p><select>
		 			<option name="op1">1</option>
		 			<option name="op2">2</option>
		 			<option name="op3">3</option>
		 			<option name="op4">group</option>
		 		</select>
		 		<p>kids:</p>
		 		<select>
		 			<option name="op1" value="selected">0 kids</option>
		 			<option name="op2">1</option>
		 			<option name="op3">2</option>
		 			<option name="op4">3</option>
		 			<option name="op5">group</option>
		 		</select>
		 		<p>rooms: </p>
		 					<select>
					 			<option name="op1" value="selected">1</option>
					 			<option name="op2">2</option>
					 			<option name="op3">more than 2</option>
					 		</select>		 		
		 		<p>price range:</p>	
		 		<select>
		 			<option name="op1" value="selected">&lt; rs.900</option>
		 			<option name="op2">rs.900-rs.1899</option>
		 			<option name="op3">rs.1899 &gt;</option>
		 		</select>
		 		<p> ratings</p>
		 		<div class="stars">
						<input class="star star-5" id="star-5-2" type="radio" name="star"/>
					      <label class="star star-5" for="star-5-2"></label>
					      <input class="star star-4" id="star-4-2" type="radio" name="star"/>
					      <label class="star star-4" for="star-4-2"></label>
					      <input class="star star-3" id="star-3-2" type="radio" name="star"/>
					      <label class="star star-3" for="star-3-2"></label>
					      <input class="star star-2" id="star-2-2" type="radio" name="star"/>
					      <label class="star star-2" for="star-2-2"></label>
					      <input class="star star-1" id="star-1-2" type="radio" name="star"/>
					      <label class="star star-1" for="star-1-2"></label>
					      
					      
					    
  				</div>
  				<input type="button" name="submit" value="search" style="background-color: #eee; box-shadow: 2px 2px 6px;">	
		 	</div>
		 	<div class="col-md-8 hotel-info">	
		 		<div class="details">
		 				<h2> most popular hotels</h2>
						<div class="row hotel-des">
							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/Hotels/chatur musafir.jpg"> 
									<figcaption>hotel blue moon<br>
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									international<br>
									address::<br>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
							</div>
							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/Hotels/4.jpg"> 
									<figcaption>hotel imperial heights<br>
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									international<br>
									address::<br>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
							</div>

							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/Hotels/images (1).jpg"> 
									<figcaption>hotel taj<br>
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									national<br>
									address::<br>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
							</div>

						</div>
						<div class="row hotel-des">
							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/Hotels/5.jpg"> 
									<figcaption>hotel blue moon<br>
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									international<br>
									address::<br>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
							</div>
							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/Hotels/hotels-2.jpg"> 
									<figcaption>hotel imperial heights<br>
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									international<br>
									address::<br>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
							</div>

							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/images.jpg"> 
									<figcaption>hotel taj<br>
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									national<br>
									address::<br>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
							</div>

						</div>
						<div class="row hotel-des">
							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/download.jpg"> 
									<figcaption>hotel blue moon<br>
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									international<br>
									address::<br>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
							</div>
							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/Hotels/4.jpg"> 
									<figcaption>hotel imperial heights<br>
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									international<br>
									address::<br>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
							</div>

							<div class="col-md-4 hotel-col">
								<a href="inside-hotel.php">
									<img src="img/Hotels/chatur musafir.jpg"> 
									<figcaption>hotel taj<br>
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
									national<br>
									address::<br>
									<span class="cost fa fa-inr"> 1994</span>
									</figcaption>
								</a>
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