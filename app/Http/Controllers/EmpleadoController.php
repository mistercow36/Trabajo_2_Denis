<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Idioma;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados=Empleado::All();
        $campos = $empleados[0]->getAttributes();
        unset ($campos['created_at']);
        unset ($campos['updated_at']);
        $campos = array_keys($campos);
        $rol=auth()->user()->getRoleNames();

        return view("empresa.empleado.listado",['filas'=>$empleados, 'campos'=>$campos, 'rol'=>$rol[0]]);
        //

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
    public function get_idiomas(int $id){
        $empleado=Empleado::find($id)->first();
        $idiomas= Idioma::where('empleado_id', $empleado->id)->get();
        $campos = $idiomas[0]->getAttributes();
        unset ($campos['created_at']);
        unset ($campos['updated_at']);
        $campos = array_keys($campos);

        return view("empresa.empleado.idiomas",['empleado'=>$empleado, 'idiomas'=>$idiomas]);

    }
}
