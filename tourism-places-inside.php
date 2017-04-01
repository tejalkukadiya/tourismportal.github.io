<?php
  
  session_start();

  $_SESSION['currentUrl']="tourism-places-inside.php";
  $_SESSION['heading']="Places";
  
 ?>
<?php 
    include_once "breadcrumbs.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tourism-Places</title>
	<link rel="stylesheet" type="text/css" href="css/tourism-places-inside.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
            <?php
                 include 'header.php';
            ?>

	         <p style="margin-left: 50px; padding-top: 100px;"><?= breadcrumbs() ?></p>

           <div class="container desc">
               <img src="img/4.jpg">
               <p>Donec id vehicula dolor. Cras euismod dapibus felis quis auctor. Curabitur quis hendrerit velit. Aliquam et augue in lacus laoreet semper. Maecenas a quam euismod, pharetra velit ac, consequat diam. Nulla sollicitudin tincidunt sem, quis mattis mi porttitor et. Curabitur eget mi felis. Etiam convallis faucibus arcu id gravida. Ut posuere libero ut arcu malesuada fringilla mollis vel massa. Integer vulputate imperdiet erat, et ornare tellus scelerisque vel. Aenean vestibulum vel diam eget mattis.</p>
           </div>
    </div> 



    <footer class="quick-links container" style="background-color: rgba(0,0,0,0.7);  color: white;
  border-radius: 6px;
  padding: 42px 76px;
  margin-top: 10px;">
    <div class="row">
      <div class="col-md-4 contact" style="color: rgb(203,203,203);">
        <h2 style="color: white;">
          Contact
        </h2>
        <p>
        <span><i class="fa fa-phone"></i></span>
          telephone: (212)888-77-88<br>
        <span><i class="fa fa-envelope"></i></span>
          email: xyz@abc.com<br>
        <span><i class="fa fa-link"></i></span>
          website: www.yewsdbgyw.com<br>
        <br>
        </p>
      </div>
      <div class="col-md-4 link-details">
        <h2 style="margin-left: -56px;"> Quick links </h2>
        <ul >
          <li> <a href="#" class="fa fa-angle-right">History</a></li>
          <li> <a href="#" class="fa fa-angle-right">Guide-register</a></li>
          <li> <a href="#" class="fa fa-angle-right">Booking</a></li>
          <li> <a href="#" class="fa fa-angle-right">ContactUs</a></li>
          <li> <a href="#" class="fa fa-angle-right">AboutUs</a></li>
        </ul>
      </div>
      <div class="col-md-4 news-letter">
        <h2>
          For news-letter
        </h2>
        <p style="color: rgb(203,203,203);">
        Sign up for our newsletter for all the 
        latest news and information
        </p>
        <input type="text" name="news-letter" class="form-control"><br>
        <button type="button" class="btn btn-success">subscribe</button>
      </div>
    </div>
  </footer>

</body>
</html>