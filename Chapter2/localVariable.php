<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variables</title>
</head>
<body>
    <?php
        //Start myFunction
        function myFunction() {
            //Inside the function, we can declare a local variable
            $localVariable = "I am a local variable.";
            echo $localVariable;//ជីវិតរបស់ $localVariable គឺមានតែក្នុង function នេះប៉ុណ្ណោះ
        }
        //Stop myFunction

        echo "Trying to access local variable outside the function: <br>";
        //echo $localVariable; // This will cause an error

        myFunction();
        myFunction();
    ?>
</body>
</html>