<html>
    <head>
        <meta charset="UTF-8">
        <title>Conditionals</title>
    </head>
    <body>
        <?php
          echo "<h1>Conditionals</h1>";

          // Conditional statement
          // if statement
          // Else statement
          // Else if statement
          // Switch statement


          echo "<h4>If statement</h4>";

          // $age = 17;
          $age = 56;

          if ($age < 20) {
            echo "You are to young";
          } elseif ($age > 50) {
            echo "You are too old to party";
          } else {
            echo "You are good to go";
          }

          echo "<br>";
          echo "<h4>Switch statement</h4>";

          // Switch Statement

          // $role = "Visitor";
          $role = "Hacker";


          switch ($role) {
            case 'Visitor':
              echo "Welcome Visitor";
              break;
            case 'Admin':
              echo 'Welcome admin';
              break;
            default: 
              echo "Not Welcomed!!!";
          }

          // While loop - Dont know the number of iterations
          // Do-while loop
          // For loop
          // Foreach loop
          echo "<br>";
          $x = 1;
          while ($x <= 10) {
            echo $x. " <br>";
            $x++;
          }

          echo "<h4>Do-while loop</h4>";
          // Do-while loop
          $cookies = 1;
          echo "<br>";
          do {
            echo "I love programming" . $cookies;
            $cookies++;
            echo'<br>';
          } while ($cookies <= 10); 


          echo "<h4>For loop</h4>";

          // Initialization
          // Evaluate once at the beginning

          // Condition
          // If true - execure
          // if false - stop

          // Counter
          // evaluate at the end of every loop

          for ($x = 0; $x <= 10; $x++) {
            echo "The number is: " . $x;
            echo "<br>";
          }

          echo "<br>";
          echo "<h4>Foreach loop</h4>";

          $names = array("John", "Michael", "David");
          $person = array("Name" => "Dary", "age" => 30, "Gender" => "Male");

          foreach ($names as $name) {
            echo "My names are: " . $name;
            echo "<br>";
          };

          echo "<br>";
          foreach ($person as $key => $value) {
            echo $key . ": " . $value;
            echo "<br>";
          };

        ?>
    </body>
</html>