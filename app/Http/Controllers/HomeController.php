<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            ['title' => 'Business Websites', 'description' => 'Corporate landing pages optimized for local and international brands.', 'image' => 'images/BusinessWebsites.jpg', 'icon' => 'fa-solid fa-building'],
            ['title' => 'School Websites', 'description' => 'Management systems and informational portals for academic institutions.', 'image' => 'images/SchoolWebsites.jpg', 'icon' => 'fa-solid fa-school'],
            ['title' => 'E-commerce Stores', 'description' => 'Modern digital storefronts built with secure payment checkouts.', 'image' => 'images/E-commerceStores.jpg', 'icon' => 'fa-solid fa-cart-shopping'],
            ['title' => 'Portfolio Websites', 'description' => 'Highly tailored, sleek digital resumes for professionals and creatives.', 'image' => 'images/Portfolio.jpg', 'icon' => 'fa-solid fa-id-card'],
            ['title' => 'Website Redesign', 'description' => 'Modernizing legacy, slow websites into fast, responsive platforms.', 'image' => 'images/WebsiteRedesign.jpg', 'icon' => 'fa-solid fa-wand-magic-sparkles'],
            ['title' => 'E-learning Websites', 'description' => 'Custom learning management platforms with course progress tracking.', 'image' => 'images/E-learningWebsites.jpg', 'icon' => 'fa-solid fa-graduation-cap'],
            ['title' => 'Web Maintenance', 'description' => 'Continuous updates, security hardening, and performance optimization.', 'image' => 'images/WebMaintenance.jpg', 'icon' => 'fa-solid fa-screwdriver-wrench'],
            ['title' => 'Web Applications', 'description' => 'Complex, custom database-driven applications built to solve custom operations.', 'image' => 'images/WebApplications.jpg', 'icon' => 'fa-solid fa-window-restore'],
        ];

        $courses = [
            [
                'icon' => 'fa-solid fa-code',
                'title' => 'Beginner',
                'subtitle' => 'Beginner Level',
                'topics' => 'HTML, CSS, JavaScript',
                'description' => 'Learn website foundations and build your first responsive website.',
                'price' => '50,000 RWF',
                'build' => 'Personal portfolio website',
                'image' => 'images/Beginner.jpg',
            ],
            [
                'icon' => 'fa-solid fa-paintbrush',
                'title' => 'Intermediate',
                'subtitle' => 'Intermediate Level',
                'topics' => 'Tailwind CSS, Git & GitHub, UI/UX Basics',
                'description' => 'Learn modern styling, professional design, and how to manage projects with GitHub.',
                'price' => '70,000 RWF',
                'build' => 'Modern business landing page',
                'image' => 'images/Intermediate.jpg',
            ],
            [
                'icon' => 'fa-solid fa-rocket',
                'title' => 'Advanced',
                'subtitle' => 'Advanced Level',
                'topics' => 'React.js, Next.js, Real Client Projects, Deployment',
                'description' => 'Build professional websites and deploy real projects for clients.',
                'price' => '120,000 RWF',
                'build' => 'Real client website',
                'image' => 'images/Advanced.jpg',
            ],
            [
                'icon' => 'fa-regular fa-lightbulb',
                'title' => 'AI Skills',
                'subtitle' => 'Prompt Engineering',
                'topics' => 'AI Tools, ChatGPT, DeepSeek, Website Planning Prompts',
                'description' => 'Learn how to use AI to plan websites, generate code, improve designs, and work faster.',
                'price' => '60,000 RWF',
                'build' => 'AI website plan + coding prompts',
                'image' => 'images/AISkills.jpg',
            ],
            [
                'icon' => 'fa-solid fa-layer-group',
                'title' => 'Full Stack Development',   // changed from 'Complete'
                'subtitle' => 'Full Web Development Bootcamp',
                'topics' => 'HTML, CSS, JavaScript, Tailwind, React, Next.js, GitHub, Deployment',
                'description' => 'Start from zero and become ready to build professional websites.',
                'price' => '250,000 RWF',
                'build' => 'Complete professional website',
                'image' => 'images/Complete.jpg',
            ],
            [
                'icon' => 'fa-solid fa-briefcase',
                'title' => 'Project Based',
                'subtitle' => 'Client Website Package Training',
                'topics' => 'Portfolio Website, Business Website, Contact Forms, Hosting',
                'description' => 'Learn how to create websites for real customers and deliver complete projects.',
                'price' => '150,000 RWF',
                'build' => 'Website for a real customer',
                'image' => 'images/ProjectBased.jpg',
            ],
        ];

        $whyChooseUs = [
            ['icon' => 'fa-solid fa-users', 'title' => 'Experienced and skilled team', 'description' => 'Our team brings years of industry experience and technical expertise to every project.'],
            ['icon' => 'fa-solid fa-medal', 'title' => 'High-quality products/services', 'description' => 'We deliver solutions that meet the highest standards of quality and performance.'],
            ['icon' => 'fa-solid fa-certificate', 'title' => 'Industry-certified professionals', 'description' => 'Our certifications prove our commitment to professional excellence.'],
            ['icon' => 'fa-solid fa-clock', 'title' => 'Fast response time', 'description' => 'We pride ourselves on quick responses and rapid problem resolution.'],
            ['icon' => 'fa-solid fa-face-smile', 'title' => 'Friendly customer support', 'description' => 'Our support team is approachable, helpful, and always ready to assist.'],
            ['icon' => 'fa-solid fa-headset', 'title' => '24/7 availability', 'description' => 'We are available around the clock to address your needs and concerns.'],
        ];

        $portfolioItems = [
            ['title' => 'MK Scholars Website', 'description' => 'Modern school management and academic institution website solution.', 'image' => 'images/MKScholars.jpg', 'icon' => 'fa-solid fa-school', 'category' => 'Education', 'url' => 'https://mkscholars.com/home'],
            ['title' => 'MK Driving Website', 'description' => 'Professional driving school website with training and booking features.', 'image' => 'images/MKDriving.jpg', 'icon' => 'fa-solid fa-car', 'category' => 'Driving School', 'url' => 'https://driving.mkscholars.com/rw'],
            ['title' => 'MK E-Learning Platform', 'description' => 'Interactive e-learning platform for online courses and digital education.', 'image' => 'images/background2.jpg', 'icon' => 'fa-solid fa-graduation-cap', 'category' => 'E-Learning', 'url' => '#'],
        ];

        $contactInfo = [
            'location' => 'Kigali, Rwanda',
            'phone' => '+250794689345',
            'phone_link' => 'tel:+250794689345',
            'email' => 'mkinnovationsltd@gmail.com',   // updated email
            'email_link' => 'mailto:mkinnovationsltd@gmail.com', // updated email link
            'whatsapp_link' => 'https://wa.me/250794689345',
        ];

        $quickLinks = [
            ['name' => 'Home', 'href' => '#home'],
            ['name' => 'About', 'href' => '#about'],
            ['name' => 'Services', 'href' => '#services'],
            ['name' => 'Courses', 'href' => '#courses'],
            ['name' => 'Portfolio', 'href' => '#portfolio'],
            ['name' => 'Contact', 'href' => '#contact'],
        ];

        return view('home', compact('services', 'courses', 'whyChooseUs', 'portfolioItems', 'contactInfo', 'quickLinks'));
    }

    public function newsletter(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}