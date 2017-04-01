
<?php
	include '../Connection.php';

		
		//echo $submitVal;
	//if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			$agentId=$_POST["userName"];
			$agencyName=$_POST["agentName"];
			$agencyAddress=$_POST["agencyAddress"];
			$agencyEmail=$_POST["agencyEmail"];
			$agencyCno=$_POST["agencyContact"];
			$websiteUrl=$_POST["agencyUrl"];
			$agentName=$_POST["agentName"];
			$password=$_POST["password"];
			$agentAddress=$_POST["agentAddress"];
			$agentEmail=$_POST["agentEmail"];
			$agentCno=$_POST["agentContact"];
			
		
			
				$conn->query("insert into agent(agentId,password,agencyName,address,agencyEmail,agencyCno,websiteUrl,agentName,agentAddress,agentEmail,agentCno)
			     values( '$agentId','$password','$agencyName' ,'$agencyAddress','$agencyEmail','$agencyCno','$websiteUrl','$agentName','$agentAddress','$agentEmail','$agentCno' )");
			
			
			
				$conn->query("insert into login values('$agentId','$password','Agent')");
			
			//echo $sql;
	//	}
	
/*if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}*/
	header('Location:../main-page.php');

	
?>