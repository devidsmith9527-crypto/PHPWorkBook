<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
</head>
<body>
    <?php
        // Create Indexed Array
        // $arrayName = array(value1, value2, value3, ...);
        // $arrayName = [value1, value2, value3, ...];
        $colors = array("Red", "Green", "Blue", "Yellow");
        $ages = array(25, 30, 35, 40);
        $scores = [90, 85, 95, 80];
        $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
        // Accessing Array Elements
        // echo $arrayName[index];
        echo "The first color is: " . $colors[0] . "<br>";
        echo "The second age is: " . $ages[1] . "<br>";
        echo "The third score is: " . $scores[2] . "<br>";
        echo "The fourth day is: " . $days[3] . "<br>";
    ?>
</body>
</html>