@extends('layouts.principal')

@section('hijos')
<h1>Empleado: {{$empleado->Nombre}} {{$empleado->Apellido}}
<h1>Modulo de Retiros Afiliados: {{$afiliado->id}} {{$afiliado->Nombre}} {{$afiliado->Apellido}}</h1>

<a href="/retiro/create/{{$empleado->Codempleado}}/{{$afiliado->Codafiliado}}" class="btn btn-primary">Realizar Retiro</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codempleado</th>
            <th>Codafiliado</th>
            <th>fecha</th>
            <th>monto</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach($retiros as $retiro)
        <tr>
        <th>{{$retiro->id}}</th>
            <th>{{$retiro->Codempleado}}</th>
            <th>{{$retiro->Codafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
            <th>
                
            </th>
        </tr>   
        @endforeach
    </tbody>

</table>

@endsection