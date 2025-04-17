<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Work</title>
    <link rel="icon" href="/img/adjanauitech.png" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">

@include('layouts.header')

<section class="py-20 bg-white mt-10">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">My Portfolio</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Project 1 -->
            <div class="bg-gray-100 p-4 rounded shadow hover:shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/img/zeuswebsite.png" alt="Project 1" class="rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Event Management Platform Front-End Development</h3>
                <p class="text-gray-600">Created a dynamic and user-friendly front-end website for an event management company. The platform allows clients to view upcoming events, register for events, and manage bookings through an intuitive interface. Focused on responsive design and seamless user experience.</p>
                <p class="text-sm text-gray-500 mt-2">Tech Used: Laravel, MySQL, TailwindCSS</p>
                <div class="mt-4 flex justify-center gap-4">
                    <a href="https://repoprojects.adjanauitech.com/zues/public/" target="_blank" class="text-blue-600 hover:underline">Live Demo</a>
                    <a href="{{ route('contact') }}" target="_blank" class="text-gray-600 hover:underline">Source Code</a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-gray-100 p-4 rounded shadow hover:shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/img/yumewebsite.png" alt="Project 2" class="rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Streaming Music Service Front-End Development</h3>
                <p class="text-gray-600">Developed a modern, responsive front-end for a streaming music platform. The website allows users to explore music collections, create playlists, and listen to their favorite tracks with a visually appealing interface. Emphasized fast navigation and mobile-first design to enhance user experience on all devices.</p>
                <p class="text-sm text-gray-500 mt-2">Tech Used: Laravel, Vue.js, Stripe, MySQL</p>
                <div class="mt-4 flex justify-center gap-4">
                    <a href="https://repoprojects.adjanauitech.com/yume/public/" target="_blank" class="text-blue-600 hover:underline">Live Demo</a>
                    <a href="{{ route('contact') }}" target="_blank" class="text-gray-600 hover:underline">Source Code</a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-gray-100 p-4 rounded shadow hover:shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/img/senioritosgardenwebsite.png" alt="Project 3" class="rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Amusement Park Website Front-End Development</h3>
                <p class="text-gray-600">Designed and developed the front-end for an amusement park website. Features include a comprehensive event calendar, attraction details, ticket booking functionality, and interactive maps. Focused on ensuring the website is fun, engaging, and easy to navigate for visitors.</p>
                <p class="text-sm text-gray-500 mt-2">Tech Used: Laravel, AlpineJS, FullCalendar, SendGrid</p>
                <div class="mt-4 flex justify-center gap-4">
                    <a href="https://repoprojects.adjanauitech.com/senoritos-garden/public/contact" target="_blank" class="text-blue-600 hover:underline">Live Demo</a>
                    <a href="{{ route('contact') }}" target="_blank" class="text-gray-600 hover:underline">Source Code</a>
                </div>
            </div>

             <!-- Project 4 -->
             <div class="bg-gray-100 p-4 rounded shadow hover:shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/img/dcccoffeepos.png" alt="Project 4" class="rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Coffee Shop POS System Development</h3>
                <p class="text-gray-600">Developed a comprehensive POS system for a coffee shop, streamlining sales transactions, inventory management, and reporting. The system features a user-friendly interface for baristas to quickly process orders, track inventory in real-time, and generate detailed sales reports. Emphasized intuitive navigation and optimized performance to ensure fast and accurate service during peak hours.</p>
                <p class="text-sm text-gray-500 mt-2">Tech Used: Laravel, AlpineJS, FullCalendar, SendGrid</p>
                <div class="mt-4 flex justify-center gap-4">
                    <a href="https://yourbookingdemo.com" target="_blank" class="text-blue-600 hover:underline">Live Demo</a>
                    <a href="{{ route('contact') }}" target="_blank" class="text-gray-600 hover:underline">Source Code</a>
                </div>
            </div>

             <!-- Project 5 -->
             <div class="bg-gray-100 p-4 rounded shadow hover:shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/img/corporatecreditsystem.png" alt="Project 5" class="rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">Corporate Credit System Development</h3>
                <p class="text-gray-600">Developed a comprehensive corporate credit management system to handle credit limits, transactions, and account management for businesses. The system allows companies to manage their credit usage, track payments, and set customizable credit limits. Features include real-time balance updates, automated credit reports, and secure authentication for administrators to manage company accounts efficiently.</p>
                <p class="text-sm text-gray-500 mt-2">Tech Used: Laravel, AlpineJS, FullCalendar, SendGrid</p>
                <div class="mt-4 flex justify-center gap-4">
                    <a href="https://test.itechserves.com/corporatecreditsystem/html/" target="_blank" class="text-blue-600 hover:underline">Live Demo</a>
                    <a href="{{ route('contact') }}" target="_blank" class="text-gray-600 hover:underline">Source Code</a>
                </div>
            </div>

             <!-- Project 6 -->
             <div class="bg-gray-100 p-4 rounded shadow hover:shadow-lg hover:scale-105 transform transition duration-300">
                <img src="{{ asset('img/project3.png') }}" alt="Project 6" class="rounded mb-4">
                <h3 class="text-lg font-semibold mb-2">API Integration</h3>
                <p class="text-gray-600">Seamless integration with third-party APIs for payments, messaging, geolocation, and more—enhancing your application's capabilities.</p>
                <p class="text-sm text-gray-500 mt-2">Tech Used: Laravel, AlpineJS, FullCalendar, SendGrid</p>
                <div class="mt-4 flex justify-center gap-4">
                    <a href="https://yourbookingdemo.com" target="_blank" class="text-blue-600 hover:underline">Live Demo</a>
                    <a href="{{ route('contact') }}" target="_blank" class="text-gray-600 hover:underline">Source Code</a>
                </div>
            </div>

        </div>
    </div>
</section>


@include('layouts.footer')
</body>
</html>
