@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<h1>EDITAR ESTUDIANTE</h1>
<form action="/estudiante/{{$estudiante->id}}" method="POST">
    @csrf
    @method('PUT')
    <fieldset disabled>
    <div class="mb-3">
        <label for="" class="form-label">id</label>
        <input type="text" class="form-control" name="id" value="{{$estudiante->id}}">
    </div>
    </fieldset>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{$estudiante->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" value="{{$estudiante->apellido}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">DNI</label>
        <input type="text" class="form-control" name="dni" value="{{$estudiante->dni}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input type="text" class="form-control" name="edad" value="{{$estudiante->edad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Promedio</label>
        <input type="text" class="form-control" name="promedio" value="{{$estudiante->promedio}}">
    </div>

    <button type="submit" class="btn btn-primary">Editar</button>
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