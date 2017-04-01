<?php
	
	
			
	include '../Connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$stateId=$_POST["id"];
		$cm=$_POST["cm"];
		$submitVal=$_POST["submit"];
		
		//echo $cm;
		if($_POST["id"] != NULL){
			//$stateId=$_POST["id"];
			if(!strcmp($submitVal,"update")){
				
				$sql="update state set cm='$cm' where id='$stateId'";

			}
			
			}
			
	}
	else{
		$stateId=$_GET["sid"];
		

		$sql="delete from state where id= '$stateId'";

	}
	if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
	}
			
	header('Location:StateForm.php');



?>