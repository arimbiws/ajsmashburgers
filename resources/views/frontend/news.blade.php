<x-frontend-layout title="AJ News - AJ Smash Burgers">
    <section class="pt-32 pb-20 px-4 container mx-auto max-w-6xl">
        <div class="text-center mb-16">
            <h1 class="font-heading text-tertiary text-6xl uppercase mb-4">AJ News</h1>
            <div class="w-24 h-1 bg-primary mx-auto rounded-full mt-6"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            @forelse($newsList as $news)
            <x-news-card
                title="{{ $news->title }}"
                excerpt="{{ Str::limit(strip_tags($news->content), 100) }}"
                image="{{ 'storage/' . $news->thumbnail }}"
                link="{{ route('news.detail', $news->slug) }}" />
            @empty
            <div class="col-span-full text-center text-gray-500 font-bold py-10">
                No news published yet.
            </div>
            @endforelse
        </div>

        <div class="flex justify-center">
            {{ $newsList->links() }}
        </div>
    </section>
</x-frontend-layout>