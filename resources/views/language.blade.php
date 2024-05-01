<x-site-layout title="Language">
    <div class="flex flex-wrap">
         <form action="{{ url('/projects/filter') }}" method="GET">
            @foreach ($languages as $language)
                <button type="submit" name="language_id" value="{{ $language->id }}" class="cursor-pointer p-2 border rounded m-2">
                    <img src="{{ $language->language_img }}" alt="{{ $language->title }}" class="h-8 w-8 inline">
                    <span>{{ $language->title }}</span>
                </button>
            @endforeach
        </form>
    </div>
</x-site-layout>
