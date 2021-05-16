<?php
  require_once 'includes/header.php';
?>

<div class="go">
  <h1>Log in</h1>
  <p>No account? <a href="register.php">Register here!</a></p>
  <form method="post" action="includes/login-inc.php">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">LOGIN</button>
  </form>

</div>

<?php
  require_once 'includes/footer.php';
?>
