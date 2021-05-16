<?php
  require_once 'includes/header.php';
?>

<link rel="stylesheet" type="text/css"  href="style.css">
<div">
  <h1>Register</h1>
  <p>Already have an account? <a href="login.php">Login!</a></p>
  <form method="post" action="includes/register-inc.php">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirmPassword" placeholder="Confirm Password">
    <button type="submit" name="submit">REGISTER</button>
  </form>

</div>

<?php
  require_once 'includes/footer.php';
?>
