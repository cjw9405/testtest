<?php
//require_once 'accessDatabase.php';
//if(isset($_POST['searchMotorcycle']) &&
    // isset($_POST['Minprice']) &&
    // isset($_POST['Maxprice']) &&
    // isset($_POST['color']) &&
    // isset($_POST['maker'])){
    // $maker = $_POST['maker'];
    // $maxprice = $_POST['Maxprice'];
    // $minprice = $_POST['Minprice'];
    // $color = $_POST['color'];
    //
    // $query = "SELECT * FROM motorcycle M, Vehicle V WHERE M.vid = V.vid AND M.color = $color AND V.price >= $minprice
    // && V.price <= $maxprice AND V.maker = $maker";
    // $result   = $conn->query($query);
    // if(!$result){
    //   echo "Selection failed: $query<br>" . $conn->error . "<br><br>";
    // }else{
    // echo "INSERT Sucess: $query<br>" . $conn->error . "<br><br>";
    // }

?>
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
						<a href="index.html" class="logo">grand rental auto <span>by </span></a>
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
										<p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing.</p>
									<hr class="major" />

                  <!-- Form -->
                    <h3>Form</h3>

                    <form method="post" action="showReservation.php">
                      <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                          <p> Fill in Minimum price: </p>
                          <input type="text" name="name" id="name" value="" placeholder="Name" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                          <p> Fill in Maximum price: </p>
                          <input type="text" name="email" id="email" value="" placeholder="Email" />
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select your Motorcycle Type: </p>
                          <select name="category" id="category">
                            <option value="">- Category -</option>
                            <option value="1">SUV</option>
                            <option value="1">Sedan</option>
                            <option value="1">Hatchback</option>
                            <option value="1">Coupe</option>
                          </select>
                        </div>
                        <!-- Break -->
                        <div class="col-4 col-12-small">
                          <input type="radio" id="priority-low" name="priority" checked>
                          <label for="priority-low">Low</label>
                        </div>
                        <div class="col-4 col-12-small">
                          <input type="radio" id="priority-normal" name="priority">
                          <label for="priority-normal">Normal</label>
                        </div>
                        <div class="col-4 col-12-small">
                          <input type="radio" id="priority-high" name="priority">
                          <label for="priority-high">High</label>
                        </div>
                        <!-- Break -->
                        <div class="col-6 col-12-small">
                          <input type="checkbox" id="copy" name="copy">
                          <label for="copy">Email me a copy</label>
                        </div>
                        <div class="col-6 col-12-small">
                          <input type="checkbox" id="human" name="human" checked>
                          <label for="human">I am a human</label>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <ul class="actions">
                            <li><input type="submit" value="Send Message" class="primary" /></li>
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
