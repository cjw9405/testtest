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
						<a href="defaultPage2.php" class="logo">Grand Rental Auto <span>by Pixelarity</span></a>
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
									<table>
									<thead>
									<tr>
									 <th>Number</th>
									 <th>Maker</th>
									 <th>Model</th>
									 <th>Speed</th>
									 <th>Engine Capacity</th>
									 <th>Color</th>
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
										 isset($_POST['enginecapacity'])&&
										 isset($_POST['color'])){
												$vid = $_POST['vid'];
												$_SESSION["vid"] = $vid;
												$maker = $_POST['maker'];
												$model = $_POST['model'];
												$speed = $_POST['speed'];
												$shell = $_POST['enginecapacity'];
												$armor = $_POST['color'];
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







									    <?php include 'showResultM.php';?>
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
