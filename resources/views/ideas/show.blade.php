<x-layout title="home page">
    <div class="max-w-xl mx-auto p-6 bg-gray-700">
        >
        <h2 class="mt-6 font-bold text-white">Your ideas</h2>
        <p class="mt-6 font-bold text-white">{{ $idea->description }}</p>
        <div class="mt-6">
            <a href="/ideas/{{ $idea->id }}/edit"
                class="inline-flex justify-center px-4 py-2 bg-blue-600 text-white rounded">
                Edit
            </a>
        </div>
    </div>


</x-layout>
