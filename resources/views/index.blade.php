<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="icon" href="{{ asset('img/adjanauitech.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">

@include('layouts.header')
<!-- Hero Section -->
<section class="bg-white py-20 mt-10">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight">
            Hello, I'm <span class="text-blue-600">Jobeth Huzain Adjaluddin</span>
        </h1>
        <p class="mt-4 text-lg text-gray-600">
            A passionate Software Developer crafting clean, scalable solutions for web and beyond.
        </p>
        <a href="#contact" class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition">
            Hire Me
        </a>
    </div>
</section>

<!-- What I Do -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">What I Do</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-6 rounded shadow hover:shadow-md transition">
                <i class="fas fa-code text-3xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                <p>Full-stack web apps, APIs, and dynamic interfaces with PHP, JS, Laravel, and more.</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-md transition">
                <i class="fas fa-database text-3xl text-green-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Database Management</h3>
                <p>Efficient database solutions using MySQL, MSSQL—secure and performance-optimized.</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-md transition">
                <i class="fas fa-wrench text-3xl text-yellow-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Bug Fixing & QA</h3>
                <p>Hunt down and squash bugs before they scare your users. Functional and visual QA.</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
</body>
</html>
