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
