<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($article->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    <div class="mb-4">

                        <img src="{{ Storage::url('public/Sigma/'.$article->photo) }}" alt="{{ $article->title }}" class="w-auto h-auto rounded-lg">
                    </div>
                    <div class="text-gray-700">
                        {!! $article->text !!}
                    </div>
                    <div class="mt-4 text-sm text-gray-500">
                        Zveřejněno {{ $article->created_at->format('j.n.Y') }}
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>

