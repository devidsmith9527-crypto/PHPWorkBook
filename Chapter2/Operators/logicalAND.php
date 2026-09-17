<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AND logical Operator</title>
</head>
<body>
    <?php
        /**         
            $score = 100;#-5 0 60 100 101
            if ($score >= 0 && $score <= 100) {
                echo "Valid score: $score";
            } else {
                echo "Invalid score: $score";
            }              
         */
        $userName = "admin";
        $password = "1234";
        if ($userName == "admin" && $password == "12345") {
            echo "Login successful!";
        } else {
            echo "Try again.";
        }
    ?>
</body>
</html>