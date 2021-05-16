<html>
  <head>
    <meta charset="UTF-8">
    <title>Get Files</title>
  </head>
  <body>
  <?php
    $filePath = "uploads/file.txt";
    $fileAgePath = "uploads/fileAge.txt";

    $output = file_get_contents($filePath);
    $outputAge = file_get_contents($fileAgePath);
    // echo $output . "<br>";

    $totalAge = 0;
    $i = 0;
    $ages = explode("\n", $outputAge);
    foreach($ages as $age) {
      echo $age . "<br>";
      $totalAge += $age;
      $i++;
    }

    echo "The average age is " . ($totalAge / $i) . "<br>";
  ?>

  </body>
</html>
