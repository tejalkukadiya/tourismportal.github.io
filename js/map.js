var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


AmCharts.makeChart("map",{
					"type": "map",
					"pathToImages": "http://www.amcharts.com/lib/3/images/",
					"addClassNames": true,
					"fontSize": 15,
					"color": "#FFFFFF",
					"projection": "mercator",
					"backgroundAlpha": 1,
					"backgroundColor": "rgba(80,80,80,1)",
					"dataProvider": {
						"map": "indiaLow",
						"getAreasFromMap": true,
						"images": [
							{
								"top": 40,
								"left": 60,
								"width": 80,
								"height": 40,
								"pixelMapperLogo": true,
								"imageURL": "http://pixelmap.amcharts.com/static/img/logo.svg",
								"url": "http://www.amcharts.com"
							}
						],
						"areas": [
							{
								"id": "IN-AR",
								"title": "Arunachal Pradesh",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "IN-AS",
								"title": "Assam",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "IN-ML",
								"title": "Meghalaya",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "IN-MN",
								"title": "Manipur",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "IN-MZ",
								"title": "Mizoram",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "IN-NL",
								"title": "Nagaland",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "IN-SK",
								"title": "Sikkim",
								"color": "rgba(75,216,181,0.8)"
							},
							{
								"id": "IN-TR",
								"title": "Tripura",
								"color": "rgba(75,216,181,0.8)"
							}
						]
					},
					"balloon": {
						"horizontalPadding": 15,
						"borderAlpha": 0,
						"borderThickness": 1,
						"verticalPadding": 15
					},
					"areasSettings": {
						"color": "rgba(129,129,129,1)",
						"outlineColor": "rgba(80,80,80,1)",
						"rollOverOutlineColor": "rgba(80,80,80,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true,
						"unlistedAreasAlpha": 0,
						"unlistedAreasOutlineAlpha": 0
					},
					"imagesSettings": {
						"alpha": 1,
						"color": "rgba(129,129,129,1)",
						"outlineAlpha": 0,
						"rollOverOutlineAlpha": 0,
						"outlineColor": "rgba(80,80,80,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true
					},
					"linesSettings": {
						"color": "rgba(129,129,129,1)",
						"selectable": true,
						"rollOverBrightness": 20,
						"selectedBrightness": 20
					},
					"zoomControl": {
						"zoomControlEnabled": true,
						"homeButtonEnabled": false,
						"panControlEnabled": false,
						"right": 38,
						"bottom": 30,
						"minZoomLevel": 0.25,
						"gridHeight": 100,
						"gridAlpha": 0.1,
						"gridBackgroundAlpha": 0,
						"gridColor": "#FFFFFF",
						"draggerAlpha": 1,
						"buttonCornerRadius": 2
					}
				});

document.getElementById("IN-AS").onclick = function() {
               window.location= "http://www.google.com";
    			}