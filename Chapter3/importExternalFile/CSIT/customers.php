<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>អតិថិជន (Customer)</title>
    <!-- បញ្ចូល Font ខ្មែរ (Battambang) និង CSS Framework Tailwind CSS សម្រាប់ភាពងាយស្រួល និងស្រស់ស្អាត -->
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Battambang', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex h-screen overflow-hidden">

    <!-- 1. Navigation (Sidebar) -->
    <aside class="w-64 bg-indigo-900 text-white flex flex-col justify-between hidden md:flex">
        <div>
            <!-- Logo -->
            <?php include 'import/logo.php'; ?>
            <!-- Navigation Links -->
            <?php include 'import/nav.php'; ?>
        </div>
        <?php include 'import/copyRight.php'; ?>
    </aside>

    <!-- Main Container -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
        
        <!-- 2. Header -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 shadow-sm">
            <div class="flex items-center space-x-3">
                <span class="text-lg font-bold text-gray-800">អតិថិជន (Customer)</span>
            </div>
            <div class="flex items-center space-x-4">
                <?php include 'import/user.php'; ?>
            </div>
        </header>

        <!-- 3. Content -->
        <main class="flex-1 overflow-y-auto p-6">
            <div class="border-2 border-dashed border-gray-300 rounded-xl h-full flex flex-col items-center justify-center bg-white shadow-sm p-6">
                <span class="text-4xl mb-2">📌</span>
                <h2 class="text-xl font-bold text-gray-700">ទីតាំងសម្រាប់ដាក់ Content</h2>
                <p class="text-gray-500 text-sm mt-1">កន្លែងនេះអាចដាក់តារាង (Tables) ក្រាហ្វ (Charts) ឬកាតព័ត៌មានផ្សេងៗ។</p>
            </div>
        </main>

        <!-- 4. Footer -->
        <?php include 'import/footer.php'; ?>

    </div>

</body>
</html>