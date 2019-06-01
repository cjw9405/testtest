<!DOCTYPE html>
<html lang="en">

<head>
<title>PHP and MySQL</title>
<style>



.main_container {

width:100%;

height:100%;
}



.main_title {

width:100%;

height:20%;

float:left;


text-align: center;
border-bottom-width:thin;
border-bottom:solid;}



.main_left_btn {

width:35%;

height:80%;


text-align: center;

float:left;}

.main_mid_btn {

width:30%;

height:80%;
text-align: center;



float:left;}



.main_right_btn {

width:35%;

height:80%;


text-align: center;

float:left;}





</style>



</head>

<body>

<div class="main_container">

<div class="main_title">
  <h1>Delete the Vehicle</h1>

  <?php
   // adddelete.php
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
?>
<li><a href="adminwebpage.php">Go to the Index </a></li><br>
</div>

<div class="main_left_btn">
  <?php
  echo "Motorcycles";

  $query  = "SELECT * FROM Motorcycle";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j) {$result->data_seek($j);
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
?>

</div>

<div class="main_mid_btn">  <?php
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

?></div>

<div class="main_right_btn"> <?php
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



?></div>


</div>

</body>

</html>
