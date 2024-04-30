<x-site-layout title="Projects Overview">
    <div class="container mx-auto px-4 py-8">
        @foreach ($projects as $project)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden my-6" x-data="{ open: false }">
                <img src="{{ $project->project_img }}" alt="Image for {{ $project->project_name }}" class="w-full h-64 object-cover object-center">

                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">{{ $project->project_name }}</h2>

                    <button @click="open = !open" class="text-right text-blue-500 hover:text-blue-700 focus:outline-none focus:underline">
                        Show More
                    </button>

                    <div x-show="open" x-transition>
                        <p class="text-gray-700 my-4">{{ $project->description }}</p>
                        
                        <div class="mb-4">
                            <h4 class="font-bold text-lg">Languages Used:</h4>
                            <div class="flex mt-2">
                                @foreach ($project->languages as $language)
                                    <img src="{{ $language->language_img }}" alt="{{ $language->title }}" class="w-12 h-12 mr-2">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $language->title }}</span>
                                @endforeach
                            </div>
                        </div>

                        <a href="{{ $project->github_link }}" class="inline-block bg-blue-500 text-white rounded-full px-3 py-1 text-sm font-semibold hover:bg-blue-700 transition-colors">
                            View on GitHub
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-site-layout>
