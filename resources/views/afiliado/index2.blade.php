@extends('layouts.principal')

@section('hijos')

Nombre de Empleado {{$empleado->CodEmpleado}} {{$empleado->Nombre}} {{$empleado->Apellido}}

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
                <a href="/retiro/{{$afiliado->id}}/{{$empleado->id}}" class="btn btn-info">Retiro</a>
                <a href="/deposito" class="btn btn-info">Deposito</a>
            </th>
        </tr>   
        @endforeach
    </tbody>

</table>


@endsection