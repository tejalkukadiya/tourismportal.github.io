<?php
    
    session_start();

    $_SESSION['currentUrl']="aboutus.php";
    $_SESSION['heading']="About-Us";
    
 ?>
<?php 
    include_once "breadcrumbs.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css\font-awesome.min.css">

	
</head>
<body>



            <?php
                 include 'header.php';
            ?>

            <div style="height: 100px;"> </div>
            <p style="margin-left: 50px; padding: 30px 0;"><?= breadcrumbs() ?></p>
            <div class="container" style="padding: 0px 200px;" >
            <h1 style="text-align: center;">About Us</h1><hr style="margin: 0px 300px;">
            <p>
                
        <h3>Namaste!</h3>
        <br><br>
        We are here to serve you by providing all necessary information regarding to tourism in North East India Region which cover there states as following Assam, Arunachal Pradesh, Tripura, Nagaland, Sikkim, Manipur, Mizoram, Meghalaya.<br><br>

        Use this site to plan your trip to North east region of India. You will find all the answers to the questions regarding to roam around in this area. You can also find the list of guides, planner and agents to make your booking process easy.
        We provide flight booking, railway ticket reservation, cab list and much more. We also have an interactive map which can be used from anywhere from the site.<br><br>

        <blockquote class="blockquote-reverse">
          <p>Dream your tour and we will make it happen.</p>
          <footer>Happy journey from the Team.</footer>
        </blockquote>

    </p>
    </div>


     <?php
             include 'footer.php';
        ?>

</body>
</html>