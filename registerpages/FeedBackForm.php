<?php
  
  session_start();

  $_SESSION['currentUrl']="FeedBackForm.php";
  $_SESSION['heading']="FeedBack";
  
 ?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assests/registerform.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

	<style type="text/css">
		.comment-img img{
			width: 30px;
			vertical-align: middle;
			height: 30px;
			margin-left: 36px;
		}
		.card .row {
			padding: 0;
			padding-bottom: 20px;
		}
		.col-md-1 {
			padding: 0;
		}
		.card {
		    border: 1px solid rgba(0, 0, 0, 0.15);
		    display: block;
		    border-radius: 10px;
		    box-shadow: 1px 2px 3px 0px #000;
		    padding: 3px;
		    margin: 30px 0;
		}
		.card .coun{
			margin-right: 20px;
		}
		.card .card-first {
			padding-bottom: 0;
			padding-top: 10px;
		}
		.card .card-first h4 {
			margin: 0;
			margin-top: 6px;
			margin-left: -16px;
		}
		.card .form-group .lable {
			margin-left:50px;
			font-weight: 200;	
			margin-top: 10px;
		}
		.card .form-group textarea {
			width: 500px;margin-left: 50px
		}
		.card .uname {
			margin-left: 18px;
		}
	</style>
</head>
<body>

<?php
	include 'header.php';
?>		

<form action="FeedBackProcess.php" method="post">
<div class="container">
	<div style="margin:auto;display: block; padding:0 200px;">
		<h2 style="text-align: center;margin-top: 100px;">Your Feedback</h2><br>
	<?php 
		include '../Connection.php';
	$sql="select * from feedback";
					//echo $sql;
	$res=$conn->query($sql);
					
											
				
					if( mysqli_num_rows($res) == 0 )
					{
				  
							echo "No Feedback Available";
							
							
					}
					while($row = $res->fetch_assoc())
						{
								
								$userId=$row["userId"];
								$country=$row["country"];
								$userType=$row["userType"];
								$feedback=$row["feedback"];
											
			
	?>	
<!-- <div class="row feedback">
	<div class="col-md-9 feedback-data">
			<h4><b><?php echo $userId;?></b></h4>
			<p><?php echo $userType;?></p>
			<p><?php echo $country;?></p>
			<hr>
			<p><?php echo $feedback;?></p>
	</div>
</div> -->

<div class="row">
	<div class="card">
		<div class="row card-first">
			<div class="col-md-1 comment-img"><img src="../img/4.jpg" height="30px" width="30px"></div>
			<div class="col-md-6 uname" ><h4 class="pull-left"><b><?php echo $userId;?></b></h4></div>
			<p class="pull-right coun"><?php echo $userType;?>(<?php echo $country;?>)</p>
		
		</div>
		<div class="row">
			<div class="form-group">
			  <label for="comment" class="lable">Comment:</label>
			  <textarea class="form-control" rows="2" id="comment" disabled="disabled"><?php echo $feedback;?></textarea>
			</div>
		</div>
	</div>
</div>

<?php } ?>
	<div class="row" >
			<div class="form-group col-md-12">
				<div class="form-group name">
					
		  		  	<label for="feedback" style="margin-top: 100px;">Give Your Feedback Here</label>
		  		  	<textarea  required="required" class="form-control" id="feedback" name="feedback" cols="200" rows="5" style="box-shadow: 1px 1px 1px #222;"></textarea>
				</div>
				<div>
		  		  	<input type="submit" class="btn btn-primary pull-right" value="Send Feedback">
				</div>
		  		
				
	  		</div>
	  </div>

	</div>	
</div>

</form>
 <?php
       include 'footer.php';
  ?>
 </body>

</html>
