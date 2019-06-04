<?php // rentCar.php
 require_once 'accessDatabase.php';
 if(isset($_POST['carType']) &&
     isset($_POST['Minprice']) &&
     isset($_POST['Maxprice']) &&
     isset($_POST['color']) &&
     isset($_POST['maker']) &&
     isset($_POST['model'])){
     $maker = $_POST['maker'];
     $model = $_POST['model'];
     $maxprice = $_POST['Maxprice'];
     $minprice = $_POST['Minprice'];
     $color = $_POST['color'];
     $carType = $_POST['carType'];

    $query = "SELECT C.vid as vid, type, fuel, color, speed, enginecapacity FROM Vehicle V, car C WHERE C.vid = V.vid AND V.price > '".$minprice."' AND V.price < '".$maxprice."'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Vid</th>";
        echo "<th>Type</th>";
        echo "<th>Fuel</th>";
        echo "<th>Color</th>";
        echo "<th>Speed(km/h)</th>";
        echo "<th>Engine Capacity</th>";
        echo "<th>Select</th>";
        echo "</tr>";
        while ($row = $result->fetch_array())
        {
          $select = '
          <form action="reservationConfirm.php" method="post">
          <input type="submit" value="Choose">
          <input type="hidden" name="choose" value="yes">
          </form>
        ';
            echo "<tr>";
            echo "<td>".$row['vid']."</td>";
            echo "<td>".$row['type']."</td>";
            echo "<td>".$row['fuel']."</td>";
            echo "<td>".$row['color']."</td>";
            echo "<td>".$row['speed']."</td>";
            echo "<td>".$row['enginecapacity']."</td>";
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
						<a href="mysummercar.php" class="logo">grand rental auto <span>by </span></a>
						<nav>
							<ul>
								<li><a href="#menu">Menu</a></li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="rent_check.php">Home</a></li>
							<li><a href="mysummercar.php">About Us</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="signup.php" class="button primary fit">Sign Up</a></li>
							<li><a href="login.php" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Main -->
							<section id="main" class="main">
								<div class="inner">
									<header class="major">
										<h1>Rent Car</h1>
									</header>

									<!-- Content -->
										<h2 id="content">Description: </h2>
										<p>Please fill in or check your preferences. The given option is as follows: Range of the price, Type, Color, Need of auxillaries</p>
									<hr class="major" />

                  <!-- Form -->
                    <h3>Form</h3>

                    <form method="post" action="showReservation.php">
                      <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                          <p> Fill in Minimum price: </p>
                          <input type="text" name=Minprice placeholder=Minprice />
                        </div>
                        <div class="col-6 col-12-xsmall">
                          <p> Fill in Maximum price: </p>
                          <input type="text" name=Maxprice placeholder=Maxprice />
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select your Car Type: </p>
                          <select name=carType id="category">
                            <option value="">- CarType -</option>
                            <option value="1">SUV</option>
                            <option value="1">Sedan</option>
                            <option value="1">Hatchback</option>
                            <option value="1">Coupe</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Maker: </p>
                          <select name=maker id="category">
                            <option value="">- Maker -</option>
                            <option name = Kenworth value="1">Kenworth</option>
                            <option name = Renault value="1">Renault</option>
                            <option name = Subaru value="1">Subaru</option>
                            <option name = Daimler value="1">Daimler</option>
                            <option name = Maruti Suzuki value="1">Maruti Suzuki</option>
                            <option name = Seat value="1">Seat</option>
                            <option name = MINI value="1">MINI</option>
                            <option name = Cadillac value="1">Cadillac</option>
                            <option name = Buick value="1">Buick</option>
                            <option name = FAW value="1">FAW</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Model: </p>
                          <select name=model id="category">
                            <option value="">- Model -</option>
                            <option name = A1 value="1">A1</option>
                            <option name = A7 value="1">A7</option>
                            <option name = Pajero value="1">Pajero</option>
                            <option name = LaPuta value="1">LaPuta</option>
                            <option name = Reventon value="1">Reventon</option>
                            <option name = A6 value="1">A6</option>
                            <option name = XM3 value="1">XM3</option>
                            <option name = Fitta value="1">Fitta</option>
                            <option name = M4 value="1">M4</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Color: </p>
                          <select name=color id="category">
                            <option value="">- Color -</option>
                            <option name = Red value="1">Red</option>
                            <option name = Orange value="1">Orange</option>
                            <option name = Yellow value="1">Yellow</option>
                            <option name = Green value="1">Green</option>
                            <option name = Blue value="1">Blue</option>
                            <option name = Indigo value="1">Indigo</option>
                            <option name = Violet value="1">Violet</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-4 col-12-small">
                          <input type="checkbox" id="priority-low" name=navigation checked>
                          <label for="priority-low">Navigation</label>
                        </div>
                        <div class="col-4 col-12-small">
                          <input type="checkbox" id="priority-normal" name=dd checked>
                          <label for="priority-normal">????</label>
                        </div>
                        <div class="col-4 col-12-small">
                          <input type="checkbox" id="priority-high" name=dd checked>
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
                    <span class="image fit"><img src="images/car9.jpg" alt="" /></span>
                    <div class="box alt">
                      <div class="row gtr-50 gtr-uniform">
                        <div class="col-4"><span class="image fit"><img src="images/car0.jpg" alt="" /></span></div>
                        <div class="col-4"><span class="image fit"><img src="images/car1.jpg" alt="" /></span></div>
                        <div class="col-4"><span class="image fit"><img src="images/car2.jpg" alt="" /></span></div>
                        <!-- Break -->
                        <div class="col-4"><span class="image fit"><img src="images/car3.jpg" alt="" /></span></div>
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
