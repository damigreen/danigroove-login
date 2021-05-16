<?php
  require_once 'includes/database.php';
  require_once 'includes/header.php';
?>

<?php

  if (isset($_SESSION['sessionId'])) {
    echo $_SESSION['sessionUser'] . " is logged in";


  }

?>

<?php
  require_once 'includes/home.php';

?>

<?php
  require_once 'includes/footer.php';
?>
