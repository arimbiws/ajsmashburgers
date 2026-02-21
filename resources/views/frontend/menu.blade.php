<x-frontend-layout title="Menu AJ Smash Burgers">

    <div class="container mx-auto px-4 py-10">
        <h1 class="text-4xl font-bold text-center mb-10 text-orange-600">Our Menu</h1>

        @foreach($categories as $category)

        @if($category->menus->count() > 0)
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-6 border-b-2 border-orange-400 inline-block">
                {{ $category->name }}
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                @foreach($category->menus as $menu)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('storage/' . $menu->menu_image) }}"
                        alt="{{ $menu->name }}"
                        class="w-full h-48 object-cover">

                    <div class="p-4">
                        <h3 class="text-xl font-bold">{{ $menu->name }}</h3>
                        <p class="text-gray-600 text-sm mt-2">{{ $menu->description }}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">
                                Rp {{ number_format($menu->price, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        @endif

        @endforeach
    </div>
</x-frontend-layout>