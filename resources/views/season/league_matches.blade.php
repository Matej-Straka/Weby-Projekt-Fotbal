<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if($league->logo)
            <img src="{{ asset('storage/league/' . $league->logo) }}" alt="{{ $league->name }} logo" class="inline w-8 h-8 object-contain">
            @endif
{{ __('Zápasy ligy ' . $league->name . ' sezóny ' . $season->start . ' - ' . $season->finish) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            @foreach ($games as $roundNumber => $matchesInRound)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-2xl font-bold mb-4">Kolo {{ $roundNumber }}</h3>
                    @foreach ($matchesInRound as $match)
                        <div class="flex justify-between items-center py-2 border-b border-gray-200 last:border-b-0">
                            <span class="flex-1">{{ $match->homeTeam->name }} - {{ $match->awayTeam->name }}</span>
                            <a href="{{ route('game.show', $match->id) }}" class="flex-none font-bold text-lg text-blue-600 hover:underline">
                                {{ $match->goals_home }} : {{ $match->goals_away }}
                                </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
