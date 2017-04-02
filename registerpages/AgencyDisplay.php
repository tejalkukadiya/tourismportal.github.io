<?php
  
  session_start();

  $_SESSION['currentUrl']="AgencyDisplay.php";
  $_SESSION['heading']="Agencies";
  
 ?>
<html>
<head>
<title>
</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<style type="text/css">
			body{
				font-size: 16px;
			}
			h1{
				color: grey;
			}
			.agency{    padding: 20px 0;}
			.agency hr{
				color: #333;
				box-shadow: 1px 1px 2px;
				margin: 24px 0;
			}
			.agency-details{
				    padding: 20px 50px;
				    background-color: rgba(255,255,255,0.5);
				    box-shadow: 2px 2px 6px;
				    border-radius: 10px;
				        margin: 20px 0;
			}
			.agency-details h3{    padding-top: 14px;}
			.agency-details .agency-data{}
			.agency-details .agency-data p{   
				font-size: 18px;
				 padding: 0px 10px;
				color: grey;}
			.agency-details .agency-data p>b{
				color: #333;
			}
		</style>
</head>
<body>
		<?php
	include 'header.php';
?>
<div class="container agency">
	<h1 class="text-center"> --Available Agencies--</h1>

<?php 

	include '../Connection.php';
	$sql="select * from agent";
					//echo $sql;
						$res=$conn->query($sql);
					
											
				
					if( mysqli_num_rows($res) == 0 )
					{
				  
							echo "Reasult Not Found";
							return;
							
					}
					while($row = $res->fetch_assoc())
						{
								//echo "hiiii row";
								$agencyName=$row["agencyName"];
								$address=$row["address"];
								$agencyEmail=$row["agencyEmail"];
								$agencyCno=$row["agencyCno"];
								$websiteUrl=$row["websiteUrl"];
								$agentName=$row["agentName"];
								$agentAddress=$row["agentAddress"];
								$agentEmail=$row["agentEmail"];
								$agentCno=$row["agentCno"];
								
								
									
	?>

	<div class="row agency-details">
		<h3 class="text-center">Agency Details</h3>
		<hr>
		<div class="agency-data">
			<p><b>Agency Name:</b> <?php echo $agencyName; ?></p>
			<p><b>Agency No:</b> <?php echo $agencyCno; ?></p>
			<p><b>Agency Email-Id:</b> <?php echo $agencyEmail; ?></p>
			<p><b>Address:</b> <?php echo $address; ?></p>
			<p><b>Agency Website:</b> <?php echo $websiteUrl; ?></p>
			<h3 class="text-center">Agent Details</h3>
			<hr>
			<p><b>Agent Name:</b> <?php echo $agentName; ?></p>
			<p><b>Agent No:</b> <?php echo $agentCno; ?></p>
			<p><b>Agent Email:</b> <?php echo $agentEmail; ?></p>
			<p><b>Agent Addres:</b> <?php echo $agentAddress; ?></p>
		</div>
	</div>
						<?php }?>
		</div>
			 <?php
       include 'footer.php';
  ?>
</body>
</html>