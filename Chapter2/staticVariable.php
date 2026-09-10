<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Variables</title>
</head>
<body>
    <?php
        function myLocal() {
            // Declare a local variable
            $count = 0;
            $count++;//Pre-Increament
            echo "Count: $count <br>";
        }

        function myStatic() {
            // Declare a static variable
            static $count = 0;
            $count++;
            echo "Count: $count <br>";
        }

        echo "Local Variable: <br>";
        myLocal();//1
        myLocal();//1
        myLocal();//1
        echo "<br>Static Variable: <br>";
        myStatic();//1
        myStatic();//2
        myStatic();//3
    ?>
</body>
</html>