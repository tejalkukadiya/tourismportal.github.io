
<html>
<body>
<?php 
	include '../Connection.php';
	include 'adminHome.php';

	try{
				$nid=-1;
				if ( isset($_GET["nid"]))
					$nid=$_GET["nid"];
	
				
			
				
				
				
				$resNews = $conn->query("select * from news");
							
				
				
				?>
<table>
	<tr>
		<form action="News.php" method="post"  enctype="multipart/form-data" > 
			<table>
				
				<tr>
					<th>News Title:</th>
					<td> <textarea class="form-control" id="title" required="required" name="title" cols="100" rows="5"></textarea></td>
				</tr>
				<tr>
					<th> News Photo:</th>
					<td> <input type="file" required="required" name="newsphoto"></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="submit" value="submit"/></td>
				</tr>
			</table>
		</form>

	</tr>
	
	<tr>
		<table border="1">
			<tr>
				<th>News Heading</th>
				<th>News Photo</th>
			</tr>
			<?php
				while($row =  $resNews->fetch_assoc())
				{
						$newsId=$row["id"];
						$title=$row["title"];
						$img=$row["imgurl"];
						
					
					//echo $lid; 
					//echo $locId;
				//echo $img;
			?>
				<tr>
					<td>
						<img src='<?php echo $img; ?>' height="100" width="100"/>
					</td>
			
					<td><?php echo $title;?></td>
					
				</tr>
				</tr>
<?php  }
	

}
	catch(Exception $e){
		echo "Exception!!!!!!!!!!";
	}
?>
 
		</table>
	</tr>
</table>
 
	
	

</body>
</html>
