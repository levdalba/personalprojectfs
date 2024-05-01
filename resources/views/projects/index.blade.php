<x-site-layout title="Projects">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-bold">{{ $language }} Projects</h1>
            @if (\Route::current()->getName() !== 'projects.index')  {{-- Check if current route is not projects.index --}}
                <a href="{{ url('/language') }}" class="btn bg-blue-500 text-white px-4 py-2 rounded">Back to Languages</a>
            @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($projects as $project)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300" x-data="{ open: false }">
                    <img src="{{ $project->project_img }}" alt="Image for {{ $project->project_name }}" class="w-full h-48 object-cover">

                    <div class="p-4">
                        <h2 class="text-2xl font-bold">{{ $project->project_name }}</h2>
                        <p class="text-gray-700 truncate">{{ $project->description }}</p>
                        
                        <button @click="open = true" class="mt-4 text-blue-500 hover:text-blue-700 transition-colors">
                            Show More
                        </button>
                    </div>

                    <!-- Full-screen modal for project details -->
                    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center">
                        <div class="bg-white p-5 rounded-lg w-full h-full max-w-4xl max-h-full overflow-y-auto">
                            <h3 class="text-xl font-bold mb-2">{{ $project->project_name }}</h3>
                            <img src="{{ $project->project_img }}" alt="{{ $project->project_name }}" class="w-full mb-4 object-cover">
                            <p>{{ $project->description }}</p>
                            <div class="mt-3">
                                <h4 class="font-bold">Languages Used:</h4>
                                <div class="flex flex-wrap mt-2 items-center">
                                    @foreach ($project->languages as $language)
                                        <img src="{{ $language->language_img }}" alt="{{ $language->title }}" class="w-12 h-12 mr-2 mb-2">
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $language->title }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <a href="{{ $project->Github_link }}" class="mt-4 inline-block bg-blue-500 text-white rounded-full px-3 py-1 hover:bg-blue-700 transition-colors">View on GitHub</a>
                            <button @click="open = false" class="mt-4 text-red-500">Close</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-site-layout>
