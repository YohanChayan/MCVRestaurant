@extends('layouts.jefemeseros.jefemesero-create-edit')
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

        @if(isset($jefemesero))
          <form action="{{ route('gerenteR.jefemeseros.update',$jefemesero) }}" method="POST">
          @method('PATCH')
          <div class="card-header">Editar empleado</div>
        @else
          <form action="{{ route('gerenteR.jefemeseros.store') }}" method="POST">
          <div class="card-header">Crear empleado</div>
        @endif

          <div class="card-body">
               @csrf
              <label for="name">Nombre de empleado</label>
              <input type="text" maxlength="40" class="form-control" name="name" required value="{{ old('name') ?? $jefemesero->name ?? '' }}">
              @error('name')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror
              <label for="email" >Correo</label>
              <input type="email" class="form-control" name="email" required value="{{ old('email') ?? $jefemesero->email ?? '' }}">
              @error('email')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror
              <?php
              $IsNew = true;
              if(isset($jefemesero) ) $IsNew = false;
              ?>
              <label for="password" <?php echo ($IsNew) ? 'required':'hidden '?> >contraseña predeterminada</label>
              <input type="password" minlength="5" class="form-control" name="password"  value="{{ $nombre->password ?? '' }}" <?php echo ($IsNew) ? 'required':'hidden'?> ><br>
              <!-- <label for="role">Rol</label> -->
              <input type="text" class="form-control" name="role" value="1" hidden><br>
              <!--Radio  Disponibilidad-->
                     
              <br><button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{{route('gerenteR.jefemeseros.index')}}}" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection