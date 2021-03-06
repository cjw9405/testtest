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

    $query = "SELECT C.vid as vid, maker, model, type, fuel, color, speed, enginecapacity FROM Vehicle V, car C WHERE C.vid = V.vid AND V.price > '".$minprice."' AND V.price < '".$maxprice."' AND C.color = '".$color."' AND V.model = '".$model."' AND V.maker = '".$maker."' AND C.type = '".$carType."'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Number</th>";
        echo "<th>Maker</th>";
        echo "<th>Model</th>";
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
          <form action="locationDurationC.php" method="post">
          <input type="submit" value="Choose">
          <input type="hidden" name="choose" value="yes">
          <input type="hidden" name="vid" value="' . $row[0] . '">
          <input type="hidden" name="maker" value="' . $row[1] . '">
          <input type="hidden" name="model" value="' . $row[2] . '">
          <input type="hidden" name="type" value="' . $row[3] . '">
          <input type="hidden" name="fuel" value="' . $row[4] . '">
          <input type="hidden" name="color" value="' . $row[5] . '">
          <input type="hidden" name="speed" value="' . $row[6] . '">
          <input type="hidden" name="enginecapacity" value="' . $row[7] . '">
          </form>
        ';
            echo "<tr>";
            echo "<td>".$row['vid']."</td>";
            echo "<td>".$row['maker']."</td>";
            echo "<td>".$row['model']."</td>";
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
										<h1>Rent Car</h1>
									</header>

									<!-- Content -->
										<h2 id="content">Description: </h2>
										<p>Please fill in or check your preferences. The given option is as follows: Range of the price, Type, Color, Need of auxillaries</p>
									<hr class="major" />

                  <!-- Form -->
                    <h3>Form</h3>

                    <form method="post" action="showResultC.php">
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
                            <option value="SUV">SUV</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Coupe">Coupe</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Maker: </p>
                          <select name=maker id="category">
                            <option value="">- Maker -</option>
                            <option name = Toyota value="Toyota">Toyota</option>
                            <option name = BMW value="BMW">BMW</option>
                            <option name = Mercedes-Benz value="Mercedes-Benz">Mercedes-Benz</option>
                            <option name = Ford value="Ford">Ford</option>
                            <option name = Nissan value="Nissan">Nissan</option>
                            <option name = Honda value="Honda">Honda</option>
                            <option name = Porsche value="Porsche">Porsche</option>
                            <option name = Hyundai Motors value="Hyundai Motors">Hyundai Motors</option>
                            <option name = Buick value="Buick">Buick</option>
                            <option name = FAW value="FAW">FAW</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Model: </p>
                          <select name=model id="category">
                            <option value="">- Model -</option>
                            <option name = A1 value="A1">A1</option>
                            <option name = A7 value="A7">A7</option>
                            <option name = Pajero value="Pajero">Pajero</option>
                            <option name = LaPuta value="LaPuta ">LaPuta</option>
                            <option name = Reventon value="Reventon">Reventon</option>
                            <option name = A6 value="A6">A6</option>
                            <option name = XM3 value="XM3">XM3</option>
                            <option name = Fitta value="Fitta">Fitta</option>
                            <option name = M4 value="M4">M4</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Color: </p>
                          <select name=color id="category">
                            <option value="">- Color -</option>
                            <option name = Red value="Red">Red</option>
                            <option name = Orange value="Orange">Orange</option>
                            <option name = Yellow value="Yellow">Yellow</option>
                            <option name = Green value="Green">Green</option>
                            <option name = Blue value="Blue">Blue</option>
                            <option name = Indigo value="Indigo">Indigo</option>
                            <option name = Violet value="Violet">Violet</option>
                          </select>
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
