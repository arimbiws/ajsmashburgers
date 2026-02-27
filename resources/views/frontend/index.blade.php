<x-frontend-layout title="Home - AJ Smash Burgers">
    @push('after-style')
    <style>
        .promoSwiper {
            width: 100%;
            padding-top: 1rem;
        }

        .promoSwiper .swiper-slide {
            width: 80%;
            transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1) !important;
            transform: scale(0.85);
            opacity: 0.4;
            border-radius: 1rem;
            overflow: hidden;
        }

        @media (min-width: 1024px) {
            .promoSwiper .swiper-slide {
                width: 70%;
                transform: scale(0.8);
            }
        }

        .promoSwiper .swiper-slide-active {
            transform: scale(1);
            opacity: 1;
            z-index: 10;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #FDCC18 !important;
            width: 56px !important;
            height: 56px !important;
            border-radius: 50%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: #FDCC18 !important;
            color: #2D3748 !important;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 22px !important;
            font-weight: 900 !important;
        }

        .promoSwiper .swiper-pagination {
            bottom: 0 !important;
        }
    </style>
    @endpush

    <section class="bg-radial-hero md:min-h-[80vh] flex items-center relative z-0">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center max-w-7xl gap-12 md:pt-10 py-32 md:py-0 px-4 sm:px-6 lg:px-8">
            <div class="w-full md:w-2/3 flex flex-col justify-center">
                <div class="border border-primary text-primary px-8 py-2 rounded-lg text-xs md:text-sm font-medium tracking-[0.25rem] mb-6 w-max uppercase">
                    AJ Smash Burgers
                </div>
                <h1 class="font-heading uppercase text-white text-5xl/normal lg:text-7xl/normal mb-3 md:mb-6">
                    Best Smash Burgers in Bali
                </h1>
                <p class="text-white/80 text-sm md:text-base leading-relaxed mb-5 md:mb-10 max-w-2xl">
                    Savor the perfect smash burger experience made with premium ingredients and our secret signature sauce, delivering the ultimate satisfaction in every bite.
                </p>
                <a href="{{ route('menu') }}" class="bg-primary hover:bg-secondary text-tertiary hover:text-white font-bold py-4 px-10 rounded-full w-max transition duration-300 shadow-[0_10px_20px_rgba(253,204,24,0.3)] uppercase text-sm md:text-base tracking-wider text-center flex justify-center items-center gap-2">
                    Order Now <x-heroicon-m-arrow-right class="w-5 h-5" />
                </a>
            </div>

            <div class="w-full md:w-1/3 bg-hero-gradient hidden md:flex items-center justify-center relative top-16 min-h-[50vh] md:min-h-[100vh] p-8 md:p-3 z-10">
                <img src="{{ asset('storage/images/burger-2.png') }}" alt="Delicious Smash Burger" class="w-full max-w-lg lg:max-w-xl object-contain drop-shadow-[0_25px_35px_rgba(0,0,0,0.5)] hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 sm:px-6 lg:px-8 pb-16 md:pb-24 pt-12 md:pt-32 max-w-7xl">
        <div class="bg-box-gradient rounded-[2rem] px-8 py-12 md:px-12 flex flex-col md:flex-row items-center shadow-2xl gap-8">
            <div class="w-full md:w-1/2 md:pr-8 text-tertiary">
                <h2 class="font-heading text-3xl md:text-5xl mb-5 md:mb-8">About Us</h2>
                <p class="text-sm md:text-base leading-relaxed mb-3 md:mb-5 text-justify">
                    {{ $company->about_us ?? 'AJ Smash Burgers was born out of a great passion for authentic style burgers. We blend premium beef with special techniques to give you that crispy edge and juicy center.' }}
                </p>
                <div class="flex justify-end">
                    <a href="{{ route('about') }}" class="inline-flex items-center justify-center bg-tertiary text-white font-bold py-3.5 px-8 rounded-full text-sm hover:bg-accent transition-colors shadow-lg tracking-wider">
                        See More
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2 hidden md:block">
                <img src="{{ $randomMenuImage ? asset('storage/' . $randomMenuImage->menu_image) : asset('storage/images/burger-2.png') }}" alt="About Us" class="rounded-2xl w-full object-cover h-64 md:h-80 shadow-xl border-3 border-white/10">
            </div>
        </div>
    </section>

    <section class="w-full overflow-hidden pb-16 md:pb-24 relative">
        <div class="mx-auto relative">
            <div class="swiper promoSwiper">
                <div class="swiper-wrapper">
                    @foreach($latestNews as $news)
                    <div class="swiper-slide relative group cursor-pointer" onclick="window.location.href='{{ route('news.detail', $news->slug) }}'">
                        <img src="{{ asset('storage/' . $news->thumbnail) }}" class="w-full h-64 md:h-[450px] object-cover rounded-md shadow-xl" alt="{{ $news->title }}">
                        <div class="absolute inset-0 bg-black/40 rounded-xl transition-opacity duration-300 group-hover:bg-black/50"></div>
                        <div class="absolute top-6 left-6 md:top-8 md:left-8 bg-primary text-tertiary text-xs md:text-sm font-bold px-4 py-2 rounded-full uppercase tracking-widest shadow-md">
                            {{ isset($news->type) && $news->type == 'promo' ? 'Promo' : 'News' }}
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center p-6 text-center">
                            <h3 class="text-white font-heading text-md/relaxed md:text-xl/loose lg:text-2xl/loose uppercase drop-shadow-lg group-hover:scale-105 transition-transform duration-300 leading-snug">
                                {{ $news->title }}
                            </h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev absolute top-1/2 -translate-y-1/2 left-4 md:left-8 z-20"></div>
            <div class="swiper-button-next absolute top-1/2 -translate-y-1/2 right-4 md:right-8 z-20"></div>
        </div>
    </section>

    <section class="container mx-auto px-4 sm:px-6 lg:px-8 pb-16 md:pb-24 max-w-7xl">
        <div class="w-full bg-box-gradient text-tertiary font-heading text-3xl md:text-5xl py-6 px-16 rounded-xl shadow-lg mb-5 md:mb-8 text-center uppercase tracking-wide">
            AJ News
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($latestNews as $index => $news)
            <div class="{{ $index == 2 ? 'hidden lg:block' : '' }}">
                <x-news-card
                    title="{{ $news->title }}"
                    excerpt="{{ Str::limit(strip_tags($news->content), 100) }}"
                    image="storage/{{ $news->thumbnail }}"
                    link="{{ route('news.detail', $news->slug) }}" />
            </div>
            @endforeach
        </div>
    </section>

    <section class="bg-radial-hero py-16 md:py-24 overflow-hidden">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center max-w-7xl gap-12">
            <div class="w-full md:w-1/2 lg:flex justify-center md:justify-end hidden relative">
                <img src="{{ asset('storage/images/burger-1.png') }}" alt="Burger Perfection" class="w-72 md:w-[500px] object-contain drop-shadow-[0_25px_45px_rgba(0,0,0,0.6)] hover:scale-105 transition duration-500">
            </div>

            <div class="w-full md:w-1/2 flex flex-col items-center space-y-6 md:pl-3">
                <h2 class="font-heading text-secondary text-3xl/normal sm:text-4xl/normal lg:text-5xl/normal mb-2 text-center uppercase drop-shadow-md">
                    Taste the Smash Perfection
                </h2>
                <p class="text-primary text-xs md:text-sm text-center tracking-[0.2em] uppercase font-medium leading-relaxed max-w-sm md:max-w-md">
                    Order Sekarang Juga dan Nikmati Kelezatan yang Menggugah Selera
                </p>

                <div class="flex flex-col space-y-4 w-full max-w-sm mt-6">
                    <a href="#" class="flex items-center justify-center bg-primary hover:bg-secondary text-tertiary hover:text-background font-bold py-3.5 px-10 rounded-full transition duration-300 shadow-[0_5px_20px_rgba(253,204,24,0.3)] uppercase text-sm md:text-base tracking-wider">
                        Order on GoFood
                    </a>
                    <a href="#" class="flex items-center justify-center bg-primary hover:bg-secondary text-tertiary hover:text-background font-bold py-3.5 px-10 rounded-full transition duration-300 shadow-[0_5px_20px_rgba(253,204,24,0.3)] uppercase text-sm md:text-base tracking-wider">
                        Order on GrabFood
                    </a>
                    <a href="#" class="flex items-center justify-center bg-primary hover:bg-secondary text-tertiary hover:text-background font-bold py-3.5 px-10 rounded-full transition duration-300 shadow-[0_5px_20px_rgba(253,204,24,0.3)] uppercase text-sm md:text-base tracking-wider">
                        Order via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Restaurant Maps -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 max-w-7xl">
        <h2 class="font-heading text-center text-tertiary text-3xl/normal sm:text-4xl/normal lg:text-5xl/normal mb-12">Our Restaurant</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6 md:px-8">
            <div class="flex items-center justify-start md:justify-center">
                <div class="bg-secondary p-3 md:p-4 rounded-full mr-4 shadow-lg flex-shrink-0">
                    <x-heroicon-o-clock class="w-7 h-7 md:w-8 md:h-8 text-white" />
                </div>
                <div class="text-left uppercase">
                    <div class="text-primary text-xs/loose md:text-base font-medium tracking-widest">Operational Hours</div>
                    <div class="font-heading text-secondary text-lg md:text-xl mb-1">10AM - 12PM Everyday</div>
                </div>
            </div>

            <div class="flex items-center justify-start md:justify-center">
                <div class="bg-secondary p-3 md:p-4 rounded-full mr-4 shadow-lg flex-shrink-0">
                    <x-heroicon-o-building-storefront class="w-7 h-7 md:w-8 md:h-8 text-white" />
                </div>
                <div class="text-left uppercase">
                    <div class="text-primary text-xs/loose md:text-base font-medium tracking-widest">Eat Here</div>
                    <div class="font-heading text-secondary text-lg md:text-xl mb-1">Dine In Available</div>
                </div>
            </div>

            <div class="flex items-center justify-start md:justify-center">
                <div class="bg-secondary p-3 md:p-4 rounded-full mr-4 shadow-lg flex-shrink-0">
                    <x-heroicon-o-map-pin class="w-7 h-7 md:w-8 md:h-8 text-white" />
                </div>
                <div class="text-left ">
                    <div class="text-primary text-xs/loose md:text-base font-medium tracking-widest uppercase">Address</div>
                    <div class="font-heading text-secondary text-base mb-1">Jl. Uluwatu II No. 88X, Jimbaran, Kuta Selatan, Badung, Bali</div>
                </div>
            </div>
        </div>

        <div class="w-full rounded-xl overflow-hidden shadow-xl border-3 border-gray-50">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.0534259879178!2d115.17416671129757!3d-8.781044189685476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd245006f2d6eb5%3A0x564c033eb573e272!2sAJ%20Smash%20Burgers!5e0!3m2!1sen!2sid!4v1771712450454!5m2!1sen!2sid"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- Follow Us -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 pb-16 md:pb-24 max-w-7xl">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-12">
            <div class="text-center md:text-left w-full md:w-1/3">
                <h2 class="font-heading text-tertiary text-3xl/normal sm:text-4xl/normal lg:text-5xl/normal mb-6">Follow Us <br> on Instagram</h2>
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

    @push('after-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.promoSwiper', {
                slidesPerView: 'auto',
                centeredSlides: true,
                loop: true,
                speed: 800,
                spaceBetween: 10,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: true,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
    @endpush
</x-frontend-layout>