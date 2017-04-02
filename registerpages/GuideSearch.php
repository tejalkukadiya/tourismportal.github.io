<?php
  
  session_start();

  $_SESSION['currentUrl']="GuideSearch.php";
  $_SESSION['heading']="Guides";
  
 ?>
<html>
<head>
<title>
</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">
	.guide-info{
		padding-top: 80px;
		
	}
	.guide-info hr{
		color: #333;
		box-shadow: 1px 1px 2px;
	}
	h1{ color: grey; }
	.guide-info label{
		word-spacing: 10px;
	}
	.guide-info form{
		    padding: 10px 30px;
	}
	.guide-info .form-data{
		    text-align: center;
	}
	.guide-detail{
		    margin: 30px 0;
		    background-color: rgba(255,255,255,0.5);
		    box-shadow: 2px 2px 6px;
		    border-radius: 6px;
		    padding: 10px;
	}
	.guide-detail .guide-img {
		    padding: 20px 0;
	}
	.guide-detail .guide-img img{
		    width: 100%;
    height: 200px;
	}
	.guide-detail .guide-data{
		    padding: 0 40px;
	}
	.guide-detail .guide-data p{
		color: grey;
		font-size: 16px;
	}
	.guide-detail .guide-data p>b{
		color: #333;
	}
</style>
</head>
<body>
	<?php
	include '../header.php';
?>
<div class="container guide-info">
			<h1 class="text-center"> Search Guides</h1>
			<hr>
			<form action="GuideSearch.php" method="post">
					<h3>Search by</h3>
					<br>
					<input type="radio" name="gfilter" value="places" id="tourismspot">
					<label for="tourismspot">Tourism-Spots</label><br>
					<input type="radio" name="gfilter" value="language">
					<label for="language">Language</label><br>
					<input type="radio" name="gfilter" value="city" id="city">
					<label for="city">City</label><br>
					
					<br>
					<div class="form-data">
					<input type="text" name="searchkey" placeholder="Enter place,language,city" class="form-control" style="width: 50%; display: inline-block;" > 

					<input type="submit" name="search" value="Search" style="display: inline-block;
							    padding: 6px 30px;
							    border-radius: 4px;">
					</div>
			</form>


<div>
	<!-- <h1 class="text-center" style="padding: 30px 0;">
		Available Guides Details
	</h1> -->
<?php 
	include '../Connection.php';
					
			if($_SERVER["REQUEST_METHOD"]== "POST"){?>
			
			
			
			
					<h1 class="text-center" style="padding: 30px 0;">
						Available Guides Details
					</h1>
					
		<?php	 
			
				if(!isset($_POST["gfilter"])){
					echo "<h3>Please Select filteration option </h3>";
					return;
				}
			 
				$radio=$_POST["gfilter"];
				
				
				
				if(!strcmp($radio,"places")){			
					$place=$_POST["searchkey"];
					$resSpot=$conn->query("select id from touristspot where lower(name)=lower('$place')");
					if( mysqli_num_rows($resSpot) == 0 )
					{
				  
							echo "enter valid place";
							return;
							
					}
					
					$row = $resSpot->fetch_assoc();
					$sId=$row["id"];
					
					$sql="select distinct g.* from guide g,touristspot t ";
					$sql.="where find_in_set ('$sId', g.spotId)";
					
					$res=$conn->query($sql);
					
					
					
				}
				
				else if(!strcmp($radio,"language")){
					$language=$_POST["searchkey"];
					$resLang=$conn->query("select id from languages where lower(name)=lower('$language')");
					if( mysqli_num_rows($resLang) == 0 )
					{
				  
							echo "enter valid language";
							return;
							
					}
					$row = $resLang->fetch_assoc();
					$lId=$row["id"];
					
					$sql="select distinct g.* from guide g ";
					$sql.="where find_in_set ('$lId', g.langId)   ";
					// echo $sql;
					 
					$res=$conn->query($sql);
					
					
				}
				else if(!strcmp($radio,"city")){
					$city=$_POST["searchkey"];
					$resCity=$conn->query("select id from location where lower(city)=lower('$city')");
					if( mysqli_num_rows($resCity) == 0 )
					{
				  
							echo "enter valid city";
							return;
							
					}
					$row = $resCity->fetch_assoc();
					$cId=$row["id"];
					
					$sql="select distinct g.* from guide g,touristspot t ";
					$sql.="where find_in_set (t.id, g.spotId)  and t.cityId = $cId";
					
					$res=$conn->query($sql);
					
			}}
					else{
						
						$sql="select * from guide";
					//echo $sql;
						$res=$conn->query($sql);
					
					}
				
				
				
				
					if( mysqli_num_rows($res) == 0 )
					{
				  
							echo "Reasult Not Found";
							return;
							
					}
					while($row = $res->fetch_assoc())
						{
								//echo "hiiii row";
								$guideId=$row["guideId"];
								$guideName=$row["name"];
								$address=$row["address"];
								$contactNo=$row["contactNo"];
								$alternateCno=$row["alternateCno"];
								$exp=$row["experience"];
								$gender=$row["gender"];
								$email=$row["email"];
								$langId=$row["langId"];
								$img=$row["imgurl"];
								$spotId=$row["spotId"];
								
						
														
					
								//echo $img;		
				
						

		
	?>
	
	
<div class="row guide-detail">
	<div class="col-md-3 guide-img">
	<img src='<?php echo $img;?>' height="100" width="100"/>
	</div>
	<div class="col-md-9 guide-data">
			<h3><b>Name: </b><?php echo $guideName;?></h3>
			<hr>
			<p><b>Gender:</b> <?php echo $gender;?></p>
			<p> <b>Contact No: </b><?php echo $contactNo;?></p>
			<p>	<b>Alternate Contact No:</b> <?php echo $alternateCno;?></p>
			<p>	<b>Address: </b><?php echo $address;?></p>
			<p> <b>Email ID: </b><?php echo $email;?></p>
			<?php  $spotId="(";?>
										
			<p> <b>Spots: </b><?php  $sql="select touristspot.name as spot , touristspot.id  as id from touristspot , guide ";
							 $sql .="where find_in_set (id, spotid) and guideid='$guideId'";
							  $resSpot=$conn->query($sql);
										$places="";
										$count=0;
										
										while($row = $resSpot->fetch_assoc())
										{
										
											$spotName=$row["spot"];
											$places.=" ".$spotName;
											if($count>0)
												$spotId .=",";
											$count++;
											
											$spotId.=$row["id"];
											
											//echo $spotId;	
											
										}
										$spotId .=")";
										echo $places;
										//echo $spotId;
											?></p>
					
			<p> <b>City: </b><?php  $sql="select city from location l  , touristspot t ";
							 $sql .="where l.id = t.cityId and t.id in $spotId";
							  $resCity=$conn->query($sql);
							  $city="";
							// echo $sql;
							  while($row = $resCity->fetch_assoc())
										{
										
											$cityName=$row["city"];
											$city.=" ".$cityName;
											
											}
										echo $city;
									
							  
						?></p>
			<p> <b>Languages: </b><?php	$resLang=$conn->query("select languages.name as lang from languages , guide
										where find_in_set (id, langid) and guideid='$guideId'");
										$language="";
										while($row = $resLang->fetch_assoc())
										{
										
											$langName=$row["lang"];
											$language.=" ".$langName;
											
											}
										echo $language;
									
									?>
			</p>
				</div>
	</div>
								
						<?php 
						
						}?>
		
</div>
</div>
</body>
</html>