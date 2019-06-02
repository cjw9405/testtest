<?php //rent_check.php
  require_once 'accessDatabase.php';

  if(isset($_POST['searchVehicle']))
      {
  		$vehicle = $_POST['vehicle'];
  		if(empty($vehicle))
          {
  			echo("<p>You didn't select any vehicles.</p>\n");
  		}
      else
          {
              $N = count($vehicle);

  			echo("<p>You selected $N: ");
  			for($i=0; $i < $N; $i++)
  			{
  				echo($vehicle[$i] . " ");
  			}
  			echo("</p>");
  		}
          //Checking whether a particular check box is selected
          //See the IsChecked() function below
          if(IsChecked('vehicle','Motorcycle'))
          {
              echo ' Motorcycle is checked. ';
          }
          if(IsChecked('vehicle','Tank'))
          {
              echo ' Tank is checked. ';
          }
          if(IsChecked('vehicle','Car'))
          {
              echo ' Car is checked. ';
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
  ?>
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
  		<link rel="stylesheet" href="green/assets/css/main.css" />
  	</head>
  	<body class="is-preload">

  		<!-- Page Wrapper -->
  			<div id="page-wrapper">

  				<!-- Header -->
  					<header id="header">
  						<a href="green/index.html" class="logo">grand rental auto <span>by </span></a>
  						<nav>
  							<ul>
  								<li><a href="#menu">Menu</a></li>
  							</ul>
  						</nav>
  					</header>

  				<!-- Menu -->
  					<nav id="menu">
  						<ul class="links">
  							<li><a href="index.html">Home</a></li>
  							<li><a href="generic.html">Generic</a></li>
  							<li><a href="elements.html">Elements</a></li>
  						</ul>
  						<ul class="actions stacked">
  							<li><a href="#" class="button primary fit">Sign Up</a></li>
  							<li><a href="#" class="button fit">Log In</a></li>
  						</ul>
  					</nav>

  				<!-- Banner -->
  					<section id="banner" data-video="images/banner">
  						<div class="inner">
  							<header>
  								<h1>Welcome to our Rental system</h1>
  								<p>We offer you the best quality!<br />
  								</p>
  							</header>
  							<ul class="actions special">
  								<li><a href="#" class="button primary large">Get Started</a></li>
  							</ul>
  						</div>
  						<a href="#one" class="more">Learn More</a>
  						<video src="" muted autoplay loop playsinline></video>
  					</section>

  				<!-- Wrapper -->
  					<div id="wrapper">

  						<!-- One -->
  							<section id="one" class="main">
  								<div class="inner spotlight style1">
  									<div class="content">
  										<header>
  											<h2>Rent Car?</h2>
  										</header>
  										<p>Ipsum efficitur nisi ac turpis venenatis varius. Suspendisse sed dictum leo ipsum amet pellentesque fusce ac hendrerit consectetur tempor risus, sed eget semper nunc. eleifend facilisis nisi vitae lorem ipsum dolor consequat lorem ipsum etiam.</p>
                      <ul class="actions special">
                        <li><a href="rentCar.php" class="button primary large">Rent</a></li>
                      </ul>
  									</div>
  									<!--
  										Note: You can replace the image below with a JPEG or PNG. Just make sure it's exactly
  										320x340 or at least the same aspect ratio (16:17).
  									-->
  									<span class="image"><img src="image/pic01.svg" alt="" /></span>
  								</div>
  							</section>

  						<!-- Two -->
  							<section id="two" class="main">
  								<div class="inner spotlight alt style2">
  									<div class="content">
  										<header>
  											<h2>Rent Motorcycle?</h2>
  										</header>
  										<p>Ipsum efficitur nisi ac turpis venenatis varius. Suspendisse sed dictum leo ipsum amet pellentesque fusce ac hendrerit consectetur tempor risus, sed eget semper nunc. eleifend facilisis nisi vitae lorem ipsum dolor consequat lorem ipsum etiam.</p>
                      <ul class="actions special">
                        <li><a href="rentMotorcycle.php" class="button primary large">Rent</a></li>
                      </ul>
  									</div>
  									<!--
  										Note: You can replace the image below with a JPEG or PNG. Just make sure it's exactly
  										320x340 or at least the same aspect ratio (16:17).
  									-->
  									<span class="image"><img src="image/pic02.svg" alt="" /></span>
  								</div>
  							</section>

  						<!-- Three -->
  							<section id="three" class="main">
  								<div class="inner spotlight style3">
  									<div class="content">
  										<header>
  											<h2>Rent Tank?</h2>
  										</header>
  										<p>Ipsum efficitur nisi ac turpis venenatis varius. Suspendisse sed dictum leo ipsum amet pellentesque fusce ac hendrerit consectetur tempor risus, sed eget semper nunc. eleifend facilisis nisi vitae lorem ipsum dolor consequat lorem ipsum etiam.</p>
                      <ul class="actions special">
                        <li><a href="rentTank.php" class="button primary large">Rent</a></li>
                      </ul>
  									</div>
  									<!--
  										Note: You can replace the image below with a JPEG or PNG. Just make sure it's exactly
  										320x340 or at least the same aspect ratio (16:17).
  									-->
  									<span class="image"><img src="image/pic03.svg" alt="" /></span>
  								</div>
  							</section>

  						<!-- Four -->
  							<section id="four" class="main special">
  								<div class="inner">
  									<header>
  										<h2>Tempor Suspendisse</h2>
  									</header>
  									<div class="features">
  										<section>
  											<span class="icon major fa-diamond style1"></span>
  											<h3>Magna Veroeros</h3>
  											<p>Consequat turpis venenatis varius lorem sed dictum ipsum amet pellentesque fusce hendrerit consectetur risus, sed eget semper nunc.</p>
  										</section>
  										<section>
  											<span class="icon major fa-laptop style2"></span>
  											<h3>Risus Adipiscing</h3>
  											<p>Consequat turpis venenatis varius lorem sed dictum ipsum amet pellentesque fusce hendrerit consectetur risus, sed eget semper nunc.</p>
  										</section>
  										<section>
  											<span class="icon major fa-bar-chart style3"></span>
  											<h3>Leo Ipsum Varius</h3>
  											<p>Consequat turpis venenatis varius lorem sed dictum ipsum amet pellentesque fusce hendrerit consectetur risus, sed eget semper nunc.</p>
  										</section>
  										<section>
  											<span class="icon major fa-save style4"></span>
  											<h3>Dolor Consequat</h3>
  											<p>Consequat turpis venenatis varius lorem sed dictum ipsum amet pellentesque fusce hendrerit consectetur risus, sed eget semper nunc.</p>
  										</section>
  									</div>
  								</div>
  							</section>

  						<!-- CTA -->
  							<section id="cta" class="main special">
  								<div class="inner">
  									<p>Sed varius suspendisse dictum leo ipsum amet pellentesque<br />
  									fusce ac hendrerit consectetur tempor lorem ipsum.</p>
  									<ul class="actions stacked special">
  										<li><a href="#" class="button primary large">Get Started</a></li>
  										<li><a href="#" class="button large">Learn More</a></li>
  									</ul>
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
