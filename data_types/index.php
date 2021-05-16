<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            $cars = array("Audi" => 50.8, "BMW" => 993.939, "Mercedes" => 93.939);
            print_r($cars);
            echo "<br>";
            var_dump($cars);

            $car1["Mercedes"] = 8393.002;
            echo "<br>";
            echo($car1["Mercedes"]);

            echo "<br>";
            
            foreach ($cars as $key => $value) {
                echo "My " . $key . " has " . $value . " Mileages <br>";
            }

            echo "<br>";
            echo "<br>";
            
            // Multidimentional Array and Associative array
            $newCars = array("Expensive" => array("Audi", "Mercedes", "BMW"), "Inexpensive" => array("Volvo", "Ford", "Toyota"));

            echo $newCars['Expensive'][2]; echo"<br>";
            echo $newCars["Inexpensive"][0]; echo "<br>";
            echo "<br>";

            $cm = 150;
            $cmToInch = $cm * 0.39;
            echo $cm. " centimeters is " . $cmToInch . " inches"; echo "<br>"; echo "<br>";; 

            $expenses = array(40, 70, 20, 78, 98);

            $totalAmount;
            $amountOfExpenses;

            foreach($expenses as $exp) {
                // $totalAmount = $totalAmount + $exp;
                
                $amountOfExpenses = $amountOfExpenses + 1;
            };

            echo "My " . $amountOfExpenses . " biggest expenses were " . $totalAmount;


        ?>
    </body>
</html>