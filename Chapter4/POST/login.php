<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script>
        function showMyPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>
<body>
    <form action="loginProcess.php" method="Post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <!-- An element to toggle between password visibility -->
            <input type="checkbox" onclick="showMyPassword()">Show Password
        </div>
        <div>
            <input type="submit" value="Login">
            <input type="reset" value="Reset">
        </div>        
    </form>
</body>
</html>