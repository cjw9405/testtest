<!DOCTYPE html>
<html lang="en">

<head>
<title>Rent</title>
</head>

<body>

<h1>Rent Car</h1>
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

echo <<<_END
<form action="addVehicle.php" method="post"><pre>
Select the type: <div><input type="checkbox" id="Motorcycle" name="Motorcycle"> <label for="Motorcycle">Motorcycle</label>
</div>
<div>
<input type="checkbox" id="Tank" name="Tank"> <label for="Tank">Tank</label>
</div>
<div>
<input type="checkbox" id="Car" name="Car"> <label for="Car">Car</label>
</div>
<input type="submit" value="Search">
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
