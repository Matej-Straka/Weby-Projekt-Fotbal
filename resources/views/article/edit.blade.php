<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upravit článek') }}
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
                <form method="POST" action="{{ route('article.update', ['id' => $article->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">Titulek</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-4">
                        <label for="link" class="block text-gray-700 font-bold mb-2">Link (např. 'moje-skvely-clanek')</label>
                        <input type="text" id="link" name="link" value="{{ old('link', $article->link) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

<div class="mb-4">
    <label for="text" class="block text-gray-700 font-bold mb-2">Text článku</label>

    <input id="text" type="hidden" name="text" value="{{ old('text', $article->text) }}">

    <trix-editor input="text" class="prose max-w-none bg-white p-3 rounded shadow"></trix-editor>
</div>

                    <div class="mb-4">
                        <label for="photo" class="block text-gray-700 font-bold mb-2">Fotka</label>
                        <input type="file" id="photo" name="photo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <p class="text-sm text-gray-500 mt-1">Stávající fotka: {{ $article->photo }}</p>
                        <p class="text-sm text-gray-500 mt-1">Upozornění: Pro správné fungování je nutné upravit metodu update v ArticleController pro uložení fotky.</p>
                    </div>

                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="published" name="published" value="1" class="form-checkbox text-blue-500" {{ $article->published ? 'checked' : '' }}>
                        <label for="published" class="ml-2 text-gray-700">Publikovat článek</label>
                    </div>

                    <div class="mb-6 flex items-center">
                        <input type="checkbox" id="top" name="top" value="1" class="form-checkbox text-blue-500" {{ $article->top ? 'checked' : '' }}>
                        <label for="top" class="ml-2 text-gray-700">Hlavní článek na titulní stránce</label>
                    </div>
                    <div class="mb-6">
                        <label for="date" class="block text-gray-700 font-bold mb-2">Datum publikace</label>
                        <input type="date" id="date" name="date" value="{{ old('date', \Carbon\Carbon::createFromTimestamp($article->date)->format('Y-m-d')) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>


                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Upravit článek
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
