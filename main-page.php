<?php
	
	session_start();

	$_SESSION['currentUrl']="main-page.php";
	$username="guest";
	if(isset($_SESSION['username']))
		$username=$_SESSION['username'];
	//echo "hii" .$username;
	
	if( strcmp($username , "guest" ) == 0)
			$l = "<li><i class=\"fa fa-user pull-left\" style=\"    padding-top: 20px;
    padding-left: 4px;\" aria-hidden=\"true\"></i><a href='Login.php'>Login</a></li>";
	else
			$l = "<li><i class=\"fa fa-user pull-left\" style=\"    padding-top: 20px;
    padding-left: 4px;\" aria-hidden=\"true\"></i><a >".$username."</a>
	<ul>
												<li><a >Edit Profile</a></li>
												<li><a href=\"Logout.php\">Logout</a></li>
											</ul>
	
	</li>";

	include 'Connection.php';
	$sql="select countno from counter";
	$res=$conn->query($sql);
	$row=$res->fetch_assoc();
		$cnt=$row['countno'];
	$cnt++;
	//echo $cnt;
	$conn->query("update  counter set countno='$cnt' ");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>north-east</title>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/map.css">
	<link rel="stylesheet" type="text/css" href="css/main-page.css">
	<style type="text/css">
		  body::-webkit-scrollbar {
			    width: 1em;
			}
			 
			body::-webkit-scrollbar-track {
			    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			}
			 
			body::-webkit-scrollbar-thumb {
			    -webkit-border-radius: 10px;
			    border-radius: 10px;
			    background: rgba(51,51,51,0.8); 
			    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
			}




				.marquee {
				    top: 6em;
				    position: relative;
				    box-sizing: border-box;
				    animation: marquee 15s linear infinite;
				}

				.marquee:hover {
				    animation-play-state: paused;
				}

				/* Make it move! */
				@keyframes marquee {
				    0%   { top:   8em }
				    100% { top: -11em }
				}

	</style>
					
					<script src="js/jquery-1.11.1.min.js"></script>
					<!-- <script src="js/jquery.min.js"></script> -->
					<script src="js/bootstrap.min.js"></script>
					<script src="js/animate.js"></script>
					<script src="js/main.js"></script>

					<script type="text/javascript">
						$(window).load(function(){
    $("#hornav").sticky({ topSpacing: 90 });
  });
  $(window).load(function(){
    $("#header").sticky({ topSpacing: 0 });
  });



					
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
	
	var index1 =1;
	function setindex1(n)
	{
		index1=index1+n;
		showbackground1(index1);
	}

	function showbackground1(n)
	{
		var i;
		var j=document.getElementsByClassName("text-slider");
		if(n>j.length){ index1=1;}
		if(n<1){ index1=j.length}
			for(i=0;i<j.length;i++)
			{
				j[i].style.display="none";
				
			}
			j[index1-1].style.display="block";

	}


					</script>
					

</head>
	



<body>


	<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
	</div>

		<div id="myBtn" class="floating" style="z-index: 999">
		    <img src="img/ico/map-white.svg" height="40px" width="40px" style="color: white;">
		</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content text-center">
  			<h3 >North-East India</h3>
       <span class="close">&times;</span>

        <div id="map" style="width: 100%; height: 580px;"></div>
  </div>

</div>






