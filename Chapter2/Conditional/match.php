<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Expression</title>
</head>
<body>    
   <?php
        $status = 303;
        $msg = match($status) {
            200, 201 => "OK / Success",
            404      => "Not Found",
            500      => "Internal Server Error",
            300, 301, 302 => "Redirect",
            default  => "Error",
        };
        echo $msg;
    ?>
</body>
</html>