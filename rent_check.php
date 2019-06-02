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

<!DOCTYPE html>
<html lang="en">
<head>
<title>Check the type of vehicle you want to Rent!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
}
</style>
</head>
<body>
  <div class="sidenav">
  <a href="information.php">About Our Company</a>
  <a href="openboard.php">OpenBoard</a>
  <a href="mysummercar.php">My Summer Car</a>
</div>

<form action="rentCar.php" method="post"><pre>
<div class="content">
  <h2>Check the type of vehicle you want to Rent!</h2>
  <p>Select the type:
    <input type="checkbox" name="vehicle[]" value = "Motorcycle" onclick="window.location='rentMotorcycle.php';"/> Motorcycle<br />
    <input type="checkbox" name="vehicle[]" value = "Tank" onclick="window.location='rentTank.php';"/> Tank<br />
    <input type="checkbox" name="vehicle[]" value = "Car" onclick="window.location='rentCar.php';"/> Car<br />
  </p>
</div>
</pre>
</form>
</body>
</html>
