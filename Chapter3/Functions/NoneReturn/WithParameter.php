<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function None Return - With Default Parameter</title>
</head>
<body>
    <?php
        //Syntax - Function Definition
        /*
            function functionName($argument1, $argument2,...,$argumentn):void{
                //Code to be executed
            }
        */
        function studentInfo(string $name, int $age, string $city, float $score):void{
            echo "===============================<br>";
            echo "Student Name: {$name} <br>";
            echo "Student Age: {$age} <br>";
            echo "Student City: {$city} <br>";
            echo "Student Score: {$score} <br>";
            echo "===============================<br>";
        }
        //Function Call: functionName(parameter1, parameter2,...,parametern);
        studentInfo("John Doe", 20, "New York", 85.5);
        studentInfo("Jane Smith", 25, "Los Angeles", 78.0);
    ?>
</body>
</html>