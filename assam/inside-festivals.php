<?php
  
  session_start();

  $_SESSION['currentUrl']="inside-festivals.php";
  $_SESSION['heading']="festivals";
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Festivals</title>
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link href="../css/inside-festivals.css" rel="stylesheet">

	
</head>
<body>



            <?php
                 include 'header.php';
            ?>

    <div class="container" >
            <div class="music text-center dance" id="music">
            <div class="line">
                <h2> Festival </h2>
                    <hr>
                    

                    <div class="slider">
                        <div class="home-slider" style="background-image: url('../img/karbi.jpg');display:block;">
                            <div class="whole">
                                <div class="hometxt">
                                    <div class="left-arrow">
                                        <button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
                                    </div>
                                    <div class="center-txt">
                                            
                                    </div>
                                    <div class="right-arrow">
                                        <button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-slider" style="background-image: url('../img/karbi.jpg'); display:none;">
                            <div class="whole">
                                <div class="hometxt">
                                    <div class="left-arrow">
                                        <button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
                                    </div>
                                    <div class="center-txt">
                                        
                                    </div>
                                    <div class="right-arrow">
                                        <button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-slider" style="background-image: url('../img/karbi.jpg'); display:none;">
                            <div class="whole">
                                <div class="hometxt">
                                    <div class="left-arrow">
                                        <button onclick="setindex(-1)"><i class="fa fa-angle-left"></i></button>
                                    </div>
                                    <div class="center-txt">
                                        
                                    </div>
                                    <div class="right-arrow">
                                        <button onclick="setindex(1)"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                    <p>
                        
                                Classical Assamese music is divided into Borgeet and Ojapali that were preceded by folksongs and ballads such as Bihugeet (for pastoral festivals), Bongeet (for nature-worship), Naworiageet (boatman&#39;s song), Biyanaam (marriage song) and Nichukonigeet (cradle song). While these songs were documentary in character and without symbolism, Dehbisaror Geet had a pronounced spiritual bias, thus presumed to have been inspired by Vaishnavism. 
                                
                                The Islamic counterpart of Dehbisaror Geet was Zikir or spiritual chants composed by Ajan Fakir underscoring the futility of life and manmade institutions.
                    </p>


                    <p>
                        
                                Classical Assamese music is divided into Borgeet and Ojapali that were preceded by folksongs and ballads such as Bihugeet (for pastoral festivals), Bongeet (for nature-worship), Naworiageet (boatman&#39;s song), Biyanaam (marriage song) and Nichukonigeet (cradle song). While these songs were documentary in character and without symbolism, Dehbisaror Geet had a pronounced spiritual bias, thus presumed to have been inspired by Vaishnavism. 
                                
                                The Islamic counterpart of Dehbisaror Geet was Zikir or spiritual chants composed by Ajan Fakir underscoring the futility of life and manmade institutions.
                    </p>

                    
            </div>
        </div>


    </div>


    <?php
         include '../footer.php';
    ?>







    <script type="text/javascript" src="../js/jquery.min.js"></script>
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
    </script>


</body>
</html>