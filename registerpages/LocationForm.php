
<html>
<body>
<?php 
	include '../Connection.php';
	include 'adminHome.php';

	try{
				$lid=-1;
				if ( isset($_GET["lid"]))
					$lid=$_GET["lid"];
	
				
			
				$resLoc = $conn->query("select * from locationstateview");
				
				
				$resState = $conn->query("select * from state");
							
				
				
				/*if($result)
					echo "True";
				else
					echo"false";*/
?>
<table>
	<tr>
		<form action="Location.php" method="post">
			<table>
				
				<tr>
					<th>City:</th>
					<td><input type="text" name="city"/></td>
				</tr>
				<tr>
				<th>State:</th>
					<td>
						<select name="state" id="state">
						<?php
						while($row = $resState->fetch_assoc())
						{
								$stateId=$row["id"];
								$state=$row["state"];

						?>
				
						<option value="<?php echo $stateId;?>"><?php echo $state;?></option>
						<?php }?>	
						</select>
						</td>
				</tr>
				<tr>
				<th>Location Type:</th>
					<td>
					<select name="loctype" id="loctype">
						<option  name="village" value="Village">Village</option>
						<option  name="city" value="City">City</option>
						<option  name="township" value="Township">Township</option>
					</select>
					</td>
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
				<th>City</th>
				<th>State</th>
				<th>Location_Type</th>
			</tr>
			<?php
				while($row =  $resLoc->fetch_assoc())
				{
						$locId=$row["id"];
						$city=$row["city"];
						$locType=$row["locationtype"];
						$stateId=$row["StateId"];
						$state=$row["state"];
						
					
					//echo $lid; 
					//echo $locId;
				if($lid != $locId )
				{
			?>
				<tr>
					<td><?php echo $city;?></td>
					<td><?php echo $state;?></td>
					<td><?php echo $locType;?></td>
					<td><a href='LocationForm.php?lid=<?php echo $locId;?>'>Edit</a></td>
					<td><a href='Location.php?lid=<?php echo $locId;?>'>Delete</a></td>
				</tr>
				<?php }
				else {?>
				
				<form action="Location.php" method="post">
					<table>
						<tr>
							<td><input type="hidden" name="id" value='<?php echo $locId;?>'/></td>

							<td><input type="text" name="city" value="<?php echo $city; ?>" /></td>
							<td>
							<select name="state" id="state">
							<?php
								//mysql_free_result($resState);
								$sId =$row["StateId"];
								
								$resState = $conn->query("select * from state");
								
								while($row =  $resState->fetch_assoc())
								{
									$stateId=$row["id"];
									$state=$row["state"];
								
								
							?>
							<option value='<?php echo $stateId ;?>' <?php if($sId == $stateId){?>
							selected='selected' <?php }?>> <?php echo $state;?></option>
							<?php }?>	
							</select>
						</td>
						<td>
							<select name="loctype" id="loctype">
							
								<?php 
								$resLoc=$conn->query("select locationtype from locationstateview where id='$lid'");
								while($row= $resLoc->fetch_assoc())
										$type=$row["locationtype"];
								
									
								?>
								
								<option  name="village" value="Village" <?php if(!strcmp($type,"Village")){?>
								selected='selected' <?php }?>>Village</option>
								<option  name="city" value="City" <?php if(!strcmp($type,"City")){?>
								selected='selected' <?php }?>>City</option>
								<option  name="township" value="Township" <?php if(!strcmp($type,"Township")){?>
								selected='selected' <?php }?>>Township</option>
							</select>
						</td>
					
												
							<td><input type="submit" name="submit" value="update" /></td>
							<td><a href='Location.php' > Cancle</a></td>
						</tr>
					</table>
				</form>
				<?php
				}?>
				</tr>
<?php  }
		/*		 if($resState)
					mysql_free_result($resState);
				if($resLoc)
					mysql_free_result($resLoc);*/


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
