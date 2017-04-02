<?php
  
  

$heading=$_SESSION['heading'];
  // $url1=$_SESSION['currentUrl'];
  $username="guest";
  if(isset($_SESSION['username']))
    $username=$_SESSION['username'];
  //echo "hii" .$username;
  
  if( strcmp($username , "guest" ) == 0)
      $l = "<li style=\"display:block;\",\" width:auto;\"> <a href='Login.php'><i class=\"fa fa-user pull-left\" style=\"    
    padding-left: 4px;\" aria-hidden=\"true\"></i>Login</a></li>";
  else
      $l = "<li> <a><i class=\"fa fa-user pull-left\" style=\"    
    padding-left: 4px;\",\" width:auto;\" aria-hidden=\"true\"></i>".$username."</a>
  <ul>
                        <li style=\"display:block;\",\" width:auto;\"><a href=\" registerpages/updateProfile.php\" >Edit Profile</a></li>
                        <li style=\" width:auto;\"><a href=\" registerpages/FeedbackForm.php\"> give Feedback</a></li>
                        <li style=\"display:block;\"><a href=\"logout.php\">Logout</a></li>
                      </ul>
  
  </li>";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
	<style>

  a:hover{
    text-decoration: none;
  }
	.main-nav .header-style{
  display:inline-block;
  width: 100%;
  background-color: #333;
  position: fixed;
  transition:0.5s ease-in-out;
  z-index: 999;
}
 .main-nav .header-style .logo{
  float: left;
  
}
.main-nav .header-style .logo a{
    color: white;
}
.header-style .header-list{
  float: right;
  margin: 10px 28px;
  padding: 26px 10px;
  letter-spacing: 10p;
  word-spacing: 26px;
}
.header-style .header-list ul>li{
  display: inline-block;
  list-style-type: none;
}

.header-style .header-menu{
  padding: 0;
  margin: 12px 0;
}

.header-style .list ul{margin: 0;padding: 0;}
.header-style .list ul>li{display: inline-block;color: white;}
#hornav {
  position: relative;
  padding-right: 0px;
  text-align: center;
  width: auto;
  display: inline-block;
  float: right;
}
#hornav .navbar-nav {
  float: right;
}
#hornav ul {
  background-color: transparent;
  border-radius: 0 0 5px 5px;
  display: inline-block;
  width: auto;
}
#hornav ul > li {
  margin: 0px 5px;
}
#hornav ul > li > a,
#hornav ul > li > span {
  color: #FFFFFF;
  font-size: 15px;
  font-weight: 300;
  padding: 18px 22px;
  text-transform: uppercase;
  display: inline-block;
}
#hornav ul > li > a:hover,
#hornav ul > li > span:hover,
#hornav ul > li > a:active,
#hornav ul > li > span:active,
#hornav ul > li > a.current,
#hornav ul > li > span.current {
  background: none;
}
/* Dropdown Menu */
#hornav ul ul {
  text-align: left;
  background: #f2f2f2;
  border-radius: 5px;
  border: 1px solid #dddddd;
  position: relative;
  -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
  display: block;
  list-style: none;
  margin: 0px;
  padding: 5px 0 !important;
  min-width: 200px;
  z-index: 20;
}
#hornav ul ul li {
  min-height: 22px;
  float: none;
  position: relative;
  width: 100%;
  margin: 0;
}
#hornav ul ul li a,
#hornav ul ul li span {
  background-color: transparent;
  box-shadow: none;
  display: block;
  padding: 6px 15px;
  color: #555555 !important;
  text-transform: none;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
}
#hornav ul ul:before {
  background: transparent url('../img/menu_arrow.png') no-repeat 0 0;
  content: "";
  display: block;
  height: 10px;
  left: 21px;
  position: absolute;
  top: -10px;
  width: 14px;
}
#hornav ul ul li:first-child a {
  border: none;
}
#hornav ul ul li a:active,
#hornav ul ul li a:focus,
#hornav ul ul li a:hover {
  text-decoration: none;
  background-color: rgba(0, 0, 0, 0.05);
}
#hornav ul ul li:hover a {
  text-decoration: none;
}
#hornav ul ul ul:before {
  display: none;
}
#hornav li ul,
#hornav li ul li ul {
  position: absolute;
  height: auto;
  min-width: 194px;
  opacity: 0;
  visibility: hidden;
  transition: all 240ms linear;
  -o-transition: all 240ms linear;
  -ms-transition: all 240ms linear;
  -moz-transition: all 240ms linear;
  -webkit-transition: all 240ms linear;
  top: 70px;
  z-index: 1000;
}
#hornav li:hover > ul,
#hornav li ul li:hover > ul {
  display: block;
  opacity: 1;
  visibility: visible;
  top: 60px;
}
#hornav li ul li ul {
  left: 220px;
  top: 0;
}
#hornav li ul li:hover > ul {
  top: 0px;
  left: 200px;
}
#hornav ul ul .parent:after {
  top: 10px;
  right: 15px;
  color: #777;
  font-size: 14px;
  content: "\f105";
  position: absolute;
  font-weight: normal;
  display: inline-block;
  font-family: FontAwesome;
}

	</style>
