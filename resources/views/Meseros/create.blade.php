@extends('layouts.meseros.mesero-create-edit')
@section('contenido')
<br><div class="container"><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
        @if(isset($mesero))
          <form action="{{ route('jefemeseroR.meseros.update',$mesero) }}" method="POST">
          @method('PATCH')
          <div class="card-header">Editar mesero</div>
        @else
          <form action="{{ route('jefemeseroR.meseros.store') }}" method="POST">
          <div class="card-header">Crear mesero</div>
        @endif

          <div class="card-body">
               @csrf
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" value="{{ $mesero->nombre ?? '' }}">

              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" name="apellido" value="{{ $mesero->apellido ?? '' }}">

              <label for="email">Correo</label>
              <input type="email" class="form-control" name="email" value="{{ $mesero->email ?? '' }}">

              <label for="telefono">Telefono</label>
              <input type="text" class="form-control" name="telefono" maxlength="10" value="{{ $mesero->telefono ?? '' }}">

              <label for="sueldo">Sueldo</label>
              <input type="number" class="form-control" name="sueldo" max="9999999999" value="{{ $mesero->sueldo ?? '' }}">

              <br><button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{{route('jefemeseroR.meseros.index')}}}" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection