<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Noticia;
use App\Mision;
use App\Servicio;

class inicioController extends Controller
{
    public function index()
    {
        $noticias=Noticia::orderBy('id','desc')->get();
        return view('home',compact('noticias'));
    }
    public function mision()
    {
        $mision = Mision::find(1);
        return view('mision',compact('mision'));
    }
    public function nuevoIngreso()
    {
        $archivos = DB::table('archivos')->where('tipo', '4')->get();
        return view('nuevoIngreso', compact('archivos'));
    }
    public function descargas()
    {
        //Para todos los archivos
        //$archivos = DB::table('archivos')->get();
        //Archivos tipo 1
        $archivosBasic = DB::table('archivos')->where('tipo', '1')->get();
        //Archivos tipo 2
        $archivosBach = DB::table('archivos')->where('tipo', '2')->get();
        //Archivos tipo 3
        $archivosE = DB::table('archivos')->where('tipo', '3')->get();
        return view('descargas', compact('archivosBach', 'archivosBasic','archivosE'));
    }
    public function servicios()
    {
        //Para todos los archivos
        //$archivos = DB::table('archivos')->get();
        //Archivos tipo 1
        $servicios = DB::table('servicios')->get();
        return view('servicios', compact('servicios'));
    }
}
