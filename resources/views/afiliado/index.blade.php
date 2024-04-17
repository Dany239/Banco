@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Afiliado</h1>
<a href="afiliado/create" class="btn btn-primary">Crear Nuevo Afiliado</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codafiliado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>edad</th>
        </tr>
    </thead>

    <tbody>
        @foreach($afiliados as $afiliado)
        <tr>
        <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->Codafiliado}}</th>
            <th>{{$afiliado->Nombre}}</th>
            <th>{{$afiliado->Apellido}}</th>
            <th>{{$afiliado->ciudad}}</th>
            <th>{{$afiliado->telefono}}</th>
            <th>{{$afiliado->edad}}</th>
            <th>
                <a href="afiliado/edit"class="btn btn-info">Editar</a>
                <button class="btn btn-warning">Eliminar</button>
            </th>
        </tr>   
        @endforeach
    </tbody>

</table>


@endsection 
