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

    $query = $query  = "SELECT M.vid as vid, type, fuel, color, speed, enginecapacity FROM Vehicle v, motorcycle M WHERE M.vid = V.vid AND M.type = $carType AND C.color = $color AND V.price >= $minprice
    && V.price <= $maxprice AND V.maker = $maker AND V.model = $model" ;
    if ($res = $mysqli->query($sql)) {
    if ($res->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Vid</th>";
        echo "<th>Type</th>";
        echo "<th>Fuel</th>";
        echo "<th>Color</th>";
        echo "<th>Speed</th>";
        echo "<th>Engine Capacity</th>";
        echo "</tr>";
        while ($row = $res->fetch_array())
        {
            echo "<tr>";
            echo "<td>".$row['vid']."</td>";
            echo "<td>".$row['type']."</td>";
            echo "<td>".$row['fuel']."</td>";
            echo "<td>".$row['color']."</td>";
            echo "<td>".$row['speed']."</td>";
            echo "<td>".$row['enginecapacity']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        $res->free();
    }
    else {
        echo "No matching records are found.";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. "
                                             .$mysqli->error;
}
$mysqli->close();
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
						<a href="mysummercer.php" class="logo">grand rental auto <span>by </span></a>
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
							<li><a href="myssummercar.php">About Us</a></li>
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
										<h1>Rent Motorcycle</h1>
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

                    <form method="post" action="showReservation.php">
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
                            <option value="1">Renault</option>
                            <option value="1">MINI</option>
                            <option value="1">Isuzu</option>
                            <option value="1">GMC</option>
                            <option value="1">Nissan</option>
                            <option value="1">Skoda</option>
                            <option value="1">Acura</option>
                            <option value="1">Audi</option>
                            <option value="1">FAW</option>
                            <option value="1">Fiat</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Model: </p>
                          <select name=model id="category">
                            <option value="">- Model -</option>
                            <option value="1">Super Hawk</option>
                            <option value="1">Black Bird</option>
                            <option value="1">Dominator</option>
                            <option value="1">Intruder</option>
                            <option value="1">Dominator</option>
                            <option value="1">Intruder</option>
                            <option value="1">Ninja</option>
                            <option value="1">Formula 3</option>
                            <option value="1">Black Bird</option>
                            <option value="1">Road King</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Color: </p>
                          <select name=color id="category">
                            <option value="">- Color -</option>
                            <option value="1">Red</option>
                            <option value="1">Orange</option>
                            <option value="1">Yellow</option>
                            <option value="1">Green</option>
                            <option value="1">Blue</option>
                            <option value="1">Indigo</option>
                            <option value="1">Violet</option>
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
