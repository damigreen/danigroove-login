<html>
    <head>
        <meta charset="UTF-8">
        <title>Superglobals</title>
    </head>
    <body>
        <?php

        echo "<h1>Superglobals</h1>";
        // Superglobals
        // GLOBALS
        // $_POST
        // $_GET
        // $_SERVER
        // $_COOKIE
        // $_SESSION
        // $_FILES

      // Superglobals are variables that are available from any part of the code
      // $_COOKIE and $_SESSION - They are used to store information for later use
      // Mainly used to store and get infirmation from one page to another

      // Global is a superglobal varaible used to access global variable from anywhere in a script
      // Post is used to collect data from a form whenever it wants to be submitted
      // Get is used to collect data from html form after submitting it
      // Server is used to source information about header, stats, scripts, and locations
      // Cookiesa is a small file that the web server stores in the client computer - used to track information like username
      // Session - stores information on server rather than client - information is destroyed everytime browser is closed
      // files is a two dimensional associative global array of items which are uploaded via the post method
       
      echo "<h2>GLOBALS</h2>";
      $x = 100;
      $y = 200;

      function add() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
      }

      add();
      echo $z; echo"<br>";

      echo "<h2>POST</h2>";
      // Collect data from the HTML form (invisible)
      // isset is used to ceheck whether a variable is set or not

      if (isset($_POST)) {
        echo $_POST['name'] . ",  your form is submitted";
      };

      echo"<br>";
      print_r($_POST);
      echo"<br>";              
      
      echo "<h2>GET</h2>";
      // Collect data from the HTML form after submiting
      // Data will be visible in the url

      echo "<h2>SESSION</h2> <br>";
      // Good to use for sensitive information
      // Data will be stored in the web server
      // Session exist as long as the browser is open

      session_start();
      // Store information
      $_SESSION['Name'] = "Damilola";
      $_SESSION['Age'] = 29;

      echo "Hello " . $_SESSION['Name']; echo"<br>";

      session_destroy();

      echo "Hello " . $_SESSION['Name']; echo"<br>";

      echo "<h2>COOKIES</h2> <br>";
      // Small file a web server stores in the client computer
      // ARGUMENTS COOKIES
      // Name
      // Value
      // Expire
      // Path
      // Domain
      // Security

      $time = time() + 86400 * 20;

      setcookie("name", "damilola", $time);
      print_r($_COOKIE); echo "<br>";
      session_destroy();
      echo $_COOKIE['name'];

      echo "<h2>FILES</h2> <br>";
      // How to upload files
      // Upload to the root of the 
      // Directly to the database
      
      echo $name = $_FILES['file']['name']; echo "<br>";
      echo $type = $_FILES['file']['type']; echo "<br>";
      echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>";
      echo $error = $_FILES['file']['error']; echo "<br>";

?>

        <!-- POST -->
        <form action="post.php" method="post">
          <input type="text" name="name">
          <input type="text" name="age">
          <button type="submit">SUBMIT</button>
        </form>

        <!-- GET -->
        <form action="get.php" method="get">
          <input type="text" name="name">
          <input type="text" name="age">
          <input type="password" name="password">
          <button type="submit">SUBMIT</button>
        </form>

        <!-- FIlES -->
        <!-- <form action="upload.php" method="post" enctype="multipart/form-data"> -->
        <form action="superglobals.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit">SUBMIT</button>
        </form>

        <form action="upload.php" method="post", enctype="multipart/form-data">
          <!-- <input type="text" name="name">
          <input type="text" name="age"> -->
          <input type="file" name="file">
          <button type="submit">SUBMIT</button>
        </form>

    </body>
</html>