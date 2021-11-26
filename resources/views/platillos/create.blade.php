@extends('layouts.platillos.platillos-create-edit')
@section('contenido')
<br><div class="container"><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">

          @if($errors->any())
            <div class="alert alert-danger">
              <h4>Verifique los campos del formulario</h4>
              <ul>
                @foreach ($errors as $error)
                  <li>{{ $error }}</li> 
                @endforeach
              </ul>
            </div>
          @endif


        @if(isset($platillo))
          <form action="{{ route('jefemeseroR.platillos.update',$platillo) }}" method="POST">
          @method('PATCH')
          <div class="card-header">Editar Platillo</div>
        @else
          <form action="{{ route('jefemeseroR.platillos.store') }}" method="POST">
          <div class="card-header">Crear Platillo</div>
        @endif

          <div class="card-body">
               @csrf
              <label for="nombre">Nombre del Platillo</label>
              <input type="text" class="form-control" name="nombre" maxlength="50" required value="{{ old('nombre') ?? $platillo->nombre ?? '' }}">
              @error('nombre')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror
              <label for="ingredientes">Ingredientes</label>
              <input type="text" class="form-control" name="ingredientes" maxlength="100" required value="{{ old('ingredientes') ?? $platillo->ingredientes ?? '' }}">
              @error('ingredientes')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror
              <label for="precio">Precio</label>
              <input step="0.01" min="1" max=10000 type="number" required class="form-control" name="precio" value="{{ old('precio') ?? $platillo->precio ?? '' }}"><br>
              @error('precio')
                <p class="text-xs text-red">{{ $message }}</p>
              @enderror
              <label for="disponibilidad">Disponibilidad</label>
              <!--Radio  Disponibilidad-->
              <?php
              $Access = -1;
              if(isset($platillo)) $Access = 1;
              $Boolean = true;                //default (Create or edit with disponibilidad=true).
              if($Access == 1)
                if(!$platillo->disponibilidad)
                  $Boolean = false;
              ?>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="1"  name="disponibilidad" id="flexRadioDefault1"  <?php echo ($Boolean) ? 'checked':''?> >
                    <label class="form-check-label" for="flexRadioDefault1">
                      Disponible
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="disponibilidad" id="flexRadioDefault2"<?php echo (!$Boolean) ? 'checked':''?>>
                    <label class="form-check-label" for="flexRadioDefault2">
                      No Disponible
                    </label>
                  </div>      
              <br><button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{{route('jefemeseroR.platillos.index')}}}" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection