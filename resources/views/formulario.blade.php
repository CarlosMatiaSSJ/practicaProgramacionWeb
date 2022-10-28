@extends('plantilla')

@section('contenido')
@if (session()->has('confirmación'))
    {!!"<script>Swal.fire(
        'Confirmado!',
        'Se han recibido los datos!',
        'success'
      )</script>"!!}
@endif
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Película</label>
      <input type="email" class="form-control" id="txtPelicula" aria-describedby="emailHelp"  >
      <div id="emailHelp" class="form-text">Agrega sólo películas que ya se hayan estrenado</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Año</label>
      <input type="text" class="form-control" id="txtAño">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Película nacional</label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@stop
