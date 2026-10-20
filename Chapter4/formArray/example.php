<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Array</title>
  </head>
<body>
    <h2>Input</h2>
    <form action="" method="post">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Student Name:</th>
                <th scope="col">Score</th>            
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><input type="text" name="studentName[]"></td>
                <td><input type="number" name="studentScore[]"></td>                
            </tr>          
            <tr>
                <th scope="row">2</th>
                <td><input type="text" name="studentName[]"></td>
                <td><input type="number" name="studentScore[]"></td>                
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><input type="text" name="studentName[]"></td>
                <td><input type="number" name="studentScore[]"></td>                
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </td>
            </tr>
        </tbody>
        </table>
        </form>

    <h2>Output</h2>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $studentName = $_POST['studentName']; // Array
            $studentScore = $_POST['studentScore']; // Array
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Name:</th>
                        <th scope="col">Score</th>    
                        <th scope="col">Result</th>       
                    </tr>
                </thead>                
                <tbody>
                    <?php
                        // Loop through one array and use the index ($key) to access the other
                        foreach($studentName as $key => $name) { 
                            // Only output if the name isn't empty (optional, but good practice)
                            if (!empty($name)) {
                                $result[$key] = ($studentScore[$key]>=50)?"Pass":"Failed";
                    ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1; ?></th>
                        <!-- htmlspecialchars prevents XSS attacks when printing user input -->
                        <td><?php echo htmlspecialchars($name); ?></td>
                        <td><?php echo htmlspecialchars($studentScore[$key]); ?></td>
                        <td><?php echo $result[$key];?></td>            
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
                
        <?php             
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>