<?php
    //Import functions.php file
    require_once('import/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Call</title>
</head>
<body>
    <?php
        $score1 = [90, 80, 70, 60, 50];    
        $fullName = fullName("Doe", "John");
        $totalScore = totalScore($score1);
        $countScore = countScore($score1);
        $averageScore = averageScore($totalScore, $countScore);
        $grade = gradeScore($averageScore);
        $mension = mensions($averageScore);
    ?>
    <ul>
        <li>Full Name: <?= $fullName; ?></li>
        <li>Total Score: <?= $totalScore; ?></li>
        <li>Count Score: <?= $countScore; ?></li>
        <li>Average Score: <?= $averageScore; ?></li>
        <li>Grade: <?= $grade; ?></li>
        <li>Mension: <?= $mension; ?></li>
    </ul>
    <hr>
    <?php
        $score2 = [90, 80, 70];    
        $fullName = fullName("Smith", "Jane");
        $totalScore = totalScore($score2);
        $countScore = countScore($score2);
        $averageScore = averageScore($totalScore, $countScore);
        $grade = gradeScore($averageScore);
        $mension = mensions($averageScore);
    ?>
    <ul>
        <li>Full Name: <?= $fullName; ?></li>
        <li>Total Score: <?= $totalScore; ?></li>
        <li>Count Score: <?= $countScore; ?></li>
        <li>Average Score: <?= $averageScore; ?></li>
        <li>Grade: <?= $grade; ?></li>
        <li>Mension: <?= $mension; ?></li>
    </ul>

    <hr>
    <?php
        $score2 = [90, 80, 70, 60, 50, 40, 30];    
        $fullName = fullName("Brown", "Charlie");
        $totalScore = totalScore($score2);
        $countScore = countScore($score2);
        $averageScore = averageScore($totalScore, $countScore);
        $grade = gradeScore($averageScore);
        $mension = mensions($averageScore);
    ?>
    <ul>    
        <li>Full Name: <?= $fullName; ?></li>
        <li>Total Score: <?= $totalScore; ?></li>
        <li>Count Score: <?= $countScore; ?></li>
        <li>Average Score: <?= $averageScore; ?></li>
        <li>Grade: <?= $grade; ?></li>
        <li>Mension: <?= $mension; ?></li>
    </ul>
</body>
</html>