<footer class="bg-primary-navy text-white pt-12 pb-6">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <div class="flex flex-col items-center md:items-start mb-4">
                    <div class="bg-white rounded-full p-2 shadow-md flex items-center justify-center w-24 h-24 mb-3">
                        <img src="{{ asset('logo.png') }}" alt="MK Innovations Ltd" class="h-16 w-auto object-contain">
                    </div>
                    <span class="font-bold text-xl">MK Innovations Ltd</span>
                </div>
                <p class="text-gray-300 text-sm mt-2">Empowering the digital future through premium web development and practical engineering courses.</p>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-4 border-b border-accent-gold inline-block pb-1">About Us</h4>
                <p class="text-gray-300 text-sm">MK Innovations Ltd - Empowering the Digital Future through premium web development and practical engineering courses in Kigali, Rwanda.</p>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-4 border-b border-accent-gold inline-block pb-1">Quick Links</h4>
                <ul class="space-y-2">
                    @foreach($quickLinks as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="text-gray-300 hover:text-accent-gold text-sm transition duration-200 flex items-center gap-2">
                                <i class="fa-solid fa-arrow-right text-xs text-accent-gold"></i>
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-4 border-b border-accent-gold inline-block pb-1">Stay Updated</h4>
                <form method="POST" action="{{ route('newsletter.submit') }}" class="mb-4">
                    @csrf
                    <div class="flex flex-col sm:flex-row gap-2">
                        <input type="email" name="email" placeholder="Your email address" required class="flex-1 px-3 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-accent-gold text-sm">
                        <button type="submit" class="bg-secondary-blue hover:bg-accent-gold transition text-white font-semibold px-4 py-2 rounded-lg text-sm">Subscribe</button>
                    </div>
                </form>
                <div class="flex space-x-5 mt-4">
                    <a href="https://wa.me/250794689345" target="_blank" aria-label="WhatsApp" class="text-gray-300 hover:text-accent-gold text-2xl"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="mailto:mkinnovationsltd@gmail.com" aria-label="Email" class="text-gray-300 hover:text-accent-gold text-2xl"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="border-t border-blue-800 mt-8 pt-6 text-center text-gray-400 text-sm">
            <p>&copy; {{ date('Y') }} MK Innovations Ltd. All rights reserved.</p>
        </div>
    </div>
</footer>