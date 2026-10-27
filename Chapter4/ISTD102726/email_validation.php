<?php
$email = trim($_POST['email'] ?? '');
$age = trim($_POST['age'] ?? '');
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate Email Format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "ទម្រង់អាសយដ្ឋានអ៊ីមែលមិនត្រឹមត្រូវឡើយ!";
    }

    // Validate Integer Range
    if (filter_var($age, FILTER_VALIDATE_INT) === false) {
        $errors['age'] = "អាយុត្រូវតែជាតួលេខចំនួនគត់!";
    }elseif($age < 15 || $age > 25) {
        $errors['age'] = "អាយុត្រូវតែមានចន្លោះពី 15 ដល់ 25 ឆ្នាំ!";
    }
}
?>
<form method="post" action="">
    <label for="email">អ៊ីមែល:</label>
    <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <?php if (isset($errors['email'])): ?>
        <span style="color:red;"><?php echo $errors['email']; ?></span>
    <?php endif; ?>
    <br><br>
    
    <label for="age">អាយុ:</label>
    <input type="text" id="age" name="age" value="<?php echo htmlspecialchars($age); ?>">
    <?php if (isset($errors['age'])): ?>
        <span style="color:red;"><?php echo $errors['age']; ?></span>
    <?php endif; ?>
    <br><br>
    
    <input type="submit" value="Submit">