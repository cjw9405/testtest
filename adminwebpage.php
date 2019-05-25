<?php // adddelete.php
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);

  if (isset($_POST['delete']) && isset($_POST['title'])) {
    $title   = get_post($conn, 'title');
    $query  = "DELETE FROM Book WHERE title='$title'";
    $result = $conn->query($query);
    if (!$result)
      echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";
  }

  if (isset($_POST['author'])   &&
      isset($_POST['title'])    &&
      isset($_POST['category']) &&
      isset($_POST['year'])     &&
      isset($_POST['price'])) {
    $author   = get_post($conn, 'author');
    $title    = get_post($conn, 'title');
    $category = get_post($conn, 'category');
    $year     = get_post($conn, 'year');
    $price    = floatval(get_post($conn, 'price'));

    $query = "INSERT INTO Book (author, title, category, year, price) VALUES" .
      "('$author', '$title', '$category', '$year', '$price')";
    $result   = $conn->query($query);
    if (!$result) echo "INSERT failed: $query<br>" .
      $conn->error . "<br><br>";
  }

  echo <<<_END
  <form action="adddelete.php" method="post"><pre>
    Author <input type="text" name="author">
     Title <input type="text" name="title">
  Category <input type="text" name="category">
      Year <input type="text" name="year">
     Price <input type="text" name="price">
           <input type="submit" value="ADD RECORD">
  </pre></form>
_END;

  $query  = "SELECT * FROM Book";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo <<<_END
  <pre>
     Title $row[0]
    Author $row[1]
  Category $row[2]
      Year $row[3]
     Price $row[4]</pre>
  <form action="adddelete.php" method="post">
  <input type="hidden" name="delete" value="yes">
  <input type="hidden" name="title" value="$row[0]">
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
