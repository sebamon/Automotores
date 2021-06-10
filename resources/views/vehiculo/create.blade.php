@extends('estructura.layout')

@section('cuerpo')

<p>Alta de Vehiculos:</p>

<form action="{{route('vehiculo.store')}}" method method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="file" class="form-control">
<br>
<button class="btn btn-success" type='submit'>Import User Data</button>

</form>

@endsection