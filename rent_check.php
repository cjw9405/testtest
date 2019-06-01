<!DOCTYPE html>
<html lang="en">

<head>
<title>Check the type of vehicle you want to Rent!</title>
</head>

<body>

<h1>Check the type of vehicle you want to Rent!</h1>

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

<form action="rentCar.php" method="post"><pre>
Select the type: <div>
<input type="checkbox" name="vehicle[]" value = "Motorcycle" onclick="window.location='rentMotorcycle.php';"/> Motorcycle<br />
<input type="checkbox" name="vehicle[]" value = "Tank" onclick="window.location='rentTank.php';"/> Tank<br />
<input type="checkbox" name="vehicle[]" value = "Car" onclick="window.location='rentCar.php';"/> Car<br />
</div>
</pre></form>


</body>
</html>
