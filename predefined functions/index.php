<html>
    <head>
        <meta charset="UTF-8">
        <title>Preddefined Functions</title>
    </head>
    <body>
        <?php

        echo "<h1>Predefined Functions</h1>";

        // Built in functions
        // String functions
        // Math functions
        // Date Functions
        // Array functions
        // Random number functions

        echo "<h2>Math Functions</h2>";

        // Math function

        // Ceil
        echo ceil(1.50) . "<br>";

        // Floor
        echo floor(1.50) . "<br>";

        // Round
        echo round(0.54335, 4) ."<br>";

        echo exp(4);

        echo "<h2>String Functions</h2>";

        // String function
        $str = "Today is a good day <br>";
        echo strlen($str); echo"<br>";

        // String word count
        $firstName = " My first name is Damilola <br>";
        echo str_word_count($firstName);

        // Find atext within a string
        $email = "damilola.faseun@gmail.com";
        echo"<br>";

        if (strpos($email, "@")) {
          echo "This is a valid email <br>";
        } else {
          echo "This is a email input field <br>";
        }

        // Ucwords - Every first letter of a word is uppercase;
        echo ucwords("What is your name <br>");

        // Whole string to uppercase
        echo strtoupper("What is your name? <br>");

        // Whole string to lowercase
        echo strtolower("What is your name? <br>");

        echo "<h2>Array functions</h2>";

        // Array Functions

        // Arraymerge
        $personalInfo = array("Name" => "Damilola", "Age" => 29, "City" => "Lagoss");
        $moreInfo = array("State" => "Lasgidi", "Weight" => 30);
        $personalInfo = array_merge($personalInfo, $moreInfo);
        
        foreach($personalInfo as $key => $value) {
          echo $key . ": " . $value . "<br>";
          
        print_r($personalInfo);
        }
        echo"<br>";

        // Print only keys
        print_r(array_keys($personalInfo)); echo"<br>";
        print_r(array_values($personalInfo)); echo"<br>";


        // array_push();
        $cars = array("Volskwagen", "Audi", "Mercedes");
        array_push ($cars, "Volvo");
        print_r($cars);

        // Search inside of an array
        echo"<br>";
        echo "Mercedes is in possition " . array_search("Mercedes", $cars);

        // count - Counts the number of items in an array

        echo"<br>";
        echo " the number of item in cars is " . count($cars);

        // Date


        echo "<br> The date is " . date('d/M/Y');
        echo"<br>";

        // Times
        // 'g' = Hours in 12-hour format without zeros
        // 'h' = hours in twelve hour format without zero
          
        echo date('H:i:s A '); echo "<br>";

        // set timezone
        date_default_timezone_set("Africa/Lagos");

        // String to time
        $time = strtotime("4:00pm December 03 2022");
        echo"<br>";
        echo $time;
        //timestamp is the value represented as seconds calculated, since UNIX Epoch, January 1, 1970, and also called as UNIX timestamp

        echo "<br>";
        echo date('m/d/Y H:i: a', $time); echo "<br>";

        echo "<h2>Random Number</h2>";

        echo getrandmax(); echo "<br>";

        echo rand(12, 40); echo "<br>";

        $cars = arsort($cars);
        print_r($cars);

        $targetDays = mktime(0, 0, 0, 07, 27, 2021);
        $today = time();
        $differenceDays = ($targetDays - $today);
        $days = (int) ($differenceDays / 86400);
        echo "<br> Days till next birthday: " . $days . " days!";

        ?>
    </body>
</html>