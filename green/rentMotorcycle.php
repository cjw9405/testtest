<?php // rentMotorcycle.php
 require_once 'accessDatabase.php';

 if( isset($_POST['Minprice']) &&
     isset($_POST['Maxprice']) &&
     isset($_POST['color']) &&
     isset($_POST['maker']) &&
     isset($_POST['model'])){
     $maker = $_POST['maker'];
     $model = $_POST['model'];
     $maxprice = $_POST['Maxprice'];
     $minprice = $_POST['Minprice'];
     $color = $_POST['color'];

    $query = "SELECT M.vid as vid, maker, model, speed, enginecapacity, color FROM Vehicle V, motorcycle M WHERE M.vid = V.vid AND V.price > '".$minprice."' AND V.price < '".$maxprice."' AND M.color = '".$color."' AND V.model = '".$model."' AND V.maker = '".$maker."'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Number</th>";
        echo "<th>Maker</th>";
        echo "<th>Model</th>";
        echo "<th>Speed(km/h)</th>";
        echo "<th>Engine Capacity</th>";
        echo "<th>Color</th>";
				echo "<th>Select</th>";
        echo "</tr>";
        while ($row = $result->fetch_array())
        {
					$select = '
          <form action="locationDurationM.php" method="post">
          <input type="submit" value="Choose">
          <input type="hidden" name="choose" value="yes">
          </form>
        ';
            echo "<tr>";
            echo "<td>".$row['vid']."</td>";
            echo "<td>".$row['maker']."</td>";
            echo "<td>".$row['model']."</td>";
            echo "<td>".$row['speed']."</td>";
            echo "<td>".$row['enginecapacity']."</td>";
						echo "<td>".$row['color']."</td>";
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

                    <form method="post" action="showResultM.php">
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
                            <option name = Renault value="Renault">Renault</option>
                            <option name = MINI value="MINI">MINI</option>
                            <option name = Isuzu value="Isuzu">Isuzu</option>
                            <option name = GMC value="GMC">GMC</option>
                            <option name = Nissan value="Nissan">Nissan</option>
                            <option name = Skoda value="Skoda">Skoda</option>
                            <option name = Acura value="Acura">Acura</option>
                            <option name = Audi value="Audi">Audi</option>
                            <option name = FAW value="FAW">FAW</option>
                            <option name = Fiat value="Fiat">Fiat</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select Model: </p>
                          <select name=model id="category">
                            <option value="">- Model -</option>
                            <option name = Super Hawk value="Super Hawk">Super Hawk</option>
                            <option name = Black Bird value="Black Bird">Black Bird</option>
                            <option name = Dominator value="Dominator">Dominator</option>
                            <option name = Intruder value="Intruder">Intruder</option>
                            <option name = Ninja value="Ninja">Ninja</option>
                            <option name = Formula 3 value="Formula 3">Formula 3</option>
                            <option name = Road King value="Road King">Road King</option>
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
