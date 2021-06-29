<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Meseros') }}
      </h2>
  </x-slot>

  @extends('layouts.informes.informes-layout')
  <br><div class="container"><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Lista de meseros
            <a href="{{{ route ('jefemeseroR.meseros.create')}}}" class=" text-center btn btn-warning text-white  btn-sm float-right">Nuevo Mesero</a>
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
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Sueldo</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                  <th>Mandar email</th>
                </thead>
                <tbody>
                @foreach ($meseros as $mesero)
                  <tr>
                    <td>{{ $mesero->id }}</td>
                    <td>{{ $mesero->nombre }}</td>
                    <td>{{ $mesero->apellido }}</td>
                    <td>{{ $mesero->email }}</td>
                    <td>{{ $mesero->telefono }}</td>
                    <td>{{ $mesero->sueldo }}</td>
                   
                    <td>
                      <!--Iconos de Editar y eliminar-->
                      <a href="{{ route('jefemeseroR.meseros.edit',$mesero) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                          <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg> &nbsp &nbsp
                      </a>
                    </td>
                    <td>
                      
                      <a href="javascript: document.getElementById('delete-{{$mesero->id}}').submit()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                      </a>
                      
                      <form id="delete-{{$mesero->id}}" action="{{ route('jefemeseroR.meseros.destroy', $mesero) }}" method="POST">                      
                        @csrf
                        @method('DELETE')
                      </form>
                    </td>
                    <td>
                      <a href="{{{route('send.email',$mesero->email)}}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                      </a>
                    </td>
                    
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
