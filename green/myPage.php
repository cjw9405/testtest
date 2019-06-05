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
										<h1>Customer Webpage </h1>
									</header>

									<!-- Content -->
										<h2 id="content">Hello?</h2>
									<?php
									require_once 'accessDatabase.php';
									session_start();
									$MYID  = $_SESSION['pid'] ;
                  echo "string".$MYID;


					    	$query  = "SELECT P.name,P.email,P.telephoneNumber,C.ranking From People P,Customer C WHERE P.pid=C.pid and P.pid='$MYID'";
									$result = $conn->query($query);
								  $result->data_seek(0);
									$row = $result->fetch_array(MYSQLI_NUM);
                   $name= $row[0];
									 $email= $row[1];
                  $telephoneNumbe= $row[2];
                   $ranking= $row[3];
									echo '<p>  Hello <b>'. $name. ' </b>, nice to meet you. </p>';




									?>

										<div class="row">
											<div class="col-12 col-12-small">
												<h3 style="text-align:center">Rent List</h3>
												<br>
												<table>

      <thead>
        <tr>
          <th>Vehices Id number</th>
          <th>Customer Id numner</th>
					  <th>Duration Id number</th>
        </tr>
      </thead>
      <tbody>
        <?php



						$query  = "SELECT * FROM Rent WHERE pid='$MYID'";
						$result = $conn->query($query);
						if (!$result) die ("Database access failed: " . $conn->error);

						$rows = $result->num_rows;

						if($rows==0){
							echo '<p style="color: red;"> Table is Empty </p>';

						}else{
							for ($j = 0 ; $j < $rows ; ++$j) {$result->data_seek($j);
							$row = $result->fetch_array(MYSQLI_NUM);



	echo "<tr><td>" . $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td></tr>";



							}

						}





					// real_escape_string to strip out any characters that a hacker
					// may have inserted.






        ?>
      </tbody>
    </table>
											</div>

										<div class="col-12 col-12-medium">

							<?php
   // slary of






function get_post($conn, $var) {
 return $conn->real_escape_string($_POST[$var]);
}

	$conn->close();

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