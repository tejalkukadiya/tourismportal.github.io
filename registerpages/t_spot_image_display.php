<?php 
	include '../Connection.php';
	include 'adminHome.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php 
	try{
				$tid=-1;
				$did=-1;

				if ( isset($_GET["tid"]))
				$tid=$_GET["tid"];
				if ( isset($_GET["did"]))
				{
					$did=$_GET["did"];
					unlink($did);
					$delete="delete from touristspotimages where imgurl='$did'";
					$resultd=$conn->query($delete);
				}

	
				$sql ="select id,name from touristspot ";			
				$result = $conn->query($sql);	
				$query="select imgurl from touristspotimages where spotId='$tid'";	
				$resulti=$conn->query($query);	
				//$delete="delete from touristspotimages where imgurl='$did'";
				//$resultd=$conn->query($delete);

				//header('Location:t_spot_image_display.php');

?>

<div class="col-md-12">
				<?php 	if(isset($_GET['e']))
						echo '<h3><center><font color="red">Sorry there was an error <br/> Try again!</font></center></h3>'; ?>
</div>

<div class="col-md-4">
		<table border="3" class="table" style="border-collapse: unset;">
		<tr colspan="2"><h3><a href="TouristSpotMain.php">Back</a></h3></tr>
		<tr>
			<th>TOURIST SPOT</th>
			<th>GALLERY</th>
		</tr>
		<?php
			while ($row = $result->fetch_assoc()) {
				$id=$row['id'];
				$name=$row['name'];
		?>
		<tr>
			<td><?php echo $name;?></td>
			<td><a href="t_spot_image_display.php?tid=<?php echo $id;?>"> Gallery</a></td>
		</tr>
		<?php }?>
		</table>
</div>
<?php if($tid!=-1 ){?>
		
			<form action="t_spot_image.php" method="post" enctype="multipart/form-data" style="margin-top: 20px;margin-bottom: 50px;" />
			<input type="hidden" name="id" value="<?php echo $tid;?>"/>
			<input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-success btn-sm">
			<input type="submit" value="Add Image" name="submit" class="btn btn-success btn-sm" style="margin-left: 278px;margin-top: -31px;">		
			</form>
	

<div class="col-md-8">
	<?php 

			while($row = $resulti->fetch_assoc()){
			    $url=$row['imgurl'];
		?>

				<div class="col-md-4" style="padding: 0 42px;">
				<a href="t_spot_image_display.php?did=<?php echo $url;?>&tid=<?php echo $tid;?>">
				<?php// header('Location:t_spot_image_display.php');?>
				<div class="pull-right" id="x" style="display:block;width: 22px;text-align: center;border: 1px solid black;border-radius: 15px;"><b>x</b>
				</div>
				</a>
				<center><img src="<?php echo $url;?>" style="height:130px; width: 200px;"></center>
				</div>
<?php }}}
	catch(Exception $e){
		echo "Exception!!!!!!!!!!";
	}
?>
</div>


<script type="text/javascript">
	deletefunction(){
		if ($("#x").style.display == "none") {
			$("#x").style.display == "block";
		}else {
			$("#x").style.display == "none";	
		}
	}
</script>

</body>
</html>