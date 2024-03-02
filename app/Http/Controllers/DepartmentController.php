<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{

    /**
     * Muestra una lista de los departamentos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', ['departments' => $departments]);
    }

    /**
     * Muestra el formulario para crear un nuevo departamento.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('departments.create', ['departments' => $departments]);
    }

    /**
     * Almacena un nuevo departamento en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Puedes agregar más validaciones si es necesario
        ]);

        Department::create($request->all());

        return redirect('/departments')->with('success', '¡Departamento creado exitosamente!');
    }

    /**
     * Muestra el formulario para editar un departamento existente.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        $departments = Department::all();
        return view('departments.edit', ['department' => $department, 'departments' => $departments]);
    }

    /**
     * Actualiza el departamento especificado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Puedes agregar más validaciones si es necesario
        ]);

        $department->update($request->all());

        return redirect('/departments')->with('success', '¡Departamento actualizado exitosamente!');
    }

    /**
     * Elimina el departamento especificado de la base de datos.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return redirect('/departments')->with('success', '¡Departamento eliminado exitosamente!');
    }    

}
