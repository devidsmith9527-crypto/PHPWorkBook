<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
</head>
<body>
    <div>
        <h2>Output:</h2>
        <?php
            //$variableName = $_GET['inputFieldName'] ?? 'defaultValue';
            $firstName = $_GET['firstname'] ?? '';
            $lastName = $_GET['lastname'] ?? '';  
            echo "First Name: " . $firstName. "<br>";
            echo "Last Name: " . $lastName . "<br>";   
            echo "Full Name: " . $firstName . " " . $lastName . "<br>";
        ?>
        <h2>Input:</h2>
        <form action="" method="get">
            <div>
                First Name: <input type="text" name="firstname" required>
            </div>
            <div>
                Last Name: <input type="text" name="lastname" required>
            </div>                            
            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">                
            </div>
        </form>
    </div>    
</body>
</html>