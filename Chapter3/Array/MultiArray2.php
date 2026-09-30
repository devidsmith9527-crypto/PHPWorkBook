<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>
<body>
    <?php
        // Create Multidimensional Array
        /*
        $arrayName = array(
             "key1" => array("subkey1" => "subvalue1", "subkey2" => "subvalue2"),
             "key2" => array("subkey1" => "subvalue3", "subkey2" => "subvalue4")
             ...................................................................
             "keyn" => array("subkey1" => "subvalue3", "subkey2" => "subvalue4")
         );

         $arrayName = [
             "key1" => ["subkey1" => "subvalue1", "subkey2" => "subvalue2"],
             "key2" => ["subkey1" => "subvalue3", "subkey2" => "subvalue4"]
             ...................................................................
             "keyn" => ["subkey1" => "subvalue3", "subkey2" => "subvalue4"]
        ];

         $arrayName = [
             ["subvalue1", "subvalue2"],
             ["subvalue3", "subvalue4"],
             ...................................................................
             ["subvalue3", "subvalue4"]
        ];

        $arrayName = array(
             array("subvalue1", "subvalue2"),
            array("subvalue3", "subvalue4"),
         );

         
        */
        
         $products = [
            ["Product 1", 10.99,  5,  5],
            ["Product 2", 19.99, 3, 3],
            ["Product 3", 5.99, 10, 10],
            ["Product 4", 11.99, 5, 5],
            ["Product 5", 19.99, 3, 3],
            ["Product 6", 5.99, 10, 10]
        ];

        // Accessing Multidimensional Array Elements
        echo "The first product's name is: " . $products[0][3] . "<br>";
        echo "The second product's price is: $" . $products[1][2] . "<br>";
        echo "The third product's quantity is: " . $products[2][2] . "<br>";
    ?>
</body>
</html>