<x-frontend-layout title="About Us - AJ Smash Burgers">
    <section class="pt-32 pb-24 px-4 container mx-auto max-w-7xl">
        <div class="text-center mb-16">
            <h1 class="font-heading text-primary text-5xl md:text-6xl uppercase tracking-wider mb-4">Our Story</h1>
            <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
            <p class="text-gray-400 mt-6 max-w-2xl mx-auto text-lg">Mengenal lebih dekat perjalanan rasa dan dedikasi kami di setiap gigitan AJ Smash Burgers.</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="w-full lg:w-1/2 relative">
                <div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full"></div>
                <img src="{{ asset('storage/images/burger.jpeg') }}" class="relative z-10 rounded-3xl w-full h-[400px] md:h-[500px] object-cover shadow-2xl border border-white/10" alt="AJ Smash Burger Story">
            </div>

            <div class="w-full lg:w-1/2 text-white">
                <h2 class="font-heading text-3xl md:text-4xl uppercase mb-6 text-primary">The Art of Smashing</h2>
                <p class="text-gray-300 text-lg leading-relaxed mb-8">
                    {{ $company->about_us ?? 'AJ Smash Burger didirikan dari passion yang kuat terhadap burger bergaya klasik. Kami percaya bahwa teknik "smash" pada daging sapi segar di atas wajan panas adalah kunci untuk mengunci rasa dan menciptakan kerak karamelisasi yang sempurna.' }}
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                    <div class="bg-white/5 p-6 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <x-heroicon-o-eye class="w-10 h-10 text-primary mb-4" />
                        <h3 class="font-heading text-2xl uppercase text-white mb-2">Visi</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">{{ $company->vision ?? 'Menjadi brand burger lokal nomor satu yang dikenal akan kualitas dan pelayanan prima di seluruh Bali.' }}</p>
                    </div>

                    <div class="bg-white/5 p-6 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <x-heroicon-o-rocket-launch class="w-10 h-10 text-primary mb-4" />
                        <h3 class="font-heading text-2xl uppercase text-white mb-2">Misi</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">{{ $company->mission ?? 'Menyajikan burger dengan bahan premium, harga terjangkau, dan pengalaman makan yang tak terlupakan.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>