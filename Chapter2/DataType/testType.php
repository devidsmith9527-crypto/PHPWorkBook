<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test Type</title>
</head>
<body>
    <?php
        $fullName = 007;
        //$fullName = "Dara Veasna";
        if(is_string($fullName)){
            echo "fullName is a string";
        }else{
            echo gettype($fullName);
        }
    ?>
</body>
</html>