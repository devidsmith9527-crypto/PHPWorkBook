<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built in Function</title>
</head>
<body>
    <?php
        $fruits = ["Apple", "Banana", "Orange", "Mango", "Grapes"];
        echo "Count of fruits: " . count($fruits) . "<br>";
        echo in_array("Pineapple", $fruits) ? "<br>Pineapple is in the array" : "<br>Pineapple is not in the array";
        array_push($fruits, "Pineapple", "Watermelon");
        echo "Fruits after adding new fruits: <br>", $fruits[5], ", ", $fruits[6];
        echo in_array("Mango", $fruits) ? "<br>Mango is in the array" : "<br>Mango is not in the array";
        echo in_array("Pineapple", $fruits) ? "<br>Pineapple is in the array" : "<br>Pineapple is not in the array";
    ?>
</body>
</html>