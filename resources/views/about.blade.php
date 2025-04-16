<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
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
        <h1 class="text-4xl font-bold text-gray-800 mb-6">About Me</h1>
        <div class="max-w-4xl mx-auto text-lg text-gray-700 leading-relaxed">
            <p>
                I'm <strong>Jobeth Huzain Adjaluddin</strong>, a passionate <strong>Software Developer</strong> who specializes in building efficient, scalable, and clean web, mobile and desktop applications. With solid experience in Laravel, C#, PowerApps, PHP, and JavaScript, I create seamless backend logic and responsive front-end interfaces.
            </p>

            <p class="mt-4">
                I bring not only code but strategy to the table—solving real-world problems, optimizing performance, and continuously leveling up.
            </p>

            <p class="mt-4">
                When not coding, I'm either learning something new in tech, building side projects, or flexing my strategy brain playing mahjong.
            </p>

            <p class="mt-4 text-blue-600 font-semibold">
                Let's build something meaningful together.
            </p>
        </div>
    </div>
</section>

<!-- Experience Timeline -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Experience Timeline</h2>
        <div class="relative border-l-4 border-blue-500 pl-6 space-y-10 max-w-3xl mx-auto">

            <!-- Freelance -->
            <div class="flex items-start space-x-4">
                <img src="/portfolio/public/img/arki.png" alt="Freelance Logo" class="w-12 h-12 object-contain">
                <div>
                    <span class="text-sm text-gray-500">2024 – Present</span>
                    <h3 class="text-xl font-semibold text-gray-800">Freelance Web Developer at Arki Solution</h3>
                    <p class="text-gray-600">Developed custom websites and web apps for small businesses using Laravel, PHP, and MySQL.</p>
                </div>
            </div>

            <!-- XYZ Solutions -->
            <div class="flex items-start space-x-4">
                <img src="/portfolio/public/img/rosepharmc.png" alt="Rose Pharmacy Logo" class="w-12 h-12 object-contain">
                <div>
                    <span class="text-sm text-gray-500">2024 – Present</span>
                    <h3 class="text-xl font-semibold text-gray-800">IT OFFICER at Rose Pharmacy Inc.</h3>
                    <p class="text-gray-600">Worked on internal enterprise tools, implemented REST APIs, and optimized legacy code for better performance.</p>
                </div>
            </div>

            <!-- XYZ Solutions -->
            <div class="flex items-start space-x-4">
                <img src="/portfolio/public/img/npax.png" alt="NPAX Corporation Logo" class="w-12 h-12 object-contain">
                <div>
                    <span class="text-sm text-gray-500">2023 – 2024</span>
                    <h3 class="text-xl font-semibold text-gray-800">Software Engineer at NPAX Corporation</h3>
                    <p class="text-gray-600">Worked on internal enterprise tools, implemented REST APIs, and optimized legacy code for better performance.</p>
                </div>
            </div>

            <!-- CMS Projects -->
            <div class="flex items-start space-x-4">
                <img src="/portfolio/public/img/fast.png" alt="Fast Distribution Logo" class="w-12 h-12 object-contain">
                <div>
                    <span class="text-sm text-gray-500">2021 – 2023</span>
                    <h3 class="text-xl font-semibold text-gray-800">Software Engineer at Fast Distribution Corporation</h3>
                    <p class="text-gray-600">Assisted in building CMS-based projects and handled client-side scripting and bug fixing.</p>
                </div>
            </div>

            <!-- Telco BPO -->
            <div class="flex items-start space-x-4">
                <img src="/portfolio/public/img/qualfon.jpg" alt="Qualfon Logo" class="w-12 h-12 object-contain">
                <div>
                    <span class="text-sm text-gray-500">2016 – 2021</span>
                    <h3 class="text-xl font-semibold text-gray-800">Real-Time Analyst / Technical Support at Qualfon Philippines</h3>
                    <p class="text-gray-600">As a Real-Time Analyst / Technical Support in the Telecommunications (Telco) account, I was responsible for ensuring smooth and efficient operations within a fast-paced BPO environment. My primary role involved monitoring real-time data, analyzing system performance, and providing proactive technical support to ensure seamless service delivery. I worked closely with both customers and internal teams to resolve technical issues, optimize service levels, and maintain the highest standards of service delivery in the telecommunications sector.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Tech Stack -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-10">Tech Stack</h2>
        <div class="flex flex-wrap justify-center gap-10">

            <!-- Existing -->
            <div class="flex flex-col items-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="60" />
                <span class="mt-2 text-sm text-gray-600">PHP</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="/portfolio/public/img/laravel.png" width="60" />
                <span class="mt-2 text-sm text-gray-600">Laravel</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="60" />
                <span class="mt-2 text-sm text-gray-600">JavaScript</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="60" />
                <span class="mt-2 text-sm text-gray-600">MySQL</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" width="60" />
                <span class="mt-2 text-sm text-gray-600">HTML5</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" width="60" />
                <span class="mt-2 text-sm text-gray-600">CSS3</span>
            </div>

            <!-- New additions -->
            <div class="flex flex-col items-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftsqlserver/microsoftsqlserver-plain.svg" width="60" />
                <span class="mt-2 text-sm text-gray-600">MSSQL</span>
            </div>

            <div class="flex flex-col items-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="60" />
                <span class="mt-2 text-sm text-gray-600">Docker</span>
            </div>

            <div class="flex flex-col items-center">
                <img src="https://img.icons8.com/ios-filled/50/000000/api-settings.png" width="60" />
                <span class="mt-2 text-sm text-gray-600">REST API</span>
            </div>

            <div class="flex flex-col items-center">
                <img src="/portfolio/public/img/tailwind.png" width="60" />
                <span class="mt-2 text-sm text-gray-600">Tailwind CSS</span>
            </div>

            <div class="flex flex-col items-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg" width="60" />
                <span class="mt-2 text-sm text-gray-600">C#</span>
            </div>

            <div class="flex flex-col items-center">
                <img src="https://img.icons8.com/ios/50/000000/server.png" width="60" />
                <span class="mt-2 text-sm text-gray-600">cPanel</span>
            </div>

            <!-- Power Platform (text-based) -->
            <div class="flex flex-col items-center">
                <img src="https://img.icons8.com/color/48/000000/power-bi.png" width="60" />
                <span class="mt-2 text-sm text-gray-600">Power BI</span>
            </div>

            <div class="flex flex-col items-center">
                <img src="/portfolio/public/img/powerautomate.png" width="60" />
                <span class="mt-2 text-sm text-gray-600">Power Automate</span>
            </div>

            <div class="flex flex-col items-center">
                <img src="/portfolio/public/img/powerapps.png" width="60" />
                <span class="mt-2 text-sm text-gray-600">Power Apps</span>
            </div>

        </div>
    </div>
</section>

@include('layouts.footer')
</body>
</html>
