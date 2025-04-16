<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="icon" href="/portfolio/public/img/adjanauitech.png" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">

@include('layouts.header')

<section class="py-20 bg-white mt-10">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-10">My Services</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

            <!-- Custom Web Development -->
            <div class="bg-gray-100 p-6 rounded shadow hover:shadow-md transition">
                <i class="fas fa-laptop-code text-3xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Custom Web Development</h3>
                <p>Tailored, responsive, and scalable web apps using Laravel, PHP, and JavaScript.</p>
            </div>

            <!-- System Maintenance -->
            <div class="bg-gray-100 p-6 rounded shadow hover:shadow-md transition">
                <i class="fas fa-tools text-3xl text-yellow-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">System Maintenance</h3>
                <p>Routine checks, updates, backups, and performance tuning to keep systems healthy.</p>
            </div>

            <!-- Mobile-Responsive Design -->
            <div class="bg-gray-100 p-6 rounded shadow hover:shadow-md transition">
                <i class="fas fa-mobile-alt text-3xl text-green-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Mobile-Responsive Design</h3>
                <p>Modern interfaces that adapt perfectly to phones, tablets, and desktops.</p>
            </div>

            <!-- API Integration -->
            <div class="bg-gray-100 p-6 rounded shadow hover:shadow-md transition">
                <i class="fas fa-plug text-3xl text-purple-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">API Integration</h3>
                <p>Seamlessly connect your system with third-party APIs like payment gateways, SMS, and more.</p>
            </div>

            <!-- Database Design & Optimization -->
            <div class="bg-gray-100 p-6 rounded shadow hover:shadow-md transition">
                <i class="fas fa-database text-3xl text-red-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Database Solutions</h3>
                <p>Design, manage, and optimize secure databases using MySQL, MSSQL, and more.</p>
            </div>

            <!-- QA & Debugging -->
            <div class="bg-gray-100 p-6 rounded shadow hover:shadow-md transition">
                <i class="fas fa-bug text-3xl text-pink-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Bug Fixing & QA</h3>
                <p>Thorough testing and debugging to ensure smooth functionality and great user experience.</p>
            </div>

        </div>
    </div>
</section>

@include('layouts.footer')
</body>
</html>
