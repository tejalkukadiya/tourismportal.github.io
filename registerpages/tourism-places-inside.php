<?php 
    include_once "../../breadcrumbs.php";
    include '../Connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tourism-Places</title>
	<link rel="stylesheet" type="text/css" href="css/tourism-places-inside.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php
  try{  
        $sid=-1;
        if(isset($_GET['sid']))
            $sid=$_GET['sid'];
        $sql = "select * from touristspotlocationstateview where spotId='$sid'";      
        $result = $conn->query($sql);
        $query="select imgurl from touristspotimages where spotId='$spotId'";
        $resultq = $conn->query($query);

?>

	<div id="header" class="header-style">
                <div class="container">
                    <div class="row">
                        <div class="homepage">
							<h1>
								<a href="#">Place Description</a>
							</h1>
                    	</div>
                	</div>
            	</div>
             
           <p style="margin-left: 50px;"><?= breadcrumbs() ?></p>
           <?php
            while($row = $result->fetch_assoc()){
              //$spotId=$row['spotId'];
              $spotName=$row['spotName'];
              $famousFor=$row['famousFor'];
              $distance=$row['distance'];
              $availability=$row['availability'];
              $category=$row['category'];
              $city=$row['city'];
              $state=$row['state'];
            }

        
            while ($row = $resultq->fetch_assoc()) {
                $img=$row['imgurl'];

            }
           ?>
           <div class="container desc">
               <img src="img/4.jpg">
               <p>Donec id vehicula dolor. Cras euismod dapibus felis quis auctor. Curabitur quis hendrerit velit. Aliquam et augue in lacus laoreet semper. Maecenas a quam euismod, pharetra velit ac, consequat diam. Nulla sollicitudin tincidunt sem, quis mattis mi porttitor et. Curabitur eget mi felis. Etiam convallis faucibus arcu id gravida. Ut posuere libero ut arcu malesuada fringilla mollis vel massa. Integer vulputate imperdiet erat, et ornare tellus scelerisque vel. Aenean vestibulum vel diam eget mattis.</p>
           </div>
    </div> 
<?php}
    catch(Exception $e){
    echo "Exception!!!!!!!!!!";
  }
  ?>
</body>
</html>