<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Mision;

class noticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $noticias=Noticia::orderBy('id','desc')->get();
        if(empty($noticias)){
            $noticias="";
        }
        return view('home',compact('noticias'));
    }
    public function conNoticias()
    {
        $noticias=Noticia::orderBy('id','desc')->get();
        if(empty($noticias)){
            $noticias="";
        }
        return view('configuracion.con-noticias',compact('noticias'));
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
        $noticia=new Noticia;
        $noticia->titulo=request('txttitulo');
        $noticia->texto=request('txttexto');

        $noticia->save();
        return back()->with('exito','El archivo fue Agregado exitosamente.');
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
        $noticia = Noticia::find($id);
        $noticia->titulo=$request->txttituloedit;
        $noticia->texto=$request->txttextoedit;
        $noticia->save();
        return back()->with('exito','La noticia fue Editado exitosamente.');
    }
    public function updateMision(Request $request)
    {
        $id = 1;
        $mision = Mision::find($id);
        $mision->mision=$request->txttituloedit;
        $mision->vision=$request->txttextoedit;
        $mision->save();
        return back()->with('exito','Edición Exitosa.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Noticia::destroy($request->mtxtideliminar);
        return back()->with('exito','El archivo fue eliminado exitosamente.');
    }
}