<div class="wrapper">
	<div id="pre-header" class="container" style="height:250px">
    </div>
	 <div id="header" class="header-style">
                <div class="container-fluid">
                    <div class="row">
                    	<div class="logo  col-md-offset-2 col-md-1 ">
                        	<img src="img/logo/white.png">
                        	</div>
                        <div class="homepage col-md-8">
							<h1>
								<a href="#">
								 NORTH-EAST INDIA</a>
							</h1>
							<h2>
								The Perfect Blend of Eight Wonders
							</h2>
                    	</div>
                	</div>
            	</div>
           
            <div id="hornav" class="no-padding">
                <div class="text-center visible-lg">
                            <div class="container header-menu">
								<nav class="list">
									<ul id="hornavmenu" class="nav navbar-nav">
										<li><a href="main-page.php">HOME</a></li>

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
                                            		<a href="sikkim/sikkim.php">    SIKKIM</a>
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
										<?php 
											if(!isset($_SESSION['username'])){
										?>
										<li><a href="#">registration</a>
											<ul>
												<li><a href="registerpages/touristForm.php">Tourist register</a></li>
												<li><a href="registerpages/guideRegister.php">Guide register</a></li>
												<li><a href="registerpages/agencyRegister.html">Agency register</a></li>
											</ul>
										</li>
										<?php }?>
										<li><a>booking</a>
											<ul>
												<li><a href="hotel.php">Accomodation</a></li>
												<li><a href="booking.php">Tranport</a></li>
											</ul>
										</li>
										<li><a href="http://necouncil.gov.in/writereaddata/mainlinkfile/File206.pdf" target="_blank">contact</a></li>
										
										<li><a href="aboutus.php">about us</a></li>
										<?php 
												echo $l;
												?>
												
										
									</ul>
								</nav>
							</div>
				</div>	        
            </div>
    </div>
    <div id="post_header" class="container" style="height:270px">
            </div>
            
            <!-- === END HEADER === -->	




	<div class="container-fluid main">
		<div class="slider">
        	<div class="home-slider" style="background-image: url('img/assam_tea_fields.jpg');display:block;">
	        	<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>	
						<div class="center-txt">
							<h1 class="animated fadeInLeft">
								ASSAM
							</h1>
							<h3 class="animated fadeInRight ">The Land of Red Rivers and Blue Hills</h3>	
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
        	<div class="home-slider" style="background-image: url('img/assam_manas_national_park.jpg'); display:none;">
	        	<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt">
							<h1 class="animated fadeInLeft">
								ARUNACHAL PRADESH
							</h1>
							<h3 class="animated fadeInRight"> The Land of Dawnlit Mountains</h3>	
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="home-slider" style="background-image: url('img/assam_kaziranga.jpg'); display:none;">
				<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt">
							<h1 class="animated fadeInLeft">
								MANIPUR
							</h1>
							<h3 class="animated fadeInRight">The Jewel of India</h3>	
							
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="home-slider" style="background-image: url('img/assam_goalpara.jpg'); display:none;">
				<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt">
							<h1 class="animated fadeInLeft">
								MEGHALAY
							</h1>
							<h3 class="animated fadeInRight">The abode of clouds</h3>	
							
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="home-slider" style="background-image: url('img/assam_bogibeel_bridge.jpg'); display:none;">
				<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt">
							<h1 class="animated fadeInLeft">
								MIZORAM
							</h1>
							<h3 class="animated fadeInRight">The jewel of india</h3>	
							
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="home-slider" style="background-image: url('img/assam_bogibeel_bridge.jpg'); display:none;">
				<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt">
							<h1 class="animated fadeInLeft">
								NAGALAND
							</h1>
							<h3 class="animated fadeInRight">The land of festivals</h3>	
							
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="home-slider" style="background-image: url('img/assam_bogibeel_bridge.jpg'); display:none;">
				<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt">
							<h1 class="animated fadeInLeft">
								SIKKIM
							</h1>
							<h3 class="animated fadeInRight">Small but Beautiful</h3>	
							
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="home-slider" style="background-image: url('img/assam_bogibeel_bridge.jpg'); display:none;">
				<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt">
							<h1 class="animated fadeInLeft">
								TRIPURA
							</h1>
							<h3 class="animated fadeInRight">A place of satiety</h3>	
							
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="main1 " class="container main-content">
			<div class="col-md-8 left-content">
				<div class="details animated fadeInLeft">
					<h2>about north-east</h2>
					
					<div class="text-slider  animated fadeInLeft"  style=" display:block;">
						<div class="whole">
			          		<div class="hometxt">
								
									
									<p >
									Jdsdsdsdfdssfegddgdgdsfack White - Manager
							Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus.<br/><br/>

							Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.<br/><br/>

							Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br/><br/>
							</p>
							<div class="arrow">
									<button onclick="setindex1(-1)"><i class="fa fa-angle-left"></i></button>
									<button onclick="setindex1(1)"><i class="fa fa-angle-right"></i></button>
							</div>
							</div>
						</div>
					</div>


					<div class="text-slider  animated fadeInLeft" style=" display:none;">
						<div class="whole">
			          		<div class="hometxt">
								
									
									<p>
									Jdsdsdsdfddssxxxaxssfegddgdgdsfack White - Manager
							Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus.<br/><br/>

							Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.<br/><br/>

							Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br/><br/>
							</p>
							<div class="arrow">
									<button onclick="setindex1(-1)"><i class="fa fa-angle-left"></i></button>
							
									<button onclick="setindex1(1)"><i class="fa fa-angle-right"></i></button>
							</div>
							</div>
						</div>
					</div>
					

					 
					<!-- <div class="read-more">
						<a href="#"><i class="fa fa-angle-left"></i></a>
						<a href="#"><i class="fa fa-angle-right"></i></a>
					 </div> -->
				</div>

					<hr style="margin-top: 80px;">
					<center>
						<div class="row famous-places">
							<h3>Famous Places</h3>
						</div>
						<div class="row" id="famous-for">
							<div class="col-md-4">
								<div class="famous-card"></div>
								<center><h4 class="cap">wsdrdj</h4></center>
							</div>
							<div class="col-md-4">
								<div class="famous-card"></div>
								<center><h4 class="cap">wsdrdj</h4></center>
							</div>
							<div class="col-md-4">
								<div class="famous-card"></div>
								<center><h4 class="cap">wsdrdj</h4></center>
							</div>
						</div>
						<div class="row" id="famous-for">
							<div class="col-md-4">
								<div class="famous-card"></div>
								<center><h4 class="cap">wsdrdj</h4></center>
							</div>
							<div class="col-md-4">
								<div class="famous-card"></div>
								<center><h4 class="cap">wsdrdj</h4></center>
							</div>
							<div class="col-md-4">
								<div class="famous-card"></div>
								<center><h4 class="cap">wsdrdj</h4></center>
							</div>
						</div>
					</center>

					<div class="views animated fadeInRight">
						<h2>quotes</h2>
						
						<div class="view-data row">
							<div  class="col-md-4">
								<img src="img/team/1.jpg">
								
							</div>
							<div class="col-md-8 quote">
								<i class="fa fa-caret-left" ></i>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
						</div>
						<div class="view-data row">
							<div class="col-md-8 quote1">
								<i class="fa fa-caret-right" ></i>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
							<div  class="col-md-4">
								<img src="img/team/2.jpg">
								
							</div>
						</div>
						<div class="view-data row">
							<div  class="col-md-4">
								<img src="img/team/3.jpg">
								
							</div>
							<div class="col-md-8 quote">
								<i class="fa fa-caret-left" ></i>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
						</div>
						<div class="view-data row">
							<div class="col-md-8 quote1">
								<i class="fa fa-caret-right" ></i>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
							<div  class="col-md-4">
								<img src="img/team/4.jpg">	
							</div>
						</div>
					</div>

			</div>
					<?php 		
							include 'Connection.php';
							$res= $conn->query("SELECT * FROM news ORDER BY id DESC LIMIT 0,4");

							

					?>
			
			
			<div class="col-md-4 right-content">
				<div class="news" style="height:500px;">

					<h2>News Updates</h2>

					<div class="holder">
  						<ul id="ticker01">
							<li><span>10/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
							<li><span>10/10/2007</span><a href="#">End up doing is adding some code</a></li>
							<li><span>10/10/2007</span><a href="#">The code that you want to run</a></li>
							<li><span>08/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
							<li><span>08/10/2007</span><a href="#">Right when the page is loaded</a></li>
							<li><span>05/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
							<li><span>04/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
							<li><span>04/10/2007</span><a href="#">End up doing is adding some code</a></li>
							<li><span>04/10/2007</span><a href="#">The code that you want to run</a></li>
							<li><span>03/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
							<li><span>03/10/2007</span><a href="#">Right when the page is loaded</a></li>
							<li><span>01/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
						</ul>
					</div>
					<marquee direction="up" scrollamount="8" >
					<P>	
										<ul class="news-list">
					
										<?php
							while($row =  $res->fetch_assoc())
							{
								$img=$row["imgurl"];
								$title=$row["title"];
								
					echo '<li><img src="'.$img.'" style="width:300px;height:200px;">
							<p>'.$title.'</p>
						</li>';
					}
							?>
							</ul>
						</P>				
					</marquee>


					</P>

				</div>
			</div>
		</div>
			<div class="counter">
				<h1><?php echo $cnt; ?></h1>
			</div>
	</div>


		<footer class="quick-links container-fluid" id="footer">
			<div class="row">
				<div class="col-md-4 contact">
					<h2>
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
					<h2> Quick links </h2>
					<ul>
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
					<p>
					Sign up for our newsletter for all the 
					latest news and information
					</p>
					<input type="text" name="news-letter" class="form-control"><br>
					<button type="button" class="btn btn-success">subscribe</button>
				</div>
			</div>
		</footer>
		
</div>


	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/animate.js"></script> -->
	<script type="text/javascript" src="js/jquerysticky.js" charset="utf-8"></script>
	<script type="text/javascript" src="js/ammap.js"></script>
	<script type="text/javascript" src="js/indialow.js"></script>
	<script type="text/javascript" src="js/map.js"></script>

	<script type="text/javascript">
					jQuery(window).load(function(){

					$("#preloader").fadeOut("slow");

					});


	</script>
	
	
	
</body>

</html>