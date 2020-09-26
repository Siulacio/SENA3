<?php

namespace App\Http\Controllers;

use App\Aprendiz;
use App\tipoSangre;
use App\tipoDocumento;
use App\NivelSisben;

use Illuminate\Http\Request;
use App\Http\Requests\AprendizStoreRequest;


class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aprendices = Aprendiz::get();

        return view('app.aprendices.listado_aprendices',compact('aprendices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposSangre = tipoSangre::get();
        $tiposDocumentos = tipoDocumento::get();
        $sisben = NivelSisben::get();
        return view('app.aprendices.nuevo_aprendiz',compact('tiposSangre','tiposDocumentos','sisben'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AprendizStoreRequest $request)
    {
        Aprendiz::create($request->all());
        return redirect()->action('AprendizController@index')->with('status','Aprendiz <b>'.$request->nombre1.' '.$request->apellido1.'</b> registrado satisfactoriamente!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function show(Aprendiz $aprendiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aprendiz = Aprendiz::find($id);
        $tiposSangre = tipoSangre::get();
        $tiposDocumentos = tipoDocumento::get();
        $sisben = NivelSisben::get();
        return view('app.aprendices.editar_aprendiz',compact('aprendiz','tiposSangre','tiposDocumentos','sisben'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        // dd($request->all());
        $aprendiz = Aprendiz::find($request->id);
        $aprendiz->fill($request->all());
        $aprendiz->save();
        return redirect()->action('AprendizController@index')->with('status','Aprendiz <b>'.$request->nombre1.' '.$request->apellido1.'</b> actualizado satisfactoriamente!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aprendiz $aprendiz)
    {
        //
    }

    public function estados($id){

        $aprendiz = Aprendiz::find($id);

        if($aprendiz->estado == 1){
            $aprendiz->estado = 0;
            $mensaje = 'Inactivado';

        }else{
            $aprendiz->estado = 1;
            $mensaje = 'Activado';

        }

        $aprendiz->save();

       
        return redirect()->action('AprendizController@index')->with('status','Aprendiz <b>'.$aprendiz->nombre.'</b> '.$mensaje.' satisfactoriamente!');
    }
}
