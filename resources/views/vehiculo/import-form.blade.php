@extends('estructura.layout')

@section('cuerpo')

@if (Session('mensaje') )
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center m-3 p-3">
        <i class='fas fa-check-circle mx-2'></i>{{ Session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

<p>Alta de Vehiculos:</p>

<form action="{{route('vehiculo.import')}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="file" class="form-control">
<button class="btn btn-success" type='submit'>Importar</button>
</form>

@endsection