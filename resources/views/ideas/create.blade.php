<x-layout title="home page">
    <div class="max-w-xl mx-auto p-6 bg-gray-700">
        <form method="POST" action="/ideas">
            @csrf
            <div class="col-span-full">
                <label for="description" class="block text-sm/6 font-medium">New idea</label>
                <div class="mt-2">
                    <textarea id="description" name="description" rows="3"
                        class="textarea w-full @error('description') textarea-error @enderror">{{ old('description') }}</textarea>
                    {{-- @if ($errors->has('description'))
                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('description') }}</p>
                    @endif --}}
                    <x-form.error name="description" />
                </div>
                <p class="mt-3 text-sm/6">Write a few sentences about yourself.</p>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-layout>
