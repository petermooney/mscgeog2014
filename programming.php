<html>
<head>
	<title>This is the title of your webpage</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- this line makes sure that the scale of your device is understood
	by the browser -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- This is our leaflet mapping imports -->
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
	<script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>

	<!-- BOOTSTRAP  -->
	<!-- This helps us create a device responsive webpage -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<!-- JQuery is a very popular library used to provide functionality for many other 
	Javascript libraries -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<!-- to use google maps -->
	<script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false"></script>
	<script src="leaflet-google.js"></script>
		
	<!-- Normalize is used to further ensure your pages look the same on all browsers and devices -->
	<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
	
</head>
<body>
<div class="container">
<div class = "row">
<div class = "col-xs-12	col-sm-12	col-md-10	col-lg-8">


	<h1>Day 2 of Workshop</h1>
	<h2>Working with layers - baselayers and overlays</h2>
	<h3>An example of PhP</h3>
	
	<?php
	
	// this is a piece of PhP code. 
	// We are going to randomly generate a latitute longitude for Ireland
	// and this is going to be used to center the map. 
	
	$randX = 53.00 + ((float)rand()/(float)getrandmax());
	$randY = -5.5 - 4*((float)rand()/(float)getrandmax());
	
	$randomZoom = mt_rand(6,11);
	
	?>
	<P>
	You generated a random coordinate: (<?php print $randX;?>, <?php print $randY;?>)
	
	<br/>
	
	I'm at zoom level <?php echo $randomZoom; ?>
	
	</P>	
	
	<p>
	This randomly generated map coordinate was created at:
	<?php
		$dt = new DateTime();
		echo $dt->format('Y-m-d H:i:s');
	?>
	</p>
	

	
	<div id="map" style="width: 100%; height: 100%"></div>

	
	<script>
		<!-- We must list out the layers which we are going to use as background maps -->
		<!-- Copied directly from http://leaflet-extras.github.io/leaflet-providers/preview/ -->
	
	var MapQuestOpen_OSM = L.tileLayer('http://otile{s}.mqcdn.com/tiles/1.0.0/map/{z}/{x}/{y}.jpeg', {
	attribution: 'Mapquest and OSM',	subdomains: '1234' 	});
		
	var Esri_WorldShadedRelief = L.tileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Shaded_Relief/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'Tiles &copy; Esri &mdash; Source: Esri', 	maxZoom: 13 	});		
	
	<!-- Our map initialisation code is a little different -->
	<!-- Notice how we add the layer variables from above -->
	<!-- The lauer variables are added to a list - comma separated list 
	
	var map = L.map('map', {
		center: new L.LatLng(<?php print $randX;?>, <?php print $randY;?>),
		zoom: <?php echo $randomZoom; ?>,
		layers: [MapQuestOpen_OSM, Esri_WorldShadedRelief]
		});
	
	<!-- now declare the base layer maps variable -->
	var baseLayers = {"ESRI Relief": Esri_WorldShadedRelief,"MapQuest": MapQuestOpen_OSM};
	

	
	<!-- We must now get Leaflet to give us a layer switcher icon -->
	L.control.layers(baseLayers).addTo(map);
	
	<!-- At this point we can put markers or polygons of our own on the map -->
	<!-- remember pins or markers or polygons we place on the map  will be there for every layer -->


	var randMarker = L.marker([<?php print $randX;?>, <?php print $randY;?>]).addTo(map);	  
	
	
	randMarker.bindPopup("<b>I have been generated randomly</b> Refresh the browser and watch me move");


	</script>	



</div> <!-- class -->
</div> <!-- row -->
</div> <!-- end div -->
</body>
</html>

