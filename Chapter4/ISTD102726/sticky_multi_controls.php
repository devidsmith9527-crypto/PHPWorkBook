<?php
$gender = $_POST['gender'] ?? 'F';
$degree = $_POST['degree'] ?? 'ISTD';
$skills = $_POST['skills'] ?? ["PHP","CSS"]; // Array of checkboxes
$subjects = $_POST['subjects'] ?? []; // Array of checkboxes
$frameworks = $_POST['frameworks'] ?? []; // Array of checkboxes
?>
<form method="POST">
    <!-- Radio -->
    <input type="radio" name="gender" value="M" <?= ($gender==='M')?'checked':'' ?>> ប្រុស
    <input type="radio" name="gender" value="F" <?= ($gender==='F')?'checked':'' ?>> ស្រី<br>

    <!-- Select -->
    <select name="degree">
        <option value="CS" <?= ($degree==='CS')?'selected':'' ?>>Computer Science</option>
        <option value="IT" <?= ($degree==='IT')?'selected':'' ?>>Information Technology</option>
        <option value="ISTD" <?= ($degree==='ISTD')?'selected':'' ?>>Information Systems and Design</option>
    </select><br>

    <!-- Checkbox Array -->
    <input type="checkbox" name="skills[]" value="PHP" <?= in_array('PHP',$skills)?'checked':'' ?>> PHP
    <input type="checkbox" name="skills[]" value="JS" <?= in_array('JS',$skills)?'checked':'' ?>> JS<br>
    <input type="checkbox" name="skills[]" value="HTML" <?= in_array('HTML',$skills)?'checked':'' ?>> HTML
    <input type="checkbox" name="skills[]" value="CSS" <?= in_array('CSS',$skills)?'checked':'' ?>> CSS<br>
    <h3>I prefer to study subject[s]:</h3>
    <input type="checkbox" name="subjects[]" value="Website Design" <?= in_array('Website Design',$subjects)?'checked':'' ?>> Website Design
    <input type="checkbox" name="subjects[]" value="Mobile Development" <?= in_array('Mobile Development',$subjects)?'checked':'' ?>> Mobile Development<br>
    <input type="checkbox" name="subjects[]" value="Web API" <?= in_array('Web API',$subjects)?'checked':'' ?>> Web API
    <input type="checkbox" name="subjects[]" value="Network Security" <?= in_array('Network Security',$subjects)?'checked':'' ?>> Network Security<br>
    <h3>ក្របខ័ណ្ឌ៖</h3>
    <input type="checkbox" name="frameworks[]" value="អប់រំ" <?= in_array('អប់រំ',$frameworks)?'checked':'' ?>> អប់រំ
    <input type="checkbox" name="frameworks[]" value="សុខភាព" <?= in_array('សុខភាព',$frameworks)?'checked':'' ?>> សុខភាព<br>
    <button type="submit">Submit</button>
</form>