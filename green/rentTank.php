<!DOCTYPE html>
<html lang="en">

<head>
<title>Which Tank do you want to rent?</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
    body{ font: 14px sans-serif; }
    .wrapper{ width: 350px; padding: 20px; }
</style>
</head>

<body>

<h1>Which Tank do you want to rent?</h1>
<?php
  //require_once 'accessDatabase.php';

  //if(isset($_POST['searchTank']) &&
      //isset($_POST['Minprice']) &&
      //isset($_POST['Maxprice']) &&
      //isset($_POST['color']) &&
      // isset($_POST['maker'])){
      // $maker = $_POST['maker'];
      // $maxprice = $_POST['Maxprice'];
      // $minprice = $_POST['Minprice'];
      // $color = $_POST['color'];
      //
      // $query = "SELECT * FROM tank T, Vehicle V WHERE T.vid = V.vid AND T.color = $color AND V.price >= $minprice
      // && V.price <= $maxprice AND V.maker = $maker";
      // $result   = $conn->query($query);
      // if(!$result){
      //   echo "Selection failed: $query<br>" . $conn->error . "<br><br>";
      // }else{
      // echo "INSERT Sucess: $query<br>" . $conn->error . "<br><br>";
      // }

  ?>

<form action="showReservation.php" method="post"><pre>
Type your price range:
    MIN<input type="text" name="Minprice">  MAX<input type="text" name="Maxprice"><br />
Color: <input type="color" id="head" name="head" value="#e66465"><br />

<input type="submit" name = "searchTank" value="SEARCH">
</pre>

<p>Wanna reserve another vehicle? <a href="rent_check.php">Choose type of your Vehicle!</a>.</p>
</form>
</body>
</html>
