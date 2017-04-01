
<?php				
				$dbhost = 'localhost';
				$dbuser = 'root';
				$dbpass = '';
				$conn = mysqli_connect($dbhost, $dbuser, $dbpass,'tourism');
				
				if(! $conn )
				{
				  die('Could not connect: ' . mysql_error());
				  return;
				}
?>