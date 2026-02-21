<footer class="bg-footer-gradient text-white pt-16 pb-8 mt-16 shadow-inner border-t-4 border-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">

            <div class="lg:col-span-2">
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-20 w-auto object-contain mb-6 hover:scale-105 transition-transform duration-300" />
                </a>
                <p class="text-sm text-gray-300 leading-relaxed max-w-md mb-6">
                    Savor the perfect smash burger in Bali. Made fresh with premium ingredients, our secret signature sauces, and authentic American smash technique for the ultimate crust.
                </p>

                <div class="flex gap-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-accent flex items-center justify-center text-white hover:bg-primary hover:text-tertiary transition-colors duration-300 shadow-md">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-accent flex items-center justify-center text-white hover:bg-primary hover:text-tertiary transition-colors duration-300 shadow-md">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-accent flex items-center justify-center text-white hover:bg-primary hover:text-tertiary transition-colors duration-300 shadow-md">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93v7.2c0 1.63-.3 3.29-1.1 4.74-1.25 2.27-3.66 3.86-6.24 3.96-2.61.1-5.3-.67-7.14-2.5-1.96-1.93-2.6-4.83-1.65-7.44.88-2.4 2.94-4.2 5.4-4.67 1.05-.2 2.12-.17 3.17.06v4.13c-.6-.2-1.24-.22-1.85-.12-.76.12-1.47.53-1.95 1.14-.58.74-.75 1.76-.45 2.67.33 1.02 1.25 1.8 2.32 1.95 1.11.16 2.29-.1 3.08-.85.73-.7 1.07-1.74 1.07-2.75V.02z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-1">
                <h3 class="font-heading text-primary text-2xl mb-6">Quick Links</h3>
                <ul class="space-y-3 text-sm text-gray-300 font-medium">
                    <li><a href="{{ route('home') }}" class="flex items-center hover:text-primary transition-colors duration-300">
                            Home
                        </a></li>
                    <li><a href="{{ route('about') ?? '#' }}" class="flex items-center hover:text-primary transition-colors duration-300">
                            About Us
                        </a></li>
                    <li><a href="{{ route('menu') ?? '#' }}" class="flex items-center hover:text-primary transition-colors duration-300">
                            Menu
                        </a></li>
                    <li><a href="{{ route('outlets') ?? '#' }}" class="flex items-center hover:text-primary transition-colors duration-300">
                            Outlets
                        </a></li>
                    <li><a href="{{ route('news') ?? '#' }}" class="flex items-center hover:text-primary transition-colors duration-300">
                            News
                        </a></li>
                    <li><a href="{{ route('contact') ?? '#' }}" class="flex items-center hover:text-primary transition-colors duration-300">
                            Contact Us
                        </a></li>
                </ul>
            </div>

            <div class="lg:col-span-1">
                <h3 class="font-heading text-primary text-2xl mb-6">Address</h3>
                <ul class="space-y-4 text-sm text-gray-300">
                    <li class="flex items-start">
                        <div class="bg-accent p-2 rounded-full shrink-0 mr-3">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <span class="mt-1">Jl. Uluwatu II No.88X, Jimbaran, Kuta Selatan, Badung, Bali</span>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-accent p-2 rounded-full shrink-0 mr-3">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span>hello@ajsmashburger.com</span>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-accent p-2 rounded-full shrink-0 mr-3">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <span class="font-bold tracking-wide">+62 812 3456 7890</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="border-t border-accent pt-6 flex flex-col md:flex-row justify-between items-center text-xs text-gray-400">
            <div class="mb-4 md:mb-0">
                &copy; {{ date('Y') }} AJ Smash Burgers. All rights reserved.
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-primary transition-colors">Privacy Policy | </a>
                <a href="#" class="hover:text-primary transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>