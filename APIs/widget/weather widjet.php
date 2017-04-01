<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="widget.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
<script type="text/javascript">
	$(document).ready(function () {
	$.ajax({
         url: "weather fetch.php",
         type: "POST",
         data: { city:'Guwahati'  },
         cache: false,
         success: function (response) {
             $('#weather').html(response);
         }
     });
		
	});
</script>

</head>

<body>
<div class="weather" id="weather">
	



	<!-- template 
	<div>
		<h3>City Name</h3>

		<div class="temp">
			<center>

				<img src="">
				<h2>20 c</h2>

			</center>
		</div>
		<div class="other">
			<p>Smoke</p>
			<h3>Pressure</h3>
			<h3>Wind</h3>
			<h3>Humidity</h3>
			
		</div>
	</div>
 -->
</div>
</body>
</html>