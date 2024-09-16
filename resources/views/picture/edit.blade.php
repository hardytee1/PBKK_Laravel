<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
          <form action="{{ route('picture.update', $picture->id) }}" method="POST">
            @csrf
            @method('PATCH') <!-- Add this to simulate a PATCH request -->

            <div>
              <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
              <input type="text" name="name" id="name" value="{{ $picture->name }}" class="mt-1 p-2 w-full border-gray-300 rounded-md">
            </div>

            <div class="mt-4">
              <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
              <input type="text" name="description" id="description" value="{{ $picture->description }}" class="mt-1 p-2 w-full border-gray-300 rounded-md">
            </div>

            <div class="mt-4">
              <label for="url" class="block font-medium text-sm text-gray-700">Url</label>
              <input type="text" name="url" id="url" value="{{ $picture->url }}" class="mt-1 p-2 w-full border-gray-300 rounded-md">
            </div>

            <div class="mt-6">
              <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                Edit Post
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>
