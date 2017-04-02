<?php
	
	session_start();

	$_SESSION['currentUrl']="assam/assam.php";
	$username="guest";
	if(isset($_SESSION['username']))
		$username=$_SESSION['username'];
	//echo "hii" .$username;
	
	if( strcmp($username , "guest" ) == 0)
			$l = "<li><i class=\"fa fa-user pull-left\" style=\"    padding-top: 20px;
    padding-left: 4px;\" aria-hidden=\"true\"></i><a href='../Login.php'>Login</a></li>";
	else
			$l = "<li><i class=\"fa fa-user pull-left\" style=\"    padding-top: 20px;
    padding-left: 4px;\" aria-hidden=\"true\"></i><a >".$username."</a>
	<ul>
												<li><a href=\" ../registerpages/updateProfile.php\" >Edit Profile</a></li>
												<li><a href=\" ../registerpages/FeedbackForm.php\"> give Feedback</a></li>
												<li><a href=\"../logout.php\">Logout</a></li>
											</ul>
	
	</li>";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>state</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/state.css">

</head>
<body>/



	<div class="hidden-block"></div>
	<div id="slider" class="slider" style="margin-top: -80px;">
        	<div class="home-slider" style="background-image: url('../img/assam_tea_fields.jpg');display:block;">
	        	<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt animated zoomIn">
							<h1 >
								ASSAM
							</h1>
							<h3>The Land of Red Rivers and Blue Hills</h3>	
							<a href="#main">start now</a>
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
        	<div class="home-slider" style="background-image: url('../img/assam_manas_national_park.jpg'); display:none;">
	        	<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt animated zoomIn">
							<h1>
								ASSAM
							</h1>
							<h3>The Land of Rich Heritage Sites</h3>	
							<a href="#main">start now</a>
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="home-slider" style="background-image: url('../img/assam_kaziranga.jpg'); display:none;">
				<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt animated zoomIn">
							<h1>
								ASSAM
							</h1>
							<h3>The Land of One Horned Rhinos</h3>	
							<a href="#main">start now</a>
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="home-slider" style="background-image: url('../img/23.jpg'); display:none;">
				<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt animated zoomIn">
							<h1>
								ASSAM
							</h1>
							<h3>The Land of Brahmaputra</h3>	
							<a href="#main">start now</a>
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="home-slider" style="background-image: url('../img/assam_bogibeel_bridge.jpg'); display:none;">
				<div class="whole">
	          		<div class="hometxt">
						<div class="left-arrow">
							<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
						</div>
						<div class="center-txt animated zoomIn">
							<h1>
								ASSAM
							</h1>
							<h3>The Land of Red Rivers and Blue Hills</h3>	
							<a href="#main">start now</a>
						</div>
						<div class="right-arrow">
							<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
	</div>

     <div class="main-nav">
      
		<header class="header-style">
				<div class="logo">
					<h1>
						<a href="#">Assam</a>
					</h1>
				</div>
				<div id="hornav" class="no-padding">
                	<div class="text-center visible-lg">
                         <div class="container header-menu">
							<nav class="list">
									<ul id="hornavmenu" class="nav navbar-nav">
										<li><a href="../main-page.php">HOME</a></li>

										<li><a> states</a>
											<ul>
                                        		<li>
                                            		<a href="../arunachal/arunachal.php">ARUNACHAL-PRADESH</a>
                                        		</li>
                                        		<li>
                                            		<a href="#">ASSAM</a>
                                        		</li>
                                        		<li >
                                            		<a href="../meghalay/meghalay.php">MEGHALAY</a>
                                            
                                       			 </li>
                                        		<li ><a href="../manipur/manipur.php">MANIPUR</a>

                                        		</li>
                                        		<li ><a href="../tripura/tripura.php">TRIPURA</a>
                                        		</li>
                                        		<li>
                                            		<a href="../sikkim/sikkim.php">    SIKKIM</a>
                                        		</li>
                                       			 <li>
                                            		<a href="../nagaland/nagaland.php">NAGALAND</a>
                                        		</li>
                                        		<li>
                                            		<a href="../mizoram/mizoram.php">MIZORAM</a>
                                        		</li>
                                            </ul>
								        </li>
										<li><a href="../registerpages/GuideSearch.php">Hire-Guide</a></li>
										<?php 
											if(!isset($_SESSION['username'])){
										?>
										<li><a href="#">registration</a>
											<ul>
												<li><a href="../registerpages/touristForm.php">Tourist register</a></li>
												<li><a href="../registerpages/guideRegister.php">Guide register</a></li>
												<li><a href="../registerpages/agencyRegister.php">Agency register</a></li>
												<li><a href="../registerpages/hotel-form.php">Hotel Register</a></li>
												<li><a href="../registerpages/Restaurant-form.php">Restaurant Register</a></li>
												<li><a href="../registerpages/local-rent.php">Local Accommodation Register</a></li> 
											</ul>
										</li>
										<?php }?>
										<li><a>booking</a>
											<ul>
												<li><a href="../hotel.php">Accomodation</a></li>
												<li><a href="../booking.php">Transport</a></li>
												<li><a href="../registerpages/AgencyDisplay.php">Travel package</a></li>
												<li><a href="../registerpages/local-rent-show.php"> Local Accommodation</a></li>
											</ul>
										</li>
										<li><a href="http://necouncil.gov.in/writereaddata/mainlinkfile/File206.pdf" target="_blank">contact</a></li>
										<li><a href="../aboutus.php">about us</a></li>
										<?php 
												echo $l;
												?>
												
										
									</ul>
								</nav>
						</div>
					</div>
				</div>
		</header>
		
	</div>
	<div class=" container slide line" id="main">
	
		<div class="text-center">
				<h1>
					About Assam.....
				</h1>
				<hr>
		</div>
		<div class="facts row">
			<div class="about-assam col-md-6">
				<img src="../img/1.jpg">
			</div>
			
			<div class="col-md-6 about-details">
				<div class="text-slider  animated fadeInLeft" style=" display:block;">
					<div class="whole">
				        <div class="hometxt">		
							<p>
								Assam is a state in northeastern India known for its wildlife, archeological sites and tea plantations. In the west, Guwahati, Assam&#39;s largest city, features silk bazaars and the hilltop Kamakhya Temple. Umananda Temple sits on Peacock Island in the Brahmaputra river. The state capital, Dispur, is a suburb of Guwahati. The ancient pilgrimage site of Hajo and Madan Kamdev, the ruins of a temple complex, lie nearby.<br>
								<br>
								Occupying 2.39% of Indias landmass, Assam is the most vibrant of eight states comprising the Northeast. Bounded by these states, West Bengal, Bhutan and Bangladesh, its topographical asymmetry is underscored by the Barail hill range sandwiched between two valleys &ndash; Brahmaputra and Barak &ndash; named after the dominant rivers.<br/><br>
							</p>
						`	<!-- <p>
								Green is the predominant colour of the state with an impressive 35% forest cover and thousands of hectares under tea cultivatation. Assam has five national parks including the World Heritage Sites of Kaziranga and Manas, and 20 Wildlife sanctuaries. The great Indian one-horned rhinocerous is one of Assam&#39; most famous denizens. 
							</p> -->
							<div class="arrow">
									<!-- <button onclick="setindex1(-1)"><i class="fa fa-angle-left"></i></button> -->
									<button onclick="setindex1(1)"><i class="fa fa-angle-right"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="text-slider  animated fadeInLeft" style=" display:none;">
					<div class="whole">
				        <div class="hometxt">		
							<p>
								Assam is a state in northeastern India known for its wildlife, archeological sites and tea plantations. In the west, Guwahati, Assam&#39;s largest city, features silk bazaars and the hilltop Kamakhya Temple. Umananda Temple sits on Peacock Island in the Brahmaputra river. The state capital, Dispur, is a suburb of Guwahati. The ancient pilgrimage site of Hajo and Madan Kamdev, the ruins of a temple complex, lie nearby.<br>
								Occupying 2.39% of Indias landmass, Assam is the most vibrant of eight states comprising the Northeast. Bounded by these states, West Bengal, Bhutan and Bangladesh, its topographical asymmetry is underscored by the Barail hill range sandwiched between two valleys – Brahmaputra and Barak – named after the dominant rivers.<br/>
							</p>
						`	<!-- <p>
								Green is the predominant colour of the state with an impressive 35% forest cover and thousands of hectares under tea cultivatation. Assam has five national parks including the World Heritage Sites of Kaziranga and Manas, and 20 Wildlife sanctuaries. The great Indian one-horned rhinocerous is one of Assam&#39; most famous denizens. 
							</p> -->
							<div class="arrow">
									<button onclick="setindex1(-1)"><i class="fa fa-angle-left"></i></button>
									<!-- <button onclick="setindex1(1)"><i class="fa fa-angle-right"></i></button> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fact-main line">
			<h2 class="text-center"> Facts About Assam</h2>
			<hr>
				<div class="fact-list">
					<ul>
						<li><b> Geographical Area:</b> 78,438 km<sup>2</sup></li>
						<li><b>Capital:</b> Dispur</li>
						<li><b>Largest City:</b> Guwahati</li>
						<li><b>Population:</b> 31169272 (2012)</li>
						<li><b>Governor:</b> Banwarilal Purohit</li>
						<li><b>Chief Minister:</b> Sarbananda Sonowal (BJP)</li>
						<li><b>Official animal:</b> Indian rhinoceros</li>
						<li><b>Colleges and Universities:</b> Krishna Kanta Handiqui State Open University, more</li>
						<li> <b>Literacy Rate:</b> 73.18 %</li>
						<li><b>Districts:</b> 34</li>
						<li>A fourth of India&#39;s oil reserves are located in the Assam-Arakan basin.</li>
						<li> The River Brahmaputra becomes as wide as 10 km while flowing through Assam. </li>
						<li>Assam can be called the Gateway to the Northeast because it is the only state connected to the Siliguri Corridor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  NH31.</li>
						<li>The Kaziranga National Park and Manas Wildlife Sanctuary of Assam are UNESCO World Heritage Sites.</li>
						<li>Assam is the second place in the world where petroleum was discovered.</li>
						<li>Dragons had a very special place in Assamese culture during the Ahom rule.</li>
						<li> Assam has a State Anthem.</li>
					</ul>
				</div>
		</div>
	</div>
	<div id="portfolio">
			<div class="container">
				<div class="portfolio line">
					<h2>More About Assam</h2>
					<hr>
			          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
			    </div>
			    <div class="row">
					<div class="col-md-4 folio-item">
						<div class="folio-img">
							<img src="../img/portfolio/1.jpg">
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
					               	<div class="folio-info">
					                   	<h3>History</h3>
					                   	<p>more information</p>
					               	</div>
						        	<div class="folio-overview">
						                    <span class="folio-link"><a class="folio-read-more" href="history.php" ><i class="fa fa-link"></i></a></span>
						                    </a></span>
						        	</div>
						       </div>
							</div>
						</div>
					</div>
					<div class="col-md-4 folio-item">
							<div class="folio-img">
								<img src="../img/portfolio/2.jpg">
							</div>
							<div class="overlay">
								<div class="overlay-content">
									<div class="overlay-text">
					                 	<div class="folio-info">
					                    	<h3>Accomodation</h3>
					                    	<p>more information</p>
					                	</div>
							        	<div class="folio-overview">
							                    <span class="folio-link"><a class="folio-read-more" href="../hotel.php" ><i class="fa fa-link"></i></a></span>
							                    
							        	</div>
							        </div>
							    </div>
							</div>
					</div>
					<div class="col-md-4 folio-item">
							<div class="folio-img">
								<img src="../img/portfolio/3.jpg">
							</div>
							<div class="overlay">
								<div class="overlay-content">
									<div class="overlay-text">
					                 	<div class="folio-info">
					                    	<h3>Tourism-spots</h3>
					                    	<p>more information</p>
					                	</div>
							        	<div class="folio-overview">
							                    <span class="folio-link"><a class="folio-read-more" href="../tourism-places.php" ><i class="fa fa-link"></i></a></span>
							                    
							        	</div>
							        </div>
							    </div>
							</div>
					</div>
					<div class="col-md-4 folio-item">
						<div class="folio-img">
							<img src="../img/portfolio/4.jpg">
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
				                 	<div class="folio-info">
				                    	<h3>Culture</h3>
				                    	<p>more information</p>
				                	</div>
						        	<div class="folio-overview">
						                    <span class="folio-link"><a class="folio-read-more" href="culture.php" ><i class="fa fa-link"></i></a></span>
						                    
						        	</div>
						        </div>
						    </div>
						</div>
					</div>
					<div class="col-md-4 folio-item">
						<div class="folio-img">
							<img src="../img/portfolio/5.jpg">
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
				                 	<div class="folio-info">
				                    	<h3>Festivals</h3>
				                    	<p>more information</p>
				                	</div>
						        	<div class="folio-overview">
						                    <span class="folio-link"><a class="folio-read-more" href="festivals.php" ><i class="fa fa-link"></i></a></span>
						                    
						        	</div>
						        </div>
						    </div>
						</div>
					</div>
					<div class="col-md-4 folio-item">
						<div class="folio-img">
							<img src="../img/portfolio/6.jpg">
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
				                 	<div class="folio-info">
				                    	<h3>Restaurants</h3>
				                    	<p>more information</p>
				                	</div>
						        	<div class="folio-overview">
						                    <span class="folio-link"><a class="folio-read-more" href="../registerpages/restaurant-display.php" ><i class="fa fa-link"></i></a></span>
						                    
						        	</div>
						        </div>
						    </div>
						</div>

					</div>
				</div>
			</div>
	</div>
	<div class=" container places line">

		<h2> well known places</h2>
		<hr>
		<p>	
			Synonymous with picturesque natural beauty, teeming wildlife, immaculate tea gardens, amazing river cruises, revered temples and warm, beautiful people, Assam is a mosaic of various cultures and religions. From pilgrimages, to wildlife safaris, to cruises on the mighty Brahmaputra, to visiting the vast tea gardens or Asia&#39; oldest refinery, Assam has much to offer.
		</p>
		<div class="row place">
			<div class="col-md-6 place-image">
				<img src="../img/assam_brahmaputra.jpg">
			</div>
			<div class="col-md-6 place-desc">
				<h2>
					River Brahmaputra
				</h2>
				<!-- <p>
					Among the largest rivers on earth in terms of discharge and sediment, Brahmaputra is intrinsic to the socio-cultural life in Assam. The river is Assam&#39;s lifeline, nurturing its topography and culture and sustaining major urban centres, including Guwahati, on its banks. </br></br>

					Brahmaputra has also been at the core of Assam&#39;s folklore, inspiring literature, art and music often for leaving behind a wave of destruction during the monsoon months. It was one of India’s major waterways until India’s partition and independence in 1947. The river today is used for ferrying passengers across and operating luxury cruises between Guwahati and Kaziranga. 
				</p>
				<div class="read-more">
					<a href="#">read more</a>
				</div> -->
				<div class="text-slider2  animated fadeInLeft" style=" display:block;">
					<div class="whole">
				        <div class="hometxt">		
							<p>
								Assam is a state in northeastern India known for its wildlife, archeological sites and tea plantations. In the west, Guwahati, Assam&#39;s largest city, features silk bazaars and the hilltop Kamakhya Temple. Umananda Temple sits on Peacock Island in the Brahmaputra river. The state capital, Dispur, is a suburb of Guwahati. The ancient pilgrimage site of Hajo and Madan Kamdev, the ruins of a temple complex, lie nearby.<br>
								<br>
								Occupying 2.39% of Indias landmass, Assam is the most vibrant of eight states comprising the Northeast. Bounded by these states, West Bengal, Bhutan and Bangladesh, its topographical asymmetry is underscored by the Barail hill range sandwiched between two valleys &ndash; Brahmaputra and Barak &ndash; named after the dominant rivers.<br/><br>
							</p>
						`	<!-- <p>
								Green is the predominant colour of the state with an impressive 35% forest cover and thousands of hectares under tea cultivatation. Assam has five national parks including the World Heritage Sites of Kaziranga and Manas, and 20 Wildlife sanctuaries. The great Indian one-horned rhinocerous is one of Assam&#39; most famous denizens. 
							</p> -->
							<div class="arrow">
									<button onclick="setindex2(-1)">Read more</button>
									
									<!-- <button onclick="setindex1(1)"><i class="fa fa-angle-right"></i></button> -->
							</div>
						</div>
					</div>
				</div>
				<div class="text-slider2  animated fadeInLeft" style=" display:none;">
					<div class="whole">
				        <div class="hometxt">		
						 <p>
							Among the largest rivers on earth in terms of discharge and sediment, Brahmaputra is intrinsic to the socio-cultural life in Assam. The river is Assam&#39;s lifeline, nurturing its topography and culture and sustaining major urban centres, including Guwahati, on its banks. </br></br>

							Brahmaputra has also been at the core of Assam&#39;s folklore, inspiring literature, art and music often for leaving behind a wave of destruction during the monsoon months. It was one of India’s major waterways until India’s partition and independence in 1947. The river today is used for ferrying passengers across and operating luxury cruises between Guwahati and Kaziranga. 
						</p>
							<!-- <p>
								Green is the predominant colour of the state with an impressive 35% forest cover and thousands of hectares under tea cultivatation. Assam has five national parks including the World Heritage Sites of Kaziranga and Manas, and 20 Wildlife sanctuaries. The great Indian one-horned rhinocerous is one of Assam&#39; most famous denizens. 
							</p> -->
							<div class="arrow">
									<button onclick="setindex2(1)">Back</button>
									
									<!-- <button onclick="setindex1(1)"><i class="fa fa-angle-right"></i></button> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row place">
			<div class="col-md-6 place-desc">
				<h2>
					Kaziranga National park
				</h2>
				<div class="text-slider3  animated fadeInLeft" style=" display:block;">
					<div class="whole">
				        <div class="hometxt">		
						 <p>
							Among the largest rivers on earth in terms of discharge and sediment, Brahmaputra is intrinsic to the socio-cultural life in Assam. The river is Assam&#39;s lifeline, nurturing its topography and culture and sustaining major urban centres, including Guwahati, on its banks. </br></br>

							Brahmaputra has also been at the core of Assam&#39;s folklore, inspiring literature, art and music often for leaving behind a wave of destruction during the monsoon months. It was one of India’s major waterways until India’s partition and independence in 1947. The river today is used for ferrying passengers across and operating luxury cruises between Guwahati and Kaziranga. 
						</p>
							<!-- <p>
								Green is the predominant colour of the state with an impressive 35% forest cover and thousands of hectares under tea cultivatation. Assam has five national parks including the World Heritage Sites of Kaziranga and Manas, and 20 Wildlife sanctuaries. The great Indian one-horned rhinocerous is one of Assam&#39; most famous denizens. 
							</p> -->
							<div class="arrow">
									<button onclick="setindex3(-1)">Read more</button>
									
									<!-- <button onclick="setindex1(1)"><i class="fa fa-angle-right"></i></button> -->
							</div>
						</div>
					</div>
				</div>
				<div class="text-slider3  animated fadeInLeft" style=" display:none;">
					<div class="whole">
				        <div class="hometxt">		
						 <p>
							Among the largest rivers on earth in terms of discharge and sediment, Brahmaputra is intrinsic to the socio-cultural life in Assam. The river is Assam&#39;s lifeline, nurturing its topography and culture and sustaining major urban centres, including Guwahati, on its banks. </br></br>

							Brahmaputra has also been at the core of Assam&#39;s folklore, inspiring literature, art and music often for leaving behind a wave of destruction during the monsoon months. It was one of India’s major waterways until India’s partition and independence in 1947. The river today is used for ferrying passengers across and operating luxury cruises between Guwahati and Kaziranga. 
						</p>
					
							<div class="arrow">
									<button onclick="setindex3(1)">Back</button>
									
									<!-- <button onclick="setindex1(1)"><i class="fa fa-angle-right"></i></button> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 place-image">
				<img src="../img/2.jpg">
			</div>
		</div>
	</div>
	<div class=" container peoples line text-center">
		<h2>Famous Personalities</h2>
		<hr>
		<div class="row people-list">
			<div class="col-md-2 people">
				<img src="../img/team/1.jpg">
				<div class="people-name">
					<h3>Arnab Goswami</h3>
					<h4>News Anchor</h4>
					<!-- <p>about him</p>		 -->
				</div>
			</div>
			<div class="col-md-2 people">
				<img src="../img/team/2.jpg">
				<div class="people-name">
					<h3>Jyoti Prasad Agarwala</h3>
					<h4>Playwright</h4>
					<!-- <p>about him</p>	 -->	
				</div>
			</div>
			<div class="col-md-2 people">
				<img src="../img/team/3.jpg">
				<div class="people-name">
					<h3>seema Biswas</h3>
					<h4>Film actress</h4>
					<!-- <p>about him</p>	 -->	
				</div>
			</div>
			<div class="col-md-2 people">
				<img src="../img/team/4.jpg">
				<div class="people-name">
					<h3>Manikongona Dutta</h3>
					<h4>Super Model</h4>
					<!-- <p>about him</p>	 -->	
				</div>
			</div>
			<div class="col-md-2 people">
				<img src="../img/team/5.jpg">
				<div class="people-name">
					<h3>Gomdhar Konwar</h3>
					<h4>First Freedom Fighter</h4>
					<!-- <p>about him</p>	 -->	
				</div>
			</div>
			<div class="col-md-2 people">
				<img src="../img/team/6.jpg">
				<div class="people-name">
					<h3>Dr. Bhupen Hazarika </h3>
					<h4>Singer</h4>
					<!-- <p>about him</p> -->		
				</div>
			</div>
		</div>
	</div>







    <footer class="quick-links container" style="background-color: rgba(0,0,0,0.7);  color: white;
  border-radius: 6px;
  padding: 42px 76px;
  margin-top: 10px;">
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
						
						<li> <a href="registerpages/guideRegister.php" class="fa fa-angle-right">Guide-register</a></li>
						<li> <a href="booking.php" class="fa fa-angle-right">Booking</a></li>
						<li> <a href="http://necouncil.gov.in/writereaddata/mainlinkfile/File206.pdf" target="_blank" class="fa fa-angle-right">ContactUs</a></li>
						<li> <a href="aboutus.php" class="fa fa-angle-right">AboutUs</a></li>
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
			<div class="counter col-md-5">
				<p>Total visits: <?php echo $cnt; ?></p>
			</div>
	</footer>





	<script src="../js/jquery.min.js"></script>
	<script src="../js/animate.js"></script>
	<script src="../js/main.js"></script>
	<script type="text/javascript">
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
	var index2 =1;
	function setindex2(n)
	{
		index2=index2+n;
		showbackground2(index2);
	}

	function showbackground2(n)
	{
		var i;
		var j=document.getElementsByClassName("text-slider2");
		if(n>j.length){ index2=1;}
		if(n<1){ index2=j.length}
			for(i=0;i<j.length;i++)
			{
				j[i].style.display="none";
				
			}
			j[index2-1].style.display="block";

	}
	var index3 =1;
	function setindex3(n)
	{
		index3=index3+n;
		showbackground3(index3);
	}

	function showbackground3(n)
	{
		var i;
		var j=document.getElementsByClassName("text-slider3");
		if(n>j.length){ index3=1;}
		if(n<1){ index3=j.length}
			for(i=0;i<j.length;i++)
			{
				j[i].style.display="none";
				
			}
			j[index3-1].style.display="block";

	}
	// window.onload = function() {
	//   document.getElementById('slider').className = 'rollIn';
	// };

</script>
</body>
</html>