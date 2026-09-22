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
        
         $students = array(
            array("name" => "Alice", "age" => 20, "grade" => 85),
            array("name" => "Bob", "age" => 22, "grade" => 90),
            array("name" => "Charlie", "age" => 21, "grade" => 88)
        );

        // Accessing Multidimensional Array Elements
        echo "The first student's name is: " . $students[0]["name"] . "<br>";
        echo "The second student's age is: " . $students[1]["age"] . "<br>";
        echo "The third student's grade is: " . $students[2]["grade"] . "<br>";
    ?>
</body>
</html>