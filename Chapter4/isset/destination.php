<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination(Key=value)</title>
</head>
<body>
    <?php
        /*
            if (isset($_GET['ID']) && isset($_GET['Name'])) {
                echo "Key ID: " . $_GET['ID'] . "<br>";
                echo "Key Name: " . $_GET['Name'];
            } else {
                echo "Required parameters not provided.";
            }
        */
        if (isset($_REQUEST['ID']) && isset($_REQUEST['Name'])) {
            echo "Key ID: " . $_REQUEST['ID'] . "<br>";
            echo "Key Name: " . $_REQUEST['Name'];
        } else {
            echo "Required parameters not provided.";
        }
    ?>
</body>
</html>