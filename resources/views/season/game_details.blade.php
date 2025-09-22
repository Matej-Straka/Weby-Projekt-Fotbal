<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail zápasu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex items-center justify-center space-x-8">
                    <div class="text-center">
                    <a href="{{ route('team.show', $game->homeTeam->id) }}" class="text-blue-600 hover:underline self-center">
                        {{-- Zajištění, že existuje homeTeam a logo --}}
                        @if ($game->homeTeam && $game->homeTeam->logo)
                            <img src="{{ asset('storage/logos/' . $game->homeTeam->logo) }}" alt="{{ $game->homeTeam->name }} logo" class="w-20 h-20 mx-auto object-contain">
                        @else
                            <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto flex items-center justify-center">?</div>
                        @endif
                        <h3 class="text-xl font-bold mt-2">{{ $game->homeTeam->name ?? 'Neznámý tým' }}</h3>
                    </div>
                    <div class="text-center">
                        <h2 class="text-5xl font-extrabold text-blue-600">{{ $game->goals_home }} : {{ $game->goals_away }}</h2>
                        @if (!is_null($game->ht_goals_home) && !is_null($game->ht_goals_away))
                            <p class="text-gray-600 text-sm mt-2">Poločas: ({{ $game->ht_goals_home }} : {{ $game->ht_goals_away }})</p>
                        @endif
                    </a>
                    </div>
                    <a href="{{ route('team.show', $game->awayTeam->id) }}" class="text-blue-600 hover:underline self-center">
                    <div class="text-center">
                        {{-- Zajištění, že existuje awayTeam a logo --}}
                        @if ($game->awayTeam && $game->awayTeam->logo)
                            <img src="{{ asset('storage/logos/' . $game->awayTeam->logo) }}" alt="{{ $game->awayTeam->name }} logo" class="w-20 h-20 mx-auto object-contain">
                        @else
                            <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto flex items-center justify-center">?</div>
                        @endif
                        <h3 class="text-xl font-bold mt-2">{{ $game->awayTeam->name ?? 'Neznámý tým' }}</h3>
                    </div>
                    </a>
                </div>

                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4 text-center md:text-left">
                    <div>
                        <p class="text-gray-700"><strong>Datum:</strong> {{ \Carbon\Carbon::parse($game->date)->format('d.m.Y') }}</p>
                        <p class="text-gray-700"><strong>Čas:</strong> {{ $game->time ?? 'Není známý' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-700"><strong>Stadion:</strong> {{ $game->stadium ?? 'Není známý' }}</p>
                        <p class="text-gray-700"><strong>Počet diváků:</strong> {{ $game->attendance ?? 'Není známý' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
