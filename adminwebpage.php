<?php // adddelete.php
  require_once 'accessDatabase.php';
 //session_start();
// $id = $_SESSION['']



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
<!DOCTYPE html>
<html lang="en">

<head>
<title>PHP and MySQL</title>
</head>

<body>

<h2>Admin webpage</h2>

<ol>

<li><a href="addVehicle.php">addVehicle.php</a></li><br>

<li><a href="deleteVehice.php">deleteVehice.php</a></li><br>

<li><a href="deleteCustomer.php">deleteCustomer.php</a></li><br>


</ol>

</body>
</html>
