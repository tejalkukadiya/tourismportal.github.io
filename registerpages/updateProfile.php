<?php
	session_start();
 if( $_SESSION['userrole'] == "Tourist"){
    header('Location: TouristProfile.php ' );
  }
  else if( $_SESSION['userrole'] == "Guide"){
    header('Location: GuideProfile.php ' );
  }
  else if( $_SESSION['userrole'] == "Agent"){
    header('Location: AgencyProfile.php ' );
  }
  else if( $_SESSION['userrole'] == "Hotel"){
    header('Location: hotel-edit.php ');
  }
  else if( $_SESSION['userrole'] == "Restaurant"){
    header('Location:  restaurant-edit.php' );
  }
 
 ?>
