<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variables</title>
</head>
<body>
    <?php
        $score = 30;
        function myScore(){
            $score = 90;
            echo "<br>My Score:", $score;
        }
        //Call function
        myScore();//My Score: 90
        echo "<br>My Score after Call Function: ", $score;//My Score..: 30
    ?>
</body>
</html>