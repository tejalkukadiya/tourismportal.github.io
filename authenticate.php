<?php 
 include 'Connection.php';

 session_start();

 $username = "";
 $password = "";
  $url=$_SESSION['currentUrl'];
 // echo "hii" .$_SESSION['currentUrl'];
 
 if(isset($_POST['username'])){
  $username = $_POST['username'];
 }
 if (isset($_POST['password'])) {
  $password = $_POST['password'];

 }
 

 $sql = "SELECT usertype FROM login WHERE userId='$username' AND password='$password'";
$res=$conn->query($sql);
 

 if( mysqli_num_rows($res) == 0 )
	header('Location: Login.php?err=1');
 else{

 
  $row = $res->fetch_assoc();

  session_regenerate_id();
 // $_SESSION['sess_user_id'] = $row['id'];
  $_SESSION['username'] = $username;
  $_SESSION['userrole'] = $row['usertype'];

        echo $_SESSION['userrole'];
  session_write_close();

  if( $_SESSION['userrole'] == "admin"){
	header('Location: adminhome.php');
  }else if( $_SESSION['userrole'] == "Tourist"){
    header('Location:  '.$url );
  }
  else if( $_SESSION['userrole'] == "Guide"){
    header('Location:  '.$url );
  }
  else if( $_SESSION['userrole'] == "Agent"){
    header('Location:  '.$url );
  }
  else if( $_SESSION['userrole'] == "Hotel"){
    header('Location:  '.$url );
  }
  else if( $_SESSION['userrole'] == "Restaurant"){
    header('Location:  '.$url );
  }
  
  
  
  
  
 }


?>
