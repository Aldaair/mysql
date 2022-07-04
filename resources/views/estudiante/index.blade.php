@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <a href="estudiante/create" class="btn btn-primary">New</a>
    <h1>CRUD ESTUDIANTES CON LARAVEL Y MYSQL</h1>
    <table class="table bg-white">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Edad</th>
                        <th>Promedio</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td> {{ $estudiante->nombre }} </td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->dni }}</td>
                        <td>{{ $estudiante->edad }}</td>
                        <td>{{ $estudiante->promedio }}</td>
                        <td>
                            <form action="{{ route ('estudiante.destroy',$estudiante->id) }}" method="POST">
                            <a href="/estudiante/{{$estudiante->id}}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    @stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop