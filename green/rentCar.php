<?php // adddelete.php
 require_once 'accessDatabase.php';
 if(isset($_POST['searchCar']) &&
     isset($_POST['carType']) &&
     isset($_POST['Minprice']) &&
     isset($_POST['Maxprice']) &&
     isset($_POST['color']) &&
     isset($_POST['maker'])){
     $maker = $_POST['maker'];
     $maxprice = $_POST['Maxprice'];
     $minprice = $_POST['Minprice'];
     $color = $_POST['color'];
     $carType = $_POST['carType'];

     if(empty($carType))
         {
       echo("<p>You didn't select any Type.</p>\n");
     }
     else
        {
             $N = count($carType);

       echo("<p>You selected $N: ");
       for($i=0; $i < $N; $i++)
       {
         echo($carType[$i] . " ");
       }
       echo("</p>");
     }
         //Checking whether a particular check box is selected
         //See the IsChecked() function below
         if(IsChecked('carType','A'))
         {
             echo ' SUV is checked. ';
         }
         if(IsChecked('carType','B'))
         {
             echo ' Convertible is checked. ';
         }
         if(IsChecked('carType','C'))
         {
             echo ' Sedan is checked. ';
         }
         if(IsChecked('carType','D'))
         {
             echo ' Hatchback is checked. ';
         }
         if(IsChecked('carType','E'))
         {
             echo ' Coupe is checked. ';
         }
         //and so on
  }

    function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
    $query = "SELECT * FROM car C, Vehicle V WHERE C.vid = V.vid AND C.type = $carType AND C.color = $color AND V.price >= $minprice
    && V.price <= $maxprice AND V.maker = $maker";
    $result   = $conn->query($query);
    if(!$result){
      echo "Selection failed: $query<br>" . $conn->error . "<br><br>";
    }else{
    echo "INSERT Sucess: $query<br>" . $conn->error . "<br><br>";
    }

      // real_escape_string to strip out any characters that a hacker
      // may have inserted.
      function get_post($conn, $var) {
        return $conn->real_escape_string($_POST[$var]);
       }
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
										<p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing.</p>
									<hr class="major" />

                  <!-- Form -->
                    <h3>Form</h3>

                    <form method="post" action="showReservation.php">
                      <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                          <p> Fill in Minimum price: </p>
                          <input type="text" name=minprice placeholder=Minprice />
                        </div>
                        <div class="col-6 col-12-xsmall">
                          <p> Fill in Maximum price: </p>
                          <input type="text" name=maxprice placeholder=Maxprice />
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <p> Select your Car Type: </p>
                          <select name=carType id="category">
                            <option value="">- Category -</option>
                            <option value="1">SUV</option>
                            <option value="1">Sedan</option>
                            <option value="1">Hatchback</option>
                            <option value="1">Coupe</option>
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
