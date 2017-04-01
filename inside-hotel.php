<?php
  
  session_start();

  $_SESSION['currentUrl']="inside-hotel.php";
  $_SESSION['heading']="Hotels";
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>hotels</title>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/inside-hotel.css">

					<script src="js/jquery-1.11.1.min.js"></script>
					<script src="js/jquery.min.js"></script>

	<script type="text/javascript">
$(document).ready(function(){
		function demo() {
		    document.getElementById('full-gallery').css({'display': 'block'});
		};


	});
	</script>
	
</head>
<body>

	<?php
                 include 'header.php';
    ?>

    <div class="container">
    	<div class="row first">
    		<div class="col-md-3">
    			<img src="img/4.jpg">
    		</div>
    		<div class="col-md-6 name">
    			<h2>Hotel Name</h2>
    			<p><b>Address:</b></p>
    			<p><b>Contact No.:</b></p>
    			<p><b>Ratings:</b></p>
    		</div>
    		<div class="col-md-2 price">
    			<h4>Rs. 8888</h4>
    		</div>
    	</div>

	    <div class="middle">
	    	<div class="row btns">
	    		<div class="btn-group">
				  <button type="button" class="btn btn-primary">Details</button>
				  <button type="button" class="btn btn-primary" id="gallery" onclick="demo()">Gallery</button>
				  <button type="button" class="btn btn-primary">Feedback</button>
				</div>
	    	</div>

	    	<div class="row gallery" id="full-gallery">
	    		<div class="img" > 
	    			<img src="img/4.jpg">
	    			<img src="img/4.jpg">
	    			<img src="img/4.jpg">
	    			<img src="img/4.jpg">
	    			<img src="img/4.jpg">
	    			<img src="img/4.jpg">
	    		</div>
	    	</div>

	    	<div class="row" style="display: none;">
	    		<div class="card">
	    			<div class="row card-first">
	    				<div class="col-md-1 comment-img"><img src="img/4.jpg" height="30px" width="30px"></div>
	    				<div class="col-md-10"><h4 class="pull-left">Username</h4></div>
	    			</div>
	    			<div class="row">
	    				<div class="form-group">
						  <label for="comment" class="lable">Comment:</label>
						  <textarea class="form-control" rows="5" id="comment" disabled="disabled"></textarea>
						</div>
	    			</div>
	    		</div>


	    		<div class="card">
	    			<div class="row card-first">
	    				<div class="col-md-1 comment-img"><img src="img/4.jpg" height="30px" width="30px"></div>
	    				<div class="col-md-10"><h4 class="pull-left">Username</h4></div>
	    			</div>
	    			<div class="row">
	    				<div class="form-group">
						  <label for="comment" class="lable">Comment:</label>
						  <textarea class="form-control" rows="5" id="comment" disabled="disabled"></textarea>
						</div>
	    			</div>
	    		</div>


	    	</div>
	    </div>

    </div>

</body>

</html>