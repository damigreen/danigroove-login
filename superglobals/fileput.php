<html>
  <head>
    <meta charset="UTF-8">
    <title>File Open</title>
  </head>
  <body>
  <?php
  
  print_r($_POST['age']); echo "<br><br>";

  // if (isset($_POST['submit'])) {
    echo "Proceed with these code ========================= <br>";


    $myFile = fopen('file.txt', 'w');
    echo "file opened =========================<br>";

    
    $txt = "\n You are welcome = = ==  == = = = = = == -";
    $txt = "My name is damilola. \n I am a hacker!!!!!!!!!!!!!!!!!!!!!!" . $_POST['age'];

    fwrite($myFile, $txt);
    echo "file written =========================<br>";


    fclose($myFile);
    echo "file cloesed =========================<br>";


  ?>

  <form action="fileput.php" method="post">
    <input type="text" name="age">
    <input type="submit" name="submit">
  </form>
  </body>
</html>
