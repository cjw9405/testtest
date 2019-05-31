
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
  if (!$result) echo "INSERT failed: $query<br>" .
    $conn->error . "<br><br>";
$query = "INSERT INTO Motorcycle (vid,speed,enginecapacity,color) VALUES" .
      "('$vid', '$speed', '$enginecapacity','$color')";
    $result   = $conn->query($query);
    if (!$result) echo "INSERT failed: $query<br>" .
      $conn->error . "<br><br>";
  if ($result) echo "INSERT sucess<br>" .
}

echo <<<_END
<form action="addVehicle.php" method="post"><pre>
Vid <input type="text" name="vid">
Model<input type="text" name="model">
Maker <input type="text" name="maker">
Price <input type="text" name="price">
Speed<input type="text" name="speed">
Enginecapacity <input type="text" name="enginecapacity">
Color <input type="text" name="color">
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
  if (!$result) echo "INSERT failed: $query<br>" .
    $conn->error . "<br><br>";
$query = "INSERT INTO Tank (vid,speed,shell,armor) VALUES" .
      "('$vid', '$speed', '$shell','$armor')";
    $result   = $conn->query($query);
    if (!$result) echo "INSERT failed: $query<br>" .
      $conn->error . "<br><br>";
  if ($result) echo "INSERT sucess<br>" .
}

echo <<<_END
<form action="addVehicle.php" method="post"><pre>
Vid <input type="text" name="vid">
Model<input type="text" name="model">
Maker <input type="text" name="maker">
Price <input type="text" name="price">
Speed<input type="text" name="speed">
Shell <input type="text" name="shell">
Armor <input type="text" name="armor">
         <input type="submit" value="Add Tank">
</pre></form>
_END;
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
  if (!$result) echo "INSERT failed: $query<br>" .
    $conn->error . "<br><br>";
$query = "INSERT INTO Motorcycle (vid,speed,enginecapacity,color) VALUES" .
      "('$vid', '$speed', '$enginecapacity','$color')";
    $result   = $conn->query($query);
    if (!$result) echo "INSERT failed: $query<br>" .
      $conn->error . "<br><br>";
  if ($result) echo "INSERT sucess<br>" .
}

echo <<<_END
<form action="addVehicle.php" method="post"><pre>
Vid <input type="text" name="vid">
Model<input type="text" name="model">
Maker <input type="text" name="maker">
Price <input type="text" name="price">
Speed<input type="text" name="speed">
Enginecapacity <input type="text" name="enginecapacity">
Color <input type="text" name="color">
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
