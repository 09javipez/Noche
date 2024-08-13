@extends('layouts.plantilla')

@section('title', 'Crear nuevo empleado')
@section('content_header')
    <h1>Bienvenido aqui podras Actualizar un nuevo empleado.</h1>
@stop
@section( 'content')
@if(session('info'))
    <div class="alert alert-succes">
        <strong>{{session('info')}}</strong>
    </div>
@endif
@section('content')
<div class="container">
    {!! Form::model($empleado, ['route' => ['admin.empleados.update', $empleado], 'method' => 'put']) !!}
    <!-- Primera fila -->
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                {!! Form::label('numeroIdenti', 'Identificación') !!}
                {!! Form::text('numeroIdenti', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de cédula del empleado']) !!}
                @error('numeroIdenti')
                    <span class="text-danger">{{ $message }}</span>   
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('apellido1', 'Primer Apellido') !!}
                {!! Form::text('apellido1', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el primer apellido del empleado']) !!}
                @error('apellido1')
                    <span class="text-danger">{{ $message }}</span>   
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('apellido2', 'Segundo Apellido') !!}
                {!! Form::text('apellido2', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el segundo apellido del empleado']) !!}
                @error('apellido2')
                    <span class="text-danger">{{ $message }}</span>   
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('nombre1', 'Primer Nombre') !!}
                {!! Form::text('nombre1', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el primer nombre del empleado']) !!}
                @error('nombre1')
                    <span class="text-danger">{{ $message }}</span>   
                @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                {!! Form::label('nombre2', 'Segundo Nombre') !!}
                {!! Form::text('nombre2', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el segundo nombre del empleado']) !!}
                @error('nombre2')
                    <span class="text-danger">{{ $message }}</span>   
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('fechaNac', 'Fecha de Nacimiento') !!}
                {!! Form::date('fechaNac', null, ['class' => 'form-control']) !!}
                @error('fechaNac')
                    <span class="text-danger">{{ $message }}</span>   
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('numeroTel', 'Número de Teléfono') !!}
                {!! Form::text('numeroTel', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de teléfono del empleado']) !!}
                @error('numeroTel')
                    <span class="text-danger">{{ $message }}</span>   
                @enderror
            </div>

            <div class="form-group">
                <strong>Sexo</strong>
                <br>
                <label class="radio-inline">
                    <input type="radio" name="sexo" value="masculino" {{ old('sexo') == "masculino" ? 'checked' : '' }}> Masculino
                </label>
                <br>
                <label class="radio-inline">
                    <input type="radio" name="sexo" value="femenino" {{ old('sexo') == "femenino" ? 'checked' : '' }}> Femenino
                </label>
            </div>
        </div>
    </div>

    <!-- Segunda fila -->
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                {!! Form::label('direccion', 'Dirección') !!}
                {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección del empleado']) !!}
                @error('direccion')
                    <span class="text-danger">{{ $message }}</span>   
                @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                {!! Form::label('email', 'Correo Electrónico') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electrónico del empleado']) !!}
                @error('email')
                    <span class="text-danger">{{ $message }}</span>   
                @enderror
            </div>
        </div>
    </div>
        {!! Form::submit('Actualizar Empleado', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
</div>
            <!--AQUI PODEMOS HACER UNA OPCION DESPEGABLE-->
            {{--<div class="from-group">
                <label for="sexo">
                    <select name="sexo_id" id="sexo_id" class="form-control">
                        <option value="">-- Escoja el tipo de sexo--</option> 
                        //*@foreach($empleado as $empleado)
                            <option value="{{ $empleados [id] }}">{{ $empleado['sexo']}}</option>
                        @endforeach*/  
                    </select>    
                </label>    
            </div>--}}
        </div>
    </div>
@stop