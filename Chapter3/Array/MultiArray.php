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
            "student1" => array("name" => "Alice", "age" => 20, "grade" => 85),
            "student2" => array("name" => "Bob", "age" => 22, "grade" => 90),
            "student3" => array("name" => "Charlie", "age" => 21, "grade" => 88)
        );

        // Accessing Multidimensional Array Elements
        echo "The first student's name is: " . $students["student1"]["name"] . "<br>";
        echo "The second student's age is: " . $students["student2"]["age"] . "<br>";
        echo "The third student's grade is: " . $students["student3"]["grade"] . "<br>";
    ?>
</body>
</html>