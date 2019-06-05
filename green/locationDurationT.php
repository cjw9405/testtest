










<!DOCTYPE HTML>
<!--
	Formula by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Untitled</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<a href="defaultPage2" class="logo">Grand Rental Auto <span></span></a>
						<nav>
							<ul>
								<li><a href="#menu">Menu</a></li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="defaultPage2.php">Home</a></li>
              <li><a href="aboutUs2.php">About Us</a></li>
              <li><a href="myPage.php">My Page</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="logout.php" class="button fit">Log Out</a></li>
						</ul>
					</nav>

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Main -->
							<section id="main" class="main">
								<div class="inner">
									<header class="major">
										<h1>Here's the result</h1>
									</header>








									<head>
										<meta charset="utf-8">
										<title>OpenStreetMap &amp; OpenLayers - Marker Example</title>
										<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
										<link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
										<script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>



									  <script>
									/* OSM & OL example code provided by https://mediarealm.com.au/ */
									var map;
									var mapLat = 40.9132;
									var mapLng = -433.1295;
									var mapDefaultZoom = 15;
									function initialize_map() {
									map = new ol.Map({
									target: "map",
									layers: [
									new ol.layer.Tile({
									source: new ol.source.OSM({
									url: "https://a.tile.openstreetmap.org/{z}/{x}/{y}.png"
									})
									})
									],
									view: new ol.View({
									center: ol.proj.fromLonLat([mapLng, mapLat]),
									zoom: mapDefaultZoom
									})
									});
									}
									function add_map_point(lat, lng) {
									var vectorLayer = new ol.layer.Vector({
									source:new ol.source.Vector({
									features: [new ol.Feature({
									geometry: new ol.geom.Point(ol.proj.transform([parseFloat(lng), parseFloat(lat)], 'EPSG:4326', 'EPSG:3857')),
									})]
									}),
									style: new ol.style.Style({
									image: new ol.style.Icon({
									anchor: [0.5, 0.5],
									anchorXUnits: "fraction",
									anchorYUnits: "fraction",
									src: "https://upload.wikimedia.org/wikipedia/commons/e/ec/RedDot.svg"
									})
									})
									});
									map.addLayer(vectorLayer);
									}
									  </script>
									</head>
									<table>
									<thead>
									<tr>
									 <th>Number</th>
									 <th>Maker</th>
									 <th>Model</th>
									 <th>Speed</th>
									 <th>Shell</th>
									 <th>Armor</th>
								 </tr>
							 </thead>
							 <tbody>
								 <?php
								require_once 'accessDatabase.php';
								 if (isset($_POST['choose'])&&
										 isset($_POST['vid'])&&
										 isset($_POST['maker'])&&
										 isset($_POST['model'])&&
										 isset($_POST['speed'])&&
										 isset($_POST['shell'])&&
										 isset($_POST['armor'])){
												$vid = $_POST['vid'];
												$_SESSION["vid"] = $vid;
												$maker = $_POST['maker'];
												$model = $_POST['model'];
												$speed = $_POST['speed'];
												$shell = $_POST['shell'];
												$armor = $_POST['armor'];
												echo "<tr><td>". $vid ."</td><td>"
											 . $maker ."</td><td>". $model .
											 "</td><td>". $speed ."</td><td>"
											 . $shell ."</td><td>". $armor .
											 "</td></tr>";
								}
								?>
							</tbody>
						</table>

									<body onload="initialize_map(); add_map_point(40.9132, -433.1295);">
									  <div id="map" style="width: 1000; height: 500;"></div>
									</body>
								</div>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-youtube"><span class="label">YouTube</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
							</ul>
						</div>
						<p class="copyright">&copy; Untitled. All rights reserved.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
