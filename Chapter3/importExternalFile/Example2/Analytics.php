<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Admin Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #475569;
        }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-200">

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 transform -translate-x-full md:translate-x-0 md:static md:inset-0 transition-transform duration-300 ease-in-out flex flex-col">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-center h-16 border-b border-gray-200 dark:border-gray-700 px-4">
                <?php include('import/logo.php');?>                
            </div>

            <!-- Sidebar Links -->
            <?php include('import/menu.php');?>

            <!-- Sidebar Footer -->
            <div class="p-4 border-t border-gray-200 dark:border-gray-700">
                <?php include('import/userDisplay.php');?>
            </div>
        </aside>

        <!-- Main Content Wrapper -->
        <div class="flex-1 flex flex-col h-screen overflow-hidden">
            
            <!-- Top Header -->
            <header class="flex items-center justify-between px-6 h-16 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 z-40 shadow-sm">
                <?php include('import/header.php');?>

                
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 dark:bg-gray-900 p-6">
                
                <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Overview Home</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Here's what's happening with your projects today.</p>
                    </div>
                    <button class="px-4 py-2 bg-brand-600 hover:bg-brand-700 text-white text-sm font-medium rounded-lg shadow-sm shadow-brand-500/30 transition-all duration-200 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        New Report
                    </button>
                </div>

                

               

                <!-- Footer -->
                <?php include('import/footer.php'); ?>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // DOM Elements
        const sidebar = document.getElementById('sidebar');
        const openSidebarBtn = document.getElementById('openSidebar');
        const closeSidebarBtn = document.getElementById('closeSidebar');
        const themeToggleBtn = document.getElementById('themeToggle');
        const themeToggleDarkIcon = document.getElementById('themeToggleDarkIcon');
        const themeToggleLightIcon = document.getElementById('themeToggleLightIcon');

        // Mobile Sidebar Toggle Logic
        openSidebarBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
        });

        closeSidebarBtn.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });

        // Theme Toggle Logic
        // Check for saved theme preference or use system preference
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            themeToggleLightIcon.classList.remove('hidden');
            themeToggleDarkIcon.classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            themeToggleDarkIcon.classList.remove('hidden');
            themeToggleLightIcon.classList.add('hidden');
        }

        themeToggleBtn.addEventListener('click', function() {
            // Toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // If is set in localStorage
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                    updateChartsTheme(true);
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                    updateChartsTheme(false);
                }
            } else {
                // If not set via local storage previously
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                    updateChartsTheme(false);
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                    updateChartsTheme(true);
                }
            }
        });

        // Chart.js Configuration
        Chart.defaults.font.family = "'Inter', sans-serif";
        Chart.defaults.color = document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280';
        Chart.defaults.scale.grid.color = document.documentElement.classList.contains('dark') ? '#374151' : '#f3f4f6';

        let revenueChart, usersChart;

        function initCharts() {
            const isDark = document.documentElement.classList.contains('dark');
            const gridColor = isDark ? '#374151' : '#f3f4f6';
            const textColor = isDark ? '#9ca3af' : '#6b7280';

            // Revenue Line Chart
            const ctx1 = document.getElementById('revenueChart').getContext('2d');
            
            // Create Gradient
            let gradient = ctx1.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, 'rgba(59, 130, 246, 0.5)'); // Brand color
            gradient.addColorStop(1, 'rgba(59, 130, 246, 0.0)');

            revenueChart = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'Revenue',
                        data: [12000, 19000, 15000, 25000, 22000, 30000, 28000],
                        borderColor: '#3b82f6',
                        backgroundColor: gradient,
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#3b82f6',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            backgroundColor: isDark ? '#1f2937' : '#ffffff',
                            titleColor: isDark ? '#ffffff' : '#111827',
                            bodyColor: isDark ? '#d1d5db' : '#4b5563',
                            borderColor: isDark ? '#374151' : '#e5e7eb',
                            borderWidth: 1,
                            padding: 10,
                            displayColors: false,
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: gridColor, drawBorder: false },
                            ticks: { color: textColor, padding: 10, callback: function(value) { return '$' + value / 1000 + 'k'; } }
                        },
                        x: {
                            grid: { display: false, drawBorder: false },
                            ticks: { color: textColor, padding: 10 }
                        }
                    }
                }
            });

            // Users Bar Chart
            const ctx2 = document.getElementById('usersChart').getContext('2d');
            usersChart = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'New Users',
                        data: [650, 450, 700, 520, 800, 950, 850],
                        backgroundColor: '#10b981', // Emerald
                        borderRadius: 6,
                        barThickness: 12,
                    },
                    {
                        label: 'Returning',
                        data: [400, 300, 500, 420, 600, 750, 650],
                        backgroundColor: '#e5e7eb', // Gray
                        borderRadius: 6,
                        barThickness: 12,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end',
                            labels: { color: textColor, usePointStyle: true, boxWidth: 8 }
                        },
                        tooltip: {
                            backgroundColor: isDark ? '#1f2937' : '#ffffff',
                            titleColor: isDark ? '#ffffff' : '#111827',
                            bodyColor: isDark ? '#d1d5db' : '#4b5563',
                            borderColor: isDark ? '#374151' : '#e5e7eb',
                            borderWidth: 1,
                            padding: 10
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: gridColor, drawBorder: false },
                            ticks: { color: textColor, padding: 10 }
                        },
                        x: {
                            grid: { display: false, drawBorder: false },
                            ticks: { color: textColor, padding: 10 }
                        }
                    }
                }
            });
        }

        function updateChartsTheme(isDark) {
            const gridColor = isDark ? '#374151' : '#f3f4f6';
            const textColor = isDark ? '#9ca3af' : '#6b7280';
            const tooltipBg = isDark ? '#1f2937' : '#ffffff';
            const tooltipTitle = isDark ? '#ffffff' : '#111827';
            const tooltipBody = isDark ? '#d1d5db' : '#4b5563';
            const tooltipBorder = isDark ? '#374151' : '#e5e7eb';
            
            // Update Returning Users dataset color based on theme
            const barBgSecondary = isDark ? '#374151' : '#e5e7eb';

            if(revenueChart) {
                revenueChart.options.scales.y.grid.color = gridColor;
                revenueChart.options.scales.x.ticks.color = textColor;
                revenueChart.options.scales.y.ticks.color = textColor;
                revenueChart.options.plugins.tooltip.backgroundColor = tooltipBg;
                revenueChart.options.plugins.tooltip.titleColor = tooltipTitle;
                revenueChart.options.plugins.tooltip.bodyColor = tooltipBody;
                revenueChart.options.plugins.tooltip.borderColor = tooltipBorder;
                revenueChart.update();
            }

            if(usersChart) {
                usersChart.data.datasets[1].backgroundColor = barBgSecondary;
                usersChart.options.scales.y.grid.color = gridColor;
                usersChart.options.scales.x.ticks.color = textColor;
                usersChart.options.scales.y.ticks.color = textColor;
                usersChart.options.plugins.legend.labels.color = textColor;
                usersChart.options.plugins.tooltip.backgroundColor = tooltipBg;
                usersChart.options.plugins.tooltip.titleColor = tooltipTitle;
                usersChart.options.plugins.tooltip.bodyColor = tooltipBody;
                usersChart.options.plugins.tooltip.borderColor = tooltipBorder;
                usersChart.update();
            }
        }

        // Initialize charts on load
        window.addEventListener('load', initCharts);

    </script>
</body>
</html>