<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MK Innovations Ltd - Premier digital solutions agency and technology academy in Kigali, Rwanda.">
    <title>MK Innovations Ltd | Web Development & Academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .bg-primary-navy { background-color: #0B2F61; }
        .bg-secondary-blue { background-color: #1A73E8; }
        .bg-accent-gold { background-color: #E5A913; }
        .text-primary-navy { color: #0B2F61; }
        .text-accent-gold { color: #E5A913; }
        
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 25px -12px rgba(0,0,0,0.15); }
        
        @keyframes scrollTech { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-scroll-tech { animation: scrollTech 30s linear infinite; display: flex; width: fit-content; }
        .tech-strip-container { overflow-x: hidden; white-space: nowrap; }
        html { scroll-behavior: smooth; }
        
        @keyframes fadeUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes floatSoft {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }
        .animate-fade-up { animation: fadeUp 0.8s ease-out forwards; }
        .animate-float-soft { animation: floatSoft 4s ease-in-out infinite; }
        
        .hero-card {
            transition: all 0.3s ease;
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 0;
        }
        /* No overlay gradient */
        .hero-card > * { position: relative; z-index: 2; }
        .hero-card:hover {
            transform: translateY(-10px) scale(1.02);
            border: 2px solid #E5A913;
            box-shadow: 0 25px 40px -12px rgba(0,0,0,0.3);
        }
        .hero-card:hover .btn-primary { transform: scale(1.05); box-shadow: 0 10px 20px -5px rgba(0,0,0,0.2); }
        .btn-primary { transition: all 0.2s ease; }
        
        .bg-slideshow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            animation: crossfade 15s infinite;
        }
        .slide1 { background-image: url('{{ asset('images/background1.jpg') }}'); animation-delay: 0s; }
        .slide2 { background-image: url('{{ asset('images/background2.jpg') }}'); animation-delay: 5s; }
        .slide3 { background-image: url('{{ asset('images/background3.jpg') }}'); animation-delay: 10s; }
        @keyframes crossfade {
            0% { opacity: 0; }
            16% { opacity: 1; }
            33% { opacity: 1; }
            49% { opacity: 0; }
            100% { opacity: 0; }
        }
        
        .hero-content { position: relative; z-index: 2; }
        
        /* Horizontal carousel for Why Choose Us */
        .carousel-wrapper {
            overflow-x: hidden;
            white-space: nowrap;
            width: 100%;
            cursor: grab;
        }
        .carousel-track {
            display: flex;
            gap: 2rem;
            animation: scrollLeft 40s linear infinite;
            width: fit-content;
        }
        .carousel-wrapper:hover .carousel-track {
            animation-play-state: paused;
        }
        .choose-card {
            display: inline-block;
            white-space: normal;
            width: 300px;
            flex-shrink: 0;
        }
        @keyframes scrollLeft {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        @media (max-width: 768px) {
            .carousel-track { gap: 1rem; animation-duration: 25s; }
            .choose-card { width: 260px; }
        }
    </style>
</head>
<body class="bg-gray-50">
    @include('partials.header')
    <main>
        @if(session('success'))
            <div class="fixed top-20 left-1/2 transform -translate-x-1/2 z-50 w-full max-w-md px-4">
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-lg">
                    <i class="fa-solid fa-circle-check mr-2"></i> {{ session('success') }}
                </div>
            </div>
        @endif
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>