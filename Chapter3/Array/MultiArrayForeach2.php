<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays with foreach loop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php
        // Create Multidimensional Array with foreach Loop     
         $students = [
            ["id"=>1, "name" => "John Doe", "age" => 20, "mid" => 35, "final"=>40],
            ["id"=>2, "name" => "Jane Smith", "age" => 22, "mid" => 20, "final"=>25],
            ["id"=>3, "name" => "Michael Johnson", "age" => 19, "mid" => 25, "final"=>35],
            ["id"=>4, "name" => "Emily Davis", "age" => 21, "mid" => 40, "final"=>50],
            ["id"=>5, "name" => "William Brown", "age" => 23, "mid" => 20, "final"=>30],
            ["id"=>6, "name" => "Olivia Wilson", "age" => 20, "mid" => 35, "final"=>40],
            ["id"=>7, "name" => "James Taylor", "age" => 22, "mid" => 30, "final"=>45],
            ["id"=>8, "name" => "Sophia Anderson", "age" => 19, "mid" => 25, "final"=>35],
            ["id"=>9, "name" => "Benjamin Thomas", "age" => 21, "mid" => 10, "final"=>20],
            ["id"=>10, "name" => "Ava Jackson", "age" => 23, "mid" => 20, "final"=>30]            
        ];        
    ?>
    <table class="table">
        <thead>            
                <th scope="col">Student Id</th>
                <th scope="col">Student Name</th>
                <th scope="col">Midterm</th>
                <th scope="col">Final</th>
                <th scope="col">Result</th>
                <th scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($students as $student) {
                $studentId = $student['id'];
                $studentName = $student['name'];
                $midterm = $student['mid'];
                $final = $student['final'];
                $result = ($midterm + $final);
                $grade = ($result >= 50) ? 'ជាប់' : 'ធ្លាក់';
            ?>
                <tr>
                    <th scope="row"><?php echo $studentId; ?></th>
                    <td><?php echo $studentName; ?></td>
                    <td><?php echo $midterm; ?></td>
                    <td><?php echo $final; ?></td>
                    <td>
                        <?php 
                            if ($result >= 50) {
                                ?>
                                    <div class="alert alert-success text-center" role="alert">
                                        <?= $result ?>
                                    </div>
                                <?php
                            } else {
                                ?>
                                    <div class="alert alert-danger  text-center" role="alert">
                                        <?= $result ?>
                                    </div
                                <?php
                            }   
                        ?>
                    </td>
                    <td>
                        <?php 
                            if ($grade == 'ជាប់') {
                                ?>
                                    <div class="alert alert-success text-center" role="alert">
                                        <?= $grade ?>
                                    </div>
                                <?php
                            } else {
                                ?>
                                    <div class="alert alert-danger  text-center" role="alert">
                                        <?= $grade ?>
                                    </div
                                <?php
                            }   
                        ?>   

                    </td>
                </tr>  
            <?php 
            }
            ?>
        </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>