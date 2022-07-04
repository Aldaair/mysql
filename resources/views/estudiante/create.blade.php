@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<h1>NUEVO ESTUDIANTE</h1>
<form action="/estudiante" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">DNI</label>
        <input type="text" class="form-control" name="dni">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input type="text" class="form-control" name="edad">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Promedio</label>
        <input type="text" class="form-control" name="promedio">
    </div>
    
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop