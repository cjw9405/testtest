<?php // adddelete.php
// require_once 'accessDatabase.php';
// if(isset($_POST['searchCar']) &&
//     isset($_POST['carType']) &&
//     isset($_POST['Minprice']) &&
//     isset($_POST['Maxprice']) &&
//     isset($_POST['color']) &&
//     isset($_POST['maker'])){
//     $maker = $_POST['maker'];
//     $maxprice = $_POST['Maxprice'];
//     $minprice = $_POST['Minprice'];
//     $color = $_POST['color'];
//     $carType = $_POST['carType'];
//
//     if(empty($carType))
//         {
//       echo("<p>You didn't select any Type.</p>\n");
//     }
//     else
//         {
//             $N = count($carType);
//
//       echo("<p>You selected $N: ");
//       for($i=0; $i < $N; $i++)
//       {
//         echo($carType[$i] . " ");
//       }
//       echo("</p>");
//     }
//         //Checking whether a particular check box is selected
//         //See the IsChecked() function below
//         if(IsChecked('carType','A'))
//         {
//             echo ' SUV is checked. ';
//         }
//         if(IsChecked('carType','B'))
//         {
//             echo ' Convertible is checked. ';
//         }
//         if(IsChecked('carType','C'))
//         {
//             echo ' Sedan is checked. ';
//         }
//         if(IsChecked('carType','D'))
//         {
//             echo ' Hatchback is checked. ';
//         }
//         if(IsChecked('carType','E'))
//         {
//             echo ' Coupe is checked. ';
//         }
//         //and so on
//   }
//
//     function IsChecked($chkname,$value)
//     {
//         if(!empty($_POST[$chkname]))
//         {
//             foreach($_POST[$chkname] as $chkval)
//             {
//                 if($chkval == $value)
//                 {
//                     return true;
//                 }
//             }
//         }
//         return false;
//     }
//     $query = "SELECT * FROM car C, Vehicle V WHERE C.vid = V.vid AND C.type = $carType AND C.color = $color AND V.price >= $minprice
//     && V.price <= $maxprice AND V.maker = $maker";
//     $result   = $conn->query($query);
//     if(!$result){
//       echo "Selection failed: $query<br>" . $conn->error . "<br><br>";
//     }else{
//     echo "INSERT Sucess: $query<br>" . $conn->error . "<br><br>";
//     }
//
//       // real_escape_string to strip out any characters that a hacker
//       // may have inserted.
//       function get_post($conn, $var) {
//         return $conn->real_escape_string($_POST[$var]);
//       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" media="screen">
<title>Which car do you want to rent?</title>
<style type="text/css">
    body{
      background-image: url("rentcarbackground.gif");
      font: 14px sans-serif; }
    .wrapper{ width: 350px; padding: 20px; }
</style>
</head>

<body>

<h1>Which car do you want to rent?</h1>
<form action="showReservation.php" method="post"><pre>
Type:<br />
    <input type="checkbox" name="carType[]" value="A" />SUV<br />
    <input type="checkbox" name="carType[]" value="B" />Convertible<br />
    <input type="checkbox" name="carType[]" value="C" />Sedan<br />
    <input type="checkbox" name="carType[]" value="D" />Hatchback<br />
    <input type="checkbox" name="carType[]" value="E" />Coupe<br />
Type your price range:
    MIN<input type="text" name="Minprice">  MAX<input type="text" name="Maxprice"><br />
Color: <input type="color" id="head" name="color" value="#e66465"><br />

<input type="submit" name = "searchCar" value="SEARCH">
</pre>

<p>Wanna reserve another vehicle? <a href="rent_check.php">Choose type of your Vehicle!</a>.</p>
</form>
</body>
</html>
