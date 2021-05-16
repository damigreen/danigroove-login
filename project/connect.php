<?php

  require_once 'includes/database.php';
  require_once 'includes/header.php';
  require_once 'includes/footer.php';

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>MYSQL Database Connection</title>
  </head>
  <body>
  <?php

    // $sql = "SELECT * FROM users WHERE id = 5";
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    $fieldCount = mysqli_field_count($conn);

    if ($rowCount > 0) {
      echo "Username   Password <br><br>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row['username'] . " " . $row['password'] . "<br>";
      }

    } else {
      echo "No result found!";
    }

    echo "<br>";
    echo "There are " .  $rowCount . " rows" . "<br>";
    echo "There are " .  $fieldCount . " fields" . "<br>";
    print_r($result) . "<br>";
  ?>

  </body>
</html>