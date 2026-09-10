<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variables</title>
</head>
<body>
    <?php
        //Start studentInfo
        function studentInfo() {
           //Local Variable
           $fullName = "Jonh Doe";
           $age = 20;
           echo "Full Name: ", $fullName;
           echo "<br>Age: ", $age;
        }
        //Stop studentInfo
        //Call Function
        studentInfo();
        //echo "Full Name: ", $fullName;//Error
        //echo "Age: ", $age; // Error
    ?>
</body>
</html>