<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associated Arrays</title>
</head>
<body>
    <?php
        // Create Associated Array
        // $arrayName = array("key1" => "value1", "key2" => "value2", "key3" => "value3", ...);
        // $arrayName = ["key1" => "value1", "key2" => "value2", "key3" => "value3", ...];
        $person = array("name" => "John", "age" => 30, "city" => "New York");
        $student = ["name" => "Alice", "grade" => 85, "subject" => "Math"];
        $product = ["name" => "Laptop", "price" => 999.99, "in_stock" => true];
        // Accessing Array Elements
        // echo $arrayName["key"];
        echo "The person's name is: " . $person["name"] . "<br>";
        echo "The student's grade is: " . $student["grade"] . "<br>";
        echo "The product's price is: " . $product["price"] . "<br>";
    ?>
</body>
</html>