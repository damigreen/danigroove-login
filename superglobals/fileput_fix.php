<html>
  <head>
    <meta charset="UTF-8">
    <title>File Open</title>
  </head>
  <body>
  <?php
  
    $myFile = fopen('uploads/file.txt', 'w');

    
    $txt = "\n You are welcome = = ==  == = = = = = == -";

    // fwrite($myFile, $txt);
    fwrite($myFile, $txt);


    // fclose($myFile);
    echo "file cloesed =========================<br>";


  ?>

  </body>
</html>
