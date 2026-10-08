<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Return Value - With Parameter</title>
</head>
<body>
    <?php
        //Function Definition
        /*
            function functionName($arg1, $arg2,..., $argN) {
                //Code to be executed
                return value;
            }
        */
        //Function Call
        //Print: echo functionName($param1, $param2,..., $paramN);
        //Asssignment: $result = functionName($param1, $param2,..., $paramN);
        //Arithmetic: $result = functionName($param1, $param2,..., $paramN) + value;
        //Comparison: if(functionName($param1, $param2,..., $paramN) == value) { //Code to be executed }
        //Create Function totalScore
        function totalScore($score1, $score2, $score3) {
            $total = $score1 + $score2 + $score3;
            return $total;
        }
        //Call Function totalScore             
    ?>
    <ul>
        <li>Total Score: <?= totalScore(20, 30, 35);?></li>
        <li>Result: <?= totalScore(20, 30, 35) < 50 ? 'Failed' : 'Passed'; ?></li>
    </ul>
</body>
</html>