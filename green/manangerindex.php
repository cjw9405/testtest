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
							<li><a href="defaultPage1.php" class="button primary fit">Log Out</a></li>

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
										<h2 id="content">Hello?</h2>
										<p> Hi Human, This page is for admin. Let's work like a dog and earn money. </p>
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
            require_once 'accessDatabase.php';


						if (isset($_POST['delete']) && isset($_POST['vid'])&& isset($_POST['pid'])&& isset($_POST['did'])) {

						  $vid  = get_post($conn, 'vid');
						  $pid  = get_post($conn, 'pid');
						  $did  = get_post($conn, 'did');
						  $query  = "DELETE FROM Rent WHERE vid='$vid' and pid='$pid' and did ='$did'";
						  $result = $conn->query($query);
						  $query  = "UPDATE Vehicle Set isrent =0  WHERE vid='$vid'";
						  $result = $conn->query($query);
						  if (!$result){echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";}
						  else{ echo '<p style="color: red;"> DELETE Sucess  rent  deleted.</p><br><br>';}

						}


						$query  = "SELECT * FROM Rent";
						$result = $conn->query($query);
						if (!$result) die ("Database access failed: " . $conn->error);

						$rows = $result->num_rows;

						if($rows==0){
							echo '<p style="color: red;"> Table is Empty </p>';

						}else{
							for ($j = 0 ; $j < $rows ; ++$j) {$result->data_seek($j);
							$row = $result->fetch_array(MYSQLI_NUM);

							$jb_delete = '
							<form action="manangerindex.php" method="post">
							<input type="submit" value="DELETE RECORD">
							<input type="hidden" name="delete" value="yes">
							<input type="hidden" name="vid" value="' . $row[0] . ' ">
							<input type="hidden" name="pid" value="' . $row[1] . ' ">
							<input type="hidden" name="did" value="' . $row[2] . ' ">
							</form>
						';

	echo "<tr><td>" . $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $jb_delete ."</td></tr>";

	  //   echo "1" . $row[0] ."1". $row[1] ."1". $row[2] ."1". $row[3] ."1". $row[4] ."1". $row[5] ."1". $jb_delete ."1";

							}

						}



					$conn->close();

					// real_escape_string to strip out any characters that a hacker
					// may have inserted.
					function get_post($conn, $var) {
						return $conn->real_escape_string($_POST[$var]);
					}



        ?>
      </tbody>
    </table>
											</div>

										<div class="col-4 col-12-medium">
												<h3>Interdum sapien gravida</h3>
												<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
											</div>
											<div class="col-4 col-12-medium">
												<h3>Faucibus consequat lorem</h3>
												<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
											</div>
											<div class="col-4 col-12-medium">
												<h3>Accumsan montes viverra</h3>
												<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
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
