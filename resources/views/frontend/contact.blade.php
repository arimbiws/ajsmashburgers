<x-frontend-layout title="Contact Us - AJ Smash Burgers">
    <section class="bg-radial-hero relative py-16 md:pt-24">
        <div class="absolute inset-0 bg-cover bg-center opacity-70 pointer-events-none"
            style="background-image: url('{{ asset('storage/images/overlay.png') }}');">
        </div>

        <div class="relative container mx-auto flex flex-col items-center justify-center text-center max-w-7xl gap-4 md:gap-7 pt-16 md:pt-12 px-4 sm:px-6 lg:px-8">
            <h1 class="font-heading text-background text-3xl sm:text-4xl lg:text-5xl tracking-wider">Contact Us</h1>
            <p class="text-background mx-auto text-xs md:text-base tracking-wider max-w-sm md:max-w-5xl md:mt-2">
                Punya pertanyaan, umpan balik, atau ingin memesan dalam jumlah besar? Jangan ragu untuk menghubungi kami, tim kami siap membantu Anda!
            </p>
        </div>
    </section>

    <!-- Restaurant Maps -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col gap-5 mb-6 md:px-8">
                <h2 class="font-heading text-tertiary text-2xl/normal md:text-3xl/normal">Get in Touch</h2>
                <p class="text-text mb-4 text-sm md:text-base text-justify max-w-sm md:max-w-md">
                    Kunjungi outlet kami atau hubungi kami melalui kontak di bawah ini. Kami selalu senang mendengar dari Anda.
                </p>
                <div class="flex items-center">
                    <div class="bg-secondary p-3 md:p-4 rounded-full mr-4 shadow-lg flex-shrink-0">
                        <x-heroicon-o-clock class="w-7 h-7 md:w-8 md:h-8 text-white" />
                    </div>
                    <div class="text-left uppercase">
                        <div class="text-accent text-xs/loose md:text-base font-medium tracking-widest mb-2">Operational Hours</div>
                        <div class="font-heading text-secondary text-sm md:text-md/loose">10AM - 12PM Everyday</div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-secondary p-3 md:p-4 rounded-full mr-4 shadow-lg flex-shrink-0">
                        <x-heroicon-o-envelope class="w-7 h-7 md:w-8 md:h-8 text-white" />
                    </div>
                    <div class="text-left">
                        <div class="text-accent text-xs/loose md:text-base font-medium tracking-widest mb-2 uppercase">Email</div>
                        <div class="font-heading text-secondary text-sm md:text-md/loose">{{ $company->email_main ?? 'contact@ajsmashburger.com' }}</div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-secondary p-3 md:p-4 rounded-full mr-4 shadow-lg flex-shrink-0">
                        <x-heroicon-o-phone class="w-7 h-7 md:w-8 md:h-8 text-white" />
                    </div>
                    <div class="text-left uppercase">
                        <div class="text-accent text-xs/loose md:text-base font-medium tracking-widest mb-2">WhatsApp</div>
                        <div class="font-heading text-secondary text-sm md:text-md/loose">+{{ $company->phone_main ?? '+62812345678910' }}</div>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-secondary p-3 md:p-4 rounded-full mr-4 shadow-lg flex-shrink-0">
                        <x-heroicon-o-map-pin class="w-7 h-7 md:w-8 md:h-8 text-white" />
                    </div>
                    <div class="text-left">
                        <div class="text-accent text-xs/loose md:text-base font-medium tracking-widest uppercase">Address</div>
                        <div class="font-heading text-secondary text-xs/loose md:text-base/loose">{{ $company->address_main ?? 'Jl. Uluwatu II No.88X, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361' }}</div>
                    </div>
                </div>
            </div>
            <div class="w-full h-[400px] lg:h-full min-h-[400px] rounded-xl overflow-hidden shadow-xl border-3 border-gray-50">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.0534259879178!2d115.17416671129757!3d-8.781044189685476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd245006f2d6eb5%3A0x564c033eb573e272!2sAJ%20Smash%20Burgers!5e0!3m2!1sen!2sid!4v1771712450454!5m2!1sen!2sid"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Form mengirim pesan -->
    <section class="bg-accent py-16 md:py-24 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-8 max-w-7xl md:max-w-4xl">
            <div class="text-center mb-10">
                <h2 class="font-heading text-white text-3xl md:text-4xl mb-3">Send Us A Message</h2>
                <p class="text-white/80 text-sm md:text-base max-w-xl mx-auto">Kami menghargai setiap saran dan kritik dari Anda untuk membantu kami melayani lebih baik lagi.</p>
            </div>

            @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-xl shadow-sm mb-8 flex items-center justify-center">
                <x-heroicon-s-check-circle class="w-6 h-6 mr-3" />
                <p class="font-bold">{{ session(key: 'success') }}</p>
            </div>
            @endif

            <!-- form mengirim pesan/feedback/saran -->
            <form action="{{ route('message') }}" method="POST" class="space-y-6 w-full">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-white mb-2 uppercase tracking-wider">Your Name</label>
                        <input type="text" name="name" required class="w-full px-5 py-4 rounded-xl border-gray-300 text-text font-medium bg-background placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-white mb-2 uppercase tracking-wider">Email Address</label>
                        <input type="email" name="email" required class="w-full px-5 py-4 rounded-xl border-gray-300 text-text font-medium bg-background placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="john@example.com">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-white mb-2 uppercase tracking-wider">Subject</label>
                    <input type="text" name="subject" class="w-full px-5 py-4 rounded-xl border-gray-300 text-text font-medium bg-background placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="How can we help?">
                </div>

                <div>
                    <label class="block text-xs font-bold text-white mb-2 uppercase tracking-wider">Message</label>
                    <textarea name="message" rows="5" required class="w-full px-5 py-4 rounded-xl border-gray-300 text-text font-medium bg-background placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary transition resize-none" placeholder="Write your message here..."></textarea>
                </div>

                <div class="pt-2 text-center">
                    <button type="submit" class="bg-primary hover:bg-secondary text-tertiary hover:text-white font-bold py-4 px-12 rounded-xl w-full transition duration-300 shadow-[0_10px_20px_rgba(253,204,24,0.3)] uppercase tracking-wider inline-flex items-center justify-center gap-2">
                        Send Message
                        <x-heroicon-o-paper-airplane class="w-5 h-5 transform -rotate-45 -mt-1" />
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Follow Us -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 max-w-7xl">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-12">
            <div class="text-center md:text-left w-full md:w-1/3">
                <h2 class="font-heading text-tertiary text-3xl/normal sm:text-4xl/normal lg:text-5xl/normal mb-4">Follow Us <br> on Instagram</h2>
                <p class="text-gray-500 mb-8 text-sm md:text-base px-5 sm:px-0">
                    Ikuti keseharian kami, behind the scenes, dan promosi eksklusif khusus untuk followers kami di Instagram!
                </p>
                <a href="https://instagram.com/ajsmashburgers" class="text-secondary font-heading text-md md:text-xl tracking-wider flex items-center justify-center md:justify-start hover:text-primary transition">
                    <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                    </svg>
                    @ajsmashburgers
                </a>
            </div>

            <div class="flex space-x-3 w-full md:w-2/3 justify-center md:justify-end">
                <div class="relative group overflow-hidden rounded-3xl shadow-xl border-2 border-gray-50">
                    <img src="{{ asset('storage/images/bg-1.jpeg') }}" class="w-28 h-56 md:w-56 md:h-[24rem] object-cover transform group-hover:scale-105 transition duration-500" alt="IG Post 1">
                </div>
                <div class="relative group overflow-hidden rounded-3xl shadow-xl border-4 border-gray-50">
                    <img src="{{ asset('storage/images/bg-2.jpeg') }}" class="w-28 h-56 md:w-56 md:h-[24rem] object-cover transform group-hover:scale-105 transition duration-500" alt="IG Post 2">
                </div>
                <div class="relative group overflow-hidden rounded-3xl shadow-xl border-2 border-gray-50">
                    <img src="{{ asset('storage/images/bg-3.jpeg') }}" class="w-28 h-56 md:w-56 md:h-[24rem] object-cover transform group-hover:scale-105 transition duration-500" alt="IG Post 3">
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>