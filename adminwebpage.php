

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





.main_mid_btn {

width:100%;

height:60%;
text-align: center;


border-bottom-width:thin;
border-bottom:solid;

float:left;}

.main_bottom_btn {

width:100%;

height:20%;
text-align: center;
border-bottom-width:thin;
border-bottom:solid;


float:left;}







</style>



</head>

<body>

<div class="main_container">

<div class="main_title">
  <h2>Admin webpage</h2>


  <?php
   // adddelete.php
    require_once 'accessDatabase.php';
     session_start();

    if (isset($_SESSION['delete']) && isset($_SESSION['delete'])&& isset($_SESSION['delete'])){
        $id = $_SESSION['id'];
    }
echo "Hello";


?>

</div>


<div class="main_mid_btn"> <?php // adddelete.php

echo "Rent";
  if (isset($_POST['delete']) && isset($_POST['vid'])&& isset($_POST['pid'])&& isset($_POST['did'])) {

    $vid  = get_post($conn, 'vid');
    $pid  = get_post($conn, 'pid');
    $did  = get_post($conn, 'did');
    $query  = "DELETE FROM Rent WHERE vid='$vid' and pid='$pid' and did ='$did'";
    $result = $conn->query($query);
    $query  = "UPDATE Vehicle Set isrent =0  WHERE vid='$vid'";
    $result = $conn->query($query);
    if (!$result)
      echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";
  }

  $query  = "SELECT * FROM Rent";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo <<<_END
  <pre>
    vid $row[0]
    pid $row[1]
    did $row[2]
      </pre>
  <form action="adminwebpage.php" method="post">
  <input type="hidden" name="delete" value="yes">
  <input type="hidden" name="vid" value="$row[0]">
  <input type="hidden" name="pid" value="$row[1]">
  <input type="hidden" name="did" value="$row[2]">
  <input type="submit" value="DELETE RECORD"></form>
_END;
  }

  $result->close();
  $conn->close();

  // real_escape_string to strip out any characters that a hacker
  // may have inserted.
  function get_post($conn, $var) {
    return $conn->real_escape_string($_POST[$var]);
  }

?>

 </div>

<div class="main_bottom_btn">
<?php
 echo "Hi";
?>
 </div>

</div>

</body>

</html>
