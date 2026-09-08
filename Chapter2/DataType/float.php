<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>float Type</title>
</head>
<body>
    <?php
        $gpa = 3.00;
        echo "The GPA is: " . $gpa . "<br>";
        echo "is_float(\$gpa): " . (is_float($gpa) ? 'ពិត' : 'មិនពិត') . "<br>";
        echo "The type of the variable is: " . gettype($gpa) . "<br>";
    ?>
</body>
</html>