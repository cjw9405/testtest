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
						<a href="manangerindex.php" class="logo">Formula <span>by Pixelarity</span></a>
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
										<h1>Admin Webpage </h1>
									</header>

									<!-- Content -->

										<p> This page is for delete Customer. </p>
										<div class="row">
											<div class="col-12 col-12-small">
												<h3 style="text-align:center">Delete Obnoxious customer Black List  </h3>
                        <?php
                         // adddelete.php
                          require_once 'accessDatabase.php';
                         //session_start();
                        // $id = $_SESSION['']

                        if (isset($_POST['delete']) &&
                            isset($_POST['pid'])) {

                          $pid  = get_post($conn, 'pid');

                            $query  = "DELETE FROM  People WHERE pid='$pid'";
                            $result = $conn->query($query);
                            if (!$result){
                                echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";}
                            else{
                               echo "DELETE Sucess: $query<br>" . $conn->error . "<br><br>";}



                        }
                      ?>
                      <div class="col-12 col-12-small">
												<h3 style="text-align:center">Credit Rating F Customer Black List</h3>
                        <?php

                        $query  = "SELECT P.pid as pid,name,password,username,email,telephoneNumber FROM People P,Customer C Where P.pid= C.pid and C.ranking= 'F' ";
                        $result = $conn->query($query);
                        if (!$result) die ("Database access failed: " . $conn->error);

                        $rows = $result->num_rows;
                        for ($j = 0 ; $j < $rows ; ++$j) {$result->data_seek($j);
                        $row = $result->fetch_array(MYSQLI_NUM);

                        echo <<<_END
  <div style="text-align:center">
                      Customer Id:  $row[0] <br> Name:  $row[1] <br>Password:  $row[2] <br> Email: $row[3] <br> UserName: $row[4] <br> TelephoneNumber: $row[5] <br>  <form action="mangerDeleteCustomer.php" method="post">
                      <input type="submit" value="DELETE RECORD">
                      <br><br>
                      <input type="hidden" name="delete" value="yes">
                      <input type="hidden" name="pid" value="$row[0]">

                      </form>
                      </div>
_END;

                        }


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
