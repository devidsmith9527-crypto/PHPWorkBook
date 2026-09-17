<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
</head>
<body>
    /*
        score ពី ០ ដល់តិចជាង​ ៦០ => F
        score ពី ៦០ ដល់តិចជាង​ ៧០ => E
        score ពី ៧០ ដល់តិចជាង​ ៨០ => D
        score ពី ៨០ ដល់តិចជាង​ ៩០ => C
        score ពី ៩០ ដល់តិចជាង​ ៩៥ => B
        score ពី ៩៥ ដល់ ១០០ => A        
    *
    <?php
        $score = 100;
        if ($score < 60) {
            echo "F";//[0, 60[
        } elseif ($score >= 60 && $score < 70) {
            echo "E";//[60, 70[
        } elseif ($score >= 70 && $score < 80) {
            echo "D";//[70, 80[
        } elseif ($score >= 80 && $score < 90) {
            echo "C";//[80, 90[
        } elseif ($score >= 90 && $score < 95) {
            echo "B";//[90, 95[
        } else {
            echo "A";//[95, 100]
        } 
    ?>
</body>
</html>