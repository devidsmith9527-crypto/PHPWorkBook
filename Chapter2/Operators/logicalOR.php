<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OR logical Operator</title>
</head>
<body>
    <?php
        /**         
            $score = 100;#-10 0 10 100 101
            if ($score < 0 || $score > 100) {
                echo "Invalid score: $score";
            } else {
                echo "Valid score: $score";
            }              
         */
        $backII = false;
        $equilalent = false;
        if ($backII == true || $equilalent == true) {
            echo "You are eligible for the scholarship";
        } else {
            echo "You are not eligible for the scholarship";
        }
        
    ?>
</body>
</html>