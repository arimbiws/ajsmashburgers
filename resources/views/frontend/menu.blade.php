<x-frontend-layout title="Menu - AJ Smash Burgers">
    <section class="bg-radial-hero relative py-16 md:pt-24">
        <div class="absolute inset-0 bg-cover bg-center opacity-70 pointer-events-none"
            style="background-image: url('{{ asset('storage/images/overlay.png') }}');">
        </div>

        <div class="relative container mx-auto flex flex-col items-center justify-center text-center max-w-7xl gap-4 md:gap-7 pt-16 md:pt-12 px-4 sm:px-6 lg:px-8">
            <h1 class="font-heading text-background text-2xl sm:text-4xl lg:text-5xl tracking-wider">AJ Smash Burgers Menu</h1>
            <p class="text-background mx-auto text-xs md:text-base tracking-wider max-w-sm md:max-w-full md:mt-2">Mengenal lebih dekat perjalanan rasa dan dedikasi kami di setiap gigitan AJ Smash Burgers.</p>
        </div>
    </section>

    @forelse ($categories as $category)
    @if($category->menus->count() > 0)
    <section class="bg-background">
        <div class="w-full bg-box-gradient text-tertiary font-heading text-2xl md:text-3xl py-6 shadow-lg mb-5 md:mb-8 text-center tracking-wide">
            {{ $category->name }}
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 pb-16 md:pb-24 max-w-7xl">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-5">
                @foreach ($category->menus as $item)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 group flex flex-col h-full">

                    <div class="relative h-52 overflow-hidden shrink-0">
                        <img src="{{ asset('storage/' . $item->menu_image) }}" alt="Image of {{ $item->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="font-heading font-bold text-base/loose md:text-md/loose text-tertiary tracking-wide mb-2">{{ $item->name }}</h3>
                        <p class="text-sm text-text mb-6 text-justify">{{ Str::limit(strip_tags($item->description), 75) }}</p>
                        <div class="mt-auto">
                            <p class="text-secondary font-heading text-xl border rounded-md w-max border-secondary py-2 px-3">
                                Rp {{ number_format($item->price, 0, ',', '.') }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        @endif
        @empty
        <div class="text-center text-gray-500 py-10">Belum ada menu yang tersedia.</div>
        @endforelse
    </section>
</x-frontend-layout>