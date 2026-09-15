<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
</head>
<body>
    <?php
        //variable Scope
        //global scope
        $fullName = "John Doe"; //global variable
        $age = 30; //global variable
        function displayFullName() {
            $GLOBALS['age'] = 31; //accessing global variable using $GLOBALS array
            global $fullName; //accessing global variable inside function
            //local scope
            $gender = "Male"; //local variable
            //Static scope
            static $counter = 0; //static variable
            $counter++;
            echo "Full Name: " . $fullName;
            echo "<br>Age: " . $GLOBALS['age'];
            echo "<br>Gender: " . $gender;
            echo "<br>Counter: " . $counter;
        }

        //Calling the function multiple times to demonstrate static variable behavior
        displayFullName();
        echo "<br><br>";
        displayFullName();
        echo "<br><br>";
        echo "Final Age: " . $age; //accessing global variable outside function
        echo "<br>Final Counter: " . $counter; //this will cause an error because $counter is not accessible outside the function
        echo "<br>Final Gender: " . $gender; //this will cause an error because $gender is not accessible outside the function
    ?>
</body>
</html>