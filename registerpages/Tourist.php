<?php
	

	include '../Connection.php';

		
		//echo $submitVal;
	//if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			$touristId=$_POST["userName"];
			$name=$_POST["name"];
			$password=$_POST["password"];
			$confirmPass=$_POST["confirm"];
			$country=$_POST["country"];
			$address=$_POST["address"];
			$email=$_POST["email"];
			$contactNo=$_POST["phone"];
			
			if(strcmp($password,$confirmPass))
			{  
				header('Location:touristForm.php?conf=' .urlencode("1"));
				return;
			}
			
	
			$conn->query("insert into tourist values('$touristId', '$name', '$password', '$country', '$address', '$email', '$contactNo')");
			
			
			$conn->query("insert into login values('$touristId','$password','Tourist')");
			
			//echo $sql;
	//	}
	
/*if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}*/
	header('Location:../main-page/main-page.php');

	
?>