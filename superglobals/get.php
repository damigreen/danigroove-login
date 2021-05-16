<?php

print_r($_GET);

if (isset($_GET)) {
  echo $_GET['name'] . ",  your form is submitted";
};

echo"<br>";
print_r($_GET);
echo"<br>";              


?>