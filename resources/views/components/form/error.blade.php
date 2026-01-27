@props(['name' => 'required',])

@error($name)
    <p class="mt-1 text-sm text-error">{{ $message }}</p>
@enderror
