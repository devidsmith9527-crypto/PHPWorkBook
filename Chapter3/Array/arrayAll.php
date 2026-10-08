<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        //1.Indexed Array: Index / Key ជាលេខ រាប់ពី 0,1,...
        //$arrayName = [$Item1, $Item2,...,$Itemn]
        $_age = [23, 34, 45, 50];
        $userName = ["John", "Jane", "Mike", "Mary"];
        array_push($_age, 60); //Add new item to the end of the array
        $_age[5] = 25;//Add new item to the end of the array
        $userName[4] = "Tom"; //Add new item to the end of the array
        array_push($userName, "Jerry"); //Add new item to the end of the array
        echo "Indexed Array: " . $_age[4] . "<br>";
        echo "User Name: " . $userName[5] . "<br>";
        //2.Associative Array: Index / Key ជាលេខ ជា String
        //$arrayName = ["key1"=>$Item1, "key2"=>$Item2,...,"keyn"=>$Itemn]
        $product = ["pro_id"=>1,"pro_name"=>"Iphone 12", "price"=>500];
        $product["expiry_date"] = "2023-12-31"; //Add new item to the end of the array  
        $product["is_active"] = true; //Add new item to the end of the array
        echo "using foreach loop to display associative array: <br>";
        foreach($product as $key=>$item){
            echo $key . ": " . $item . "<br>";
        }
        /*
            Cadinality Radio: Many-To-Many 
            3. Multidimensional Array: Value / Item ជា Array ផ្ទុកក្នុង Array
        */
        /*
            $arrayName = [
                [$Item1, $Item2,...,$Itemn],
                [$Item1, $Item2,...,$Itemn],
                ...
                [$Item1, $Item2,...,$Itemn]
            ]
        */
        $students = [
            "student1"=>["PHP"=>80, "JavaScript"=>70, "Python"=>60,"Network"=>50],
            "student2"=>["PHP"=>50, "JavaScript"=>40, "Python"=>30,"Network"=>20],
            "student3"=>["PHP"=>20, "JavaScript"=>10, "Python"=>5,"Network"=>0]
        ];
    ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Student Name</th>
            <th>PHP</th>
            <th>JavaScript</th>
            <th>Python</th>
            <th>Network</th>
        </tr>
        <tr>
            <td>student1</td>
            <td><?php echo $students['student1']['PHP']; ?></td>
            <td><?php echo $students['student1']['JavaScript']; ?></td>
            <td><?php echo $students['student1']['Python']; ?></td>
            <td><?php echo $students['student1']['Network']; ?></td>
        </tr>
        <tr>
            <td>student2</td>
            <td><?php echo $students['student2']['PHP']; ?></td>
            <td><?php echo $students['student2']['JavaScript']; ?></td>
            <td><?php echo $students['student2']['Python']; ?></td>
            <td><?php echo $students['student2']['Network']; ?></td>
        </tr>
        <tr>
            <td>student3</td>
            <td><?php echo $students['student3']['PHP']; ?></td>
            <td><?php echo $students['student3']['JavaScript']; ?></td>
            <td><?php echo $students['student3']['Python']; ?></td>
            <td><?php echo $students['student3']['Network']; ?></td>
        </tr>
    </table>

    <hr>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Student Name</th>
            <th>PHP</th>
            <th>JavaScript</th>
            <th>Python</th>
            <th>Network</th>
        </tr>
        <?php
        //$students: Multidimensional Array
        //$subjects: Associative Array
        foreach($students as $key => $subjects) {
        ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $subjects["PHP"]?></td>
                <td><?php echo $subjects["JavaScript"]?></td>
                <td><?php echo $subjects["Python"]?></td>
                <td><?php echo $subjects["Network"]?></td>
            </tr>
        <?php
        }
        ?>
        
    </table>
</body>
</html>