<?php
  
  session_start();

  $_SESSION['currentUrl']="tourism-places.php";
  $_SESSION['heading']="Places";
  
 ?>
<?php 
    include_once "breadcrumbs.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tourism-Places</title>
	<link rel="stylesheet" type="text/css" href="css/tourism-places.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

			<?php
                 include 'header.php';
            ?>
			<p style="margin-left: 50px;padding-top: 100px;"><?= breadcrumbs() ?></p>


            <div class="container">
				<div class="row">
	<div class="col-md-6">
		<div class="card">
				  <img class="card-img-top" src="img/IMG_2077-1030x687.jpeg" alt="Card image cap">
				  <div class="card-block">
				    <h4 class="card-title">Card title</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.ximus ac. Vestibulum sit amet interdum lorem. Fusce at libero lectus. Quisque sit amet ligula molestie, feugiat velit a, imperdiet lorem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut rhoncus nisi no</p>
				    <a href="tourism-places-inside.php" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
	</div>

	<div class="col-md-6">
		<div class="card">
				  <img class="card-img-top" src="img/IMG_2077-1030x687.jpeg" alt="Card image cap">
				  <div class="card-block">
				    <h4 class="card-title">Card title</h4>
				    <p class="card-text">Some quickome quick example text to build on the card title and make up the bulk of the card's contentome quick example text to build on the card title and make up the bulk of the card's content example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="tourism-places-inside.php" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
	</div>
				</div>
			</div>


	
	<footer class="quick-links container" style="background-color: rgba(0,0,0,0.7);  color: white;
  border-radius: 6px;
  padding: 42px 76px;
  margin-top: 10px;">
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