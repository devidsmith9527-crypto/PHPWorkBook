<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination(Key=value)</title>
</head>
<body>
    <?php
        if (isset($_GET['keyID']) && isset($_GET['keyName'])) {
            echo "Key ID: " . $_GET['keyID'] . "<br>";
            echo "Key Name: " . $_GET['keyName'];
        } else {
            echo "Required parameters not provided.";
        }
    ?>
</body>
</html>