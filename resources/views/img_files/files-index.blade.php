<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Archivos') }}
        </h2>
    </x-slot>

    @extends('layouts.informes.informes-layout')

    <div class="py-12">
        <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  
                <div class="card-header">
                  Lista de archivos
                  <a href="{{{ route('jefemeseroR.files.create') }}}" class=" text-center btn btn-warning text-white  btn-sm float-right">Agregar nuevo archivo</a>
                </div>
                  
                  <table class="min-w-full  divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Nombre
                        </th>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Acciones
                        </th>
                       
                       
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                    @foreach($files as $file)
                      <tr>
                      
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">
                                {{$file->original_name}}
                              </div>
                            </div>
                          </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            <a href="{{route('jefemeseroR.files.download',$file )}}" class="text-primary">Descargar</a>
                          </span>

                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            <form action="{{route('jefemeseroR.files.destroy',$file )}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <input style="background-color: rgba(0,0,0,0); color: red; border: none; " type="submit" value="Eliminar">
                              
                            </form>  
                          </span>

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="rounded">
                            <img style="width:120px;height:120px;" class= "object-cover relative rounded-full border
                                  border-gray-100 shadow-sm
                            max-w-max   h-full " src="{{ '/storage/' . $file->path }}" />
                          </div>

                        </td>
                   
                      </tr>

                      <!-- More people... -->
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>

</x-app-layout>