</head>
<body>
<?php
print('
<div class="main-nav">
      
		<header class="header-style">
				<div class="logo">
						<a href="#"><h1>'.$heading.'</h1></a>
				</div>
				<div id="hornav" class="no-padding">
                	<div class="text-center visible-lg">
                         <div class="container header-menu">
							<nav class="list">
								
								<ul id="hornavmenu" class="nav navbar-nav">
									<li><a href="#">HOME</a></li>

													<li><a> states</a>
														<ul>
			                                        		<li>
			                                            		<a href="arunachal/arunachal.php">ARUNACHAL-PRADESH</a>
			                                        		</li>
			                                        		<li>
			                                            		<a href="assam/assam.php">ASSAM</a>
			                                        		</li>
			                                        		<li >
			                                            		<a href="meghalay/meghalay.php">MEGHALAY</a>
			                                            
			                                       			 </li>
			                                        		<li ><a href="manipur/manipur.php">MANIPUR</a>

			                                        		</li>
			                                        		<li ><a href="tripura/tripura.php">TRIPURA</a>
			                                        		</li>
			                                        		<li>
			                                            		<a href="sikkim/sikkim.php">SIKKIM</a>
			                                        		</li>
			                                       			 <li>
			                                            		<a href="nagaland/nagaland.php">NAGALAND</a>
			                                        		</li>
			                                        		<li>
			                                            		<a href="mizoram/mizoram.php">MIZORAM</a>
			                                        		</li>
			                                            </ul>
											        </li>
													<li><a href="registerpages/GuideSearch.php">Hire-Guide</a></li>

													<li><a>registeration</a>
                              <ul>
                                    <li><a href="registerpages/touristForm.php">Tourist register</a></li>
                                    <li><a href="registerpages/guideRegister.php">Guide register</a></li>
                                    <li><a href="registerpages/agencyRegister.php">Agency register</a></li>
                                    <li><a href="registerpages/hotel-form.php">Hotel Register</a></li>
                                    <li><a href="registerpages/Restaurant-form.php">Restaurant Register</a></li>
                                    <li><a href="registerpages/local-rent.php">Local Accommodation Register</a></li> 
                              </ul>
                          </li>
													<li><a>booking</a>
														<ul>
															<li><a href="hotel.php">Accomodation</a></li>
															<li><a href="booking.php">Tranport</a></li>
                              <li><a href="registerpages/AgencyDisplay.php">Travel package</a></li>
                              <li><a href="registerpages/local-rent-show.php"> Local Accommodation</a></li>
														</ul>
													</li>
													<li><a  href="http://necouncil.gov.in/writereaddata/mainlinkfile/File206.pdf" target="_blank">Contact</a></li>
													<li><a href="aboutus.php">About us</a></li>
													
                        '.$l.'
                        
								</ul>
							</nav>
						</div>
					</div>
				</div>
		</header>
		
	</div>

');
	?>
</body>
</html>