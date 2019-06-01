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

width:100%;

height:80%;


text-align: center;

float:left;}


</style>



</head>

<body>

<div class="main_container">

<div class="main_title">
  <h1>Delete Obnoxious Customer </h1>

  <?php
   // adddelete.php
    require_once 'accessDatabase.php';
   //session_start();
  // $id = $_SESSION['']

  if (isset($_POST['delete']) &&
      isset($_POST['pid'])) {

    $pid  = get_post($conn, 'pid');

      $query  = "DELETE FROM  People WHERE pid='$pid'";
      $result = $conn->query($query);
      if (!$result){
          echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";}
      else{
         echo "DELETE Sucess: $query<br>" . $conn->error . "<br><br>";}



  }
?>
<li><a href="adminwebpage.php">Go to the Index </a></li><br>
</div>

<div class="main_left_btn">
  <?php
  echo "Obnoxious customer Black List <br><br>" ;
  $query  = "SELECT P.pid as pid,name,password,username,email,telephoneNumber FROM People P,Customer C Where P.pid= C.pid and C.ranking= 'F' ";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j) {$result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);

  echo <<<_END

Customer Id:  $row[0]  Name:  $row[1] Password:  $row[2]  Email: $row[3]  UserName: $row[4] TelephoneNumber: $row[5]   <form action="deleteCustomer.php" method="post">
<input type="submit" value="DELETE RECORD">
<br><br>
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="pid" value="$row[0]">

</form>
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
