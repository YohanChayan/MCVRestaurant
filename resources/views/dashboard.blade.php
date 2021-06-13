<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @can('manager-Gerente')
                <h1>Ambito Gerente</h1>
            @endcan

            @can('manager-JefeMesero')
                <h1>Ambito JefeMesero</h1>
            @endcan

            @can('manager-Mesero')
                <h1>Ambito Mesero</h1>
            @endcan

        </div>
    </div>
</x-app-layout>
