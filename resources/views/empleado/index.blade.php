@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Empleado</h1>

<a href="empleado/create" class="btn btn-primary">Crear Nuevo Empleado</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodEmpleado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nivel</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
        <th>{{$empleado->id}}</th>
            <th>{{$empleado->CodEmpleado}}</th>
            <th>{{$empleado->Nombre}}</th>
            <th>{{$empleado->Apellido}}</th>
            <th>{{$empleado->Nivel}}</th>
            <th>{{$empleado->telefono}}</th>
            <th>
                <a href="empeado/edit"class="btn btn-info">Editar</a>
                <a href="afiliado/{{$empleado->id}}" class="btn btn-success">Afiliados</a>
                <button class="btn btn-warning">Eliminar</button>
            </th>
        </tr>   
        @endforeach
    </tbody>

</table>

@endsection 
