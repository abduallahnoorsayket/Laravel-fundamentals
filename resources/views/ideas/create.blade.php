<x-layout title="home page">
    <div class="max-w-xl mx-auto p-6 bg-gray-700">
        <form method="POST" action="/ideas">
            @csrf
            <div class="col-span-full">
                <label for="description" class="block text-sm/6 font-medium text-gray-900">New idea</label>
                <div class="mt-2">
                    <textarea id="description" name="description" rows="3"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('description') }}</textarea>
                    {{-- @if ($errors->has('description'))
                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('description') }}</p>
                    @endif --}}
                    <x-form.error name="description" />
                </div>
                <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
            </div>
            <div class="mt-3">
                <button type="submit" class="inline-flex justify-center px-4 py-2 bg-blue-600 text-white rounded">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-layout>
