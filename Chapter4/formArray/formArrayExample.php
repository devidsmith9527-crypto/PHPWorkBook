<?php
// ==========================================================================
// ជំហានទី ១៖ កូដ PHP សម្រាប់ដំណើរការទិន្នន័យ (Backend Solution Logic)
// ==========================================================================
$errors = [];
$results = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ១. ទទួលយក Form Array មកប្រើ (ប្រើ ?? [] ការពារ Undefined Index)
    $students = $_POST['students'] ?? [];

    // ២. ផ្ទៀងផ្ទាត់ប្រភេទ Data Type (ត្រូវតែជា Array)
    if (!is_array($students) || empty($students)) {
        $errors[] = "មិនមានទិន្នន័យសិស្សត្រូវបានបញ្ជូនមកឡើយ!";
    } else {
        $valid_students = [];
        $total_score = 0;

        // ៣. ធ្វើ Loop លើធាតុ Array នីមួយៗ (Matrix 2D)
        foreach ($students as $index => $row) {
            $name  = trim($row['name'] ?? '');
            $score = trim($row['score'] ?? '');

            // ករណីជួរនោះទទេទាំងស្រុង គឺរំលងចោល (មិនរាប់ជាកំហុសទេ)
            if ($name === '' && $score === '') {
                continue;
            }

            // ៤. ផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវនៃទិន្នន័យ (Data Validation)
            if ($name === '') {
                $errors[] = "ជួរទី " . ($index + 1) . "៖ សូមបញ្ចូលឈ្មោះសិស្ស!";
            } elseif ($score === '' || !is_numeric($score) || $score < 0 || $score > 100) {
                $errors[] = "ជួរទី " . ($index + 1) . "៖ ពិន្ទុត្រូវតែជាលេខចន្លោះពី ០ ដល់ ១០០!";
            } else {
                // ៥. សម្អាតទិន្នន័យ (Sanitize XSS) និងបម្លែងលេខ
                $score_num = floatval($score);
                $valid_students[] = [
                    'name'  => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
                    'score' => $score_num
                ];
                $total_score += $score_num;
            }
        }

        // ៦. គណនា និងសង្ខេបលទ្ធផល (Calculation)
        $count = count($valid_students);
        if ($count > 0 && empty($errors)) {
            $results = [
                'students' => $valid_students,
                'count'    => $count,
                'total'    => $total_score,
                'average'  => round($total_score / $count, 2)
            ];
        } elseif (empty($errors) && $count === 0) {
            $errors[] = "សូមបញ្ចូលព័ត៌មានសិស្សយ៉ាងហោចណាស់ម្នាក់!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ដំណោះស្រាយកម្រិតទី ៦៖ PHP Batch Form Array</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kantumruy Pro', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 p-6 min-h-screen">

<div class="max-w-3xl mx-auto space-y-6">

    <!-- ចំណងជើង -->
    <div class="text-center">
        <h1 class="text-2xl font-bold text-slate-900">កូដដំណោះស្រាយគំរូ (Model Solution)</h1>
        <p class="text-slate-600 text-sm mt-1">ការគ្រប់គ្រង Form Array បែប Multidimensional ក្នុង PHP</p>
    </div>

    <!-- បង្ហាញ Error (បើសិនជាមាន) -->
    <?php if (!empty($errors)): ?>
        <div class="bg-rose-50 border-l-4 border-rose-500 p-4 rounded-xl">
            <h4 class="text-rose-800 font-bold text-sm">កំហុសឆ្គងដែលត្រូវកែតម្រូវ៖</h4>
            <ul class="list-disc list-inside text-rose-700 text-xs mt-1 space-y-1">
                <?php foreach ($errors as $err): ?>
                    <li><?= $err ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- ទម្រង់ Form បញ្ចូលទិន្នន័យ -->
    <form method="POST" class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 space-y-4">
        <div class="flex justify-between items-center border-b pb-3">
            <h2 class="font-bold text-slate-700">តារាងបញ្ចូលទិន្នន័យសិស្ស</h2>
            <button type="button" onclick="fillQuickData()" class="text-xs bg-amber-100 text-amber-800 font-semibold px-3 py-1.5 rounded-lg hover:bg-amber-200 transition">
                ⚡ បំពេញស្វ័យប្រវត្តិ
            </button>
        </div>

        <div id="input-list" class="space-y-3">
            <!-- ជួរទី ១ -->
            <div class="grid grid-cols-12 gap-2 items-center">
                <span class="col-span-1 text-center font-bold text-slate-400">#1</span>
                <input type="text" name="students[]" placeholder="ឈ្មោះសិស្ស" class="s-name col-span-7 border border-slate-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 outline-none">
                <input type="number" step="0.1" name="students[]" placeholder="ពិន្ទុ" class="s-score col-span-4 border border-slate-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 outline-none">
            </div>

            <!-- ជួរទី ២ -->
            <div class="grid grid-cols-12 gap-2 items-center">
                <span class="col-span-1 text-center font-bold text-slate-400">#2</span>
                <input type="text" name="students[1][name]" placeholder="ឈ្មោះសិស្ស" class="s-name col-span-7 border border-slate-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 outline-none">
                <input type="number" step="0.1" name="students[1][score]" placeholder="ពិន្ទុ" class="s-score col-span-4 border border-slate-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 outline-none">
            </div>

            <!-- ជួរទី ៣ -->
            <div class="grid grid-cols-12 gap-2 items-center">
                <span class="col-span-1 text-center font-bold text-slate-400">#3</span>
                <input type="text" name="students[2][name]" placeholder="ឈ្មោះសិស្ស" class="s-name col-span-7 border border-slate-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 outline-none">
                <input type="number" step="0.1" name="students[2][score]" placeholder="ពិន្ទុ" class="s-score col-span-4 border border-slate-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 outline-none">
            </div>
        </div>

        <div class="text-right pt-3">
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-5 py-2 rounded-xl text-sm transition shadow-sm">
                ដំណើរការទិន្នន័យ (Submit) &rarr;
            </button>
        </div>
    </form>

    <!-- តារាងបង្ហាញលទ្ធផលក្រោយពេលគណនារួច -->
    <?php if ($results): ?>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-emerald-200 space-y-4">
            <div class="flex items-center gap-2 text-emerald-700 font-bold border-b pb-2">
                <span>✅</span> <h3>លទ្ធផលដែលបានគណនាជោគជ័យ</h3>
            </div>

            <!-- កាតសង្ខេប -->
            <div class="grid grid-cols-3 gap-3 text-center">
                <div class="bg-slate-50 p-3 rounded-xl border">
                    <span class="text-xs text-slate-500">ចំនួនសិស្ស</span>
                    <p class="text-xl font-bold text-slate-800"><?= $results['count'] ?> នាក់</p>
                </div>
                <div class="bg-slate-50 p-3 rounded-xl border">
                    <span class="text-xs text-slate-500">ពិន្ទុសរុប</span>
                    <p class="text-xl font-bold text-emerald-600"><?= $results['total'] ?></p>
                </div>
                <div class="bg-slate-50 p-3 rounded-xl border">
                    <span class="text-xs text-slate-500">ពិន្ទុមធ្យមភាគ</span>
                    <p class="text-xl font-bold text-indigo-600"><?= $results['average'] ?> / 100</p>
                </div>
            </div>

            <!-- តារាងសិស្ស -->
            <table class="w-full text-sm text-left border-collapse">
                <thead>
                    <tr class="bg-slate-100 text-slate-600 text-xs uppercase">
                        <th class="p-2.5">ល.រ</th>
                        <th class="p-2.5">ឈ្មោះសិស្ស</th>
                        <th class="p-2.5 text-right">ពិន្ទុ</th>
                        <th class="p-2.5 text-center">ស្ថានភាព</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <?php foreach ($results['students'] as $idx => $s): ?>
                        <tr>
                            <td class="p-2.5 text-slate-400 font-mono"><?= $idx + 1 ?></td>
                            <td class="p-2.5 font-medium"><?= $s['name'] ?></td>
                            <td class="p-2.5 text-right font-bold text-indigo-600"><?= $s['score'] ?></td>
                            <td class="p-2.5 text-center">
                                <?php if ($s['score'] >= 50): ?>
                                    <span class="px-2 py-0.5 rounded text-xs bg-emerald-100 text-emerald-700 font-semibold">ជាប់</span>
                                <?php else: ?>
                                    <span class="px-2 py-0.5 rounded text-xs bg-rose-100 text-rose-700 font-semibold">ធ្លាក់</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>

</div>

<!-- JavaScript សម្រាប់បំពេញទិន្នន័យគំរូរហ័ស -->
<script>
function fillQuickData() {
    const sample = [
        { name: "សុខ វិសាល", score: 85.5 },
        { name: "ចាន់ ពិសិដ្ឋ", score: 92.0 },
        { name: "គង់ សុជាតា", score: 48.0 }
    ];
    const names = document.querySelectorAll('.s-name');
    const scores = document.querySelectorAll('.s-score');

    sample.forEach((item, i) => {
        if (names[i] && scores[i]) {
            names[i].value = item.name;
            scores[i].value = item.score;
        }
    });
}
</script>

</body>
</html>