@extends('layouts.plantilla')

@section('title', 'Detalle del Empleado')

@section('content_header')
    <h1>Detalle del Empleado</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.empleados.index') }}">Volver a la lista de empleados</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Identificación:</strong>
                        <p>{{ $empleado->numeroIdenti }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Primer Apellido:</strong>
                        <p>{{ $empleado->apellido1 }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Segundo Apellido:</strong>
                        <p>{{ $empleado->apellido2 }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Primer Nombre:</strong>
                        <p>{{ $empleado->nombre1 }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Segundo Nombre:</strong>
                        <p>{{ $empleado->nombre2 }}</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Fecha de Nacimiento:</strong>
                        <p>{{ $empleado->fechaNac }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Número de Teléfono:</strong>
                        <p>{{ $empleado->numeroTel }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Sexo:</strong>
                        <p>{{ ucfirst($empleado->sexo) }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Dirección:</strong>
                        <p>{{ $empleado->direccion }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Correo Electrónico:</strong>
                        <p>{{ $empleado->email }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{ route('admin.empleados.edit', $empleado) }}">Editar</a>
            <form action="{{ route('admin.empleados.destroy', $empleado) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop
