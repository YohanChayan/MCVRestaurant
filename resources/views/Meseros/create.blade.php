@extends('layouts.meseros.mesero-create-edit')
@section('contenido')
<br><div class="container"><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">

        @if($errors->any())
          <div class="alert alert-danger">
            <h5>Verifique los campos del formulario</h5>
            <ul>
              @foreach ($errors as $error)
                <li>{{ $error }}</li> 
              @endforeach
            </ul>
          </div>
        @endif

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
              <input type="text" class="form-control" name="nombre" value="{{ old('nombre') ?? $mesero->nombre ?? '' }}">
              @error('nombre')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror

              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" name="apellido" value="{{ old('apellido') ?? $mesero->apellido ?? '' }}">
              @error('apellido')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror

              <label for="email">Correo</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') ?? $mesero->email ?? '' }}">
              @error('email')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror

              <label for="telefono">Telefono</label>
              <input type="text" class="form-control" name="telefono" minlength="10" maxlength="10" value="{{ old('telefono') ?? $mesero->telefono ?? '' }}">
              @error('telefono')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror

              <label for="sueldo">Sueldo</label>
              <input type="number" class="form-control" name="sueldo" max="9999999999" value="{{ old('sueldo') ?? $mesero->sueldo ?? '' }}">
              @error('sueldo')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror

              <br><button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{{route('jefemeseroR.meseros.index')}}}" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection