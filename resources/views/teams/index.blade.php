<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Týmy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($teams as $team)
                <a href="{{ route('team.show', $team->id) }}">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h3 class="text-lg font-bold">{{ $team->name }}</h3>
                            <p class="text-gray-600 mt-2">
                            </p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $teams->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

