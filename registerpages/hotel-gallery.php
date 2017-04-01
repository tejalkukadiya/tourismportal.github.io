<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include '../Connection.php';
		if(isset($_GET['e']))
			echo '<h3><center><font color="red">Sorry there was an error while submitting this form<br/> Try again!</font></center></h3>';
		if ( isset($_GET["did"]))
		{
			$did=$_GET["did"];
			unlink($did);
			$delete="delete from hotelgallery where img='$did'";
			$conn->query($delete);
		}
		session_start();
		$username=$_SESSION['username'];
		

?>
	<form action="hotel-gallery-entry.php" method="post" enctype="multipart/form-data" style="margin-top: 20px;margin-bottom: 50px;" />
	<input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-success btn-sm">
	<input type="submit" value="Add Image" name="submit" class="btn btn-success btn-sm" style="margin-left: 278px;margin-top: -31px;">		
	</form>
<?php
	$result=$conn->query("select img from hotelgallery where id=(select id from hotel where username='$username')");
	while($row = $result->fetch_assoc()){
			$img=$row['img'];
	?>
		<div class="col-md-4" style="padding: 0 42px;">
			<a href="restaurant-gallery.php?did=<?php echo $img;?>">
			<?php// header('Location:t_spot_image_display.php');?>
			<div class="pull-right" id="x" style="display:block;width: 22px;text-align: center;border: 1px solid black;border-radius: 15px;"><b>x</b>
			</div>
			</a>
			<center><img src="<?php echo $img;?>" style="height:130px; width: 200px;"></center>
		</div>
			<!--<img src="<?php echo $img;?>">-->
	<?php }
?>



</body>
</html>