<x-frontend-layout title="Home - AJ Smash Burgers">

    <section class="flex flex-col md:flex-row min-h-screen">
        <div class="w-full md:w-1/2 bg-tertiary flex flex-col justify-center px-8 md:px-16 pt-24 pb-12">
            <div class="inline-block border border-primary text-primary px-4 py-1 rounded-full text-xs font-bold tracking-widest mb-6 w-max">
                AJ Smash Burgers
            </div>
            <h1 class="font-heading uppercase text-white text-5xl md:text-7xl/normal leading-normal mb-6">
                Best Burgers in Bali
            </h1>
            <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-8 max-w-md">
                Savor the perfect smash burger experience made with premium ingredients and our secret signature sauce, delivering the ultimate taste and satisfaction in every bite.
            </p>
            <a href="#" class="bg-primary hover:bg-yellow-500 text-tertiary font-bold py-3 px-8 rounded-full w-max transition duration-300">
                Order Now
            </a>
        </div>

        <div class="w-full md:w-1/2 bg-hero-gradient flex items-center justify-center relative p-12">
            <img src="{{ asset('storage/images/burger.jpeg') }}" alt="Delicious Smash Burger" class="w-3/4 max-w-lg object-contain drop-shadow-2xl z-10">
        </div>
    </section>

    <section class="container mx-auto px-4 py-16">
        <div class="bg-box-gradient rounded-[2.5rem] p-8 md:p-12 flex flex-col md:flex-row items-center shadow-lg">
            <div class="w-full md:w-1/2 pr-0 md:pr-12 text-white">
                <h2 class="font-heading text-4xl md:text-5xl text-tertiary mb-6">About Us</h2>
                <p class="text-sm leading-relaxed mb-6 font-medium">
                    AJ Smash Burgers was born out of a great passion for authentic style burgers. We bring you the classic American smash burger concept, using 100% premium beef, hand-smashed on a hot grill to perfection, giving you that perfect crust and juicy center.
                </p>
                <a href="#" class="bg-tertiary text-white font-bold py-2 px-8 rounded-full text-sm hover:bg-accent transition">
                    Our Story
                </a>
            </div>
            <div class="w-full md:w-1/2 mt-8 md:mt-0">
                <img src="{{ asset('storage/images/burger.jpeg') }}" alt="About Us" class="rounded-2xl w-full object-cover h-64 shadow-md">
            </div>
        </div>
    </section>

    <section class="flex overflow-hidden pb-16">
        <div class="w-1/3 p-2">
            <img src="{{ asset('storage/images/burger.jpeg') }}" class="w-full h-48 md:h-72 object-cover rounded-xl" alt="Burger">
        </div>
        <div class="w-1/3 p-2">
            <img src="{{ asset('storage/images/burger.jpeg') }}" class="w-full h-48 md:h-72 object-cover rounded-xl" alt="Burger">
        </div>
        <div class="w-1/3 p-2">
            <img src="{{ asset('storage/images/burger.jpeg') }}" class="w-full h-48 md:h-72 object-cover rounded-xl" alt="Burger">
        </div>
    </section>

    <section class="container mx-auto px-4 pb-20">
        <div class="flex justify-center mb-12">
            <div class="bg-box-gradient text-tertiary font-heading text-3xl md:text-4xl py-3 px-16 rounded-xl shadow-md">
                AJ News
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 flex flex-col">
                <img src="{{ asset('storage/images/burger.jpeg') }}" class="rounded-xl w-full h-48 object-cover mb-4" alt="News Image">
                <h3 class="font-heading text-xl text-text mb-3 leading-tight">Menu Baru: AJ Smash Burger Hadir dengan "Smash Cheese Lava"!</h3>
                <p class="text-sm text-gray-500 mb-6 flex-grow">Kini AJ Smash Burger menghadirkan varian baru. Nikmati sensasi lelehan keju premium yang melimpah di setiap gigitan...</p>
                <a href="#" class="bg-primary text-tertiary font-bold py-2 rounded-full w-full text-center hover:bg-yellow-500 transition">Read More</a>
            </div>

            <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 flex flex-col">
                <img src="{{ asset('storage/images/burger.jpeg') }}" class="rounded-xl w-full h-48 object-cover mb-4" alt="News Image">
                <h3 class="font-heading text-xl text-text mb-3 leading-tight">Promo Weekend Spesial Beli 2 Gratis 1 French Fries!</h3>
                <p class="text-sm text-gray-500 mb-6 flex-grow">Weekend ini saatnya nongkrong bareng teman di AJ Smash Burgers. Dapatkan promo spesial...</p>
                <a href="#" class="bg-primary text-tertiary font-bold py-2 rounded-full w-full text-center hover:bg-yellow-500 transition">Read More</a>
            </div>

            <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 flex flex-col">
                <img src="{{ asset('storage/images/burger.jpeg') }}" class="rounded-xl w-full h-48 object-cover mb-4" alt="News Image">
                <h3 class="font-heading text-xl text-text mb-3 leading-tight">Cabang Baru AJ Smash Burger Segera Buka di Canggu</h3>
                <p class="text-sm text-gray-500 mb-6 flex-grow">Kabar gembira buat kamu warga Canggu dan sekitarnya. Kami akan segera hadir lebih dekat...</p>
                <a href="#" class="bg-primary text-tertiary font-bold py-2 rounded-full w-full text-center hover:bg-yellow-500 transition">Read More</a>
            </div>
        </div>
    </section>

    <section class="bg-radial-hero py-16 px-4">
        <div class="container mx-auto flex flex-col md:flex-row items-center max-w-5xl">
            <div class="w-full md:w-1/2 mb-8 md:mb-0 flex justify-center">
                <img src="{{ asset('storage/images/burger.jpeg') }}" alt="Burger Perfection" class="w-64 md:w-96 object-contain drop-shadow-xl">
            </div>

            <div class="w-full md:w-1/2 flex flex-col items-center md:items-start space-y-4">
                <h2 class="font-heading text-primary text-4xl md:text-5xl mb-2 text-center md:text-left leading-none">Taste the Smash<br>Perfection</h2>
                <p class="text-white text-sm mb-6 text-center md:text-left tracking-wide">
                    Order Sekarang Juga Dan Nikmati<br>Kelezatan Yang Menggugah Selera
                </p>

                <a href="#" class="bg-primary hover:bg-yellow-500 text-tertiary font-bold py-3 px-8 rounded-full w-full max-w-xs text-center transition">
                    Order on Gofood
                </a>
                <a href="#" class="bg-primary hover:bg-yellow-500 text-tertiary font-bold py-3 px-8 rounded-full w-full max-w-xs text-center transition">
                    Order on Grabfood
                </a>
                <a href="#" class="bg-primary hover:bg-yellow-500 text-tertiary font-bold py-3 px-8 rounded-full w-full max-w-xs text-center transition">
                    Order Via WhatsApp
                </a>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 py-20 text-center">
        <h2 class="font-heading text-tertiary text-4xl mb-12">Our Restaurant</h2>

        <div class="flex flex-col md:flex-row justify-center items-center gap-8 mb-8 text-secondary font-bold">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                10AM - 12PM Everyday
            </div>
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Dine in Available
            </div>
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Jl. Uluwatu II No.88X, Jimbaran, Kuta Selatan, Badung, Bali
            </div>
        </div>

        <div class="w-full max-w-5xl mx-auto rounded-xl overflow-hidden shadow-lg border-4 border-white">
            <img src="{{ asset('storage/images/burger.jpeg') }}" alt="Map Location" class="w-full h-80 object-cover">
        </div>
    </section>

    <section class="container mx-auto px-4 pb-20 flex flex-col md:flex-row items-center justify-center gap-12">
        <div class="text-center md:text-left">
            <h2 class="font-heading text-tertiary text-4xl mb-2">Follow Us<br>on Instagram</h2>
            <a href="#" class="text-secondary font-bold text-lg flex items-center justify-center md:justify-start">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                </svg>
                @ajsmashburger
            </a>
        </div>

        <div class="flex space-x-4">
            <img src="{{ asset('storage/images/burger.jpeg') }}" class="w-24 h-48 md:w-32 md:h-64 object-cover rounded-xl shadow-md" alt="IG Post">
            <img src="{{ asset('storage/images/burger.jpeg') }}" class="w-24 h-48 md:w-32 md:h-64 object-cover rounded-xl shadow-md" alt="IG Post">
            <img src="{{ asset('storage/images/burger.jpeg') }}" class="w-24 h-48 md:w-32 md:h-64 object-cover rounded-xl shadow-md" alt="IG Post">
        </div>
    </section>

</x-frontend-layout>