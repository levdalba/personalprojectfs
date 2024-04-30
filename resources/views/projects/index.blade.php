<x-site-layout title="Projects Overview">
    <div class="container mx-auto px-4 py-8">
        @foreach ($projects as $project)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden my-6" x-data="{ open: false }">
                <!-- Image container with dynamic classes for height -->
                <div :class="open ? 'h-auto' : 'h-64'">
                    <img src="{{ $project->project_img }}" alt="Image for {{ $project->project_name }}" class="w-full object-cover transition-all duration-500">
                </div>

                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">{{ $project->project_name }}</h2>

                    <!-- Toggle button for showing and hiding details -->
                    <button @click="open = !open" class="text-right text-blue-500 hover:text-blue-700 focus:outline-none">
                        <span x-text="open ? 'Hide' : 'Show More'"></span>
                    </button>

                    <!-- Details section with transition -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" 
                         x-transition:enter-start="opacity-0 scale-90" 
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-90">
                        <p class="text-gray-700 my-4">{{ $project->description }}</p>
                        
                        <div class="mb-4">
                            <h4 class="font-bold text-lg">Languages Used:</h4>
                            <div class="flex flex-wrap mt-2 items-center">
                                @foreach ($project->languages as $language)
                                    <img src="{{ $language->language_img }}" alt="{{ $language->title }}" class="w-12 h-12 mr-2 mb-2 transform hover:scale-110 transition-transform">
                                    <span class="bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $language->title }}</span>
                                @endforeach
                            </div>
                        </div>

                        <a href="{{ $project->Github_link }}" class="inline-block bg-blue-500 text-white rounded-full px-3 py-1 text-sm font-semibold hover:bg-blue-700 transition-colors">
                            View on GitHub
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-site-layout>
