<x-frontend-layout title="About Us - AJ Smash Burgers">
    <section class="bg-radial-hero relative py-16 md:pt-24">
        <div class="absolute inset-0 bg-cover bg-center opacity-70 pointer-events-none"
            style="background-image: url('{{ asset('storage/images/overlay.png') }}');">
        </div>

        <div class="relative container mx-auto flex flex-col items-center justify-center text-center max-w-7xl gap-4 md:gap-7 pt-16 md:pt-12 px-4 sm:px-6 lg:px-8">
            <h1 class="font-heading text-background text-3xl sm:text-4xl lg:text-5xl tracking-wider">About Us</h1>
            <p class="text-background mx-auto text-xs md:text-base tracking-wider max-w-sm md:max-w-full md:mt-2">Mengenal lebih dekat perjalanan rasa dan dedikasi kami di setiap gigitan AJ Smash Burgers.</p>
        </div>
    </section>

    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:pt-16 md:pb-24 max-w-7xl">
        <div class="flex flex-col sm:flex-row gap-5 lg:gap-8 items-center">
            <div class="w-full sm:w-1/2 sm:flex justify-center hidden">
                <img src="{{ asset('storage/images/burger-1.png') }}" alt="About Us" class="rounded-2xl object-cover h-52 md:h-80 lg:h-[26rem]">
            </div>
            <div class="w-full sm:w-1/2 text-tertiary md:px-5">
                <h3 class="font-heading text-3xl/relaxed md:text-4xl/loose mb-3">Something About AJ Smash Burgers</h3>
                <p class="text-sm text-text mb-6 text-justify">{{ $company->about_us ?? 'AJ Smash Burger didirikan dari passion yang kuat terhadap burger bergaya klasik. Kami percaya bahwa teknik "smash" pada daging sapi segar di atas wajan panas adalah kunci untuk mengunci rasa dan menciptakan kerak karamelisasi yang sempurna.' }}</p>

                <div class="grid grid-cols-2 gap-3 md:gap-8">
                    <div class="rounded-2xl border border-white/10 backdrop-blur-sm">
                        <x-heroicon-o-shield-check class="w-16 h-16 bg-radial-hero p-3 rounded-full text-primary shadow-[0_10px_20px_rgba(253,204,24,0.3)] mb-4" />
                        <p class="text-secondary font-heading text-xl leading-relaxed">Clean Cooking Environment</p>
                    </div>

                    <div class="rounded-2xl border border-white/10 backdrop-blur-sm">
                        <x-heroicon-o-sparkles class="w-16 h-16 bg-radial-hero p-3 rounded-full text-primary shadow-[0_10px_20px_rgba(253,204,24,0.3)] mb-4" />
                        <p class="text-secondary font-heading text-xl leading-relaxed">Always Serve <br>Fresh Products</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ngambil 8 gambar random dari outlet image dan menu -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 pb-16 md:pb-24 max-w-7xl">
        <div class="w-full bg-radial-hero text-primary font-heading text-2xl md:text-3xl py-6 rounded-xl shadow-lg mb-5 md:mb-8 text-center tracking-wide">
            AJ Gallery
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            @if(isset($galleryImages) && count($galleryImages) > 0)
            @foreach($galleryImages as $image)
            <img src="{{ asset('storage/' . $image) }}" alt="Image from AJ Gallery" class="w-full h-40 md:h-56 object-cover rounded-xl shadow-md hover:scale-105 transition duration-500 cursor-pointer">
            @endforeach
            @else
            @for ($i = 0; $i < 8; $i++)
                <img src="{{ asset('storage/images/burger-2.png') }}" alt="Burger Perfection" class="w-full h-40 md:h-56 object-cover rounded-xl shadow-md hover:scale-105 transition duration-500 cursor-pointer">
                @endfor
                @endif
        </div>
    </section>

    <section class="relative py-16 md:py-24 mb-16 md:mb-24 flex items-center z-0 bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('storage/images/bg-about.jpg') }}');">

        <div class="absolute inset-0 bg-text/20 z-[-1]"></div>

        <div class="container mx-auto flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 max-w-7xl gap-8 md:gap-12">
            <h2 class="font-heading text-primary text-3xl/normal md:text-5xl/normal mb-4">Our Advantages</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 justify-center gap-8 md:gap-12 w-full">

                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-sm border border-white/20">
                    <h2 class="font-heading text-primary text-xl/normal md:text-2xl/normal mb-3">100% Premium Beef</h2>
                    <p class="text-sm md:text-base text-background text-justify leading-relaxed">
                        Kami hanya menggunakan potongan daging sapi segar berkualitas tinggi yang digiling setiap harinya, tanpa bahan pengawet atau pengisi tambahan, demi memastikan rasa daging yang otentik dan juicy.
                    </p>
                </div>

                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-sm border border-white/20">
                    <h2 class="font-heading text-primary text-xl/normal md:text-2xl/normal mb-3">Authentic Smash Technique</h2>
                    <p class="text-sm md:text-base text-background text-justify leading-relaxed">
                        Teknik "smash" kami di atas wajan dengan suhu tinggi menciptakan proses karamelisasi (Maillard reaction) yang mengunci rasa gurih, menghasilkan tepi luar yang super renyah dan bagian tengah yang lumer.
                    </p>
                </div>

                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-sm border border-white/20">
                    <h2 class="font-heading text-primary text-xl/normal md:text-2xl/normal mb-3">Signature Secret Sauce</h2>
                    <p class="text-sm md:text-base text-background text-justify leading-relaxed">
                        Setiap gigitan dilengkapi dengan saus rahasia AJ yang diracik khusus. Perpaduan rasa asam, manis, dan gurih yang seimbang ini dirancang untuk memaksimalkan profil rasa burger smash kami.
                    </p>
                </div>

                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-sm border border-white/20">
                    <h2 class="font-heading text-primary text-xl/normal md:text-2xl/normal mb-3">Fresh Local Produce</h2>
                    <p class="text-sm md:text-base text-background text-justify leading-relaxed">
                        Sayuran penyerta seperti selada, tomat, dan bawang diambil langsung dari petani lokal. Kami menjamin setiap komponen di dalam burger memberikan tekstur segar yang mengimbangi kelezatan daging.
                    </p>
                </div>

            </div>
        </div>
    </section>

</x-frontend-layout>