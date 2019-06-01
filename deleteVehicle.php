<!DOCTYPE html>
<html lang="en">

<head>
<title>PHP and MySQL</title>
</head>

<body>

<h1>Delete the Vehicle</h1>
<?php // adddelete.php
  require_once 'accessDatabase.php';
 //session_start();
// $id = $_SESSION['']

if (isset($_POST['delete']) &&
    isset($_POST['vid'])) {

  $vid  = get_post($conn, 'vid');

  $query  = "SELECT * FROM Rent WHERE vid='$vid'";
  $result = $conn->query($query);
  if($result->num_rows >0){
    echo "The vehicle can not be removed because some customer has already rented it.<br><br>";
  }else{
    $query  = "DELETE FROM Vehicle WHERE vid='$vid'";
    $result = $conn->query($query);
    if (!$result){
        echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";}
    else{
       echo "DELETE Sucess: $query<br>" . $conn->error . "<br><br>";}
  }


}
echo "Motorcycles";

$query  = "SELECT * FROM Motorcycle";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);

$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j) {
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);

  echo <<<_END
<pre>
  vid $row[0]
  speed $row[1]
  enginecapacity $row[2]
  color $row[3]
    </pre>
<form action="deleteVehice.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="vid" value="$row[0]">
<input type="submit" value="DELETE RECORD"></form>
_END;
}

echo "Tank";

$query  = "SELECT * FROM Tank";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);

$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j) {
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);

  echo <<<_END
<pre>
  vid $row[0]
  speed $row[1]
  shell $row[2]
  armor $row[3]
    </pre>
<form action="deleteVehice.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="vid" value="$row[0]">
<input type="submit" value="DELETE RECORD"></form>
_END;
}
echo "Car";

$query  = "SELECT * FROM Car";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);

$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j) {
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);

  echo <<<_END
<pre>
  vid $row[0]
  type $row[1]
  color $row[2]
  speed $row[3]
  enginecapacity $row[4]
    </pre>
<form action="deleteVehice.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="vid" value="$row[0]">
<input type="submit" value="DELETE RECORD"></form>
_END;
}






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
