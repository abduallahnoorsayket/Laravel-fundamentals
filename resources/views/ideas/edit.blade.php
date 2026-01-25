<x-layout title="home page">
    <div class="max-w-xl mx-auto p-6 bg-gray-700">
        <form method="POST" action="/ideas/{{ $idea->id }}">
            @csrf
            @method('PATCH')
            <div class="col-span-full">
                <label for="description" class="block text-sm/6 font-medium text-gray-900">Edit idea</label>
                <div class="mt-2">
                    <textarea id="description" name="description" rows="3"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ $idea->description }}</textarea>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="inline-flex justify-center px-4 py-2 bg-blue-600 text-white rounded">
                    Update
                </button>
                <button form="idea-delete-form" type="submit"
                    class="inline-flex justify-center px-4 py-2 bg-red-600 text-white rounded">
                    Delete
                </button>
            </div>
        </form>

        <form id="idea-delete-form" method="POST" action="/ideas/{{ $idea->id }}">
            @csrf
            @method('DELETE')
        </form>

    </div>

</x-layout>
