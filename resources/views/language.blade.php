<x-site-layout title="Language">
        <div class="flex flex-wrap">
                @foreach ($languages as $language)
                        <div @click="$dispatch('language-filter', { languageId: {{ $language->id }} })" class="cursor-pointer p-2 border rounded m-2">
                        <img src="{{ $language->language_img }}" alt="{{ $language->title }}" class="h-8 w-8 inline">
                        <span>{{ $language->title }}</span>
                        </div>
                @endforeach
        </div>

        <script>
                function filterProjects(languageId) {
                        console.log('Language ID:', languageId); // Check if this logs correctly when you click a language
                        axios.post('/api/projects/filter', {
                                language_id: languageId
                        })
                        .then(function (response) {
                                console.log('Response:', response.data); // Check the response data
                        })
                        .catch(function (error) {
                                console.error('Error:', error);
                        });
                }
        </script>

</x-site-layout>
