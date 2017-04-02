
<?php
  
  session_start();

  $_SESSION['currentUrl']="tourism-places.php";
  $_SESSION['heading']="Places";
  
 ?>
<?php 
    include_once "breadcrumbs.php";
    include 'Connection.php';
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
		<center>
			<form action="tourism-places.php" method="post" >
				<h3>Search by</h3>
				<input type="radio" name="gfilter" value="category">
				<label for="language" >Category</label>
				<input type="radio" name="gfilter" value="city" id="city">
				<label for="city">City</label>		
				<br>
				<input type="text" name="searchkey" class="form-control" style="width: 50%;"> 
				<input type="submit" name="search" value="Search" class="form-control" style="width: 110px;
    margin-top: 16px;">
			</form>
		</center>
	
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
			//echo "in while";
			$spotId=$row['spotId'];
			$spotName=$row['spotName'];
			$img='registerpages/'.$row['img'];
			//echo $img;
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
			$img='registerpages/'.$row['img'];
			//echo $img;
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
			$img='registerpages/'.$row['img'];
			//echo $img;
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
</div>
</body>
</html>