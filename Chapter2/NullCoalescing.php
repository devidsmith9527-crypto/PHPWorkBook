<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null Coalescing Operator</title>
</head>
<body>
    <?php 
        //http://localhost/Chapter2/NullCoalescing.php
        //http://localhost/Chapter2/NullCoalescing.php?id=AU007
        $variableId = $_GET['id'] ?? 'AU001';
        echo "Hello, $variableId";
    ?>
</body>
</html>