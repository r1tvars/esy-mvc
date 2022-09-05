<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="d-flex p-2 py-12" style="max-width: 1200px; margin: auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); grid-gap: 16px;">
        <div style="padding: 10px;">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/admin/storeproduct">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="inline-block text-lg mb-2">Preces nosaukums</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                              placeholder="Example: GeForce RTX 3080ti" value="{{old('name')}}" />
                        </div>

                        <div class="mb-6">
                            <label for="count" class="inline-block text-lg mb-2">
                                Vienību skaits
                            </label>
                            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="count"
                              value="{{old('count')}}" />
                        </div>

                        <div class="mb-6">
                            <label for="price" class="inline-block text-lg mb-2">
                                Cena par vienu vienību
                            </label>
                            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price"
                              value="{{old('count')}}" />
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="text-white rounded py-2 px-4 bg-orange-600">
                              Ievietot produktu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      
</x-app-layout>


      
