<?php
// ==========================================
// BACKEND PHP LOGIC (កម្រិតទី ៦)
// ==========================================
$processed = false;
$errors = [];
$valid_students = [];
$total_score = 0;
$average_score = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_batch'])) {
    $students = $_POST['students'] ?? [];

    // វាយតម្លៃសុវត្ថិភាព (តាមគោលការណ៍កម្រិតទី ៥)
    if (is_array($students) && !empty($students)) {
        foreach ($students as $index => $row) {
            $name = trim($row['name'] ?? '');
            $score = trim($row['score'] ?? '');

            // រំលងជួរដែលទទេទាំងស្រុង (Skip blank rows)
            if ($name === '' && $score === '') {
                continue;
            }

            // ផ្ទៀងផ្ទាត់ទិន្នន័យ (Validation)
            if ($name === '') {
                $errors[] = "ជួរទី " . ($index + 1) . "៖ សូមបញ្ចូលឈ្មោះសិស្ស!";
            } elseif ($score === '' || !is_numeric($score) || $score < 0 || $score > 100) {
                $errors[] = "ជួរទី " . ($index + 1) . "៖ ពិន្ទុត្រូវតែជាលេខចន្លោះពី ០ ដល់ ១០០!";
            } else {
                // សម្អាតទិន្នន័យការពារ XSS (Sanitization)
                $score_num = floatval($score);
                $valid_students[] = [
                    'name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
                    'score' => $score_num
                ];
                $total_score += $score_num;
            }
        }

        $student_count = count($valid_students);
        if ($student_count > 0 && empty($errors)) {
            $average_score = round($total_score / $student_count, 2);
            $processed = true;
        } elseif (empty($errors) && $student_count === 0) {
            $errors[] = "សូមបញ្ចូលព័ត៌មានសិស្សយ៉ាងហោចណាស់ម្នាក់ (ឬចុចប៊ូតុង '⚡ បំពេញទិន្នន័យគំរូ')!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="km" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>មេរៀនពេញលេញ៖ PHP Form Array តាម Bloom's Taxonomy</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Kantumruy Pro & Fira Code -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kantumruy Pro', sans-serif; }
        code, pre { font-family: 'Fira Code', monospace; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-indigo-600 selection:text-white">

    <!-- Header / Hero Section -->
    <header class="bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 text-white py-16 px-4 border-b border-indigo-500/20 shadow-lg">
        <div class="max-w-4xl mx-auto text-center space-y-4">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-indigo-500/20 text-indigo-300 rounded-full text-xs font-semibold tracking-wider border border-indigo-400/30 uppercase">
                <span>📘</span> Masterclass Course
            </span>
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight text-white leading-snug">
                ការគ្រប់គ្រង <span class="text-indigo-400 underline decoration-indigo-500/50 underline-offset-8">Form Array</span> ក្នុង PHP
            </h1>
            <p class="text-slate-300 text-base md:text-lg max-w-2xl mx-auto font-light">
                រៀបចំការរៀនសូត្រជាប្រព័ន្ធស្របតាម <strong class="text-amber-400 font-semibold">Bloom's Taxonomy ទាំង ៦ កម្រិត</strong> ចាប់ពីមូលដ្ឋានទ្រឹស្តី រហូតដល់ការកសាងប្រព័ន្ធគម្រោងជាក់ស្តែង។
            </p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 py-12 space-y-12">

        <!-- ========================================================= -->
        <!-- កម្រិតទី ១៖ ចងចាំ (REMEMBERING) -->
        <!-- ========================================================= -->
        <section class="bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-slate-200 hover:shadow-md transition">
            <div class="flex items-center gap-3 mb-4">
                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-blue-100 text-blue-700 font-bold text-sm">១</span>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900">កម្រិតទី ១៖ ចងចាំ (Remembering)</h2>
            </div>
            <p class="text-slate-600 text-sm md:text-base mb-4 leading-relaxed">
                <strong>PHP Form Array</strong> គឺជាបច្ចេកទេសដែលយើងកំណត់ឈ្មោះ attribute <code class="bg-slate-100 text-indigo-600 px-2 py-0.5 rounded text-sm font-semibold">name</code> របស់ HTML input ដោយដាក់បន្ថែមសញ្ញាវង់ក្រចកការ៉េ <code class="bg-slate-100 text-indigo-600 px-2 py-0.5 rounded text-sm font-semibold">[]</code> ដើម្បីឱ្យ Web Server (PHP) បម្លែងទិន្នន័យដែល Submit មកនោះទៅជា <strong>Array</strong> ដោយស្វ័យប្រវត្តិ។
            </p>
            <div class="bg-slate-900 rounded-xl p-4 overflow-x-auto text-slate-200 text-xs md:text-sm">
                <span class="text-slate-500">// ទម្រង់ Syntax គ្រឹះដែលត្រូវចងចាំ៖</span><br>
                &lt;input type="checkbox" name="<span class="text-emerald-400">skills[]</span>" value="PHP"&gt;<br>
                &lt;input type="text" name="<span class="text-emerald-400">students[]</span>"&gt;<br>
                &lt;input type="text" name="<span class="text-emerald-400">user[name]</span>"&gt; &lt;input type="text" name="<span class="text-emerald-400">user[email]</span>"&gt;
            </div>
        </section>

        <!-- ========================================================= -->
        <!-- កម្រិតទី ២៖ យល់ដឹង (UNDERSTANDING) -->
        <!-- ========================================================= -->
        <section class="bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-slate-200 hover:shadow-md transition">
            <div class="flex items-center gap-3 mb-4">
                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 font-bold text-sm">២</span>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900">កម្រិតទី ២៖ យល់ដឹង (Understanding)</h2>
            </div>
            <p class="text-slate-600 text-sm md:text-base mb-4">
                ហេតុអ្វីចាំបាច់ត្រូវប្រើប្រាស់ <code class="text-indigo-600 font-semibold">[]</code> ក្នុង Form? សូមពិនិត្យមើលភាពខុសគ្នានៃយន្តការដំណើរការ៖
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-5 bg-rose-50/60 rounded-xl border border-rose-200">
                    <h3 class="font-bold text-rose-900 mb-2 flex items-center gap-2">
                        <span>❌</span> Single Input (គ្មានសញ្ញា [])
                    </h3>
                    <p class="text-xs text-slate-600 mb-3">បើអ្នកមាន Checkbox ៣ ហើយប្រើឈ្មោះតែមួយ <code class="bg-white px-1.5 py-0.5 rounded border border-rose-200">name="skill"</code>៖</p>
                    <div class="text-xs bg-slate-900 text-slate-300 p-2.5 rounded leading-relaxed">
                        $_POST['skill'] នឹងចាប់យកតែ <span class="text-rose-400 font-bold">តម្លៃចុងក្រោយបង្អស់មួយគត់</span> ពីព្រោះវាត្រូវបានជាន់ពីលើ (Overwrite)។
                    </div>
                </div>
                <div class="p-5 bg-emerald-50/60 rounded-xl border border-emerald-200">
                    <h3 class="font-bold text-emerald-900 mb-2 flex items-center gap-2">
                        <span>✅</span> Form Array (មានសញ្ញា [])
                    </h3>
                    <p class="text-xs text-slate-600 mb-3">បើអ្នកបន្ថែមវង់ក្រចកការ៉េ <code class="bg-white px-1.5 py-0.5 rounded border border-emerald-200">name="skills[]"</code>៖</p>
                    <div class="text-xs bg-slate-900 text-slate-300 p-2.5 rounded leading-relaxed">
                        PHP នឹងប្រមូលយកគ្រប់ជម្រើសដែលបាន Check បង្កើតជា <span class="text-emerald-400 font-bold">Array រួមមួយ</span> ដោយមិនបាត់បង់ទិន្នន័យឡើយ។
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================= -->
        <!-- កម្រិតទី ៣៖ អនុវត្ត (APPLYING) -->
        <!-- ========================================================= -->
        <section class="bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-slate-200 hover:shadow-md transition">
            <div class="flex items-center gap-3 mb-4">
                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-amber-100 text-amber-700 font-bold text-sm">៣</span>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900">កម្រិតទី ៣៖ អនុវត្ត (Applying)</h2>
            </div>
            <p class="text-slate-600 text-sm md:text-base mb-4">
                ការសរសេរកូដជាក់ស្ដែងលើ Form Checkbox និងការស្រង់ទិន្នន័យមកបង្ហាញដោយប្រើ <code class="text-indigo-600 font-semibold">foreach</code> loop៖
            </p>
            <div class="bg-slate-900 rounded-xl p-5 overflow-x-auto text-xs md:text-sm text-slate-200 leading-relaxed font-mono">
<span class="text-slate-500">// 1. ទម្រង់កូដ HTML Form</span>
&lt;<span class="text-pink-400">form</span> <span class="text-amber-300">method</span>=<span class="text-emerald-300">"POST"</span>&gt;
  &lt;<span class="text-pink-400">label</span>&gt;&lt;<span class="text-pink-400">input</span> <span class="text-amber-300">type</span>=<span class="text-emerald-300">"checkbox"</span> <span class="text-amber-300">name</span>=<span class="text-emerald-300">"skills[]"</span> <span class="text-amber-300">value</span>=<span class="text-emerald-300">"PHP"</span>&gt; PHP&lt;/<span class="text-pink-400">label</span>&gt;
  &lt;<span class="text-pink-400">label</span>&gt;&lt;<span class="text-pink-400">input</span> <span class="text-amber-300">type</span>=<span class="text-emerald-300">"checkbox"</span> <span class="text-amber-300">name</span>=<span class="text-emerald-300">"skills[]"</span> <span class="text-amber-300">value</span>=<span class="text-emerald-300">"MySQL"</span>&gt; MySQL&lt;/<span class="text-pink-400">label</span>&gt;
  &lt;<span class="text-pink-400">button</span> <span class="text-amber-300">type</span>=<span class="text-emerald-300">"submit"</span>&gt;រក្សាទុក&lt;/<span class="text-pink-400">button</span>&gt;
&lt;/<span class="text-pink-400">form</span>&gt;

<span class="text-slate-500">// 2. ការស្រង់យកទិន្នន័យមកដំណើរការក្នុង PHP</span>
<span class="text-indigo-400">&lt;?php</span>
<span class="text-pink-400">if</span> (!<span class="text-amber-300">empty</span>($_POST[<span class="text-emerald-300">'skills'</span>]) && <span class="text-amber-300">is_array</span>($_POST[<span class="text-emerald-300">'skills'</span>])) {
    <span class="text-pink-400">foreach</span> ($_POST[<span class="text-emerald-300">'skills'</span>] <span class="text-pink-400">as</span> <span class="text-sky-300">$skill</span>) {
        <span class="text-amber-300">echo</span> <span class="text-emerald-300">"ជំនាញ៖ "</span> . <span class="text-amber-300">htmlspecialchars</span>(<span class="text-sky-300">$skill</span>) . <span class="text-emerald-300">"&lt;br&gt;"</span>;
    }
}
<span class="text-indigo-400">?&gt;</span>
            </div>
        </section>

        <!-- ========================================================= -->
        <!-- កម្រិតទី ៤៖ វិភាគ (ANALYZING) -->
        <!-- ========================================================= -->
        <section class="bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-slate-200 hover:shadow-md transition">
            <div class="flex items-center gap-3 mb-4">
                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-purple-100 text-purple-700 font-bold text-sm">៤</span>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900">កម្រិតទី ៤៖ វិភាគ (Analyzing)</h2>
            </div>
            <p class="text-slate-600 text-sm md:text-base mb-4">
                ការវិភាគប្រៀបធៀបរវាងទម្រង់ Form Array ទាំងពីរប្រភេទ៖
            </p>
            <div class="space-y-4">
                <div class="bg-slate-50 border border-slate-200 rounded-xl p-4">
                    <span class="font-bold text-purple-700 text-sm block mb-1">ក. Indexed Array (បញ្ជីធាតុទោល 1D)</span>
                    <p class="text-xs text-slate-500 mb-2">HTML: <code class="bg-white px-2 py-0.5 rounded border text-slate-700">&lt;input name="products[]"&gt;</code></p>
                    <div class="text-xs bg-slate-900 text-slate-300 p-3 rounded font-mono">
                        $_POST['products'] = [ 0 => 'ផលិតផល ក', 1 => 'ផលិតផល ខ' ];
                    </div>
                </div>
                <div class="bg-slate-50 border border-slate-200 rounded-xl p-4">
                    <span class="font-bold text-purple-700 text-sm block mb-1">ខ. Multidimensional & Associative Array (ម៉ាទ្រីសជួរដេក 2D)</span>
                    <p class="text-xs text-slate-500 mb-2">HTML: <code class="bg-white px-2 py-0.5 rounded border text-slate-700">&lt;input name="items[0][name]"&gt; &lt;input name="items[0][price]"&gt;</code></p>
                    <div class="text-xs bg-slate-900 text-slate-300 p-3 rounded font-mono">
                        $_POST['items'] = [<br>
                        &nbsp;&nbsp;0 => [ 'name' => 'Mouse', 'price' => 15 ],<br>
                        &nbsp;&nbsp;1 => [ 'name' => 'Keyboard', 'price' => 40 ]<br>
                        ];
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================= -->
        <!-- កម្រិតទី ៥៖ វាយតម្លៃ (EVALUATING) -->
        <!-- ========================================================= -->
        <section class="bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-slate-200 hover:shadow-md transition">
            <div class="flex items-center gap-3 mb-4">
                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-rose-100 text-rose-700 font-bold text-sm">៥</span>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900">កម្រិតទី ៥៖ វាយតម្លៃ (Evaluating)</h2>
            </div>
            <p class="text-slate-600 text-sm md:text-base mb-4">
                មុននឹងយកកូដទៅប្រើប្រាស់ក្នុង Production ត្រូវវាយតម្លៃលើលក្ខខណ្ឌសុវត្ថិភាពសំខាន់ៗទាំង ៣ នេះ៖
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div class="p-4 rounded-xl border border-rose-200 bg-rose-50/40">
                    <h4 class="font-bold text-rose-900 text-sm mb-1">១. Undefined Index</h4>
                    <p class="text-xs text-slate-600">Checkbox ដែលមិនបានធីក នឹងមិនត្រូវបញ្ជូនតម្លៃឡើយ។ ត្រូវតែប្រើ <code class="text-rose-600 font-bold">?? []</code> ដើម្បីការពារ Error Notice។</p>
                </div>
                <div class="p-4 rounded-xl border border-rose-200 bg-rose-50/40">
                    <h4 class="font-bold text-rose-900 text-sm mb-1">២. Type Manipulation</h4>
                    <p class="text-xs text-slate-600">ត្រូវផ្ទៀងផ្ទាត់ដោយ <code class="text-rose-600 font-bold">is_array()</code> ជានិច្ច ពីព្រោះ Hacker អាចកែ Form បញ្ជូន string ធម្មតាចូលមកបំបែក code។</p>
                </div>
                <div class="p-4 rounded-xl border border-rose-200 bg-rose-50/40">
                    <h4 class="font-bold text-rose-900 text-sm mb-1">៣. XSS Attack</h4>
                    <p class="text-xs text-slate-600">ធាតុទាំងអស់ក្នុង Array ត្រូវការពារដោយ <code class="text-rose-600 font-bold">htmlspecialchars()</code> មុនពេលបង្ហាញលើ Browser។</p>
                </div>
            </div>
        </section>

        <!-- ========================================================= -->
        <!-- កម្រិតទី ៦៖ បង្កើតថ្មី (CREATING) - ប្រព័ន្ធជាក់ស្ដែង + ដំណោះស្រាយ -->
        <!-- ========================================================= -->
        <section id="demo-project" class="bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 text-white rounded-2xl p-6 md:p-8 shadow-xl">
            <div class="flex items-center gap-3 mb-2">
                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-indigo-500 text-white font-bold text-sm">៦</span>
                <h2 class="text-xl md:text-2xl font-bold">កម្រិតទី ៦៖ បង្កើតថ្មី (Creating)</h2>
            </div>
            <p class="text-indigo-200 text-sm md:text-base mb-6">
                <strong>គម្រោងអនុវត្តផ្ទាល់៖</strong> ប្រព័ន្ធបញ្ចូលពិន្ទុសិស្សច្រើននាក់ក្នុងពេលតែមួយ (Dynamic Batch Registration)។ អ្នកអាចបំពេញទិន្នន័យខាងក្រោម ឬចុចប៊ូតុង <strong>⚡ បំពេញទិន្នន័យគំរូ</strong> ដើម្បីតេស្តដំណើរការ PHP ជាក់ស្ដែង។
            </p>

            <!-- Alert បង្ហាញ Error -->
            <?php if (!empty($errors)): ?>
                <div class="bg-rose-950/80 border border-rose-500/50 p-4 rounded-xl mb-6">
                    <h4 class="text-rose-300 text-sm font-bold flex items-center gap-2">⚠️ សូមកែតម្រូវចំណុចខ្វះខាត៖</h4>
                    <ul class="list-disc list-inside text-xs text-rose-200 mt-2 space-y-1">
                        <?php foreach ($errors as $err): ?>
                            <li><?= $err ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Form បញ្ចូលទិន្នន័យ -->
            <div class="bg-white text-slate-800 rounded-xl p-5 md:p-6 shadow-md mb-6">
                <form method="POST" action="#demo-project">
                    <div class="flex flex-wrap justify-between items-center gap-2 pb-3 mb-4 border-b border-slate-200">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">បញ្ជីសិស្ស</span>
                        <div class="flex items-center gap-2">
                            <!-- ប៊ូតុងបំពេញទិន្នន័យគំរូ -->
                            <button type="button" onclick="fillDemoData()" class="text-xs bg-amber-50 hover:bg-amber-100 text-amber-700 font-semibold px-3 py-1.5 rounded-lg border border-amber-200 transition">
                                ⚡ បំពេញទិន្នន័យគំរូ (Demo)
                            </button>
                            <!-- ប៊ូតុងបន្ថែមជួរ -->
                            <button type="button" onclick="addNewRow()" class="text-xs bg-indigo-50 hover:bg-indigo-100 text-indigo-700 font-semibold px-3 py-1.5 rounded-lg border border-indigo-200 transition">
                                + បន្ថែមសិស្ស
                            </button>
                        </div>
                    </div>

                    <div id="student-container" class="space-y-3">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                        <div class="student-item grid grid-cols-1 md:grid-cols-12 gap-3 items-center p-3 rounded-lg bg-slate-50 border border-slate-200">
                            <div class="md:col-span-1 text-center font-bold text-slate-400 text-xs md:text-sm">
                                #<span class="row-num"><?= $i + 1 ?></span>
                            </div>
                            <div class="md:col-span-7">
                                <input type="text" 
                                       name="students[<?= $i ?>][name]" 
                                       placeholder="ឈ្មោះសិស្ស (ឧ. គឹម ហុង)" 
                                       class="student-name w-full px-3 py-2 text-sm bg-white border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                            </div>
                            <div class="md:col-span-4">
                                <input type="number" 
                                       step="0.1" 
                                       min="0" 
                                       max="100" 
                                       name="students[<?= $i ?>][score]" 
                                       placeholder="ពិន្ទុ (០-១០០)" 
                                       class="student-score w-full px-3 py-2 text-sm bg-white border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>

                    <div class="mt-6 text-right">
                        <button type="submit" name="submit_batch" class="px-6 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm rounded-xl shadow-md transition">
                            គណនា និងដំណើរការ &rarr;
                        </button>
                    </div>
                </form>
            </div>

            <!-- តារាងបង្ហាញលទ្ធផលជាក់ស្ដែងក្រោយពេល Submit -->
            <?php if ($processed): ?>
            <div class="bg-slate-800/90 border border-emerald-500/40 rounded-xl p-5 md:p-6 backdrop-blur mb-6">
                <div class="flex items-center gap-2 text-emerald-400 font-bold text-base mb-4 border-b border-slate-700 pb-2">
                    <span>📊</span>
                    <h3>លទ្ធផលនៃការគណនាដោយ PHP</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-6">
                    <div class="bg-slate-900/60 p-3 rounded-lg border border-slate-700 text-center">
                        <span class="text-xs text-slate-400">ចំនួនសិស្សសរុប</span>
                        <p class="text-xl font-bold text-white mt-1"><?= count($valid_students) ?> នាក់</p>
                    </div>
                    <div class="bg-slate-900/60 p-3 rounded-lg border border-slate-700 text-center">
                        <span class="text-xs text-slate-400">ពិន្ទុសរុប</span>
                        <p class="text-xl font-bold text-emerald-400 mt-1"><?= $total_score ?></p>
                    </div>
                    <div class="bg-slate-900/60 p-3 rounded-lg border border-slate-700 text-center">
                        <span class="text-xs text-slate-400">ពិន្ទុមធ្យមភាគ</span>
                        <p class="text-xl font-bold text-amber-400 mt-1"><?= $average_score ?> / 100</p>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs md:text-sm">
                        <thead class="bg-slate-900/80 text-slate-300 uppercase border-b border-slate-700">
                            <tr>
                                <th class="py-2.5 px-3">ល.រ</th>
                                <th class="py-2.5 px-3">ឈ្មោះសិស្ស</th>
                                <th class="py-2.5 px-3 text-right">ពិន្ទុ</th>
                                <th class="py-2.5 px-3 text-center">លទ្ធផល</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700">
                            <?php foreach ($valid_students as $idx => $s): ?>
                            <tr>
                                <td class="py-2.5 px-3 text-slate-400"><?= $idx + 1 ?></td>
                                <td class="py-2.5 px-3 text-white font-medium"><?= $s['name'] ?></td>
                                <td class="py-2.5 px-3 text-right text-indigo-300 font-mono font-bold"><?= $s['score'] ?></td>
                                <td class="py-2.5 px-3 text-center">
                                    <?php if ($s['score'] >= 50): ?>
                                        <span class="px-2 py-0.5 rounded text-[11px] font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">ជាប់</span>
                                    <?php else: ?>
                                        <span class="px-2 py-0.5 rounded text-[11px] font-semibold bg-rose-500/20 text-rose-300 border border-rose-500/30">ធ្លាក់</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php endif; ?>

            <!-- ប្រអប់កូដដំណោះស្រាយគំរូ -->
            <div class="border border-indigo-500/30 rounded-xl overflow-hidden bg-slate-950/60">
                <button type="button" 
                        onclick="toggleSolution()" 
                        class="w-full flex items-center justify-between p-4 text-left font-semibold text-sm text-indigo-300 hover:bg-indigo-900/30 transition">
                    <span class="flex items-center gap-2">
                        <span>💡</span> មើលកូដពន្យល់ដំណោះស្រាយគំរូ (Solution Explanation & Snippet)
                    </span>
                    <span id="solution-icon" class="text-xs transition-transform duration-200">▼ បង្ហាញ</span>
                </button>
                <div id="solution-content" class="hidden p-5 border-t border-indigo-500/20 bg-slate-950 text-slate-300 text-xs md:text-sm space-y-4">
                    <p class="leading-relaxed text-slate-400">
                        នេះជាគន្លឹះសំខាន់ៗដែលដំណោះស្រាយនេះបានប្រើ ដើម្បីដោះស្រាយបញ្ហា Form Array ស្មុគស្មាញ៖
                    </p>
                    <div class="space-y-2">
                        <p><strong class="text-amber-400">១. HTML Matrix Name:</strong> ប្រើ <code class="text-emerald-400">students[i][name]</code> និង <code class="text-emerald-400">students[i][score]</code> ដើម្បីឱ្យ PHP បង្កើត 2D Array ស្រួល <code class="text-sky-300">foreach</code>។</p>
                        <p><strong class="text-amber-400">២. ការរំលងជួរទទេ (Skip blanks):</strong> ប្រើ <code class="text-pink-400">if ($name === '' &amp;&amp; $score === '') continue;</code> ការពារកុំឱ្យ Error ពេលសិស្សខ្លះមិនបានវាយបំពេញគ្រប់ជួរ។</p>
                        <p><strong class="text-amber-400">៣. ការគណនាមធ្យមភាគ:</strong> <code class="text-sky-300">$average_score = round($total_score / count($valid_students), 2);</code>។</p>
                    </div>

                    <div class="bg-slate-900 p-4 rounded-lg overflow-x-auto border border-slate-800 font-mono">
                        <span class="text-slate-500">// កូដសង្ខេបផ្នែក Logic ក្នុង PHP៖</span><br>
                        <span class="text-indigo-400">&lt;?php</span><br>
                        <span class="text-pink-400">foreach</span> ($_POST[<span class="text-emerald-300">'students'</span>] <span class="text-pink-400">as</span> <span class="text-sky-300">$student</span>) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-pink-400">if</span> (!<span class="text-amber-300">empty</span>(<span class="text-sky-300">$student</span>[<span class="text-emerald-300">'name'</span>])) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-sky-300">$total</span> += <span class="text-amber-300">floatval</span>(<span class="text-sky-300">$student</span>[<span class="text-emerald-300">'score'</span>]);<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-sky-300">$list</span>[] = <span class="text-sky-300">$student</span>;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                        }<br>
                        <span class="text-sky-300">$average</span> = <span class="text-sky-300">$total</span> / <span class="text-amber-300">count</span>(<span class="text-sky-300">$list</span>);<br>
                        <span class="text-indigo-400">?&gt;</span>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <!-- Footer -->
    <footer class="text-center py-8 text-xs text-slate-500 border-t border-slate-200">
        <p>PHP Form Array Master Lesson &bull; កសាងតាម Bloom's Taxonomy ទាំង ៦ កម្រិត</p>
    </footer>

    <!-- JavaScript Functions -->
    <script>
        // មុខងារបន្ថែមជួរថ្មី
        function addNewRow() {
            const container = document.getElementById('student-container');
            const totalRows = container.querySelectorAll('.student-item').length;
            
            const rowDiv = document.createElement('div');
            rowDiv.className = "student-item grid grid-cols-1 md:grid-cols-12 gap-3 items-center p-3 rounded-lg bg-slate-50 border border-slate-200";
            rowDiv.innerHTML = `
                <div class="md:col-span-1 text-center font-bold text-slate-400 text-xs md:text-sm">
                    #<span class="row-num">${totalRows + 1}</span>
                </div>
                <div class="md:col-span-7">
                    <input type="text" 
                           name="students[${totalRows}][name]" 
                           placeholder="ឈ្មោះសិស្ស..." 
                           class="student-name w-full px-3 py-2 text-sm bg-white border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>
                <div class="md:col-span-4">
                    <input type="number" 
                           step="0.1" 
                           min="0" 
                           max="100" 
                           name="students[${totalRows}][score]" 
                           placeholder="ពិន្ទុ (០-១០០)" 
                           class="student-score w-full px-3 py-2 text-sm bg-white border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>
            `;
            container.appendChild(rowDiv);
        }

        // មុខងារចុចបំពេញទិន្នន័យគំរូភ្លាមៗ (Auto Fill Demo)
        function fillDemoData() {
            const demoData = [
                { name: "គឹម ហុង", score: 87.5 },
                { name: "ចាន់ តារា", score: 92.0 },
                { name: "សុខ វិសាល", score: 45.0 }
            ];

            const nameInputs = document.querySelectorAll('.student-name');
            const scoreInputs = document.querySelectorAll('.student-score');

            demoData.forEach((item, index) => {
                if (nameInputs[index] && scoreInputs[index]) {
                    nameInputs[index].value = item.name;
                    scoreInputs[index].value = item.score;
                }
            });
        }

        // មុខងារបត់/លាតប្រអប់កូដដំណោះស្រាយ
        function toggleSolution() {
            const content = document.getElementById('solution-content');
            const icon = document.getElementById('solution-icon');
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.textContent = '▲ បិទវិញ';
            } else {
                content.classList.add('hidden');
                icon.textContent = '▼ បង្ហាញ';
            }
        }
    </script>
</body>
</html>