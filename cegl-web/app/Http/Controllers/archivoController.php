<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Archivo;

class archivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //Valida lo recibido
        $request->validate([
            'archivoTitulo' => 'required',
            'archivoTipo'=>'required',
            'archivo'=>'required'
        ]);
        //Guardar archivo en el servidor
        $name=$request->file('archivo')->getClientOriginalName();
        $request->file('archivo')->store('public/documentos');
        $urlArchivo= $request->file('archivo')->store('public/documentos');
        $url= Storage::url($urlArchivo);
        //Guarda en la base de datos
        $archivo=new Archivo;
        $archivo->nombre=request('archivoTitulo');
        $archivo->nombreReal=$name;
        $archivo->url=$url;
        $archivo->tipo=request('archivoTipo');
        $archivo->descripcion=request('archivoDescripcion');
        $archivo->save();

        return back()->with('exito','Archivo Guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->mtxtidedit;
        $archivo = Archivo::find($id);
        $archivo->nombre=$request->txttituloedit;
        $archivo->descripcion=$request->txttextoedit;
        $archivo->tipo=$request->archivoTipo;
        $archivo->save();
        return back()->with('exito','El archivo fue Editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //Para recuperar url
        $archivo=Archivo::findOrFail($request->mtxtideliminar);

        $url=str_replace('storage', 'public', $archivo->url);
        //Elimina archivo
        Storage::delete($url);
        //Elimina Registro
        Archivo::destroy($request->mtxtideliminar);
        return back()->with('exito','El archivo fue eliminado exitosamente.');
    }
}
