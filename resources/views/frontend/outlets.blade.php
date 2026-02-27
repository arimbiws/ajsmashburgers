<x-frontend-layout title="Outlets - AJ Smash Burgers">
    <section class="bg-radial-hero relative py-16 md:pt-24">
        <div class="absolute inset-0 bg-cover bg-center opacity-70 pointer-events-none"
            style="background-image: url('{{ asset('storage/images/overlay.png') }}');">
        </div>
        <div class="relative container mx-auto flex flex-col items-center justify-center text-center max-w-7xl gap-4 md:gap-7 pt-16 md:pt-12 px-4 sm:px-6 lg:px-8">
            <h1 class="font-heading text-background text-2xl sm:text-4xl lg:text-5xl tracking-wider">AJ Smash Burgers Stores</h1>

            <p class="text-background mx-auto text-xs md:text-base tracking-wider max-w-sm md:max-w-xl md:mt-2">
                Temukan lokasi AJ Smash Burgers terdekat dan rasakan pengalaman menikmati burger smash terbaik langsung di tempat kami.
            </p>
        </div>
    </section>

    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($outlets as $outlet)

            <div class="bg-white rounded-3xl shadow-md border border-gray-100 flex flex-col h-full hover:shadow-2xl transition-shadow duration-300 overflow-hidden group">

                <div class="relative h-56 w-full overflow-hidden shrink-0">
                    <img src="{{ asset('storage/' . $outlet->outlet_image) }}" alt="Image {{ $outlet->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="p-6 md:p-8 flex flex-col flex-grow">
                    <h2 class="font-heading text-secondary text-2xl md:text-3xl mb-5">{{ $outlet->name }}</h2>

                    <div class="flex items-start mb-4 text-tertiary">
                        <x-heroicon-o-map-pin class="w-6 h-6 mr-3 mt-0.5 flex-shrink-0 text-text" />
                        <p class="font-medium text-sm md:text-base leading-relaxed">{{ $outlet->address }}</p>
                    </div>

                    <div class="flex items-center mb-8 text-tertiary">
                        <x-heroicon-o-phone class="w-6 h-6 mr-3 flex-shrink-0 text-text" />
                        <p class="font-medium text-sm md:text-base">{{ $outlet->phone }}</p>
                    </div>

                    <div class="mt-auto">
                        <a href="{{ $outlet->link_maps }}" target="_blank" class="w-full flex items-center justify-center gap-2 bg-tertiary text-white font-bold py-3 px-4 rounded-full hover:bg-primary hover:text-tertiary transition duration-300 uppercase tracking-wider text-sm">
                            <x-heroicon-s-map class="w-5 h-5" />
                            Get Directions
                        </a>
                    </div>
                </div>

            </div>
            @empty
            <div class="col-span-full flex flex-col items-center justify-center text-gray-500 py-16">
                <x-heroicon-o-building-storefront class="w-16 h-16 mb-4 text-gray-300" />
                <p class="text-lg">Belum ada data outlet yang tersedia saat ini.</p>
            </div>
            @endforelse
        </div>
    </section>
</x-frontend-layout>