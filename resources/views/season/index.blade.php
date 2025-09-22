<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sezóny') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($seasons as $season)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h3 class="text-lg font-bold">{{ $season->name }}</h3>
                            <p class="text-gray-600 mt-2">
                                Období: {{ $season->start }} - {{ $season->finish }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $seasons->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
