<html>
    <head>
        <meta charset="UTF-8">
        <title>Functions</title>
    </head>
    <body>
        <?php
          echo "<h1>Functions</h1>";

          // Functions

          // A functions is a block of code written in a program to perform some specific task

          // Two major types of functions
          // Built in function
          // User-defined function

          // Why should you use functions
          // 1. Reuseability
          // 2. Easy for error detection
          // 3. Easily maintained

          // Format a function
          // Camel case
          // Every word after the first one is a capital 
          // myFunction();

          // Lower case
          // All lowercase, underscore inbetween
          // my_function();

          // Pascal case
          // Every word is capitalised
          // MyFunction();

          function myFunction() {
            $z = "Hello!";
            echo $z;
          };

          echo $z; // Cannot access $z becase it is inner scoped
          myFunction(); echo "<br> ";

          echo "<h1>Parameters</h1>";
          // Parameter is used to call that argument
          // Arguments are values passed to a function

          $num1 = 5;
          $num2 = 5;

          function calculator($x, $y=8) {
            echo $x * $y;
          }

          // Arguments
          calculator($num1);

          // Functin with return value
          // Passed by value
          // passed by reference

          echo "<br> ";
          // passed by value
          function add($num1, $num2) {
            return $num1 + $num2;
          }
          
          echo" The number is: " . add($num1, $num2);


          $x = 20;
          echo "<br> ";
          // Pass by reference
          function addByValue($x) {
            echo $x += 12;
          }

          echo "<br> ";
          function addByReference(& $x) {
            $x += 10;
          }

          echo "<br> ";
          addByValue($x);
          echo " ===> the value is: ". $x;

          echo "<br> ";
          addByReference($x);
          echo "===> The value is: " .$x;

          echo "<h1>Global and Local Scope</h1>";

          $globals = 10;
          function globalFunction() {
            $local = 20;
            return $global  + $local;
          }

          echo"<br> The value of global function is: " . globalFunction();
          echo"<br>";


          echo "<h1>Constants</h1>";

          // Constants
          // Constants are name or identifiers for a ficed value
          //  Function - define()
          // Keyword - CONST

          // Define
          // Constants are always in uppercase
          define("COMPANY_NAME", "Apple");
          echo COMPANY_NAME;
          
          // CONST
          const MY_NAME = "Dami"; echo"<br>";
          echo MY_NAME;

          include "./includes/main.php";
        ?>
    </body>
</html>