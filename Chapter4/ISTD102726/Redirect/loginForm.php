<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <?php
        //Login Process
        //Request Detection
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $userName = htmlspecialchars($_POST['username'] ?? '');
            $password = htmlspecialchars($_POST['password'] ?? '');
            if(($userName === "admin") && ($password === "123")){
                //Redirect to loginSuccess.php
                header('location: loginSuccess.php');  
                exit();              
            }else{
                //Redirect to loginFailed.php
                header('location: loginFailed.php');  
                exit();              
            }            
        }else{
            echo "No data submitted";
        }
    ?>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>