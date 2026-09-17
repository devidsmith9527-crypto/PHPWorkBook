<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOT logical Operator</title>
</head>
<body>
    <?php 
        /**         
            $score = 100;#-10 0 10 100 101
            if ($score < 0 || $score > 100) {
                echo "Invalid score: $score";
            } else {
                //echo "Valid score: $score";
                //Using NoT logical operator
                if(!($score < 50)){
                    echo "You have passed the exam";
                }else{
                    echo "You have failed the exam";
                }
            }  
        */   
        $answer = true;
        if(!$answer){
            echo "You are not eligible for the scholarship";     
        }else{
            echo "You are eligible for the scholarship";
        }
    ?>
</body>
</html>