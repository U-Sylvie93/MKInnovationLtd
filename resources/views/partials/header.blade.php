<header class="sticky top-0 z-50 bg-primary-navy shadow-md">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between py-3">
            <div class="flex items-center space-x-2">
                <!-- Logo with white circle background -->
                <div class="bg-white rounded-full p-1 shadow-md flex items-center justify-center w-10 h-10">
                    <img src="{{ asset('logo.png') }}" alt="MK Innovations Ltd Logo" class="h-6 w-auto object-contain">
                </div>
                <!-- Company name visible on all screens, same line as logo -->
                <span class="text-white font-bold text-base sm:text-lg">MK Innovations Ltd</span>
            </div>
            <nav class="hidden md:flex items-center space-x-6">
                <a href="#home" class="nav-link text-white transition duration-300 px-3 py-2 rounded-lg font-medium">Home</a>
                <a href="#about" class="nav-link text-white transition duration-300 px-3 py-2 rounded-lg">About</a>
                <a href="#services" class="nav-link text-white transition duration-300 px-3 py-2 rounded-lg">Services</a>
                <a href="#courses" class="nav-link text-white transition duration-300 px-3 py-2 rounded-lg">Courses</a>
                <a href="#portfolio" class="nav-link text-white transition duration-300 px-3 py-2 rounded-lg">Portfolio</a>
                <a href="#contact" class="nav-link text-white transition duration-300 px-3 py-2 rounded-lg">Contact</a>
                <a href="#contact" class="bg-accent-gold text-primary-navy px-5 py-2 rounded-full font-semibold hover:bg-yellow-400 transition shadow-md">Get Started</a>
            </nav>
            <div class="md:hidden w-full mt-3 pt-2 border-t border-blue-800 flex flex-wrap justify-center gap-3">
                <a href="#home" class="mobile-nav-link text-white text-sm transition duration-300 px-2 py-1 rounded">Home</a>
                <a href="#about" class="mobile-nav-link text-white text-sm transition duration-300 px-2 py-1 rounded">About</a>
                <a href="#services" class="mobile-nav-link text-white text-sm transition duration-300 px-2 py-1 rounded">Services</a>
                <a href="#courses" class="mobile-nav-link text-white text-sm transition duration-300 px-2 py-1 rounded">Courses</a>
                <a href="#portfolio" class="mobile-nav-link text-white text-sm transition duration-300 px-2 py-1 rounded">Portfolio</a>
                <a href="#contact" class="mobile-nav-link text-white text-sm transition duration-300 px-2 py-1 rounded">Contact</a>
                <a href="#contact" class="bg-accent-gold text-primary-navy px-3 py-1 rounded-full text-sm font-semibold">Get Started</a>
            </div>
        </div>
    </div>
</header>

<style>
    .nav-link:hover, .mobile-nav-link:hover {
        background-color: #E5A913 !important;
        color: #0B2F61 !important;
        border-radius: 0.5rem;
    }
</style>