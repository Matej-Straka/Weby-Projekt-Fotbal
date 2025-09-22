<x-app-layout>


    <div class="container mx-auto px-2 md:px-2 py-6">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($articles as $article)
    @if ($loop->first)
        <div class="col-span-1 md:col-span-2 row-span-2  aspect-[1/1] relative overflow-hidden rounded-lg">
            <a href="{{ $article->link }}">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ Storage::url('public/Sigma/'.$article->photo) }}')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-6 text-white">
                    <h2 class="font-bold text-3xl md:text-4xl lg:text-5xl text-white">
                        {{ $article->title }}
                    </h2>
                    <div class="mt-2 text-base md:text-lg lg:text-xl text-white">
                        {{ \Carbon\Carbon::createFromTimestamp($article->date)->format('j.n.Y') }}
                    </div>
                </div>
            </a>
        </div>
        @else

        <div class="col-span-1 aspect-[1/1]  relative overflow-hidden rounded-lg">
            <a href="{{ $article->link }}">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ Storage::url('public/Sigma/'.$article->photo) }}')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 text-white">
                    <h2 class="font-bold text-lg md:text-xl text-white">
                        {{ $article->title }}
                    </h2>
                    <div class="mt-2 text-xs md:text-sm text-white">
                        {{ \Carbon\Carbon::createFromTimestamp($article->date)->format('j.n.Y') }}
                    </div>
                </div>
            </a>
        </div>

        @endif
        @endforeach


    </div>
</div>
</x-app-layout>
