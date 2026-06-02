@extends('layouts.app')

@section('content')
<!-- HERO SECTION -->
<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-primary-navy">
    <div class="bg-slideshow">
        <div class="slide slide1"></div>
        <div class="slide slide2"></div>
        <div class="slide slide3"></div>
    </div>
    <div class="hero-content container mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28 relative z-10">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-stretch">
            <div class="hero-card rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 animate-float-soft" style="background-image: url('{{ asset('images/webdev.jpg') }}'); background-size: cover; background-position: center;">
                <div class="p-6 md:p-8 lg:p-10 text-white backdrop-blur-sm bg-black/20">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 animate-fade-up">Need a Professional Website?</h2>
                    <p class="text-gray-100 text-base md:text-lg mb-6 leading-relaxed">We design and develop premium business websites, e-commerce platforms, web applications, and digital systems that help organizations grow online.</p>
                    <a href="#contact" class="btn-primary inline-block bg-accent-gold text-primary-navy font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-yellow-400 transition transform hover:scale-105 duration-200">Get Your Website <i class="fa-solid fa-arrow-right ml-2"></i></a>
                </div>
            </div>
            <div class="hero-card rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 animate-float-soft" style="background-image: url('{{ asset('images/learnwebdev.jpg') }}'); background-size: cover; background-position: center;">
                <div class="p-6 md:p-8 lg:p-10 text-white backdrop-blur-sm bg-black/20">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 animate-fade-up">Want to Learn Web Development?</h2>
                    <p class="text-gray-100 text-base md:text-lg mb-6 leading-relaxed">Join practical web development courses and learn real-world skills in HTML, CSS, JavaScript, React, Next.js, full stack development, and freelancing.</p>
                    <a href="#courses" class="btn-primary inline-block bg-secondary-blue text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-blue-600 transition transform hover:scale-105 duration-200">Start Learning <i class="fa-solid fa-graduation-cap ml-2"></i></a>
                </div>
            </div>
        </div>
        <div class="tech-strip-container w-full mt-16 pt-6">
            <div class="animate-scroll-tech flex items-center space-x-8">
                @php
                    $badges = ['HTML', 'CSS', 'JavaScript', 'Laravel', 'React', 'Next.js', 'APIs', 'Tailwind', 'Blade', 'Database', 'Git', 'Freelancing'];
                    $icons = ['HTML' => 'fa-brands fa-html5', 'CSS' => 'fa-brands fa-css3-alt', 'JavaScript' => 'fa-brands fa-js', 'Laravel' => 'fa-brands fa-laravel', 'React' => 'fa-brands fa-react', 'Next.js' => 'fa-brands fa-node-js', 'APIs' => 'fa-solid fa-plug', 'Tailwind' => 'fa-brands fa-tailwind', 'Blade' => 'fa-solid fa-code', 'Database' => 'fa-solid fa-database', 'Git' => 'fa-brands fa-git-alt', 'Freelancing' => 'fa-solid fa-briefcase'];
                @endphp
                @foreach(array_merge($badges, $badges) as $badge)
                    <div class="flex items-center space-x-2 bg-white/20 backdrop-blur-sm rounded-full px-4 py-1.5 shadow-md">
                        <i class="{{ $icons[$badge] ?? 'fa-solid fa-tag' }} text-accent-gold text-sm"></i>
                        <span class="text-white text-sm font-medium">{{ $badge }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION – WITH EXPLICIT ICONS (GOLD CHECKMARKS) -->
<section id="about" class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <div class="rounded-3xl shadow-2xl overflow-hidden bg-white ring-1 ring-gray-100">
                    <img src="{{ asset('images/about.jpg') }}" alt="MK Innovations Ltd - Professional team at work" class="w-full h-[150px] md:h-[200px] object-cover object-center">
                </div>
            </div>
            <div class="order-1 md:order-2">
                <div class="mb-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary-navy">About <span class="text-accent-gold">MK Innovations</span></h2>
                    <div class="w-24 h-1 bg-accent-gold mt-3 rounded-full"></div>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6 text-lg">MK Innovations Ltd is a premier digital solutions agency and technology academy dedicated to empowering the digital future. We bridge the gap between imagination and execution by engineering world-class web applications for businesses, while simultaneously training the next generation of expert developers with real-world, industry-standard tech skills.</p>
                <div class="grid sm:grid-cols-2 gap-3">
                    <div class="flex items-center gap-2"><i class="fas fa-check-circle text-accent-gold text-lg"></i><span>Digital solutions agency</span></div>
                    <div class="flex items-center gap-2"><i class="fas fa-check-circle text-accent-gold text-lg"></i><span>Technology academy</span></div>
                    <div class="flex items-center gap-2"><i class="fas fa-check-circle text-accent-gold text-lg"></i><span>Practical training</span></div>
                    <div class="flex items-center gap-2"><i class="fas fa-check-circle text-accent-gold text-lg"></i><span>Web application development</span></div>
                    <div class="flex items-center gap-2"><i class="fas fa-check-circle text-accent-gold text-lg"></i><span>Business growth through technology</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="services" class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-navy">Our <span class="text-accent-gold">Services</span></h2>
            <div class="w-24 h-1 bg-accent-gold mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($services as $service)
                <div class="group bg-white rounded-3xl overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border hover:border-accent-gold">
                    <div class="relative overflow-hidden h-56">
                        <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-accent-gold/20 text-accent-gold group-hover:bg-accent-gold group-hover:text-white transition-all duration-300">
                                <i class="{{ $service['icon'] }} text-lg"></i>
                            </span>
                            <h3 class="text-xl font-bold text-primary-navy">{{ $service['title'] }}</h3>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ $service['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- COURSES SECTION -->
<section id="courses" class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-navy">Web Development <span class="text-accent-gold">Courses</span></h2>
            <div class="w-24 h-1 bg-accent-gold mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($courses as $course)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border hover:border-accent-gold">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset($course['image']) }}" alt="{{ $course['title'] }} Course" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute top-2 right-2 bg-accent-gold text-primary-navy text-xs font-bold px-2 py-1 rounded-full">
                            {{ $course['subtitle'] }}
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-primary-navy to-secondary-blue p-5">
                        <div class="flex items-center justify-between mb-2">
                            <i class="{{ $course['icon'] }} text-2xl text-accent-gold drop-shadow-md"></i>
                            <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-semibold text-accent-gold">{{ $course['price'] }}</span>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-blue drop-shadow-sm">{{ $course['title'] }}</h3>
                    </div>
                    <div class="p-5 bg-white">
                        <p class="text-gray-700 text-sm font-medium mb-3">{{ $course['topics'] }}</p>
                        <p class="text-gray-600 text-sm mb-4">{{ $course['description'] }}</p>
                        <div class="border-t border-gray-200 pt-3 mb-3">
                            <p class="text-xs text-gray-500 uppercase tracking-wide font-semibold mb-2">What You Will Build</p>
                            <div class="flex items-center space-x-2 text-sm text-gray-700">
                                <i class="fa-solid fa-check-circle text-accent-gold"></i>
                                <span>{{ $course['build'] }}</span>
                            </div>
                        </div>
                        <a href="#contact" class="block w-full text-center bg-secondary-blue hover:bg-accent-gold transition text-white font-semibold py-2 px-4 rounded-lg">Enroll Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- WHY CHOOSE US - HORIZONTAL CAROUSEL -->
