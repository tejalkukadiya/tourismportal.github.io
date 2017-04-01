<?php 
    include_once "breadcrumbs.php";
    include '../Connection.php';
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
	<div id="header" class="header-style">
                <div class="container">
                    <div class="row">
                        <div class="homepage">
							<h1>
								<a href="#">Tourism Places (Assam)</a>
							</h1>
                    	</div>
                	</div>
            	</div>
            <!-- Top Menu -->
            <div id="hornav" class="container no-padding">
                <div class="text-center visible-lg">
                            <div class="container header-menu">
								<nav class="list">
									<ul id="hornavmenu" class="nav navbar-nav">
										<li><a href="main-page.html">HOME</a></li>

										<li><a> states</a>
											<ul>
                                        		<li>
                                            		<a href="#">ARUNACHAL-PRADESH</a>
                                        		</li>
                                        		<li>
                                            		<a href="states/assam.html">ASSAM</a>
                                        		</li>
                                        		<li >
                                            		<a href="#">MEGHALAY</a>
                                            
                                       			 </li>
                                        		<li ><a href="#">MANIPUR</a>

                                        		</li>
                                        		<li ><a href="#">TRIPURA</a>
                                        		</li>
                                        		<li>
                                            		<a href="#">    SIKKIM</a>
                                        		</li>
                                       			 <li>
                                            		<a href="#">NAGALAND</a>
                                        		</li>
                                        		<li>
                                            		<a href="#">MIZORAM</a>
                                        		</li>
                                            </ul>
								        </li>
										<li><a href="#">history</a></li>
										<li><a href="#">guide-register</a></li>
										<li><a>booking</a>
											<ul>
												<li><a href="#">accomodation</a></li>
												<li><a href="#">tranport</a></li>
											</ul>
										</li>
										<li><a href="#">contact</a></li>
										<li><a href="#">about us</a></li>
									</ul>
								</nav>
							</div>
				</div>	
		
                     
               </div>
            </div>

<p style="margin-left: 50px;margin-top: 100px;"><?= breadcrumbs() ?></p>
<form action="tourism-places.php" method="post" >
		<h3>Search by</h3>
		<input type="radio" name="gfilter" value="category">
		<label for="language">Category</label>
		<input type="radio" name="gfilter" value="city" id="city">
		<label for="city">City</label>		
		<br>
		<input type="text" name="searchkey"> 
		<input type="submit" name="search" value="Search">
</form>
<div class="container">
<div class="row">
<?php 
	if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST["gfilter"])){											
		$radio=$_POST["gfilter"];				
	if(!strcmp($radio,"category")){	
		$category=$_POST["searchkey"];
		$resCat=$conn->query("select spotId,spotName,img from touristspotlocationstateview where lower(category)=lower('$category') and state='Assam'");
		if( mysqli_num_rows($resCat) == 0 )
		{	  
			echo "enter valid category";
			return;				
		}
		while($row = $resCat->fetch_assoc()){
			echo "in while";
			$spotId=$row['spotId'];
			$spotName=$row['spotName'];
			$img=$row['img'];
		?>

		<div class="col-md-6">
		<div class="card">
					<img class="card-img-top" src="<?php echo $img;?>" alt="<?php echo $spotName;?>">
					<div class="card-block">
				    <h4 class="card-title"><?php echo $spotName;?></h4>
				    <a href="tourism-places-inside.php?sid=<?php echo $spotId;?>" class="btn btn-primary">Go somewhere</a>
				  	</div>		
		</div>
		</div>	

		<?php }}
	else if(!strcmp($radio,"city")){	
		$city=$_POST["searchkey"];
		$resCity=$conn->query("select spotId,spotName,img from touristspotlocationstateview where lower(city)=lower('$city') and state='Assam'");
		if( mysqli_num_rows($resCity) == 0 )
		{	  
			echo "enter valid city";
			return;				
		}
		while($row = $resCity->fetch_assoc()){
			$spotId=$row['spotId'];
			$spotName=$row['spotName'];
			$img=$row['img'];
		?>

		<div class="col-md-6">
		<div class="card">
					<img class="card-img-top" src="<?php echo $img;?>" alt="<?php echo $spotName;?>">
					<div class="card-block">
				    <h4 class="card-title"><?php echo $spotName;?></h4>
				    <a href="tourism-places-inside.php?sid=<?php echo $spotId;?>" class="btn btn-primary">Go somewhere</a>
				  	</div>		
		</div>
		</div>
		<?php }}
	}	
	else{
		
		$sql="select spotId,spotName,img from touristspotlocationstateview where state='Assam'";
		$result=$conn->query($sql);
		
		while($row = $result->fetch_assoc()){
			$spotId=$row['spotId'];
			$spotName=$row['spotName'];
			$img=$row['img'];
		?>

		<div class="col-md-6">
		<div class="card">
					<img class="card-img-top" src="<?php echo $img;?>" alt="<?php echo $spotName;?>">
					<div class="card-block">
				    <h4 class="card-title"><?php echo $spotName;?></h4>
				    <a href="tourism-places-inside.php?sid=<?php echo $spotId;?>" class="btn btn-primary">Go somewhere</a>
				  	</div>		
		</div>
		</div>

<?php }} ?>
</div>
</body>
</html>