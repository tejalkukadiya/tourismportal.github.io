
<?php 
//$msg="";

?>
<html>
<head>
	<script src="assests/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assests/registerform.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  <style type="text/css">
  		.main-div {
  			margin-left: auto;
  			margin-right: auto;
  		}
  </style>
</head>
<body>

<div class="container main-div">
		<form action="PasswordProcess.php" method="post" class="form">
			<h1 style="margin-bottom: 50px;margin-top: 50px;"><center>Reset Password !</center></h1>
			<center>
			<table class="table" style="width: 300px;">
				<tr>
					<th>Old Password:</th>
					<td><input type="password" name="oldPassword"/></td>
					<?php 
					if(isset($_GET["ip"]))	{?>		
						<td>Invalid password</td>
					<?php }?>
				</tr>
				
				<tr>
					<th>New Password:</th>
					<td><input type="password" name="newPassword"/></td>
				</tr>
				<tr>
					<th>Re-Enter Password:</th>
					<td><input type="password" name="re-enteredPassword"/></td>
					<?php
					if(isset($_GET["nep"]))	{?>		
						<td>Password doesn't match </td>
					<?php }?>
				</tr>
				
				<tr>
					<center><td><input type="submit" name="submit" colspan="2" class="btn btn-primary" value="Change Password"/></td>
					</center>
				</tr>
				
			</table>
			</center>
		</form>

</div>
		
	


</body>
</html>