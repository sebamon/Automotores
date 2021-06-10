@extends('estructura.layout')

@section('cuerpo')
<div class="row">
    <div class="col col-12">
        <p>Detalle Vehiculo {{$vehiculo->dominio}}</p>
    </div>
</div>
<div class="row">
    <div class="col col-4">
        <label for="">Dominio:</label>
        <input class='form-control' type='text' disabled value='{{$vehiculo->dominio}}'>
    </div>
    <div class="col col-4">
        <label for="">Año:</label>
        <input class='form-control'  type='text' disabled value='{{$vehiculo->modelo}}'>
    </div>
</div>
<div class="row">
    <div class="col col-12">
        <label for="">Descripcion:</label>
        <input class='form-control' type="text" disabled value='{{$vehiculo->descripcion}}'>
    </div>
</div>
<div class="row">
    <div class="col col-6">
        <label for="">Tipo:</label>
        <input class='form-control' type="text" disabled value='{{$vehiculo->tipo}}'>
    </div>
    <div class="col col-6">
        <label for="">Combustible:</label> 
        <input class='form-control' type="text" disabled value='{{$vehiculo->combustible}}'>
    </div>
</div>
<div class="row">
    <div class="col col-6">
            <label for="">Nro Chasis:</label> 
            <input class='form-control' type="text" disabled value='{{$vehiculo->nroChasis}}'>
    </div>
    <div class="col col-6">
            <label for="">Nro Motor:</label> 
            <input class='form-control' type="text" disabled value='{{$vehiculo->nroMotor}}'>
    </div>
</div>
<div class="row">
        <div class="col col-6">
            <label for="">Asignado a:</label>
            <input class='form-control' type="text" disabled value='{{$vehiculo->asignacion}}'>
        </div>
</div>

<div class="row">
    <div class="col col-6">
        <button href='{{route("vehiculo.index")}}'class='btn btn-primary btn-block'>Atras</button>
    </div>
    <div class="col col-6">
        <button href='{{route("vehiculo.edit",$vehiculo->idVehiculo)}}' class='btn btn-warning btn-block'>Editar</button>
    </div>
</div>
@endsection