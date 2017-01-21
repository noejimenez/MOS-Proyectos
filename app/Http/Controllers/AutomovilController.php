<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Automovil;
use DB;
use PDF;

class AutomovilController extends Controller
{
	/**
	 * 
	 */
    public function __construct()
    {
    	 $this->middleware('auth');
    }

    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $automovil=DB::table('automovil')->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('id_auto','asc')
            ->paginate(20);
            return view('adminlte::automovil.index',["automovil"=>$automovil,"searchText"=>$query]);
        }
    }

    /**
     * Agregar nuevo Automóvil
     * 
     * @return [type] [description]
     */
    public function create()
    {
        return view("adminlte::automovil.create");
    }

    /**
     * Guardar datos
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store (Request $request)
    {
        $auto = new Automovil;
        $auto->nombre = $request->get('nombre');
        $auto->rfc = $request->get('rfc');
        $auto->marca = $request->get('marca');
        $auto->vehiculo = $request->get('vehiculo');
        $auto->modelo = $request->get('modelo');
        $auto->clase_tipo = $request->get('clase_tipo');
        $auto->oficina_exp = $request->get('oficina_exp');
        $auto->veh_origen = $request->get('veh_origen');
        $auto->fecha_exp = $request->get('fecha_exp');
        $auto->vigencia = $request->get('vigencia');
        $auto->NIV = $request->get('NIV');
        $auto->motor = $request->get('motor');
        $auto->cilindros = $request->get('cilindros');
        $auto->combustible = $request->get('combustible');
        $auto->personas = $request->get('personas');
        $auto->uso = $request->get('uso');
        $auto->capacidad_carga = $request->get('capacidad_carga');
        $auto->folio = $request->get('folio');
        $auto->placa = $request->get('placa');
        $auto->verificacion = $request->get('verificacion');
        $auto->fecha_verificacion = $request->get('fecha_verificacion');
        $auto->certificacion = $request->get('certificacion');
        $auto->color = $request->get('color');
        $auto->observaciones = $request->get('observaciones');
        $auto->save();
        return Redirect::to('home/automovil');

    }

    /**
     * [show description]
     * @param  [type] $id_auto [description]
     * @return [type]              [description]
     */
    public function show($id_auto)
    {
        return view("adminlte::automovil.show",["automovil"=>Automovil::findOrFail($id_auto)]);
    }

    /**
     * Editar registro
     * @param  [int] $id_auto
     * @return [type]     [description]
     */
    public function edit($id_auto)
    {
        return view("adminlte::automovil.edit",["automovil"=>Automovil::findOrFail($id_auto)]);
    }

    /**
     * [update description]
     * @param  Request $request [description]
     * @param  [type]               $id      [description]
     * @return [type]                        [description]
     */
    public function update(Request $request,$id_auto)
    {
        $auto = Automovil::findOrFail($id_auto);
        $auto->nombre = $request->get('nombre');
        $auto->rfc = $request->get('rfc');
        $auto->marca = $request->get('marca');
        $auto->vehiculo = $request->get('vehiculo');
        $auto->modelo = $request->get('modelo');
        $auto->clase_tipo = $request->get('clase_tipo');
        $auto->oficina_exp = $request->get('oficina_exp');
        $auto->veh_origen = $request->get('veh_origen');
        $auto->fecha_exp = $request->get('fecha_exp');
        $auto->vigencia = $request->get('vigencia');
        $auto->NIV = $request->get('NIV');
        $auto->motor = $request->get('motor');
        $auto->cilindros = $request->get('cilindros');
        $auto->combustible = $request->get('combustible');
        $auto->personas = $request->get('personas');
        $auto->uso = $request->get('uso');
        $auto->capacidad_carga = $request->get('capacidad_carga');
        $auto->folio = $request->get('folio');
        $auto->placa = $request->get('placa');
        $auto->verificacion = $request->get('verificacion');
        $auto->fecha_verificacion = $request->get('fecha_verificacion');
        $auto->certificacion = $request->get('certificacion');
        $auto->color = $request->get('color');
        $auto->observaciones = $request->get('observaciones');
        $auto->update();
        return Redirect::to('home/automovil');
    }

    /**
     * [destroy description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function destroy($id_auto)
    {
        $auto = Automovil::findOrFail($id_auto);
        $auto->delete();
        return Redirect::to('home/automovil')->with('success','Registro Eliminado');
    }

    /**
     * Generar el reporte de los autos en PDF
     * @return [type] [description]
     */
    public function generaReporte($tipo)
    {
        $automovil = Automovil::all();
        $pdf = PDF::loadView('adminlte::automovil.reporte', ['automovil' => $automovil]);
        if ($tipo == 1) { return $pdf->stream('reporteAutos.pdf');}
        if ($tipo == 2) { return $pdf->download('reporteAutos.pdf');}
    }
}
