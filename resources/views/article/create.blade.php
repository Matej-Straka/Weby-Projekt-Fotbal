<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vytvořit nový článek') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <script>
    document.addEventListener('trix-before-initialize', function(event) {
      event.target.toolbarElement.querySelector('.trix-button-group--file-tools').remove();
    });
    </script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">Titulek</label>
                        <input type="text" id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-4">
                        <label for="link" class="block text-gray-700 font-bold mb-2">Link (např. 'moje-skvely-clanek')</label>
                        <input type="text" id="link" name="link" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-4">
                        <label for="text" class="block text-gray-700 font-bold mb-2">Text článku</label>

                        <input id="text" type="hidden" name="text">

                        <trix-editor input="text" class="trix-content"></trix-editor>
                    </div>
                    <div class="mb-4">
                        <label for="photo" class="block text-gray-700 font-bold mb-2">Fotka</label>
                        <input type="file" id="photo" name="photo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="published" name="published" value="1" class="form-checkbox text-blue-500" checked>
                        <label for="published" class="ml-2 text-gray-700">Publikovat článek</label>
                    </div>

                    <div class="mb-6 flex items-center">
                        <input type="checkbox" id="top" name="top" value="1" class="form-checkbox text-blue-500">
                        <label for="top" class="ml-2 text-gray-700">Hlavní článek na titulní stránce</label>
                    </div>

                    <div class="mb-6">
                        <label for="date" class="block text-gray-700 font-bold mb-2">Datum publikace</label>
                        <input type="date" id="date" name="date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Vytvořit článek
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
