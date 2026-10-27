<?php
$errors = [];
$fullname = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 1. Clean trim leading/trailing spaces
    $fullname = trim($_POST['fullname'] ?? '');

    // 2. Check for empty values
    if (empty($fullname)) {
        $errors['fullname'] = "សូមបញ្ចូលឈ្មោះពេញរបស់អ្នក!";
    } elseif (strlen($fullname) < 3) {
        $errors['fullname'] = "ឈ្មោះត្រូវមានប្រវែងយ៉ាងតិច ៣ តួអក្សរ!";
    }
}
?>
<form method="POST">
    <input type="text" name="fullname" value="<?= htmlspecialchars($fullname) ?>">
    <span class="error"><?= $errors['fullname'] ?? '' ?></span>
    <button type="submit">រក្សាទុក</button>
</form>