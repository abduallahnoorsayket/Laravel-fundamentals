@props(['name' => 'required'])

@error($name)
    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
