<?php
  
  session_start();

  $_SESSION['currentUrl']="booking.php";
  $_SESSION['heading']="Booking";
  
 ?>
<?php 
    include_once "breadcrumbs.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/map.css">
  <link rel="stylesheet" type="text/css" href="css/booking.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/jquery-ui.min.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="js/jquery-ui.min.js"></script>
  <script>
  $(document).ready( function() {
    $( ".date >   #datepicker" ).datepicker(
      {dateFormat:"yy-mm-dd",
      minDate:0     
      });
  } );
  $(document).ready( function() {
    $( ".date >   #datepicker2" ).datepicker(
      {dateFormat:"yy-mm-dd",
      minDate:0     
      });
  } );



  $(document).ready( function() {
    $( ".date-train >   #datepicker3" ).datepicker(
      {dateFormat:"dd-mm-yy",
      minDate:0     
      });
  } );


</script>
<script type="text/javascript">
  $(document).ready(
    function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(".search-box  .result");       
        if(inputVal.length){
            $.get("apis/searching/searchcity.php", {q: inputVal}).done(function(data){
                // Display the returned data in browser
                        $(".search-box .result").removeClass("hidden");
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    })});



    // Set search input value on click of result item
    $(document).on("click", ".search-box .result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());

        $(this).parent(".result").empty();
    });
  
    $(document).ready(
    function(){
        $('.search-box-1 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(".search-box-1 .result");       
        if(inputVal.length){
            $.get("apis/searching/searchcity.php", {q: inputVal}).done(function(data){
                // Display the returned data in browser
                $(".search-box-1 .result").removeClass("hidden");
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    })});

    



    // Set search input value on click of result item
    $(document).on("click", ".search-box-1 .result p", function(){
        $(this).parents(".search-box-1").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
</script>
<script type="text/javascript">
    $(document).ready(
    function(){
        $('.search-box-2 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(".search-box-2 .result"); 

              
        if(inputVal.length){
            $.get("apis/searching/traincity.php", {q: inputVal}).done(function(data){
                // Display the returned data in browser
                $(".search-box-2 .result").removeClass("hidden");
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    })});
    // Set search input value on click of result item
    $(document).on("click", ".search-box-2 .result p", function(){
        $(this).parents(".search-box-2").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
  </script>

    <script type="text/javascript">
        $(document).ready(
        function(){
            $('.search-box-3 input[type="text"]').on("keyup input", function(){
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(".search-box-3 .result"); 

                  
            if(inputVal.length){
                $.get("apis/searching/traincity.php", {q: inputVal}).done(function(data){
                    // Display the returned data in browser
                    $(".search-box-3 .result").removeClass("hidden");
                    resultDropdown.html(data);
                });
            } else{
                resultDropdown.empty();
            }
        })});
        // Set search input value on click of result item
        $(document).on("click", ".search-box-3 .result p", function(){
            $(this).parents(".search-box-3").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
      </script>



</head>
<body>







  <div id="myBtn" class="floating">
      <img src="img/ico/map-white.svg" height="40px" width="40px" style="color: white;">
  </div>

  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content text-center">
          <h3 style="text-align: center;
                 display: inline-block;
                 top: auto;
                  color: #1fa3dd;
                  text-shadow: 0px 0px 20px rgba(0,0,0,.2);
                  font-size: 45px;
                  left: inherit;">North-East India</h3>
          <span class="close">&times;</span>

          <div id="map" style="width: 100%; height: 580px;"></div>
    </div>

  </div>
  <?php
       include 'header.php';
  ?>

  <p style="margin-left: 50px; padding-top: 100px;"><?= breadcrumbs() ?></p>


  <div class="ft text-center">
          <a href="#" class="flight"><div class="active"><img src="img/ico/plane.png" style="height: 24px;margin-right: 6px;width: 24px;">Flight</div>
          </a>
          <a href="#" class="train">
              <div><img src="img/ico/train.png" style="height: 20px;width: 20px;margin-right: 6px;">Train</div>
          </a>
  </div>

<div class="hidden">
  <div class="container1">
      <form id="flight" autocomplete="off">
          <div class="triptype">

              <input type="radio" name="triptype" value="oneway" id="oneway" checked>
              <label for="oneway">One Way</label>
              <input type="radio" name="triptype" value="twoway" id="twoway" >
              <label for="twoway">Round Trip</label>
          </div>
          <div class="input-group" id="text">
            <span class="input-group-addon" id="sizing-addon2">From</span>
          <div class="search-box">
            <input type="text" class="form-control" placeholder="Enter place name " aria-describedby="sizing-addon2" name="source">
             <div class="result hidden"></div>
             </div>
          </div>
          <button class="pull-right scout" form="flight" type="submit"><i class="glyphicon glyphicon-search"></i></button>

          <div class="input-group" id="text">
            <span class="input-group-addon" id="sizing-addon2">To</span>
            <div class="search-box-1">
            <input type="text" class="form-control" placeholder="Enter place to reach" aria-describedby="sizing-addon2" name="destination">
              <div class="result hidden" ></div>
             </div>
          </div>
          <div class="input-group row date" >
          
              <input placeholder="Departing" class="form-control col-md-6" type="text" id="datepicker" name="dateofdeparture">
              <input placeholder="Returning" class="form-control col-md-6" type="text" id="datepicker2" name="returndate" disabled="disabled">
           
          </div>
           
          <div class="seat">
            <center>
              <select name="seatingclass" class="form-control" style="width: 150px;">
                  <option value="E">Echonomy</option>
                  <option value="B">Buisness</option>
              </select>
            </center>
          </div>

        <!-- <div class="agegroup">
            <div>
                <label for="adult">Adult</label>
                <input type="number" name="adults" value="1" min="0">
            </div>
            <div>
            <label for="child">Children</label>
            <input type="number" name="children" min="0" value="0">
            </div>
            <div>
            <label for="infants">Infants</label>
            <input type="number" name="infants" min="0" value="0">
            </div>
            
        </div> -->
                
     </form>
  </div>
  <div id="results-flights">
    <!-- <div class="container card">
       <div class="row plane-logo">
            <div class="col-md-3 plane-img">
               <img src="img/ico/plane.png">
               <h3>AirIndia</h3>
            </div>
            <div class="col-md-9">
                    <h3 class="text-center"> Flight Code: <span> 123456789</span></h3>
                <div class="row flight-detail">
                        <div class="col-md-4 detail-col">
                              <h3>--origin--</h3>
                              <p>   Ahmedabad  </p>
                              <p> Departure Time: <b> 12:05 </b></p>
                        </div>
                        <div class="col-md-4 detail-col">
                                <h3>
                              <i class="fa fa-long-arrow-right"></i></h3>
                              <p> Duration: 17:05</p>
                              <p> Non-stop</p>
                        </div> 
                        <div class="col-md-4 detail-col"> 
                              <h3>--Destination--</h3>
                              <p>   Guwahati </p>
                              <p> Arrival time: <b> 22:00 </b></p>
                        </div>  
                </div>
                <div class="row cost">
                   <div class="btn btn-primary" style="    margin-top: 30px;
                         margin-left: 280px;">details</div>
                   <p>&#8377; 5000</p>
                </div>
            </div>
        </div> 
    </div>

    <div class="container card" id="results">

     -->  <!--  <div class="row plane-logo">
           <div class="col-md-3 plane-img">
               <img src="img/ico/plane.png">
               <h3>AirIndia</h3>
           </div>
           <div class="col-md-9">
                    <h3 class="text-center"> Flight Code: <span> 123456789</span></h3>
                <div class="row flight-detail">
                        <div class="col-md-4 detail-col">
                              <h3>--origin--</h3>
                              <p>   Ahmedabad  </p>
                              <p> Departure Time: <b> 12:05 </b></p>
                        </div>
                        <div class="col-md-4 detail-col">
                                <h3>
                              <i class="fa fa-long-arrow-right"></i></h3>
                              <p> Duration: 17:05</p>
                              <p> Non-stop</p>
                        </div> 
                        <div class="col-md-4 detail-col"> 
                              <h3>--Destination--</h3>
                              <p>   Guwahati </p>
                              <p> Arrival time: <b> 22:00 </b></p>
                        </div>  
                </div>
                <div class="row cost">
                    <div class="btn btn-primary" style="    margin-top: 30px;
                         margin-left: 280px;">details
                    </div>
                        <p>&#8377; 5000</p>
                </div>
           </div>
       </div>  -->
  </div>
 </div>       

  <div class="train">
    <div class="container1">
      <form autocomplete="off" id="train"> 
        <div class="input-group" id="text">
              <span class="input-group-addon" id="sizing-addon2">From</span>
              <div class="search-box-2">
                <input type="text" class="form-control" placeholder="Enter Origin" aria-describedby="sizing-addon2" name="source">
                <div class="result"></div>
                </div>
        </div>
        <div class="input-group" id="text">
              <span class="input-group-addon" id="sizing-addon2">From</span>
              <div class="search-box-3">
                <input type="text" class="form-control" placeholder="Enter Destination " aria-describedby="sizing-addon2" name="dest">
                <div class="result"></div>
                </div>
        </div>
        <div class="input-group row date-train" >
            
                <input placeholder="Select date of Journey" class="form-control col-md-6" type="text" id="datepicker3" name="tdate">
             
        </div>
            
      <input type="submit" name="search" form="train">
    </form>
    </div>
    <div id="results-train">
      <!-- <div class="container card">
         <div class="row plane-logo">
              <div class="col-md-3 plane-img">
                 <img src="img/ico/plane.png">
                 <h3>AirIndia</h3>
              </div>
              <div class="col-md-9">
                      <h3 class="text-center"> Flight Code: <span> 123456789</span></h3>
                  <div class="row flight-detail">
                          <div class="col-md-4 detail-col">
                                <h3>--origin--</h3>
                                <p>   Ahmedabad  </p>
                                <p> Departure Time: <b> 12:05 </b></p>
                          </div>
                          <div class="col-md-4 detail-col">
                                  <h3>
                                <i class="fa fa-long-arrow-right"></i></h3>
                                <p> Duration: 17:05</p>
                                <p> Non-stop</p>
                          </div> 
                          <div class="col-md-4 detail-col"> 
                                <h3>--Destination--</h3>
                                <p>   Guwahati </p>
                                <p> Arrival time: <b> 22:00 </b></p>
                          </div>  
                  </div>
                  <div class="row cost">
                     <div class="btn btn-primary" style="    margin-top: 30px;
                           margin-left: 280px;">details</div>
                     <p>&#8377; 5000</p>
                  </div>
              </div>
          </div> 
      </div>

      <div class="container card" id="results">

       -->  <!--  <div class="row plane-logo">
             <div class="col-md-3 plane-img">
                 <img src="img/ico/plane.png">
                 <h3>AirIndia</h3>
             </div>
             <div class="col-md-9">
                      <h3 class="text-center"> Flight Code: <span> 123456789</span></h3>
                  <div class="row flight-detail">
                          <div class="col-md-4 detail-col">
                                <h3>--origin--</h3>
                                <p>   Ahmedabad  </p>
                                <p> Departure Time: <b> 12:05 </b></p>
                          </div>
                          <div class="col-md-4 detail-col">
                                  <h3>
                                <i class="fa fa-long-arrow-right"></i></h3>
                                <p> Duration: 17:05</p>
                                <p> Non-stop</p>
                          </div> 
                          <div class="col-md-4 detail-col"> 
                                <h3>--Destination--</h3>
                                <p>   Guwahati </p>
                                <p> Arrival time: <b> 22:00 </b></p>
                          </div>  
                  </div>
                  <div class="row cost">
                      <div class="btn btn-primary" style="    margin-top: 30px;
                           margin-left: 280px;">details
                      </div>
                          <p>&#8377; 5000</p>
                  </div>
             </div>
         </div>  -->
    </div>
</div>
    
        



  <?php
       include 'footer.php';
  ?>


  <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
  <script type="text/javascript" src="js/ammap.js"></script>
  <script type="text/javascript" src="js/indiaLow.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/map.js"></script>


<script type="text/javascript">
  $(document).ready(function() { 

  $('#flight').submit(function(e){
        
    e.preventDefault(); // Prevent Default Submission
      
    $.ajax({

 url: 'APIs/Final api/goibibo/try.php',
 type: 'GET',
 data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
    .done(function(data){
     $('#results-flights').fadeOut('slow', function(){
          $('#results-flights').fadeIn('slow').html(data);
        });
    })
    .fail(function(){
 alert('Ajax Submit Failed ...'); 
    });
});
});
</script>

<script type="text/javascript">
  $(document).ready(function() { 

  $('#train').submit(function(e){
  
    e.preventDefault(); // Prevent Default Submission
  
    $.ajax({
 url: 'APIs/trainsearch.php',
 type: 'GET',
 data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
    .done(function(data){
     $('#results-train').fadeOut('slow', function(){
          $('#results-train').fadeIn('slow').html(data);
        });
    })
    .fail(function(){
 alert('Ajax Submit Failed ...'); 
    });
});
});
</script>
</body>
</html>