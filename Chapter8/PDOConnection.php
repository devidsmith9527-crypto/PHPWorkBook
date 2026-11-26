<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Connection</title>
</head>
<body>
    <?php
        //Prepared Statement
        //Connect to Database
        // $dns = "mysql:host=localhost;dbname=[db_name]";
        $dns = "mysql:host=localhost;dbname=db_itcs1";
        try{
            //$pdo = new PDO($dns, "username", "password");
            $pdo = new PDO($dns, "root", "");
            echo "Connection Success!";
        }catch(PDOException $e){
            echo "Connection Failed: " . $e->getMessage();
        }
    ?>
</body>
</html>