<?php   // login.php
  $hn = 'localhost';
  $db = 'hlps5';
  $un = 'grader';
  $pw = 'allowme';
  $link = mysqli_connect('localhost','grader', 'allowme', 'hlps5');
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
?>
