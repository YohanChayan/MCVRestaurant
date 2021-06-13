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
              <label for="name">Nombre de empleado</label>
              <input type="text" class="form-control" name="name" value="{{ $mesero->name ?? '' }}">
              <label for="email">Correo</label>
              <input type="email" class="form-control" name="email" value="{{ $mesero->email ?? '' }}">
              <?php
              $IsNew = true;
              if(isset($mesero) ) $IsNew = false;

              ?>
              <label for="password" <?php echo ($IsNew) ? '':'hidden'?> >contraseña predeterminada</label>
              <input type="password" class="form-control" name="password" value="{{ $nombre->password ?? '' }}" <?php echo ($IsNew) ? '':'hidden'?> ><br>
              <!-- <label for="role">Rol</label> -->
              <input type="text" class="form-control" name="role" value="0" hidden><br>
              <!--Radio  Disponibilidad-->
                     
              <br><button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{{route('jefemeseroR.meseros.index')}}}" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection