<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Jefes de Meseros') }}
      </h2>
  </x-slot>

  @extends('layouts.informes.informes-layout')

   <!--Se Muestran los mensajes de exito al eliminar o editar-->
   @if(session('info'))
   <div class="alert alert-success" role="alert">
       {{session('info')}}
   </div>
   @endif
   @if(session('danger'))
   <div class="alert alert-danger" role="alert">
       {{session('danger')}}
   </div>
   @endif

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                
              <div class="card-header">
                Lista de jefe de meseros
                <a href="{{{ route('gerenteR.jefemeseros.create') }}}" class=" text-center btn btn-danger text-white  btn-sm float-right">Imprimir informe</a>
              </div>
                
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                      </th>

                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">


                  @foreach($jefemeseros as $jefemesero)
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                              {{$jefemesero->id}}
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{$jefemesero->name}}
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{$jefemesero->email}}
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