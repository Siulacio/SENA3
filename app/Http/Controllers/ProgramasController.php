<?php

namespace App\Http\Controllers;

use App\Programas;
use App\Http\Requests\ProgramaStoreRequest;
use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programas::get();
        return view('app.programas.listado_programa',compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.programas.nuevo_programa');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramaStoreRequest $request)
    {
        $programa = new Programas();
        $programa->codigo = $request->codigo;
        $programa->nombre = $request->nombre;
        $programa->fecha_inicio = $request->fecha_inicio;
        $programa->fecha_cierre = $request->fecha_cierre;
        $programa->tipo = $request->tipo;
        $programa->duracion = $request->duracion;
        $programa->save();

        return redirect()->action('ProgramasController@index')->with('status','Programa <b>'.$request->nombre.'</b> creado satisfactoriamente!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function show(Programas $programas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programa = Programas::find($id); //busco
        
        return view('app.programas.editar_programa',compact('programa'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $programa = Programas::find($request->id);

        $programa->codigo = $request->codigo;
        $programa->nombre = $request->nombre;
        $programa->fecha_inicio = $request->fecha_inicio;
        $programa->fecha_cierre = $request->fecha_cierre;
        $programa->tipo = $request->tipo;
        $programa->duracion = $request->duracion;
        $programa->save();

        return redirect()->action('ProgramasController@index')->with('status','Programa <b>'.$request->nombre.'</b> actualizado satisfactoriamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programas $programas)
    {
        //
    }

    public function estados($id){

        $programa = Programas::find($id);

        if($programa->estado == 1){
            $programa->estado = 0;
        }else{
            $programa->estado = 1;
        }

        $programa->save();

        if($programa->estado == 0){
            $mensaje = 'Inactivado';
        }else{
            $mensaje = 'Activado';
        }
        return redirect()->action('ProgramasController@index')->with('status','Programa <b>'.$programa->nombre.'</b> '.$mensaje.' satisfactoriamente!');

    }
}
