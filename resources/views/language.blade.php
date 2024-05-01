<x-site-layout title="Language">
    <div class="flex flex-wrap">
        @foreach ($languages as $language)
            <a href="{{ route('projects.byLanguage', ['languageId' => $language->id]) }}" class="cursor-pointer p-2 border rounded m-2">
                <img src="{{ $language->language_img }}" alt="{{ $language->title }}" class="h-8 w-8 inline">
                <span>{{ $language->title }}</span>
            </a>
        @endforeach
    </div>

    
</x-site-layout>
