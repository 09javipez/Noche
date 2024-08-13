<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();

        return view('admin.empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar los datos del formulario
        $request->validate([
           'nombre1' => 'required|string|max:255',
           'nombre2' => 'max:255',
           'apellido1' =>'required|string|max:255',
           'apellido2' =>'required|string|max:255',
           'fechaNac' => 'date',
           'numeroIdenti' =>'required|string|max:20',
           'numeroTel' => 'required|string|max:10',
           'sexo' => 'required|string|max:1',
           'direccion' => 'required|string|max:255',
           'email' => 'required|email|max:255',
        ]);

        //Crear un nuevo empleado
        Empleado::create($request->all());

        //REdirigir a la lista de empleados con un mensaje de éxito
        return redirect()->route('admmin.empleados.index')->with('info','Empleado registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        return view('admin.empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        return view('admin.empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //Validar los datos del formulario
        $request->validate([
            'nombre1' => 'required|string|max:255',
            'nombre2' => 'max:255',
            'apellido1' =>'required|string|max:255',
            'apellido2' =>'required|string|max:255',
            'fechaNac' => 'date',
            'numeroIdenti' =>'required|string|max:20',
            'numeroTel' => 'required|string|max:10',
            'sexo' => 'required|string|max:1',
            'direccion' => 'required|string|max:255',
            'email' => 'required|email|max:255,'. $empleado->id
        ]);
        $empleado->update($request->all());

        return redirect()->route('admin.empleados.index')->with('info', 'Empleado actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        // Eliminar el empleado
        $empleado->delete();

         // Redirigir a la lista de empleados con un mensaje de éxito
         return redirect()->route('admin.empleados.index')->with('info', 'Empleado eliminado con éxito.');
    }
}
