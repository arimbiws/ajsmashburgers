<x-frontend-layout title="Home - AJ Smash Burgers">

    @push('after-style')
    <style>
        /* --- SWIPER CAROUSEL KUSTOMISASI --- */

        /* 1. Mengatur lebar slide agar bisa di-custom ('auto' di JS) */
        .promoSwiper .swiper-slide {
            width: 80%;
            /* Lebar default untuk layar HP */
            transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1) !important;
            /* Efek transisi super halus */
            transform: scale(0.85);
            /* Mengecilkan slide yang tidak aktif (kiri & kanan) */
            opacity: 0.4;
            /* Membuat slide samping agak transparan */
            border-radius: 1.5rem;
        }

        /* Lebar khusus untuk layar Desktop (Slide Tengah akan jauh lebih lebar) */
        @media (min-width: 1024px) {
            .promoSwiper .swiper-slide {
                width: 55%;
                /* Slide memakan 55% layar, sisanya dibagi ke kiri & kanan (setengah-setengah) */
                transform: scale(0.8);
            }
        }

        /* 2. Slide Tengah (Sedang Aktif/Highlight) */
        .promoSwiper .swiper-slide-active {
            transform: scale(1);
            /* Ukuran normal 100% */
            opacity: 1;
            /* Transparansi hilang */
            z-index: 10;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);
            /* Bayangan pop-out */
        }

        /* 3. Desain Panah Navigasi (Arrows) */
        .swiper-button-next,
        .swiper-button-prev {
            background-color: white !important;
            color: #FDCC18 !important;
            /* Warna kuning Primary */
            width: 56px !important;
            height: 56px !important;
            border-radius: 50%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border: 2px solid #f3f4f6;
            /* Border tipis */
        }

        /* Menyesuaikan ukuran icon panah default bawaan swiper */
        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 22px !important;
            font-weight: 900 !important;
        }

        /* Menyesuaikan jarak titik pagination bawah */
        .promoSwiper .swiper-pagination {
            bottom: 0px !important;
        }
    </style>
    @endpush

    <section class="flex flex-col md:flex-row h-screen">
        <div class="w-full md:w-1/2 bg-tertiary flex flex-col justify-center px-8 md:px-16 lg:px-24 pt-24 z-10">
            <div class="border border-primary text-primary px-4 py-1 rounded-full text-xs font-bold tracking-widest mb-6 w-max uppercase">
                AJ Smash Burgers
            </div>
            <h1 class="font-heading uppercase text-white text-6xl md:text-7xl  leading-none mb-6">
                Best Burgers<br>in Bali
            </h1>
            <p class="text-white/80 text-sm md:text-base leading-relaxed mb-10 max-w-md">
                Savor the perfect smash burger experience made with premium ingredients and our secret signature sauce, delivering the ultimate taste and satisfaction in every bite.
            </p>
            <a href="#" class="bg-primary hover:bg-yellow-500 text-tertiary font-bold py-3 px-10 rounded-full w-max transition duration-300 shadow-lg uppercase text-sm tracking-wider">
                Order Now
            </a>
        </div>

        <div class="w-full md:w-1/2 bg-hero-gradient flex items-center justify-center relative p-12 mt-16 md:mt-0 h-full">
            <img src="{{ asset('storage/images/burger.jpeg') }}" alt="Delicious Smash Burger" class="w-full max-w-lg object-contain drop-shadow-2xl z-10 hover:scale-105 transition-transform duration-500">
        </div>
    </section>

    <!-- about us section -->
    <section class="container mx-auto px-4 py-20 max-w-6xl">
        <div class="bg-box-gradient rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center shadow-xl gap-8">
            <div class="w-full md:w-1/2 md:pr-8 text-tertiary">
                <h2 class="font-heading text-5xl mb-6 uppercase">About Us</h2>

                <p class="text-sm md:text-base leading-relaxed mb-8 font-medium">
                    {{ $company->about_us ?? 'AJ Smash Burgers was born out of a great passion for authentic style burgers...' }}
                </p>

                <a href="{{ route('about') }}" class="inline-flex items-center bg-tertiary text-white font-bold py-3 px-8 rounded-full text-sm hover:bg-accent transition-colors uppercase tracking-wider">
                    Our Story
                </a>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ $company ? asset('storage/' . $company->logo) : asset('storage/images/burger.jpeg') }}" alt="About Us" class="rounded-2xl w-full object-cover h-64 md:h-80 shadow-2xl">
            </div>
        </div>
    </section>

    <!-- promos section -->
    <section class="w-full overflow-hidden pb-24 relative pt-10">
        <div class="max-w-7xl mx-auto relative px-2 md:px-12">
            <div class="swiper promoSwiper !pb-16">
                <div class="swiper-wrapper">
                    @foreach($featuredMenus as $menu)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/' . $menu->menu_image) }}" class="w-full h-64 md:h-[450px] object-cover rounded-3xl" alt="{{ $menu->name }}">
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev absolute top-1/2 -translate-y-1/2 left-4 md:left-8 z-20"></div>
            <div class="swiper-button-next absolute top-1/2 -translate-y-1/2 right-4 md:right-8 z-20"></div>
        </div>
    </section>

    <!-- news section -->
    <section class="container mx-auto px-4 pb-24 max-w-6xl">
        <div class="w-full bg-box-gradient text-tertiary font-heading text-4xl py-5 px-16 rounded-xl shadow-lg mb-12 text-center uppercase tracking-wide">
            AJ NEWS
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($latestNews as $news)
            <x-news-card
                title="{{ $news->title }}"
                excerpt="{{ Str::limit(strip_tags($news->content), 100) }}"
                image="storage/{{ $news->thumbnail }}"
                link="{{ route('news.detail', $news->slug) }}" />
            @endforeach
        </div>
    </section>

    <!-- online order section -->
    <section class="bg-radial-hero py-24 px-4">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center max-w-6xl gap-12">
            <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                <img src="{{ asset('storage/images/burger.jpeg') }}" alt="Burger Perfection" class="w-72 md:w-[450px] object-contain drop-shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
            </div>

            <div class="w-full md:w-1/2 flex flex-col items-center md:items-start space-y-6 md:pl-8">
                <h2 class="font-heading text-secondary text-5xl md:text-6xl mb-2 text-center md:text-left leading-tight uppercase">
                    Taste the Smash<br>Perfection
                </h2>
                <p class="text-primary text-sm md:text-base text-center md:text-left tracking-widest uppercase font-medium">
                    ORDER SEKARANG JUGA DAN NIKMATI<br>KELEZATAN YANG MENGGUGAH SELERA
                </p>

                <div class="flex flex-col space-y-4 w-full max-w-sm mt-4">
                    <a href="#" class="flex items-center justify-center bg-primary hover:bg-yellow-500 text-tertiary font-bold py-4 px-8 rounded-full transition shadow-md uppercase text-sm tracking-wide">
                        Order on GoFood
                    </a>
                    <a href="#" class="flex items-center justify-center bg-primary hover:bg-yellow-500 text-tertiary font-bold py-4 px-8 rounded-full transition shadow-md uppercase text-sm tracking-wide">
                        Order on GrabFood
                    </a>
                    <a href="#" class="flex items-center justify-center bg-primary hover:bg-yellow-500 text-tertiary font-bold py-4 px-8 rounded-full transition shadow-md uppercase text-sm tracking-wide">
                        Order via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- outlet info section -->
    <section class="bg-white py-24">
        <div class="container mx-auto px-4 text-center max-w-5xl">
            <h2 class="font-heading text-tertiary text-5xl mb-16">Our Restaurant</h2>

            <div class="flex flex-col md:flex-row justify-between items-start mb-10 text-secondary font-bold text-sm md:text-base tracking-wide md:px-12">
                <div class="flex items-center w-full">
                    <div class="bg-secondary p-3 rounded-full me-3 mb-4">
                        <x-heroicon-o-clock class="w-8 h-8 text-white" />
                    </div>
                    <span class="font-heading text-start leading-relaxed uppercase">10AM - 12PM<br>Everyday</span>
                </div>
                <div class="flex items-center w-full">
                    <div class="bg-secondary p-3 rounded-full me-3 mb-4">
                        <x-heroicon-o-building-storefront class="w-8 h-8 text-white" />
                    </div>
                    <span class="font-heading text-start leading-relaxed">DINE IN<br>AVAILABLE</span>
                </div>
                <div class="flex items-center w-full">
                    <div class="bg-secondary p-3 rounded-full me-3 mb-4">
                        <x-heroicon-o-map-pin class="w-8 h-8 text-white" />
                    </div>
                    <span class="font-heading text-start leading-relaxed">Jl. Uluwatu II No.88X, Jimbaran,<br>Kuta Selatan, Badung, Bali</span>
                </div>
            </div>

            <div class="w-full rounded-2xl overflow-hidden shadow-xl border border-gray-100 z-10">
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
        </div>
    </section>

    <section class="container mx-auto px-4 py-20 max-w-5xl">
        <div class="flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="text-center md:text-left w-full md:w-1/3">
                <h2 class="font-heading text-tertiary text-5xl mb-6 leading-tight uppercase">Follow Us<br>on Instagram</h2>
                <a href="#" class="text-secondary font-bold text-xl flex items-center justify-center md:justify-start hover:text-primary transition">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                    </svg>
                    @ajsmashburger
                </a>
            </div>

            <div class="flex space-x-4 w-full md:w-2/3 justify-center md:justify-end">
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('storage/images/burger.jpeg') }}" class="w-32 h-64 md:w-44 md:h-80 object-cover transform group-hover:scale-105 transition duration-500" alt="IG Post 1">
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('storage/images/burger.jpeg') }}" class="w-32 h-64 md:w-44 md:h-80 object-cover transform group-hover:scale-105 transition duration-500" alt="IG Post 2">
                </div>
                <div class="hidden sm:block relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('storage/images/burger.jpeg') }}" class="w-32 h-64 md:w-44 md:h-80 object-cover transform group-hover:scale-105 transition duration-500" alt="IG Post 3">
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
                spaceBetween: 15,

                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
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

                breakpoints: {
                    768: {
                        spaceBetween: 30,
                    },
                    1024: {
                        spaceBetween: 40,
                    }
                }
            });
        });
    </script>
    @endpush
</x-frontend-layout>