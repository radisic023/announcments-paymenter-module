<div class="mx-auto container mt-4">
    <div class="bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-4 rounded-lg">
        <div class="flex flex-row justify-between mb-6">
            <h2 class="text-xl font-bold">{{ $announcement->title }}</h2>
            <p class="text-sm text-base">{{ $announcement->published_at->diffForHumans() }}</p>
        </div>
        @if($announcement->image && !$announcement->show_image_only_homepage)
            <div class="mb-6">
                <img src="{{ Storage::url($announcement->image) }}" alt="{{ $announcement->title }}" class="w-full h-auto rounded-lg">
            </div>
        @endif
        <article class="prose dark:prose-invert mb-2 max-w-full">
            {!! $announcement->content !!}
        </article>
    </div>
</div>