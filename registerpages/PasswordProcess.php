<?php /*if (userName==null || userName.equals("admin"))
				response.sendRedirect("Index.jsp");*/
			include '../Connection.php';
			session_start();
			$userId=$_SESSION["username"];
			$userType=$_SESSION["userrole"];
			//echo $userType;
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$oldPwd=$_POST["oldPassword"];
			$newPwd=$_POST["newPassword"];
			$rePwd=$_POST["re-enteredPassword"];
			//$submitVal=$_POST["submit"];
			/*if(!strcmp($submitVal,Back))
				header('Location:TouristProfile.php');*/
			
			if(strcmp($newPwd, $rePwd) !== 0)
			{  	//System.out.println("1st if");
				$i=1;header('Location:ChangePassword.php?nep='.$i);
				return;
			}
			$sql="select userId from login 
				where userId='$userId' and password ='$oldPwd'";
			$res=$conn->query($sql);
			if( mysqli_num_rows($res) == 0 ){
				$i=2;header('Location:ChangePassword.php?ip='.$i); 
				return;
				//System.out.println("2nd if");return;}
			}
			$sql="update login set password='$newPwd' where userId='$userId'";
			
			if(!strcmp($userType,"Tourist")){
				$sql1="update tourist set password='$newPwd' where touristId='$userId'";}
			else if(!strcmp($userType,"Agent")){
				echo "hii";
				$sql1="update agent set password='$newPwd' where agentId='$userId'";}
			else if(!strcmp($userType,"Guide")){
				$sql1="update Guide set password='$newPwd' where guideId='$userId'";}
			else if(!strcmp($userType,"Hotel")){
				$sql1="update hotel set password='$newPwd' where username='$userId'";}
			else if(!strcmp($userType,"Restaurant")){
				$sql1="update restaurant set password='$newPwd' where username='$userId'";}
		
		
		
		
			if(($conn->query($sql) == true) && ($conn->query($sql1) == true)){
				echo "Password Changed Successfully";
				//include 'PassAcknowledgement.php';
				
			}
			
			
		
		}
			
?>
	