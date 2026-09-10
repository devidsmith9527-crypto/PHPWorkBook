<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standard Tag</title>
</head>
<body>
    <?php
        //Single line comment
        echo "Standard Tag!<br>";#Comment end of line
        /*
            Multi-line comment
            Comment Large block
            ....................
            ....................
            Line n
        */
        echo "Multi-line comment<br>";
        /** 
         * DocBlock Comment
            if(true){
                echo "If statement<br>";
            }else{
                echo "Else statement<br>";
            }   
        */
        echo "DocBlock Comment<br>";
    ?>
    
</body>
</html>