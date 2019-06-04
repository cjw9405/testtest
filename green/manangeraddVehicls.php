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
							<a href="manangerindex.php" class="logo">grand rental auto <span></span></a>
						<nav>
							<ul>
								<li><a href="#menu">Menu</a></li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
              <h2 id="content">manager menu</h2>
							<li><a href="manangerindex.php">HOME</a></li>
							<li><a href="manangeraddVehicls.php">Add VehicleS</a></li>
							<li><a href="managerDeleteVehics.php">Delete VehiceS</a></li>
              <li><a href="mangerDeleteCustomer.php">Delete Bad Customer</a></li>

						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Log Out</a></li>

						</ul>
					</nav>

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Main -->
							<section id="main" class="main">
								<div class="inner">
									<header class="major">
										<h1>Add VehicleS</h1>
									</header>

									<!-- Content -->
										<h2 id="content"></h2>
										<p> This page is for adding vehicles</p>
										<div class="row">

										<div class="col-4 col-12-medium">
												<h3 style="text-align:center">Motorcycle </h3>
                        <?php
                        require_once 'accessDatabase.php';
                        if (isset($_POST['vid'])   &&
                            isset($_POST['model'])    &&
                            isset($_POST['maker']) &&
                            isset($_POST['price'])     &&
                            isset($_POST['speed'])&&
                            isset($_POST['enginecapacity'])&&
                            isset($_POST['diff'])&&
                            isset($_POST['color'])) {
                          $vid   = $_POST['vid'];
                          $model   = $_POST['model'];
                          $maker = $_POST['maker'];
                          $price     = $_POST['price'];
                          $speed   = $_POST['speed'];
                          $enginecapacity    = $_POST['enginecapacity'];
                          $color    = $_POST['color'];

                          $query = "INSERT INTO Vehicle (vid,model,maker,price,isrent) VALUES" .
                            "('$vid', '$model', '$maker', '$price ', 0)";
                          $result   = $conn->query($query);
                          if(!$result){
                            echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
                          }else{
                          echo "INSERT Sucess: $query<br>" . $conn->error . "<br><br>";
                          }

                        $query = "INSERT INTO Motorcycle (vid,speed,enginecapacity,color) VALUES" .
                              "('$vid', '$speed', '$enginecapacity','$color')";
                            $result   = $conn->query($query);
                            if(!$result){
                              echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
                            }else{
                            echo "INSERT Sucess<br><br>";
                            }


                        }


  echo <<<_END


<div style="text-align:center">
                      <form action="manangeraddVehicls.php" method="post">
                      <input type="hidden" name="diff" value="yes">
                      Vid <input type="text" name="vid"><br>
                      Model<input type="text" name="model"><br>
                      Maker <input type="text" name="maker"><br>
                      Price <input type="text" name="price"><br>
                      Speed<input type="text" name="speed"><br>
                      Enginecapacity <input type="text" name="enginecapacity"><br>
                      Color <input type="text" name="color">
                      <br>
                      <input type="submit" value="Add motorcycle"></form>
                      </div>
_END;


                      ?>
											</div>
											<div class="col-4 col-12-medium">
												<h3 style="text-align:center">Tank</h3>
                        <?php
                        if (isset($_POST['vid'])   &&
                            isset($_POST['model'])    &&
                            isset($_POST['maker']) &&
                            isset($_POST['price'])     &&
                            isset($_POST['speed'])&&
                            isset($_POST['shell'])&&
                            isset($_POST['armor'])) {
                          $vid   = $_POST['vid'];
                          $model   = $_POST['model'];
                          $maker = $_POST['maker'];
                          $price     = $_POST['price'];
                          $speed   = $_POST['speed'];
                          $shell    = $_POST['shell'];
                          $armor    = $_POST['armor'];

                          $query = "INSERT INTO Vehicle (vid,model,maker,price,isrent) VALUES" .
                            "('$vid', '$model', '$maker', '$price ', 0)";
                          $result   = $conn->query($query);
                          if(!$result){
                            echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
                          }else{
                          echo "INSERT Sucess: $query<br>" . $conn->error . "<br><br>";
                          }

                        $query = "INSERT INTO Tank (vid,speed,shell,armor) VALUES" .
                              "('$vid', '$speed', '$shell','$armor')";
                            $result   = $conn->query($query);
                            if(!$result){
                              echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
                            }else{
                            echo "INSERT Sucess<br><br>";
                            }


                        }


echo <<<_END
<div style="text-align:center">
                        <form action="manangeraddVehicls.php" method="post">
                        Vid <input type="text" name="vid"><br>
                        Model<input type="text" name="model"><br>
                        Maker <input type="text" name="maker"><br>
                        Price <input type="text" name="price"><br>
                        Speed<input type="text" name="speed"><br>
                        Shell <input type="text" name="shell"><br>
                        Armor <input type="text" name="armor">
                        <br>
                        <input type="submit" value="Add Tank">
                        </form>
                      </div>
_END;

                        ?>
											</div>
											<div class="col-4 col-12-medium">
												<h3 style="text-align:center">Car</h3>
                        <?php
                        if (isset($_POST['vid']) &&
                            isset($_POST['model'])&&
                            isset($_POST['maker'])&&
                            isset($_POST['price'])&&
                            isset($_POST['type'])&&
                            isset($_POST['fuel'])&&
                            isset($_POST['color'])&&
                            isset($_POST['speed'])&&
                            isset($_POST['enginecapacity'])) {
                          $vid   = $_POST['vid'];
                          $model   = $_POST['model'];
                          $maker = $_POST['maker'];
                          $price     = $_POST['price'];
                          $type   = $_POST['type'];
                          $fuel   = $_POST['fuel'];
                          $color    = $_POST['color'];
                          $speed    = $_POST['speed'];
                          $enginecapacity    = $_POST['enginecapacity'];

                          $query = "INSERT INTO Vehicle (vid,model,maker,price,isrent) VALUES" .
                            "('$vid', '$model', '$maker', '$price ', 0)";
                          $result   = $conn->query($query);
                          if(!$result){
                            echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
                          }else{
                          echo "INSERT Sucess: $query<br>" . $conn->error . "<br><br>";
                          }

                        $query = "INSERT INTO Car (vid,type,fuel,color,speed,enginecapacity) VALUES" .
                              "('$vid', '$type', '$fuel','$color','$speed','$enginecapacity')";
                            $result   = $conn->query($query);
                            if(!$result){
                              echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
                            }else{
                            echo "INSERT Sucess<br><br>";
                            }


                        }

echo <<<_END
<div style="text-align:center">
                        <form action="manangeraddVehicls.php" method="post">
                        Vid <input type="text" name="vid"><br>
                        Model<input type="text" name="model"><br>
                        Maker <input type="text" name="maker"><br>
                        Price <input type="text" name="price"><br>
                        Type <input type="text" name="type"><br>
                        Fuel <input type="text" name="fuel"><br>
                        Color <input type="text" name="color"><br>
                        Speed <input type="text" name="speed"><br>
                        Enginecapacity <input type="text" name="enginecapacity">
                        <br>
                        <input type="submit" value="Add Car">
                        </form>
                        </div>
_END;


                        $conn->close();

                        // real_escape_string to strip out any characters that a hacker
                        // may have inserted.
                        function get_post($conn, $var) {
                          return $conn->real_escape_string($_POST[$var]);
                        }



                        ?>
											</div>

										</div>

									<hr class="major" />




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
