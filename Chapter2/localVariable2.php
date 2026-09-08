<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variables</title>
</head>
<body>
    <?php
        function fun_fullName() {
            $localName = "Dara Veasna";
            echo $localName;//Print inside the function, $localName is accessible only within this function
        }
        //echo $localName; // This will cause an error because $localName is not accessible outside the function
        fun_fullName();
    ?>
</body>
</html>