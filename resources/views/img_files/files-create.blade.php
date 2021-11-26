<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Archivos') }}
        </h2>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
        @extends('layouts.informes.informes-layout')



        <div class="flex w-full h-screen items-center justify-center bg-grey-lighter">

            <div class="w-full max-w-xs">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('jefemeseroR.files.store') }}" enctype='multipart/form-data' method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name_platillo">
                        Ingrese nombre platillo
                    </label>
                    <input minlength="50" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name_platillo" type="text" placeholder="Nombre de platillo" name="name_platillo">
                    </div>           

                        <label
                        class="w-64 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-600 hover:text-white text-purple-600 ease-linear transition-all duration-150">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                            <i class="fas fa-cloud-upload-alt fa-3x"></i>
                            <span class="mt-2 text-base leading-normal">Cargar archivo</span>
                            <input type='file' class="hidden" name="FileLoaded"  id="FileLoaded"/>
                        </label>

                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Cargar archivo
                        </button>
                </div>
                
                </form>
                
            </div>

</x-app-layout>