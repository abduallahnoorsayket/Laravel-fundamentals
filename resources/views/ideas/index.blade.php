<x-layout title="home page">
    <div class="max-w-xl mx-auto p-6 bg-gray-700">
        <div>
            @if ($ideas->count())
                <h2 class="mt-6 font-bold text-white">Your ideas</h2>
                <ul class="mt-4 space-y-2 flex flex-col">
                    @foreach ($ideas as $idea)
                        <a href="/ideas/{{ $idea->id }}" class="text-sm text-gray-200 d">{{ $idea->description }}</a>
                    @endforeach
                </ul>
            @else
                <p>No idea yet. <a href="/ideas/create">Create one !</a></p>
            @endif
        </div>

    </div>

</x-layout>
