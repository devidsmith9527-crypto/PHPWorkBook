<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo vs print</title>
</head>
<body>
    <?php
        echo "Full Name: ", "John", " Doe", "<br>";//4 Parameters
        echo  "Full Name: " . "John" . " Doe" . "<br>";//1 Parameter
        //print "Full Name: ", "John", " Doe", "<br>";//4 Parameters
        print "Full Name: " . "John" . " Doe" . "<br>";//1 Parameter
    ?>    
</body>
</html>