<section id="why-us" class="py-16 md:py-20 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-navy">Why <span class="text-accent-gold">Choose Us</span></h2>
            <div class="w-24 h-1 bg-accent-gold mx-auto mt-4 rounded-full"></div>
        </div>
    </div>
    <div class="carousel-wrapper">
        <div class="carousel-track">
            @foreach($whyChooseUs as $item)
                <div class="choose-card">
                    <div class="bg-white p-6 rounded-xl shadow-md text-center card-hover">
                        <div class="bg-accent-gold/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="{{ $item['icon'] }} text-2xl text-accent-gold"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-navy">{{ $item['title'] }}</h3>
                        <p class="text-gray-600 text-sm mt-2">{{ $item['description'] }}</p>
                    </div>
                </div>
            @endforeach
            @foreach($whyChooseUs as $item)
                <div class="choose-card">
                    <div class="bg-white p-6 rounded-xl shadow-md text-center card-hover">
                        <div class="bg-accent-gold/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="{{ $item['icon'] }} text-2xl text-accent-gold"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-navy">{{ $item['title'] }}</h3>
                        <p class="text-gray-600 text-sm mt-2">{{ $item['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- PORTFOLIO SECTION -->
<section id="portfolio" class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-navy">Our <span class="text-accent-gold">Portfolio</span></h2>
            <div class="w-24 h-1 bg-accent-gold mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($portfolioItems as $item)
                <div class="group bg-gray-50 rounded-2xl overflow-hidden shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute top-4 left-4 z-10"><span class="inline-block bg-accent-gold text-primary-navy text-xs font-semibold px-3 py-1 rounded-full shadow-md">{{ $item['category'] }}</span></div>
                        <div class="absolute bottom-4 right-4 z-10"><div class="bg-white/20 backdrop-blur-sm rounded-full p-2"><i class="{{ $item['icon'] }} text-white text-xl"></i></div></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-primary-navy mb-2">{{ $item['title'] }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ $item['description'] }}</p>
                        <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-secondary-blue text-white text-sm px-5 py-2 rounded-full hover:bg-accent-gold transition duration-300">View Project <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-navy">Contact & <span class="text-accent-gold">Communication Hub</span></h2>
            <div class="w-24 h-1 bg-accent-gold mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-10">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4"><i class="fa-solid fa-location-dot text-2xl text-accent-gold mt-1"></i><div><h3 class="font-bold text-primary-navy">Location</h3><p class="text-gray-600">{{ $contactInfo['location'] }}</p></div></div>
                    <div class="flex items-start space-x-4"><i class="fa-solid fa-phone text-2xl text-accent-gold mt-1"></i><div><h3 class="font-bold text-primary-navy">Phone</h3><a href="{{ $contactInfo['phone_link'] }}" class="text-secondary-blue hover:underline">{{ $contactInfo['phone'] }}</a></div></div>
                    <div class="flex items-start space-x-4"><i class="fa-solid fa-envelope text-2xl text-accent-gold mt-1"></i><div><h3 class="font-bold text-primary-navy">Email</h3><a href="{{ $contactInfo['email_link'] }}" class="text-secondary-blue hover:underline">{{ $contactInfo['email'] }}</a></div></div>
                    <div class="flex items-start space-x-4"><i class="fa-brands fa-whatsapp text-2xl text-accent-gold mt-1"></i><div><h3 class="font-bold text-primary-navy">WhatsApp</h3><a href="{{ $contactInfo['whatsapp_link'] }}" target="_blank" class="text-secondary-blue hover:underline">Chat with us</a></div></div>
                </div>
            </div>
            <div class="bg-primary-navy p-8 rounded-xl shadow-lg text-white text-center">
                <h3 class="text-2xl font-bold mb-3">Ready to build your website or start learning?</h3>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-6">
                    <a href="{{ $contactInfo['phone_link'] }}" class="bg-accent-gold text-primary-navy px-6 py-3 rounded-full font-semibold hover:bg-yellow-400 transition"><i class="fa-solid fa-phone mr-2"></i> Call Now</a>
                    <a href="{{ $contactInfo['whatsapp_link'] }}" target="_blank" class="bg-secondary-blue text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-600 transition"><i class="fa-brands fa-whatsapp mr-2"></i> Message on WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection