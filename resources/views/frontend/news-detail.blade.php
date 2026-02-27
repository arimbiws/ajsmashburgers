<x-frontend-layout title="{{ $news->title }} - AJ Smash Burgers">
    <section class="bg-radial-hero relative h-24">
        <div class="absolute inset-0 bg-cover bg-center opacity-70 pointer-events-none"
            style="background-image: url('{{ asset('storage/images/overlay.png') }}');">
        </div>
    </section>

    <section class="container mx-auto max-w-5xl py-16 px-4"> <a href="{{ route('news') }}" class="inline-flex items-center text-secondary hover:text-primary font-bold uppercase text-sm mb-8 transition">
            <x-heroicon-o-arrow-left class="w-4 h-4 mr-2" /> Back to News
        </a>

        <div class="overflow-hidden rounded-3xl shadow-md mb-8">
            <img src="{{ asset('storage/' . $news->thumbnail) }}" class="w-full h-64 md:h-[500px] object-cover" alt="{{ $news->title }}">
        </div>

        <h1 class="font-heading text-tertiary text-xl/relaxed md:text-2xl/relaxed lg:text-4xl/relaxed mb-6 leading-tight">
            {{ $news->title }}
        </h1>

        <div class="flex items-center text-gray-500 text-sm font-semibold tracking-wider mb-10 uppercase border-b border-gray-200 pb-6">
            <x-heroicon-o-calendar class="w-5 h-5 mr-2" />
            <span>{{ $news->created_at->format('d M Y') }}</span>
            <span class="mx-4">•</span>
            <x-heroicon-o-user class="w-5 h-5 mr-2" />
            <span>By {{ $news->user->name ?? 'Admin' }}</span>
        </div>

        <div class="prose prose-lg max-w-none text-text leading-relaxed mb-16 text-justify font-medium">
            {!! $news->content !!}
        </div>

        @if($latestNews->count() > 0)
        <div class="border-t-2 border-gray-100 pt-12">
            <h3 class="font-heading text-lg md:text-xl text-secondary uppercase mb-8 text-center md:text-left">Related News</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($latestNews as $related)
                <x-news-card
                    title="{{ $related->title }}"
                    excerpt="{{ Str::limit(strip_tags($related->content), 60) }}"
                    image="{{ 'storage/' . $related->thumbnail }}"
                    link="{{ route('news.detail', $related->slug) }}" />
                @endforeach
            </div>
        </div>
        @endif

    </section>
</x-frontend-layout>