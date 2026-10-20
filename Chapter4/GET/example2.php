<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
</head>
<body>
    <div>
        <?php
            //$variableName = $_GET['inputName'] ?? '';
            $firstName = $_GET['firstname'] ?? '';
            $lastName = $_GET['lastname'] ?? '';            
        ?>
        <form action="example2Target.php" method="get">
            <div>
                First Name: <input type="text" name="firstname" value="<?php echo $firstName; ?>" required>
            </div>
            <div>
                Last Name: <input type="text" name="lastname" value="<?php echo $lastName; ?>" required>
            </div>            
            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>    
</body>
</html>