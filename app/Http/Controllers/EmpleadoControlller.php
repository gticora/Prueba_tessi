<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoControlller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
    }

    public function index()
    {
        $valor=EmpleadoControlller::data();
        $title = 'Listado de empleados';

        return view('empleados.index', compact('title', 'valor'));
    }

    public function show($id)
    {
        $valor=EmpleadoControlller::data();
        $title = 'Detalle del empleado';
        return view('empleados.show', compact('id','valor','title'));
    }

    public function data(){
        $json =  @file_get_contents('data.json');
        $items = json_decode($json, true);
        $valor=$items['empleados'];

        return $valor;
    }


}
