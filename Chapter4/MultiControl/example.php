<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Multi-Control</title>
</head>
<body>
    <?php
        $finalFirstName = isset($_GET['firstname']) ? htmlspecialchars($_GET['firstname']) : '';
        $finalLastName = isset($_GET['lastname']) ? htmlspecialchars($_GET['lastname']) : '';
        // If you want female to be the default before submission, set it here instead of HTML:
        $gender = isset($_GET['gender']) ? htmlspecialchars($_GET['gender']) : 'female'; 
    ?>
    <form method="get">
        <div>
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" value="<?php echo $finalFirstName; ?>" required>
        </div>
        <div>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" value="<?php echo $finalLastName; ?>" required>
        </div>
        <div>
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required <?php echo ($gender === 'male') ? 'checked' : ''; ?>>
            <label for="male">Male</label>
            
            <!-- Removed the hardcoded 'checked' attribute here -->
            <input type="radio" id="female" name="gender" value="female" required <?php echo ($gender === 'female') ? 'checked' : ''; ?>>
            <label for="female">Female</label>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>