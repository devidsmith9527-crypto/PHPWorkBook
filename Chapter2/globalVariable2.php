<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variables</title>
</head>
<body>
     <?php
        $score = 30;
        //User Defined Function - Bussines Logic ដោយខ្លួនឯង
        function myScore(){
            $GLOBALS['score'] = 90;            
            echo "<br>My Score:", $GLOBALS['score'];
        }
        //Call function
        myScore();//My Score: 90
        echo "<br>My Score after Call Function: ", $score;//My Score..: 90
        echo "<br>My Score after Call Function: ", $GLOBALS['score'];//My Score..: 90
    ?>
    </body>
</html>