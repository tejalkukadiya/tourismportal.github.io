<?php 
	include 'adminHome.php';
	include '../Connection.php';
?>
<html>
<head>
	<title></title>
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style>
	body{
		font-size: 16px;
	}
	 .state-info hr{
		color: #333;
		box-shadow: 1px 1px 2px;
	}
	a:hover{
		text-decoration: none;
	}
	h1{
		color: grey;
	}
	.state-info{}
	.state-info table{
		    width: 100%;
    border-color: #ddd;
    box-shadow: 2px 2px 6px;
    margin: 50px 0;
    border-radius: 6px;
    background-color: rgba(255,255,255,0.5)
	}
	.state-info th{ padding: 10px; }
	.state-info td{
		padding: 10px;
	}

</style>
<body>
<?php 


	try{
				$sid=-1;
				if ( isset($_GET["sid"]))
					$sid=$_GET["sid"];
	
				$sql ="select * from state";
			
				$result = $conn->query($sql);
				/*if($result)
					echo "True";
				else
					echo"false";*/
?>
	
		
	
	<div class="container state-info text-center">
		<h1> --state chief-minister info--</h1>	
		<hr>
		<table border="1">
			<tr>
				<th>State</th>
				<th>Chief  Minister:</th>
			</tr>
			<?php
				while($row = $result->fetch_assoc())
				{
						$stateId=$row["id"];
						$state=$row["state"];
						$cm=$row["cm"];
						
					
					//echo ($cid +  ":" + $id);
				if($sid != $stateId )
				{
			?>
			<tr>
				<td><?php echo $state;?></td>
				<td><?php echo $cm;?></td>
				<td><a href='StateForm.php?sid=<?php echo $stateId;?>'>Edit</a></td>
				<td><a href='State.php?sid=<?php echo $stateId;?>'>Delete</a></td>
			</tr>
			<?php }
				else {?>
				
				<form action="State.php" method="post">
				<tr>
					
							<input type="hidden" name="id" value="<?php echo $stateId;?>"/>
							
							<td><input type="text" name="state" value="<?php echo $state;?>" readOnly="readOnly"/></td>
							
							
							<td><input type="text" name="cm" value="<?php echo $cm; ?>" /></td>

							<td><input type="submit" name="submit" value="update" /></td>
							<td><a href='State.php' > Cancle</a></td>
						</tr>
					
				</form>
				<?php
				}
				 }?>		
			</table></div>
			<?php				
}
	catch(Exception $e){
		echo "Exception!!!!!!!!!!";
	}
?>			 
 
		
 
	
	

</body>
</html>
