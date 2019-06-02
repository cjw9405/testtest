<!DOCTYPE html>
<html lang="en">

<head>
<title>Which car do you want to rent?</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
    body{ font: 14px sans-serif; }
    .wrapper{ width: 350px; padding: 20px; }
</style>
</head>

<body>

<h1>Here's your Reservation result</h1>
<?php // adddelete.php
  require_once 'accessDatabase.php';
 //session_start();
// $id = $_SESSION['']

if(isset($_POST['searchCar']))
    {
    $carType = $_POST['carType'];
    if(empty($carType))
        {
      echo("<p>You didn't select any Type.</p>\n");
    }
    else
        {
            $N = count($carType);

      echo("<p>You selected $N: ");
      for($i=0; $i < $N; $i++)
      {
        echo($carType[$i] . " ");
      }
      echo("</p>");
    }
        //Checking whether a particular check box is selected
        //See the IsChecked() function below
        if(IsChecked('carType','A'))
        {
            echo ' SUV is checked. ';
        }
        if(IsChecked('carType','B'))
        {
            echo ' Convertible is checked. ';
        }
        if(IsChecked('carType','C'))
        {
            echo ' Sedan is checked. ';
        }
        if(IsChecked('carType','D'))
        {
            echo ' Hatchback is checked. ';
        }
        if(IsChecked('carType','E'))
        {
            echo ' Coupe is checked. ';
        }
        //and so on
  }

    function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
?>

<form action="rervationConfirm.php" method="post"><pre>

</pre></form>

</body>
</html>
