<?php   // login.php
  $hn = 'localhost';
  $db = 'hlps5';
  $un = 'grader';
  $pw = 'allowme';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
?>
