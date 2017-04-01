<?php
  
  session_start();

  $_SESSION['currentUrl']="festivals.php";
  $_SESSION['heading']="Festival";
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Festivals</title>
	<link rel="stylesheet" type="text/css" href="../css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link href="../css/festivals.css" rel="stylesheet">

	
</head>
<body>

    <?php
                 include 'header.php';
    ?>



    <div class="container" style="padding: 100px 0;">
            <div class="music text-center dance" id="music">
            <div class="line">
                <h2> Festival </h2>
                    <hr>
                    <img src="../img/karbi.jpg">
                    <p>
                        
                                Classical Assamese music is divided into Borgeet and Ojapali that were preceded by folksongs and ballads such as Bihugeet (for pastoral festivals), Bongeet (for nature-worship), Naworiageet (boatman&#39;s song), Biyanaam (marriage song) and Nichukonigeet (cradle song). While these songs were documentary in character and without symbolism, Dehbisaror Geet had a pronounced spiritual bias, thus presumed to have been inspired by Vaishnavism. 
                                
                                The Islamic counterpart of Dehbisaror Geet was Zikir or spiritual chants composed by Ajan Fakir underscoring the futility of life and manmade institutions.
                    </p>
                    
            </div>
        </div>




            <div id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 folio-item">
                            <div class="folio-img">
                                <img src="../img/karbi.jpg">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Dance</h3>
                                            <p>more information</p>
                                        </div>
                                        <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="inside-festivals.php" ><i class="fa fa-link"></i></a></span>
                                                
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 folio-item">
                                <div class="folio-img">
                                    <img src="../img/karbi.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Music</h3>
                                                <p>more information</p>
                                            </div>
                                            <div class="folio-overview">
                                                    <span class="folio-link"><a class="folio-read-more" href="inside-festivals.php" ><i class="fa fa-link"></i></a></span>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4 folio-item">
                                <div class="folio-img">
                                    <img src="../img/karbi.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Dress</h3>
                                                <p>more information</p>
                                            </div>
                                            <div class="folio-overview">
                                                    <span class="folio-link"><a class="folio-read-more" href="inside-festivals.php" ><i class="fa fa-link"></i></a></span>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4 folio-item">
                            <div class="folio-img">
                                <img src="../img/karbi.jpg">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Cuisine(food)</h3>
                                            <p>more information</p>
                                        </div>
                                        <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="inside-festivals.php" ><i class="fa fa-link"></i></a></span>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 folio-item">
                            <div class="folio-img">
                                <img src="../img/karbi.jpg">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Arts & Crafts</h3>
                                            <p>more information</p>
                                        </div>
                                        <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="inside-festivals.php" ><i class="fa fa-link"></i></a></span>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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