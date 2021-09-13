<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Mision;
use App\Archivo;
use App\Servicio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mision = Mision::find(1);
        return view('configuracion.configuracion', compact('mision'));
    }
    public function servicios()
    {
        $servicios = DB::table('servicios')->get();
        return view('configuracion.con-servicios', compact('servicios'));
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
        //Archivos Nuevo ingreso
        $archivosN = DB::table('archivos')->where('tipo', '4')->get();
        return view('configuracion.con-descargas', compact('archivosBach', 'archivosBasic','archivosE', 'archivosN'));
    }
    public function storeServicio(Request $request)
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
    public function updateServicio(Request $request, Servicio $servicio)
    {
        $id = $request->mtxtidedit;
        $servicio = Servicio::find($id);
        $servicio->titulo=$request->txttituloedit;
        $servicio->texto=$request->txttextoedit;
        $servicio->save();
        return back()->with('exito','El servicio fue Editado exitosamente.');
    }
    public function destroyServicio(Request $request)
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
