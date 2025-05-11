@if(count($announcements) > 0)
<div class="mx-auto container mt-4">
    
    <h1 class="text-xl font-bold mb-2">{{ __('Announcements') }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($announcements as $announcement)
        <div class="bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-4 rounded-lg">
            @if($announcement->image)
                <img src="{{ Storage::url($announcement->image) }}" alt="{{ $announcement->title }}" class="w-full h-48 object-cover">
            @endif
            <h2 class="text-xl font-bold">{{ $announcement->title }}</h2>
            <div class="mb-2">
                {{ $announcement->description }}
            </div>
            <div class="text-sm text-gray-500 dark:text-gray-500">
                {{ $announcement->published_at->format('F j, Y') }}
            </div>
            <a href="{{ route('announcements.show', $announcement) }}" wire:navigate>
                <x-button.primary>
                    {{ __('general.view') }}
                </x-button.primary>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endif
