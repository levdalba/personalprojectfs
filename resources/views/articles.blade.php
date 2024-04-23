<x-site-layout title="Articles overview">
    <div class="grid grid-cols-2 gap-8">
        @foreach($articles as $article)
            <div class="p-2 bg-white rounded">
                <div class="p-2 bg-white rounded">
                <h3 class="font-bold text-xl">{{$article['title']}}</h3>
                <div class="text-purple-500">Author: {{$article['author']}}</div>
                <p>{{$article['content']}}</p>
            </div>
        @endforeach
    </div>
</x-site-layout>