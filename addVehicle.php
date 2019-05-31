<!DOCTYPE html>
<html lang="en">

<head>
<title>PHP and MySQL</title>
</head>

<body>

<h1>Add the Vehicle</h1>
<?php // adddelete.php
  require_once 'accessDatabase.php';
 //session_start();
// $id = $_SESSION['']


if (isset($_POST['vid'])   &&
    isset($_POST['model'])    &&
    isset($_POST['maker']) &&
    isset($_POST['price'])     &&
    isset($_POST['speed'])&&
    isset($_POST['enginecapacity'])&&
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
echo "Motorcycle <br>";
echo <<<_END
<form action="addVehicle.php" method="post"><pre>
Vid <input type="text" name="vid"> <br>
Model<input type="text" name="model"> <br>
Maker <input type="text" name="maker"><br>
Price <input type="text" name="price"><br>
Speed<input type="text" name="speed"><br>
Enginecapacity <input type="text" name="enginecapacity"><br>
Color <input type="text" name="color">
<br>
<input type="submit" value="Add motorcycle">
</pre></form>
_END;

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
echo "Tank <br>";
echo <<<_END
<form action="addVehicle.php" method="post"><pre>
Vid <input type="text" name="vid"><br>
Model<input type="text" name="model"><br>
Maker <input type="text" name="maker"><br>
Price <input type="text" name="price"><br>
Speed<input type="text" name="speed"><br>
Shell <input type="text" name="shell"><br>
Armor <input type="text" name="armor">
<br>
<input type="submit" value="Add Tank">
</pre></form>
_END;

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
echo "Car <br>";
echo <<<_END
<form action="addVehicle.php" method="post"><pre>
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
</pre></form>
_END;







  $conn->close();

  // real_escape_string to strip out any characters that a hacker
  // may have inserted.
  function get_post($conn, $var) {
    return $conn->real_escape_string($_POST[$var]);
  }

?>

<li><a href="adminwebpage.php">Go to the Index </a></li><br>
</body>
</html>
