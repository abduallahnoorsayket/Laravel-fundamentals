<x-layout title="home page">
    <div class="max-w-xl mx-auto p-6 bg-gray-700">
        <div>
            @if ($ideas->count())
                <h2 class="mt-6 font-bold text-white">Your ideas</h2>
                <ul class="mt-4  grid md:grid-cols-2 gap-6">
                    @foreach ($ideas as $idea)
                        {{-- <a href="/ideas/{{ $idea->id }}" class="text-sm text-gray-200 d">{{ $idea->description }}</a> --}}
                        <x-idea-card href="/ideas/{{ $idea->id }}">
                            {{-- <h3 class="font-semibold">{{ $idea->title }}</h3> --}}
                            <p class="text-sm text-muted">{{ $idea->description }}</p>
                        </x-idea-card>
                    @endforeach
                </ul>
            @else
                <p>No idea yet.</p>
            @endif

        </div>
        <a href="/ideas/create" class="pt-6 unerline">Create one !</a>
    </div>

</x-layout>
