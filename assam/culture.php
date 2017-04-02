<?php
  
  session_start();

  $_SESSION['currentUrl']="culture.php";
  $_SESSION['heading']="Culture";
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> culture	</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/culture.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
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
?>
    <div class="container culture">
    	<div class="desc">
	        	<div class="home-slider" style="background-image: url('../img/123.jpg'); display:block;">
		        	<div class="whole">
		          		<div class="hometxt">
							<div class="left-arrow">
								<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
							</div>
							<div class="right-arrow" style="margin-left: 1006px">
								<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
							</div>
						</div>
					</div>
				</div>
	        	<div class="home-slider" style="background-image: url('../img/assam_bihu.jpg'); display:none;">
		        	<div class="whole">
		          		<div class="hometxt">
							<div class="left-arrow">
								<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
							</div>
							<div class="right-arrow" style="margin-left: 1006px">
								<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="home-slider" style="background-image: url('../img/women.jpg'); display:none;">
					<div class="whole">
		          		<div class="hometxt">
							<div class="left-arrow">
								<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
							</div>
							<div class="right-arrow" style="margin-left: 1006px">
								<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="home-slider" style="background-image: url('../img/5.jpg'); display:none;">
					<div class="whole">
		          		<div class="hometxt">
							<div class="left-arrow">
								<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
							</div>
							<div class="right-arrow" style="margin-left: 1006px">
								<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="home-slider" style="background-image: url('../img/2 (1).jpg'); display:none;">
					<div class="whole">
		          		<div class="hometxt">
							<div class="left-arrow">
								<button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
							</div>
							<div class="right-arrow" style="margin-left: 1006px">
								<button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
							</div>
						</div>
					</div>
				</div>
    		<p>
    			Many South, Eastern and Southeast Asian communities have settled in Assam over the centuries. But civilisation in the region did not necessarily begin with the fertile Brahmaputra Valley. Discoveries of stone implements and pottery reveal the existence of prehistoric communities on the highlands encircling the valley. 
				Anthropological accounts say Assam’s demography is marked by several waves of migration. Australoids, the first inhabitants, were absorbed or dispersed by the Mongoloids that ancient Sanskrit literature term as Kirats. The Caucasoids followed, and their four categories – Mediterranean, Alpine, Indo-Aryan and Irano-Scythian – settled in the valleys.
    		</p>
    		<div class="btn btn-primary" style="float: right; margin: 10px;">read more</div>
		</div>


		<div id="portfolio">
				<div class="container">
					<div class="portfolio line">
						<h2 class="animated zoomIn">Culture of Assam</h2>
						<hr>
				          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
				    </div>
				    <div class="row">
						<div class="col-md-4 folio-item">
							<div class="folio-img">
								<img src="../img/2 (2).jpg">
							</div>
							<div class="overlay">
								<div class="overlay-content">
									<div class="overlay-text">
						               	<div class="folio-info">
						                   	<h3>Dance</h3>
						                   	<p>more information</p>
						               	</div>
							        	<div class="folio-overview">
							                    <span class="folio-link"><a class="folio-read-more" href="#dance" ><i class="fa fa-link"></i></a></span>
							                    
							        	</div>
							       </div>
								</div>
							</div>
						</div>
						<div class="col-md-4 folio-item">
								<div class="folio-img">
									<img src="../img/music.png">
								</div>
								<div class="overlay">
									<div class="overlay-content">
										<div class="overlay-text">
						                 	<div class="folio-info">
						                    	<h3>Music</h3>
						                    	<p>more information</p>
						                	</div>
								        	<div class="folio-overview">
								                    <span class="folio-link"><a class="folio-read-more" href="#music" ><i class="fa fa-link"></i></a></span>
								                    
								        	</div>
								        </div>
								    </div>
								</div>
						</div>
						<div class="col-md-4 folio-item">
								<div class="folio-img">
									<img src="../img/women.jpg">
								</div>
								<div class="overlay">
									<div class="overlay-content">
										<div class="overlay-text">
						                 	<div class="folio-info">
						                    	<h3>Dress</h3>
						                    	<p>more information</p>
						                	</div>
								        	<div class="folio-overview">
								                    <span class="folio-link"><a class="folio-read-more" href="#dress" ><i class="fa fa-link"></i></a></span>
								                    
								        	</div>
								        </div>
								    </div>
								</div>
						</div>
						<div class="col-md-4 folio-item">
							<div class="folio-img">
								<img src="../img/cuisine.png">
							</div>
							<div class="overlay">
								<div class="overlay-content">
									<div class="overlay-text">
					                 	<div class="folio-info">
					                    	<h3>Cuisine(food)</h3>
					                    	<p>more information</p>
					                	</div>
							        	<div class="folio-overview">
							                    <span class="folio-link"><a class="folio-read-more" href="#food" ><i class="fa fa-link"></i></a></span>
							                    
							        	</div>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-md-4 folio-item">
							<div class="folio-img">
								<img src="../img/wood.jpg">
							</div>
							<div class="overlay">
								<div class="overlay-content">
									<div class="overlay-text">
					                 	<div class="folio-info">
					                    	<h3>Arts & Crafts</h3>
					                    	<p>more information</p>
					                	</div>
							        	<div class="folio-overview">
							                    <span class="folio-link"><a class="folio-read-more" href="#arts" ><i class="fa fa-link"></i></a></span>
							                    
							        	</div>
							        </div>
							    </div>
							</div>
						</div>
						<!-- <div class="col-md-4 folio-item">
							<div class="folio-../img">
								<../img src="portfolio/6.jpg">
							</div>
							<div class="overlay">
								<div class="overlay-content">
									<div class="overlay-text">
					                 	<div class="folio-info">
					                    	<h3></h3>
					                    	<p>more information</p>
					                	</div>
							        	<div class="folio-overview">
							                    <span class="folio-link"><a class="folio-read-more" href="#" ><i class="fa fa-link"></i></a></span>
							                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg"><i class="fa fa-search-plus"></i></a></span>
							        	</div>
							        </div>
							    </div>
							</div>

						 </div>-->
					</div>
				</div>
		</div>

		<div class="dance text-center" id="dance">
			<div class="row line">
				<h2> Dances of Assam </h2>
				<hr>
				<p>	
					Ancient texts and temple sculptures in Assam point to a history of dancing tradition. Devadasi, Ojapali and Satriya are major styles of dancing of Assam. Satriya, developed by Sankardeva and born in the Vaishnav monasteries, has the classical tag. Like elsewhere in India, Devadasi – deva-nati or nati nas in Assamese – is a ritualistic temple dance that used to be performed by unmarried women who surrendered their lives to the presiding deity. 

					Ojapali, a choral performance, survived the vicissitudes of time unlike Devadasi. Here the oja or lead dancer narrates a mythological story in a mix of music, dance and acting. Ojapali is of three types – biyah-gowa that generally presents Mahabharata stories with rhythmic use of feet and cymbals, sukananni associated with the worship of snake goddess Manasa, and ramayani is based on the Assamese versions of Ramayana.
				</p>
				<a href="#">read more</a>
				<div class="dance-data">
					<div class="col-md-4 dance-img">
						<img src="../img/1.jpg">
						<h3>bodo dance</h3>
					</div>
					<div class="col-md-8 dance-detail">
					<h3>BODO DANCES</h3>
					<hr>
						<p>
							Some of the important dances of the Bodos are associated with the Kherai Puja festivals and are ritualistic in nature. The samanastic dances are performed by the deodhani (female shaman) in a state of trance, often with vigorous movements of the head, tossing and swinging the disheveled hair.Similar deodhani dances are in vogue among other tribal groups and also sections of the non-tribals. A most graceful and captivating dance of the Bodos is the famous Bagurumba dance.<br><br> &nbsp; &nbsp;In this dance full of rhythm and vivacity, the dancers hop and swing, bend and unbend, and at times give the impression of fluttering butterflies. Various dances are performed on the Rabha Baikhu and Pharkanti festivals. In some of these dances performed by mixed groups of boys and girls, the dancers carry swords and shields, and in some others, peculiar wood and bamboo musical instruments with toy figures of birds that are made to flap their wings with the beating of the time.	
						</p>
					</div>
				</div>
			</div>
			<div class="row line">
				<div class="dance-data">
					<div class="col-md-8 dance-detail">
					<h3>MISHING DANCES</h3>
					<hr>
						<p>
							The best Mishing dances form integral parts of the two major Mishing festivals- Ali-Ai-Ligang, and Po-rag. Hunting, fishing, arrow shooting, rowing, weaving, transplanting and harvesting etc. are artistically depicted in the Ali-Ai-Ligang dances in which all people — men and women, young and old, married and single — dance in rows and circles. In Po-rag, there takes place lively and friendly competition in dancing and drumming.
						</p>
					</div>
					<div class="col-md-4 dance-img">
						<img src="../img/mis.jpg">
					</div>
				</div>
			</div>
			<div class="row line">
				<div class="dance-data">
					<div class="col-md-4 dance-img">
						<img src="../img/karbi.jpg">
					</div>
					<div class="col-md-8 dance-detail">
					<h3>KARBI DANCES</h3>
					<hr>
						<p>
						Of the many folk dances of the Karbis, perhaps the most important are those of a ritualistic nature centering round the elaborate death ceremonyChomangkan, to the accompaniment of pongi(flute), chang(drum) and other instruments. Banjar kekan is a hilarious all male dance in which specially decorated bamboo poles figure prominently. In Nimso-kerang dance, the contents of the accompanying songs are highly erotic. In the dance, while the young men hold shields and sticks in their hands, the girls dance with their heads covered with black scarves. Hachcha-kekan is another boisterous group dance performed on the occasion of the harvest festival. The plains karbis have a different set of songs and dances, one of the most spectacular involving the stepping in and out of spaces between bamboo poles held and moved rhythmically on the ground.

						</p>
					</div>
				</div>
			</div>
			<div class="line">
					<div class="other-dance">
						<h3>TIWA DANCES</h3>
						<hr>
							<p>
							While the hill Tiwas have some impressive dances connected with the Sagra-misawa, Wan-sawa and Langkhun Puja ceremonies, the most interesting dances of the plains Tiwas are adjuncts of the Barat-puja ceremony, featuring the use of a peculiar musical instrument called sarai-lau and of masks representing various gods and animals.
							</p>
						<h3>DIMASA DANCES</h3>
						<hr>
							<p>
							The Dimasas of Dima Hsao (formerly N.C.Hills) district have ritualistic dances performed in ceremonies like Rajini Gabra and Harni Gabra in which the oracle takes part in a state of possession. The group dance of boys and girls in the harvest festival Busu has most interesting rhythmic and choreographic patterns fitted to the haunting music of the peculiar Dimasa pipe called muri.
							</p>
						<h3>OTHER DANCES</h3>
						<hr>
							<p>
							The other tribal dances associated with harvesting, hunting or rituals include Sagra-mi-sawa of the Tiwas; Darlam, Partumlam, Faifitlam and Fahrel Tuklam (bamboo dance) of the Hmars; Jangshalam, Malkanglam and Longlam of the Kukis; Bhailam, Jhilam and Darlam of the Hrangkhals; Jakhamara and Lewatana of the Hajongs, Boka Bihu of Thengal Kacharis; Ka-pai, Ka-pan and Ka-yon-kong of the Tai Phakes; Bahuwa of the Sonowal Kacharis; and Gikhin-gumdin Manau and Thangka Manau of the Singphos. 
							<br>
							The folk dance list isn&#39;t complete without the Jhumur performed by the Adivasis. Emanating from the tea estates, this is a synchronised dance of boys and girls to the sounds of drums and flute. The Kushan-gan of Goalpara district, depicting mythological stories, also deserves a mention.
							</p>
					</div>	
			</div>
		</div>

		<div class="music text-center dance" id="music">
			<div class="line">
				<h2> Music of Assam </h2>
					<hr>
					<p>
						
								Classical Assamese music is divided into Borgeet and Ojapali that were preceded by folksongs and ballads such as Bihugeet (for pastoral festivals), Bongeet (for nature-worship), Naworiageet (boatman&#39;s song), Biyanaam (marriage song) and Nichukonigeet (cradle song). While these songs were documentary in character and without symbolism, Dehbisaror Geet had a pronounced spiritual bias, thus presumed to have been inspired by Vaishnavism. 
								
								The Islamic counterpart of Dehbisaror Geet was Zikir or spiritual chants composed by Ajan Fakir underscoring the futility of life and manmade institutions.
					</p>
					<img src="../img/music.png">
					<div class="row music-data">
						<div class="col-md-8 music-detail">
							<p>
								These songs flourished alongside tribal music that had traces of East or Southeast Asian influence. The basic characteristic that makes ethnic music of Assam stand out is its descending scale unlike raga-based and folk music in India. <br><br>

								Oja-Pali is a very old performing art form of Assam, which combines narrative singing with dancing and dramatic interludes. The music of Oja-pali has a raga system of clear classical orientation, and the concerned dance recalls classical movements, postures and hand-gestures. The classical elements are more pronounced in the Vaishnavite variety of Oja-pali than in the Sakta variety
							</p>
						</div>
						<div class="col-md-4">
							<img src="../img/folk.jpg">
						</div>
					</div>
					<div class="row music-data">
						<div class="col-md-4">
							<img src="../img/download (3).jpg">
						</div>
						<div class="col-md-8 music-detail">
							<p>
							Some of the best treasures of Assamese performing arts are associated with the neo-Vaishnavite heritage and best preserved in the Satras, First, there are the Vaishnavite musical forms of which the most remarkable is a classical genre with distinctive system of ragas and talits introduced bv the great Sankardeva.
							<br><br>
							 This genre is represented by bargits - literally meaning great songs, which are highly refined devotional compositions and natar gits or songs incorporated in dramas. Also worthy of mention is the satriya dance, so called because its association with the satras, which has all the ingredients of an Indian classical dance and which has gained national recognition.
							</p>
						</div>
					</div>
					<div class="row music-data">
						<div class="col-md-8 music-detail">
							<p>
							Then there is the Bhaona, the Vaishnava dramatic performance, which owes its genesis to the dramas written and produced by Sankardeva with great originality, and which is the Assamese cognate of the Yaksha-gana of Karnataka, the Kathakali of Kerala, the Bhagavatamela of Andhra Pradesh and the Ramleela and Rashleela of Uttar Pradesh.
							<br><br>
							The ideal type of Bhona is the Ankiya Bhaona involving the performance of a play composed by Sankardeva or Madhavadeva, clearly reminiscent of the orthodox Sanskrit drama tradition. But ordinary performances have more of down-to-earth characteristics and often verge on the folk. While the Oja-pali art form also contains dramatic elements, much of these are folk nature. The Dhulias of the Kamrup region are parties of drummers who, apart from providing music on auspicious and festive occasions, perform spectacular acrobatic feats over and above, present dramatic skits saturated with wit, humour and sarcasm of a rough and ready nature. Kushan-gan and Bhari-gan are two popular folk drama forms of the Goalpara region.
							</p>
						</div>
						<div class="col-md-4">
							<img src="../img/download (4).jpg">
						</div>
					</div>
			</div>
		</div>

		<div class="dress dance text-center" id="dress">
			<div class="line">
				<h2>Dress</h2>
				<hr>
				<img src="../img/dress.png">
				<p>	
					Women in Assam swear by the motif-rich mekhela chador, a two-piece garment. Mekhela is the skirt-like lower part and chador the upper part draped with pleats. Traditionally, made either from muga or paat, the attire has adapted itself to a limitless variety of weaves.
					Assam traditional costumes have a long traditional history, the dresses of Assam are Silk Fiber or Muga and very famous for its design and style. In Assam state, most of the women prefer to wear the traditional costume ‘Muga’ or ‘Mekhela Chadar’. The designs are very beautiful to see and used ‘Eri’ and ‘Paat’ to weave the cloth. ‘Eri’  used to create winter clothing particularly shawls and ‘Paat’ used for ‘Mekhela Chadar’. Both dresses bring the attraction to the women. 
				</p>
				<div class="row dress-data">
					<div class="col-md-4 dress-img">
						<img src="../img/women.jpg">
						<figcaption>Especially the Silk saris of Assam are very popular and demand in India. The saris have fine delicate designs and rich patterns, made of fine woven. Embroideries are used to bring richness to the cloth. The state produces the hub silk, which has a number of silks like Eri, White Pat and Golden Murga.</figcaption>
					</div>
					<div class="col-md-4 dress-img">
						<img src="../img/men.png">
						<figcaption>The traditional attire of the Assamese people is Dhoti-Kurta for men
						It is a unique concoction of Lungi and Aanchal. Muga silk is now extensively used in the manufacturing process of this traditional costume for Assamese men.</figcaption>
					</div>
					<div class="col-md-4 dress-img">
						<img src="../img/morden.jpg"> 
						<div class="fig">	
							<figcaption>western dresses have flooded the young minds and hearts of Assam, which are creating an impact on the traditional wear as well. The silky essence of this complete traditional wear has traveled places and has uplifted its essence with more variations in colors, textures and quality.</figcaption>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="food dance text-center" id="food">
			<div class="line">
				<h2>Cuisine(Food)</h2>
				<hr>
					<img src="../img/cuisine.png">
						<p>
							Simplicity and the variety of ingredients used is the speciality of Assamese cuisine. Assamese dishes are less spicy than any other Indian dishes, but carry richness of taste and health. Versatility of the Assamese cuisine is very wide. Assamese cuisine is generally low on oil and spices baring a few special dishes, but exotic herbs often impart strong flavour.
							<br><br>
							Assamese are by and large non-vegetarian. Assam's staple diet is rice with interestingly cooked fish and meat dishes. However, vegetarian food is abundantly available. Jain food can be specially ordered.
							Assamese also relish 'khar' (a dish seasoned with alkali). A woman’s culinary skill depends on how well she cooks 'khar'. Sweets are made during the festivals. They are usually made of rice paste. 'Pitha' is a paper-thin pancake stuffed with sweet coconut paste or sweet black sesame seed paste.
						</p>
						<div class="btn btn-primary" style="float:right;">read more</div>
				<div class="row food-data">
				<h2>
					Famous Food
				</h2>
				<hr>
					<div class="col-md-4 food-img">
						<img src="../img/khaar.jpg">
						<div class="food-dish">
						<h3>
							Khaar <br><h4>an assamese meat delicacy</h4>
						</h3>
						</div>
					</div>
					<div class="col-md-4 food-img">
						<img src="../img/duck.jpg">
						<div class="food-dish">
							<h3>
								Duck meat curry <br><h4> assamese food delicacy</h4>
							</h3>
						</div>
					</div>
					<div class="col-md-4 food-img">
						<img src="../img/masor.jpg">
						<div class="food-dish">
							<h3>
								Maasor tenga <br><h4>tangy fish curry</h4>
							</h3>
						</div>
					</div>
					<div class="col-md-4 food-img">
						<img src="../img/allopitika.jpg">
						<div class="food-dish">
						<h3>
							aloo pitika <br><h4>comfort food of assam</h4>
						</h3>
						</div>
					</div>
					<div class="col-md-4 food-img">
						<img src="../img/4.jpg">
						<div class="food-dish">
						<h3>
							Paro Manxho(pigon meat) <br><h4> A traditional delicacy of Assam</h4>
						</h3>
						</div>
					</div>
					<div class="col-md-4 food-img">
						<img src="../img/pitha.jpg">
						<div class="food-dish">
						<h3>
							Pitha <br><h4> Home cooked Sweet dishes of Assam</h4>
						</h3>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="arts dance text-center" id="arts">
			<div class="line">
				<h2>Arts & Crafs</h2>
				<hr>
				<p>
					The people of Assam have traditionally been craftsmen from time immemorial. Though Assam is mostly known for its exquisite silks and the bamboo and cane products, several other crafts are also made here. Different regions of Assam are known for their different forms of art and handicrafts.
					 There have been variations in the weaving skills, but despite this, the technology of production has not changed much. The conventional modes of manufacturing are still very much in use. In order to improve the standards of the handicraft industry of Assam, the government has established the Assam Art and Craft society (1971) in Guwahati. Through it, regular research and conferences are conducted, to further the efforts of the craftsmen.
				</p>
				<div class="arts-data">
					<div class="row line">
						<div class="dance-data">
							<div class="col-md-8 dance-detail">
							<h3>Cane & Bamboo Arts</h3>
							<hr>
								<p>
								Cane and bamboo have remained inseparable parts of life in Assam. Grown in abundance here and hence most of the household articles in the homes of Assamese are made of cane and bamboo. They happen to be the two most commonly-used items in daily life, ranging from household implements to construction of dwelling houses to furniture to weaving accessories to musical instruments.
								<br><br>
								The Jappi, the traditional sunshade continues to be the most prestigious of bamboo items of the state, and it has been in use since the days when the great Chinese traveller Hiuen Tsang came to Assam that visitors are welcomed with a jaapi.
								</p>
							</div>
							<div class="col-md-4 dance-img">
								<img src="../img/cane.jpg">
							</div>
						</div>
					</div>

					<div class="row line">
						<div class="dance-data">
							<div class="col-md-4 dance-img">
								<img src="../img/metal.jpg">
							</div>
							<div class="col-md-8 dance-detail">
							<h3>Metal Crafts</h3>
							<hr>
								<p>
								Bell-metal and brass have been the most commonly used metals for the Assamese artisan. Traditional utensils and fancy artiicles designed by these artisans are found in every Assamese household. The Xorai and bota have in use for centuries, to offer betel-nut and paan while welcoming distinguished guests.

								The entire population of two townships near Guwahati - Hajo and Sarthebari, are engaged in producing traditional bell-metal and brass articles. They have also used their innovative skills to design modern day articles to compete with the changing times.

								Gold, silver and copper too form a part of traditional metal craft in Assam and the State Museum in Guwahati has a rich collection of items made of these metals. Gold however is now used only for ornaments.
								</p>
							</div>
						</div>
					</div>

					<div class="row line">
						<div class="dance-data">
							<div class="col-md-8 dance-detail">
							<h3>Wood Craft</h3>
							<hr>
								<p>
								Assam has always remained one of the most forest-covered states of the country, and the variety of wood and timber available here have formed a part of the people's culture and ecomony.

								An Assamese can identify the timber by touching it even in darkness, and can produce a series of items from it. While decorative panels in the royal Ahom palaces of the past and the 600-years old satras or Vaishnative monasteries are intricately carved on wood, a special class of people who excelled in wood carving came to be known as Khanikar, a surname proudly passed down from generation to generation.

								The various articles in a satra and naam-ghar(place of worship) are stiff cut on wood, depicting the guru asana (pedestal of the lords), apart from various kinds of birds and animals figuring in mythology.

								Modern-day Khanikar have taken to producing articles of commercial values, including figures of one-horned rhino and replicas of the world-famous Kamakhya temple - two items heading the list of demands of a visitor from outside.
								</p>
							</div>
							<div class="col-md-4 dance-img">
								<img src="../img/wood.jpg">
							</div>
						</div>
					</div>

					<div class="row line">
						<div class="dance-data">
							<div class="col-md-4 dance-img">
								<img src="../img/Jewellery.jpg">
							</div>
							<div class="col-md-8 dance-detail">
							<h3>Jewellery</h3>
							<hr>
								<p>
								Gold-washing and jewellery-making were two important ancient industries in Assam. The earliest references to the golden art are found in the Arthashastra, but jewellery-making on an elaborate scale happened during the Ahom reign. Goldsmiths and gold traders flourished in Kamrup, Goalpara, Barpeta and Sivasagar but Jorhat town and outlying areas became the nerve centre of the gold and silver craft for superior enamelling work known as minakari in Assamese.
								Dark blue, dark green and white were the preferred enamelling, but red and yellow were used occasionally. Crafting traditional Assamese ornaments is a painstaking process but the end products are a breathtaking range of ornaments. Necklaces carry names like Jonbiri, Dholbiri and Dugdugi while Lokaparo, Thuria and Dighal Keru are popular ear-rings. The rings have names like Patia Angathi and Babari Phulia Angathi while a variety of bracelets include Gam Kharu, Baju and Kangkan.
								</p>
							</div>
						</div>
					</div>

					<div class="row line">
						<div class="dance-data">
							<div class="col-md-8 dance-detail">
							<h3>Terracotta</h3>
							<hr>
								<p>
								Two categories of people – Kumars and Hiras – made pottery their own. But the ones that carved out a niche are the terra cotta craftsmen of Asarikandi in Dhubri district. The distinctive style has made Asarikandi an ethnic art brand in India. Asarikandi is also known for its sola pith craft, made from the soft core of a special kind of reed.
								Terracotta as a medium has dominated the handicraft scene of Assam since time immemorial. The tradition itself has been handed down from the generation to generation without break. Today we have the descendent of such families engaged in improvised terracotta versions of various common figures of gods and goddesses to mythological characters, while toys, vases, etc have also found a new life.
								</p>
							</div>
							<div class="col-md-4 dance-img">
								<img src="../img/terecotta.jpg">
							</div>
						</div>
					</div>

					<div class="row line">
						<div class="dance-data">
							<div class="col-md-4 dance-img">
								<img src="../img/painting.jpg">
							</div>
							<div class="col-md-8 dance-detail">
							<h3>Traditional Paintings</h3>
							<hr>
								<p>
								The tradition of paintings in Assam can be traced back to several centuries in the past. Ahom palaces and satras and naam-ghar etc still abound in brightly-coloured paintings depicting various stories and events from history and mythology. In fact, the motifs and designs contained in Chitra-Bhagavata have come to become a traditional style for Assamese painters of the later period, and are still in practice today.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
    </div>
    
</body>
</html>