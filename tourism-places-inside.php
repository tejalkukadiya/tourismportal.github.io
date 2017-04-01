<?php
  
  session_start();

  $_SESSION['currentUrl']="tourism-places-inside.php";
  $_SESSION['heading']="Places";
  
    include 'Connection.php';
    include_once "breadcrumbs.php";
     $flag=TRUE;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tourism-Places</title>
	<link rel="stylesheet" type="text/css" href="css/tourism-places-inside.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
  <script>
  var index =1;
  function setindex(n)
  {
    index=index+n;
    showbackground(index);
  }

  function showbackground(n)
  {
    var i;
    var j=document.getElementsByClassName("home-slider");
    if(n>j.length){ index=1;}
    if(n<1){ index=j.length}
      for(i=0;i<j.length;i++)
      {
        j[i].style.display="none";
      }
      j[index-1].style.display="block";
  }
  </script>

</head>



<body>
    <?php
         include 'header.php';
        try{  
        $sid=-1;
        if(isset($_GET['sid']))
            $sid=$_GET['sid'];
        $sql = "select * from touristspotlocationstateview where spotId='$sid'";      
        $result = $conn->query($sql);
        $query="select imgurl from touristspotimages where spotId='$sid'";
        $resultq = $conn->query($query);
    ?>

    <div class="container">

<p style="margin-left: 50px; padding-top: 100px;"><?= breadcrumbs() ?></p>
      <div class="desc">
      <?php
        $row = $result->fetch_assoc();

          //$spotId=$row['spotId'];
          $spotName=$row['spotName'];
          $famousFor=$row['famousFor'];
          $distance=$row['distance'];
          $availability=$row['timing'];
          $category=$row['category'];
          $city=$row['city'];
          $state=$row['state'];
        

    
        while ($row = $resultq->fetch_assoc()) {
            $img='registerpages/'.$row['imgurl'];
           // echo $img;
        
       ?>
            <div class="home-slider" style="background-image: url(<?php echo $img; ?>);<?php if($flag==TRUE){?>display:block;<?php } else {?> display:none;<?php } ?>">
            <?php  $flag=FALSE; ?>
              <div class="whole">
                  <div class="hometxt">
              <div class="left-arrow">
                <button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
              </div>
              <div class="right-arrow" style="margin-left: 648px">
                <button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
              </div>
            </div>
          </div>
        </div>
         <?php } ?>   
       <!-- <p>
          Many South, Eastern and Southeast Asian communities have settled in Assam over the centuries. But civilisation in the region did not necessarily begin with the fertile Brahmaputra Valley. Discoveries of stone implements and pottery reveal the existence of prehistoric communities on the highlands encircling the valley. 
        Anthropological accounts say Assam’s demography is marked by several waves of migration. Australoids, the first inhabitants, were absorbed or dispersed by the Mongoloids that ancient Sanskrit literature term as Kirats. The Caucasoids followed, and their four categories – Mediterranean, Alpine, Indo-Aryan and Irano-Scythian – settled in the valleys.
        </p>-->


        <p>
          
          <h2><?php echo $spotName;?></h2><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $famousFor;?><br>
          <h4>Distance:</h4><?php echo $distance;?> km from <?php echo $city;?><br>
          <h4>State:</h4><?php echo $state;?>
          
        </p>
        
    </div>
    </div>	         

<?php }
    catch(Exception $e){
    echo "Exception!!!!!!!!!!";
  }
 include_once 'footer.php';
 ?>

</body>
</html>