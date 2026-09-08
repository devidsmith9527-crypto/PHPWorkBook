<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variables</title>
</head>
<body>
    <?php
        //Variable declared outside the function is called a global variable
        $GLOBALS['fullName'] = "Dara Veasna";
        // Start myFunction
        function myFunction() {
            // To access a global variable inside a function, we need to use the 'global' keyword
            global $fullName;            
            echo "<br>Print from inside the function: $fullName"; 
        }
        // Stop myFunction

        myFunction();  
        myFunction();       
        // We can access the global variable directly outside the function
        echo "<br>Print from outside the function:", $GLOBALS['fullName']; 
    ?>
    </body>
</html>