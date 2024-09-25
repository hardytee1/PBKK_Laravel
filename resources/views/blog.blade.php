<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <h3>Ini adalah halaman blog</h3>
  <div class="container">
        <div class="mt-6">
                        <a href="{{ route('picture.create') }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">
                            Create New Picture
                        </a>
                    </div>
                @foreach($pictures as $article)
            <div class="p-6 mb-4 bg-white rounded-md shadow-md flex items-start space-x-4">
                <div class="w-1/4">
                    <img src="{{ $article->url }}" alt="{{ $article->title }}" class="w-full h-auto rounded-md">
                    
                </div>

                <div class="w-3/4">
                    <h2 class="text-2xl font-bold text-gray-900">{{ $article->title }}</h2>
                    <p class="text-sm text-gray-600">
                        {{ $article->created_at->diffForHumans() }}
                    </p>

                    <p class="mt-2 text-gray-700">
                        {{ Str::limit($article->description, 150) }}
                    </p>

                    <div class="mt-4 flex space-x-4">
                        <a href="{{ route('picture.edit', $article->id) }}" class="inline-block px-4 py-2 bg-green-500 text-white rounded-md shadow-md hover:bg-green-600">
                            Edit
                        </a>

                        <form action="{{ route('picture.destroy', $article->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block px-4 py-2 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>