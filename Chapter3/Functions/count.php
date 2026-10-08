<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count function</title>
</head>
<body>
    <?php
        //Create User Defined Function
        function COUNTING($userName){
            return count($userName);
        }

        $userName = ["John", "Jane", "Mike", "Mary"];
        echo "Total User(Built-in): " . COUNT($userName) . "<br>";
        echo "Total User(Defined): " . COUNTING($userName) . "<br>";
    ?>
</body>
</html>