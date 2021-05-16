<?php

  echo"Hell Yeah I rock<br>";

  // print_r($_POST['name']); echo "<br>";
  // print_r($_POST['email']);  echo "<br>";
  // print_r($_POST['subject']);  echo "<br>";

  // if (isset($_POST['submit'])) {
  //   print_r($_POST['submit']); echo "<br>";
  // }


  if (isset($_POST['submit'])) {
    $name = trim($POST['name']);
    $email = trim($POST['email']);
    $subject = trim($POST['subject']);
    $message = trim($POST['message']);

    $myMail = "damilola.faseun@gmail.com";
    $header = "From: " . $email;
    $message2 = "You have received a message from " . $name . "\n\n" . $message;

    mail($myMail, $subject, $message2, $header);
    header("Location: index.php?mail sent");
  } else echo "I get it now it should be square brackets not paranthesis";
    

?>