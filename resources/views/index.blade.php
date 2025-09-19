<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>

    <div class="aspect-square relative overflow-hidden rounded-lg">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('url_vašeho_obrázku')"></div>

  <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 text-white">
    <a href="article/2-becko" class="font-bold text-2xl text-white no-underline">béčko prohrálo v polsku se zagłębií sosnowiec</a>
    <div class="mt-2 text-xl text-white">9.7.2025</div>
  </div>
</div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
