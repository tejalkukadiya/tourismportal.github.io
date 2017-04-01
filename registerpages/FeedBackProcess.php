<?php
	
	session_start();

	//$_SESSION['currentUrl']="assam.php";
	//$username="guest";
	if(isset($_SESSION['username'])){
		$userId=$_SESSION['username'];
		$userType=$_SESSION['userrole'];
	}
	
			//echo $userId;
	include 'Connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
		
		$feedback=$_POST["feedback"];
		
		if(!strcmp($userId,"Tourist")){
			$sql="select country from tourist ";
			$res=$conn->query($sql);
			$row = $res->fetch_assoc();
			$country=$row["country"];
			
			$sql="insert into feedback(userId,country,userType,feedback)  values('$userId','$country','$userType','$feedback')";
					echo $sql;
		}
		else{
			$sql="insert into feedback(userId,country,userType,feedback)  values('$userId','India','$userType','$feedback')";
		}
	
			
	if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
	}
			
	header('Location:FeedbackForm.php');
}


?>