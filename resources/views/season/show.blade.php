<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ligy sezóny ' . $season->start . ' - ' . $season->finish) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($season->leagues as $league)
                <a href="{{ route('season.league.matches', ['season' => $season->id, 'league' => $league->id]) }}" class="block">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300 transform hover:scale-105">
                        <div class="p-6 flex items-center space-x-4">
                            @if ($league->logo)
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('storage/league/' . $league->logo) }}" alt="{{ $league->name }} logo" class="w-16 h-16 object-contain">
                                </div>
                            @endif
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900">{{ $league->name }}</h3>
                                <p class="text-sm text-gray-600 mt-1">
                                    Úroveň: {{ $league->level }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
