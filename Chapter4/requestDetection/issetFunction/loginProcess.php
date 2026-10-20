<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>
<body>
    <?php
    //Request Detection using isset() function
    //if(isset($_POST['submitButtonName'])) {
    if(isset($_POST['submitLogin'])) {
        //$variableName = $_POST['inputFieldName'] ?? '';
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';    

        // Process the login logic here
        // For example, validate credentials against a database

        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br>";    
    } else {
        echo "Form not submitted.";
    }       
    ?>
</body>
</html>