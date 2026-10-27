<?php
// ចាប់យកទិន្នន័យពី GET Query String ដោយប្រើ Null Coalescing Operator (??)
$keyword = $_GET['q'] ?? '';
$category = $_GET['cat'] ?? 'all';
?>
<form method="GET" action="get_method_demo.php">
    <input type="text" name="q" value="<?= htmlspecialchars($keyword) ?>" placeholder="ស្វែងរក...">
    <button type="submit">ស្វែងរក</button>
</form>

<?php if (!empty($keyword)): ?>
    <p>លទ្ធផលស្វែងរកសម្រាប់៖ <b><?= htmlspecialchars($keyword) ?></b> (ប្រភេទ៖ <?= htmlspecialchars($category) ?>)</p>
<?php endif; ?>