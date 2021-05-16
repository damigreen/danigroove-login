<?php

if (isset($_POST)) {
  echo $_POST['name'] . ",  your form is submitted";
};

echo"<br>";
print_r($_POST);
echo"<br>";              


?>