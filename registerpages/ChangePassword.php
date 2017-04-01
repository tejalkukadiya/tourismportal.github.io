
<?php 
//$msg="";

?>
<html>
<body>
		<form action="PasswordProcess.php" method="post">
			<table>
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
					<td><input type="submit" name="submit" value="Change Password"/></td>
				</tr>
				
			</table>
		</form>
	


</body>
</html>