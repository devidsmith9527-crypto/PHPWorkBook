<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST</title>
</head>
<body>
    <div>      
        <h2>Input:</h2>
        <form action="" method="Post">
            <div>
                <label for="bookTitle">Search Book Title:</label>
                <input type="text"  name="bookTitle" id="bookTitle" required>
            </div>                           
            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">                
            </div>
        </form>
        <h2>Output</h2>
        <?php
            //Request Detection
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $bookTitle = $_REQUEST['bookTitle'] ?? 'No book title provided';
                echo "<p>Book Title: $bookTitle</p>";
            } else {
                echo "<p>No data submitted yet.</p>";
            }
        ?>
    </div>    
</body>
</html>