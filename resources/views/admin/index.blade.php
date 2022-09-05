<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    

    <div class="d-flex p-2 py-12" style="max-width: 1200px; margin: auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); grid-gap: 16px;">
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Preces nosaukums
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Vienību skaits
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Cena par vienu vienību
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Izdzēst
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <x-products-card :product="$product"/>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        
    </div>

    
</x-app-layout>
