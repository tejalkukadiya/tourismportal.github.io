<?php
	
	
			
	include '../Connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$city=$_POST["city"];
		$stateId=$_POST["state"];
		$locationType=$_POST["loctype"];
		$submitVal=$_POST["submit"];
		
		echo $city;
		echo $stateId;
		echo $locationType;
		echo $submitVal;
	if($_POST["id"] != NULL){
			$locationId=$_POST["id"];
			if(!strcmp($submitVal,"update")){
				
				$sql="update location set city='$city' ,stateId='$stateId',locationtype='$locationType' where id='$locationId'";

			}
			
	}else{
		if(!strcmp($submitVal,"submit")){				
				$sql="insert into location(city,stateId,locationtype) values('$city','$stateId','$locationType')";
					echo $sql;
			}
	}
			
	}
	else{
		$locationId=$_GET["lid"];
		

		$sql="delete from location where id= '$locationId'";

	}
	if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
	}
			
	header('Location:LocationForm.php');



?>