@extends('estructura.layout')

@section('cuerpo')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Dominio</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Modelo</th>
      <th scope="col">Tipo</th>
      <th scope="col">Combustible</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($vehiculos as $vehiculo)
    <tr>
      <th scope="row">{{$vehiculo->idVehiculo}}</th>
      <td>{{$vehiculo->dominio}}</td>
      <td>{{$vehiculo->descripcion}}</td>
      <td>{{$vehiculo->modelo}}</td>
      <td>{{$vehiculo->tipo}}</td>
      <td>{{$vehiculo->combustible}}</td>
      <td>
        <a class='btn btn-primary' href="{{route('vehiculo.show',$vehiculo->idVehiculo)}}">Ver</a>
        <a class='btn btn-warning' href="{{route('vehiculo.edit',$vehiculo->idVehiculo)}}">Editar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection