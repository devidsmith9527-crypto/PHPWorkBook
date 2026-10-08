<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Return Value - Without Parameter</title>
</head>
<body>
    <?php
        //Function Definition
        /*
            function functionName() {
                //Code to be executed
                return value;
            }
        */
        //Function Call
        //Print: echo functionName();
        //Asssignment: $result = functionName();
        //Arithmetic: $result = functionName() + value;
        //Comparison: if(functionName() == value) { //Code to be executed }
        //Create Function totalScore
        function totalScore() {
            $score1 = 20;
            $score2 = 30;
            $score3 = 35;
            $total = $score1 + $score2 + $score3;//20+30+35=85
            return $total;//return 85
        }
        //Call Function totalScore             
    ?>
    <ul>
        <li>Total Score: <?= totalScore();?></li>
        <li>Result: <?= totalScore() < 50 ? 'Failed' : 'Passed'; ?></li>
    </ul>
</body>
</html>