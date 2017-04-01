
<?php 
 session_start();
 session_destroy();
  $url=$_SESSION['currentUrl'];
 
 header('Location:'.$url);
?>