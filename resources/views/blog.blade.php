<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <h3>Ini adalah halaman blog</h3>
  <div class="container">
        <h1>Picture</h1>
        <div class="mt-6">
                        <a href="{{ route('picture.create') }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">
                            Create New Picture
                        </a>
                    </div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Gambar </th>
                </tr>
            </thead>
            <tbody>
                @foreach($pictures as $n)
                    <tr>
                        <td>{{ $n->id }}</td>
                        <td>{{ $n->name }}</td>
                        <td>{{ $n->description }}</td>
                        <td><img src="{{ $n->url }}" alt="{{ $n->name }}" width="100"></td>
                        <td>
                        <a href="{{ route('picture.edit', $n->id) }}" class="inline-block px-4 py-2 bg-green-500 text-white rounded-md shadow-md hover:bg-green-600">Edit</a>
                                
                        <form action="{{ route('picture.destroy', $n->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-block px-4 py-2 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>