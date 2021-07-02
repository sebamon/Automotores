@extends('estructura.layout')

@section('cuerpo')

<p>Alta de Establecimientos:</p>

<form action="{{route('establecimiento.store')}}" method method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="file" class="form-control">
<br>
<button class="btn btn-success" type='submit'>Importar Lista de Establecimientos</button>

</form>

@endsection