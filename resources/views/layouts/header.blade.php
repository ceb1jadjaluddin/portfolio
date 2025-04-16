<header id="main-header" style="background-color: black;" class="fixed top-0 left-0 w-full z-50 bg-black shadow-lg transition-all duration-300">
    <div class="container mx-auto flex items-center justify-between py-1 px-6">
        <!-- Logo -->
        <div class="h-20 flex items-center">
            <a href="{{ route('index') }}" class="flex items-center space-x-3">
                <span class="text-white text-2xl md:text-4xl font-bold">adjanauitech</span>
            </a>
        </div>


        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>

        <!-- Mobile Menu Button (Hamburger Icon) -->
        <button id="mobile-menu-btn" class="md:hidden flex flex-col space-y-1 focus:outline-none z-50 relative">
            <span class="w-6 h-0.5 bg-[#F8E231] transition-transform duration-300" id="bar1"></span>
            <span class="w-6 h-0.5 bg-[#F8E231] transition-transform duration-300" id="bar2"></span>
            <span class="w-6 h-0.5 bg-[#F8E231] transition-transform duration-300" id="bar3"></span>
        </button>
    </div>

    <!-- Fullscreen Mobile Menu (Hidden by default) -->
    <nav id="mobile-menu" class="fixed inset-0 bg-black text-white hidden flex flex-col items-center justify-center space-y-6 z-40">
        <a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
        <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>
</header>

<style>
   .nav-link {
    color: #e0e0e0; /* Soft white-gray for a modern touch */
    font-weight: 600;
    transition: color 0.3s ease-in-out;
}

.nav-link:hover {
    color: #38bdf8; /* Tailwind's sky-400 - eye-catching but classy */
}

.nav-link.active {
    color: #ffffff; /* Pure white for current page */
    border-bottom: 2px solid #38bdf8; /* Subtle underline with accent color */
}


    /* Mobile menu animations */
    #mobile-menu {
        transition: transform 0.3s ease-in-out;
        transform: translateY(-100%);
        opacity: 0;
        display: flex;
    }
    #mobile-menu.active {
        transform: translateY(0);
        opacity: 1;
    }

    /* Hamburger icon animation */
    .open #bar1 {
        transform: translateY(7px) rotate(45deg);
    }
    .open #bar2 {
        opacity: 0;
    }
    .open #bar3 {
        transform: translateY(-7px) rotate(-45deg);
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const mobileMenuBtn = document.getElementById("mobile-menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        mobileMenuBtn.addEventListener("click", function () {
            mobileMenu.classList.toggle("active");
            mobileMenuBtn.classList.toggle("open");
        });
    });
</script>
