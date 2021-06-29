<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informes') }}
        </h2>
    </x-slot>

    <!-- @extends('layouts.informes.informes-layout') -->

    <br><div class="container"><br>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Informe de Meseros
              <a href="{{{ route ('gerenteR.informes.create')}}}" class=" text-center btn btn-danger text-white  btn-sm float-right">Imprimir informe</a>
            </div>
            <div class="card-body">
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
              <table class="table table-hover table-sm">
                  <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Sueldo</th>
                  </thead>
                  <tbody>
                    @foreach($Data as $OneData)
                    <tr>
                      <td>{{$OneData->nombre}}</td>
                      <td>{{$OneData->apellido}}</td>
                      <td>{{$OneData->email}}</td>
                      <td>{{$OneData->telefono}}</td>
                      <td>{{$OneData->sueldo}}</td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>   

</x-app-layout>