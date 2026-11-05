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
    <?php 
    // Initialize the variable outside the POST check to prevent "undefined variable" warnings on first load
    $temples = []; 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {        
        $temples = $_POST['temples'] ?? []; 
        
        if (!empty($temples)) {
            echo "<h3>ប្រាសាទដែលខ្ញុំចូលចិត្តទស្សនា៖</h3>";
            echo "<ul>";
            foreach ($temples as $temple) {
                echo "<li>$temple</li>";
            }
            echo "</ul>";
        } else {
            echo "<h3>អ្នកមិនបានជ្រើសរើសប្រាសាទណាមួយទេ។</h3>";
        }
    }
    ?>
    
    <form action="" method="post">
        <h2>ប្រាសាទដែលខ្ញុំចូលចិត្តទស្សនា៖</h2>
        <div>
            <label for="temple1">អង្គរវត្ត:</label>
            <input type="checkbox" value="អង្គរវត្ត" <?= in_array("អង្គរវត្ត", $temples) ? "checked" : "" ?> id="temple1" name="temples[]">
        </div>
        <div>
            <label for="temple2">អង្គរធំ:</label>
            <input type="checkbox" value="អង្គរធំ" <?= in_array("អង្គរធំ", $temples) ? "checked" : "" ?> id="temple2" name="temples[]">
        </div>
        <div>
            <label for="temple3">បន្ទាយស្រី:</label>
            <input type="checkbox" value="បន្ទាយស្រី" <?= in_array("បន្ទាយស្រី", $temples) ? "checked" : "" ?> id="temple3" name="temples[]">
        </div>
        <div>
            <label for="temple4">បាពួន:</label>
            <input type="checkbox" value="បាពួន" <?= in_array("បាពួន", $temples) ? "checked" : "" ?> id="temple4" name="temples[]">
        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </div>
    </form> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>