@extends('plantilla')

@section('contenido')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Película</th>
      <th scope="col">Año</th>
      <th scope="col">Director</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Avengers 1</td>
      <td>2019</td>
      <td>Director 1</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Avengers 2</td>
      <td>2020</td>
      <td>Director 2</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Avengers 3</td>
      <td>2021</td>
      <td>Director 3</td>
    </tr>
  </tbody>
</table>
@stop
