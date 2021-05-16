<?php
  if (isset($_POST["submit"])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name']; //Find file name
    $tmp_name = $_FILES['file']['tmp_name']; // TEmp location
    echo $tmp_name; echo "<br>";
    echo $name; echo "<br>";
    $size = $_FILES['file']['size']; // Find file size
    $error = $_FILES['file']['error']; //Find errors

    // Explode from punctuation mark
    $tempExtension = explode('.', $name);
    $fileExtension = strtolower(end($tempExtension));
    // Allowed extensions
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');


    // 0 - no error - 1 = error
    if (in_array($fileExtension, $isAllowed)) {
      if ($error === 0) {
        if ($size < 30000) {
          $newFileName = uniqid('', true) . "." . $fileExtension;
          // $fileDestination = "./home/damilola/{$newFileName}";
          $fileDestination = "{$newFileName}";
          
          move_uploaded_file($tmp_name, $fileDestination);
          header("Location: files.php?uploadedsuccess");
        } else {
          echo ' Your file is too big';
        }
      } else {
        echo "Sorry, there was an error! Try again";
      }
    } else {
      echo 'Sorry! your file is not supported';
    }

  } else {
    echo "Devil is a lie===========================================";
  }

?>