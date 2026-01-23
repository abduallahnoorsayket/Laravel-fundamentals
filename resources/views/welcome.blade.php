<x-layout title="home page">
    @forelse ($tasks as $task)
        <li>{{ $task }}</li>
    @empty
        <p>Thre is no taks</p>
    @endforelse

    {{-- @if (count($tasks))
        <p>yes wel have taks</p>

    @endif
    <h1>hello world</h1>
    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
    @unless (count($tasks))
        <p>Thre is no taks</p>
    @endunless --}}
</x-layout>
