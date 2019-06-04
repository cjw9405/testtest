<?php // rentTank.php
 require_once 'accessDatabase.php';

 if( isset($_POST['Minprice']) &&
     isset($_POST['Maxprice']) &&
     isset($_POST['maker']) &&
     isset($_POST['model'])){
     $maker = $_POST['maker'];
     $model = $_POST['model'];
     $maxprice = $_POST['Maxprice'];
     $minprice = $_POST['Minprice'];

    $query = "SELECT T.vid as vid, maker, model, speed, shell, armor FROM Vehicle V, tank T WHERE T.vid = V.vid AND V.price > '".$minprice."' AND V.price < '".$maxprice."' AND V.model = '".$model."' AND V.maker = '".$maker."'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Number</th>";
        echo "<th>Maker</th>";
        echo "<th>Model</th>";
        echo "<th>Speed(km/h)</th>";
        echo "<th>Shell(mm)</th>";
        echo "<th>Armor(mm)</th>";
        echo "<th>Select</th>";
        echo "</tr>";
        while ($row = $result->fetch_array())
        {
          $select = '
          <form action="locationDurationT.php" method="post">
          <input type="submit" value="Choose">
          <input type="hidden" name="choose" value="yes">
          </form>
        ';
            echo "<tr>";
            echo "<td>".$row['vid']."</td>";
            echo "<td>".$row['maker']."</td>";
            echo "<td>".$row['model']."</td>";
            echo "<td>".$row['speed']."</td>";
            echo "<td>".$row['shell']."</td>";
						echo "<td>".$row['armor']."</td>";
            echo "<td>".$select."</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    }
    else {
        echo "No matching records are found.";
    }
$conn->close();
}?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Rent Car</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<a href="defaultPage2.php" class="logo">grand rental auto <span></span></a>
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
										<h1>Rent Tank</h1>
									</header>

									<!-- Content -->
										<h2 id="content">Description: </h2>
										<p>Our car rental system offers you to select followings:
                      1. Minimum and Maximum price range of the product
                      2. Type
                      3. Color
                      4. Option</p>
									<hr class="major" />

                  <!-- Form -->
                    <h3>Form</h3>

                    <form method="post" action="showResultT.php">
                      <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                          <p> Fill in Minimum price: </p>
                          <input type="text" name="Minprice" value="" placeholder="Minprice" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                          <p> Fill in Maximum price: </p>
                          <input type="text" name="Maxprice" value="" placeholder="Maxprice" />
                        </div>
                        <!-- Break -->
												<div class="col-12">
                          <p> Select Maker: </p>
                          <select name=maker id="category">
                            <option value="">- Maker -</option>
                            <option name = BAE Systems value="BAE Systems">BAE Systems</option>
                            <option name = Northrop Grumman value="Northrop Grumman">Northrop Grumman</option>
                            <option name = Airbus Group value="Airbus Group">Airbus Group</option>
                            <option name = Finmeccanica value="Finmeccanica">Finmeccanica</option>
                            <option name = United Technologies Corporation value="United Technologies Corporation">United Technologies Corporation</option>
                            <option name = General Dynamics value="General Dynamics">General Dynamics</option>
                            <option name = Raytheon value="Raytheon">Raytheon</option>
                            <option name = Boeing value="Boeing">Boeing</option>

                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Model: </p>
                          <select name=model id="category">
                            <option value="">- Model -</option>
                            <option name = Panzer IV value="Panzer IV">Panzer IV</option>
                            <option name = Panzer I value="Panzer I">Panzer I</option>
                            <option name = Tiger I  value="Tiger I ">Tiger I </option>
                            <option name = Mk VI Crusader value="Mk VI Crusader">Mk VI Crusader</option>
                            <option name = M4 Sherman value="M4 Sherman">M4 Sherman</option>
                            <option name = Tiger II value="Tiger II">Tiger II</option>
                            <option name = Panther value="Panther">Panther</option>
                            <option name = M3 Stuart value="M3 Stuart">M3 Stuart</option>
                          </select>
                        </div>

                        <!-- Break -->
                        <div class="col-4 col-12-small">
                          <input type="checkbox" id="priority-low" name="priority" checked>
                          <label for="priority-low">Navigation</label>
                        </div>
                        <div class="col-4 col-12-small">
                          <input type="checkbox" id="priority-normal" name="priority" checked>
                          <label for="priority-normal">????</label>
                        </div>
                        <div class="col-4 col-12-small">
                          <input type="checkbox" id="priority-high" name="priority" checked>
                          <label for="priority-high">????</label>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <ul class="actions">
                            <li><input type="submit" value="Search" class="primary" /></li>
                            <li><input type="reset" value="Reset" /></li>
                          </ul>
                        </div>
                      </div>
                    </form>

                  <!-- Image -->
                    <h3>Image</h3>

                    <h4>Fit</h4>
                    <span class="image fit"><img src="images/m0.jpg" alt="" /></span>
                    <div class="box alt">
                      <div class="row gtr-50 gtr-uniform">
                        <div class="col-4"><span class="image fit"><img src="images/m0.jpg" alt="" /></span></div>
                        <div class="col-4"><span class="image fit"><img src="images/m1.jpg" alt="" /></span></div>
                        <div class="col-4"><span class="image fit"><img src="images/m2.jpg" alt="" /></span></div>
                        <!-- Break -->
                        <div class="col-4"><span class="image fit"><img src="images/m3.jpg" alt="" /></span></div>
                        <div class="col-4"><span class="image fit"><img src="images/car4.jpg" alt="" /></span></div>
                        <div class="col-4"><span class="image fit"><img src="images/car5.jpg" alt="" /></span></div>
                        <!-- Break -->
                        <div class="col-4"><span class="image fit"><img src="images/car6.jpg" alt="" /></span></div>
                        <div class="col-4"><span class="image fit"><img src="images/car7.jpg" alt="" /></span></div>
                        <div class="col-4"><span class="image fit"><img src="images/car8.jpg" alt="" /></span></div>
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
              						<p class="copyright">&copy; grand rental auto. All rights reserved.</p>
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
