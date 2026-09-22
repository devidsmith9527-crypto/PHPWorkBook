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
            ["name" => "Product 1", "price" => 10.99, "quantity" => 5, "qty" => 5],
            ["name" => "Product 2", "price" => 19.99, "quantity" => 3, "qty" => 3],
            ["name" => "Product 3", "price" => 5.99, "quantity" => 10, "qty" => 10],
            ["name" => "Product 4", "price" => 11.99, "quantity" => 5, "qty" => 5],
            ["name" => "Product 5", "price" => 19.99, "quantity" => 3, "qty" => 3],
            ["name" => "Product 6", "price" => 5.99, "quantity" => 10, "qty" => 10]
        ];

        // Accessing Multidimensional Array Elements
        echo "The first product's name is: " . $products[0]["name"] . "<br>";
        echo "The second product's price is: $" . $products[1]["price"] . "<br>";
        echo "The third product's quantity is: " . $products[2]["quantity"] . "<br>";
    ?>
</body>
</html>