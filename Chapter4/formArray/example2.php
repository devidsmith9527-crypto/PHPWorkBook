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
    <form action="" method="post">
        <div>
            <label for="score1">Score 1:</label>
            <input type="number" value="<?= isset($_POST['scores'][0]) ? $_POST['scores'][0] : 0.0 ?>" id="score1" name="scores[]">
        </div>
        <div>
            <label for="score2">Score 2:</label>
            <input type="number" value="<?= isset($_POST['scores'][1]) ? $_POST['scores'][1] : 0.0 ?>" id="score2" name="scores[]">
        </div>
        <div>
            <label for="score3">Score 3:</label>
            <input type="number" value="<?= isset($_POST['scores'][2]) ? $_POST['scores'][2] : 0.0 ?>" id="score3" name="scores[]">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form> 
    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {        
        $scores = $_POST['scores'] ?? [0.0, 0.0, 0.0]; // Default to an array of three zeros if not set
        $totalscore = 0.0;
        foreach ($scores as $score) {
            $totalscore += $score;
        }
        echo "<h3>Total Score: $totalscore</h3>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>