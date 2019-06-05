<!DOCTYPE HTML>
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
                  <?php // rentCar.php
                   require_once 'accessDatabase.php';
                  session_start();
                  		$query = "SELECT C.vid AS vid, maker, model FROM car C, Vehicle V WHERE V.vid = C.vid AND C.vid = 401";
                  //		$query = "INSERT INTO Rent(vid, pid, did) VALUES ('".$_SESSION["vid"]."', '".$_SESSION["username"]."', 1)";
                  		$result = $conn->query($query);
                      if ($result->num_rows > 0) {
                          echo "<table>";
                          echo "<tr>";
                          echo "<th>Number</th>";
                          echo "<th>Maker</th>";
                          echo "<th>Model</th>";
                          echo "</tr>";
                          while ($row = $result->fetch_array())
                          {
                              echo "<tr>";
                              echo "<td>".$row[0]."</td>";
                              echo "<td>".$row[1]."</td>";
                              echo "<td>".$row[2]."</td>";
                              echo "</tr>";
                          }
                          echo "</table>";
                          $result->free();
                      }
                      else {
                          echo "";
                      }

                      $query = "SELECT M.vid AS vid, maker, model FROM motorcycle M, Vehicle V WHERE V.vid = M.vid AND M.vid = 11";
                      $result = $conn->query($query);
                      if ($result->num_rows > 0) {
                          echo "<table>";
                          echo "<tr>";
                          echo "<th>Number</th>";
                          echo "<th>Maker</th>";
                          echo "<th>Model</th>";
                          echo "</tr>";
                          while ($row = $result->fetch_array())
                          {
                              echo "<tr>";
                              echo "<td>".$row[0]."</td>";
                              echo "<td>".$row[1]."</td>";
                              echo "<td>".$row[2]."</td>";
                              echo "</tr>";
                          }
                          echo "</table>";
                          $result->free();
                      }
                      else {
                          echo "";
                      }

                      $query = "SELECT T.vid AS vid, maker, model FROM tank T, Vehicle V WHERE V.vid = T.vid AND T.vid = 111";
                      $result = $conn->query($query);
                      if ($result->num_rows > 0) {
                          echo "<table>";
                          echo "<tr>";
                          echo "<th>Number</th>";
                          echo "<th>Maker</th>";
                          echo "<th>Model</th>";
                          echo "</tr>";
                          while ($row = $result->fetch_array())
                          {
                              echo "<tr>";
                              echo "<td>".$row[0]."</td>";
                              echo "<td>".$row[1]."</td>";
                              echo "<td>".$row[2]."</td>";
                              echo "</tr>";
                          }
                          echo "</table>";
                          $result->free();
                      }
                      else {
                          echo "";
                      }

                  		$conn->close();

                  ?>






























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
