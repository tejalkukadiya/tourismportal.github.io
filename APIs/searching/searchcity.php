<?php
$q = $_GET['q'];		
// echo $q;
require 'connection.php';

mysqli_select_db($con,"air");
// $sql="SELECT * FROM user WHERE id = '".$q."'";



 $sql = "SELECT code,cityName FROM airports WHERE cityName LIKE '$q%'";

 // $sql ="SELECT * from airports WHERE cityName LIKE '$q%'";
    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['cityName']."</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }


mysqli_close($con);
?>