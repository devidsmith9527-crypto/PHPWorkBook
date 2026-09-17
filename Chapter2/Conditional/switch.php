<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>    
    <?php
        $color = 1.00;
        switch ($color) {
            case 0:
                echo "The color is red.";
                break;
            case 1:
                echo "The color is blue.";
                break;
            case 2:
                echo "The color is green.";
                break;
            default:
                echo "The color is not red, blue, or green.";
        }
    ?>
</body>
</html>