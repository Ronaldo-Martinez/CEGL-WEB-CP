<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
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
            'servicioTitulo' => 'required',
            'servicioImagen'=>'required|image',
            'servicioDescripcion'=>'required'
        ]);
        //Guardar archivo en el servidor
        $name=$request->file('servicioImagen')->getClientOriginalName();

        //Guarda la imagen
        $request->file('servicioImagen')->store('public/imagenes');
        //recupera la url de la imagen
        $urlArchivo= $request->file('servicioImagen')->store('public/imagenes');
        $url= Storage::url($urlArchivo);
        //Guarda en la base de datos
        $servicio=new Servicio;
        $servicio->titulo=request('servicioTitulo');
        $servicio->imagen=$url;
        $servicio->texto=request('servicioDescripcion');
        $servicio->save();

        return back()->with('exito','Archivo Guardado.');
    }

    /**
     * Display the specified resource.e
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        $id = $request->mtxtidedit;
        $servicio = Servicio::find($id);
        $servicio->titulo=$request->txttituloedit;
        $servicio->texto=$request->txttextoedit;
        $servicio->save();
        return back()->with('exito','El servicio fue Editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //Para recuperar url
        $servicio=Servicio::findOrFail($request->mtxtideliminar);

        $url=str_replace('storage', 'public', $servicio->imagen);
        //return $url;
        //Elimina archivo
        Storage::delete($url);
        //Elimina Registro
        Servicio::destroy($request->mtxtideliminar);
        return back()->with('exito','El archivo fue eliminado exitosamente.');
    }
}
