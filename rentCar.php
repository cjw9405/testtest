<!DOCTYPE html>
<html lang="en">

<head>
<title>Rent</title>
</head>

<body>

<h1>Which car do you want to rent? </h1>
<?php // adddelete.php
  require_once 'accessDatabase.php';
 //session_start();
// $id = $_SESSION['']

$car = $_POST['Type'];
if(empty($car))
  {
    echo("You didn't select any type.");
  }
  else
  {
    $N = count($car);

    echo("You selected $N type: ");
    for($i=0; $i < $N; $i++)
    {
      echo($car[$i] . " ");
    }
  }
// if (isset($_POST['vid'])   &&
//     isset($_POST['model'])    &&
//     isset($_POST['maker']) &&
//     isset($_POST['price'])     &&
//     isset($_POST['speed'])&&
//     isset($_POST['enginecapacity'])&&
//     isset($_POST['color'])) {
//   $vid   = $_POST['vid'];
//   $model   = $_POST['model'];
//   $maker = $_POST['maker'];
//   $price     = $_POST['price'];
//   $speed   = $_POST['speed'];
//   $enginecapacity    = $_POST['enginecapacity'];
//   $color    = $_POST['color'];
//
//   $query = "INSERT INTO Vehicle (vid,model,maker,price,isrent) VALUES" .
//     "('$vid', '$model', '$maker', '$price ', 0)";
//   $result   = $conn->query($query);
//   if(!$result){
//     echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
//   }else{
//   echo "INSERT Sucess: $query<br>" . $conn->error . "<br><br>";
//   }
//
// $query = "INSERT INTO Motorcycle (vid,speed,enginecapacity,color) VALUES" .
//       "('$vid', '$speed', '$enginecapacity','$color')";
//     $result   = $conn->query($query);
//     if(!$result){
//       echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
//     }else{
//     echo "INSERT Sucess<br><br>";
//     }
//
//
// }

echo <<<_END
<form action="addVehicle.php" method="post"><pre>
Type:<br />
    <input type="checkbox" id="Type[]" value="A" />SUV<br />
    <input type="checkbox" id="Type[]" value="B" />Convertible<br />
    <input type="checkbox" id="Type[]" value="C" />Sedan<br />
    <input type="checkbox" id="Type[]" value="D" />Hatchback<br />
    <input type="checkbox" id="Type[]" value="E" />Coupe<br />
Type your price range:
    MIN<input type="text" name="Minprice">  MAX<input type="text" name="Maxprice"><br />
Color: <input type="color" id="head" name="head" value="#e66465"><br />

<input type="submit" value="SEARCH"></form>
</pre></form>
_END;

  echo  "<br><br>";



  $conn->close();

  // real_escape_string to strip out any characters that a hacker
  // may have inserted.
  function get_post($conn, $var) {
    return $conn->real_escape_string($_POST[$var]);
  }

?>


</body>
</html>
