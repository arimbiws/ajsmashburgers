<x-frontend-layout title="News - AJ Smash Burgers">
    <section class="bg-radial-hero relative py-16 md:pt-24">
        <div class="absolute inset-0 bg-cover bg-center opacity-70 pointer-events-none"
            style="background-image: url('{{ asset('storage/images/overlay.png') }}');">
        </div>

        <div class="relative container mx-auto flex flex-col items-center justify-center text-center max-w-7xl gap-4 md:gap-7 pt-16 md:pt-12 px-4 sm:px-6 lg:px-8">
            <h1 class="font-heading text-background text-3xl sm:text-4xl lg:text-5xl tracking-wider">News & Promos</h1>
            <p class="text-background mx-auto text-xs md:text-base tracking-wider max-w-sm md:max-w-xl md:mt-2">
                Dapatkan informasi terbaru, cerita menarik, dan promo spesial langsung dari dapur AJ Smash Burgers.
            </p>
        </div>
    </section>

    @if($featuredNews)
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 pt-5 md:pt-12 pb-16 md:pb-24 max-w-7xl">
        <div class="flex flex-col md:flex-row gap-6 lg:gap-10 items-stretch bg-white rounded-3xl p-4 md:p-6 shadow-xl border border-gray-100">
            <div class="w-full md:w-1/2 shrink-0">
                <img src="{{ asset('storage/' . $featuredNews->thumbnail) }}" alt="{{ $featuredNews->title }}" class="rounded-2xl w-full object-cover h-48 md:h-full shadow-md">
            </div>
            <div class="w-full md:w-1/2 text-tertiary pb:4 md:py-4 md:pr-6 flex flex-col">
                <div class="text-secondary font-bold text-sm tracking-wider uppercase mb-3">Latest Update</div>
                <h3 class="font-heading text-xl/relaxed md:text-3xl/relaxed text-text mb-4">{{ $featuredNews->title }}</h3>
                <p class="text-sm md:text-base text-text mb-8 text-justify leading-relaxed">
                    {{ Str::limit(strip_tags($featuredNews->content), 250) }}
                </p>

                <div class="mt-auto flex justify-end">
                    <a href="{{ route('news.detail', $featuredNews->slug) }}" class="bg-primary hover:bg-secondary text-tertiary hover:text-white font-bold py-3 px-8 rounded-full w-full md:w-max text-center transition-colors duration-300 uppercase tracking-wider text-sm shadow-md">
                        Read Full Story
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="container mx-auto px-4 sm:px-6 lg:px-8 pb-12 md:pb-16 max-w-7xl">
        <div class="w-full bg-box-gradient text-tertiary font-heading text-2xl md:text-3xl py-6 rounded-xl shadow-lg mb-5 md:mb-8 text-center tracking-wide">
            More News
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8 mb-12">
            @forelse($newsList as $news)
            <x-news-card
                title="{{ $news->title }}"
                excerpt="{{ Str::limit(strip_tags($news->content), 100) }}"
                image="{{ 'storage/' . $news->thumbnail }}"
                link="{{ route('news.detail', $news->slug) }}" />
            @empty
            <div class="col-span-full flex flex-col items-center justify-center text-gray-500 py-10">
                <x-heroicon-o-newspaper class="w-16 h-16 mb-4 text-gray-300" />
                <p class="font-bold text-lg">Belum ada berita lainnya.</p>
            </div>
            @endforelse
        </div>

        <div class="flex justify-center">
            {{ $newsList->links() }}
        </div>
    </section>
</x-frontend-layout>