<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 2 Target</title>
</head>
<body>
    <?php
        $firstName = $_GET['firstname'] ?? '';
        $lastName = $_GET['lastname'] ?? '';
        echo "Welcome, " . $firstName . " " . $lastName . "!";
    ?>
</body>
</html>