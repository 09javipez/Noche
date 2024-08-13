@extends('layouts.plantilla')

@section('title', 'Empleados')
@section('content_header') 
<h1>Lista de Empleados</h1> 
@stop
@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>    
        </div>  
    @endif
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <a class="btn btn-secondary" href="{{ route('admin.empleados.create') }}">Registrar empleado</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>APELLIDOS</th>
                        <th>NOMBRES</th>
                        <th>FECHA NACIMIENTO</th>
                        <th>IDENTIFICACIÓN</th>
                        <th>CONTACTO</th>
                        <th>SEXO</th>
                        <th>DIRECCIÓN</th>
                        <th>CORREO ELECTRÓNICO</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                @foreach($empleados as $key => $empleado)
                    <tr>
                        <td>{{ $empleado->id}}</td>
                        <td>{{ $empleado->apellido1 }} {{ $empleado->apellido2 }}</td>
                        <td>{{ $empleado->nombre1 }} {{ $empleado->nombre2 }}</td>
                        <td>{{ $empleado->fechaNac}}</td>
                        <td>{{ $empleado->numeroIdenti}}</td>
                        <td>{{ $empleado->numeroTel}}</td>
                        <td>{{ $empleado->sexo}}</td>
                        <td>{{ $empleado->direccion}}</td>
                        <td>{{ $empleado->email}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.empleados.edit', $empleado) }}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.empleados.destroy', $empleado) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    
@endsection
