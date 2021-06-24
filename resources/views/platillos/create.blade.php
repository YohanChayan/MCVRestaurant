@extends('layouts.platillos.platillos-create-edit')
@section('contenido')
<br><div class="container"><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
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
              <input type="text" class="form-control" name="nombre" required value="{{ $platillo->nombre ?? '' }}">
              <label for="ingredientes">Ingredientes</label>
              <input type="text" class="form-control" name="ingredientes" required value="{{ $platillo->ingredientes ?? '' }}">
              <label for="precio">Precio</label>
              <input step="0.01" min="1" type="number" required class="form-control" name="precio" value="{{ $platillo->precio ?? '' }}"><br>
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