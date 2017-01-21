<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Empleado;
use DB;
use PDF;

class EmpleadoController extends Controller
{
	/**
	 * [__construct description]
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
            $empleados=DB::table('empleados')->where('NOMBRE','LIKE','%'.$query.'%')
            ->where ('ACTIVO','=','1') //empleados activos
            ->orderBy('Id','asc')
            ->paginate(20);
            return view('adminlte::empleado.index',["empleados"=>$empleados,"searchText"=>$query]);
        }
    }

    /**
     * Agregar nuevo empleado
     * 
     * @return [type] [description]
     */
    public function create()
    {
        return view("adminlte::empleado.create");
    }

    /**
     * Guardar datos
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store (Request $request)
    {
        $empleado = new empleado;
        $empleado->NOMBRE=$request->get('NOMBRE');
        $empleado->APELLIDOPATERNO=$request->get('APELLIDOPATERNO');
        $empleado->APELLIDOMATERNO=$request->get('APELLIDOMATERNO');
        $empleado->DIRECCION=$request->get('DIRECCION');
        $empleado->ESTADO=$request->get('ESTADO');
        $empleado->MUNICIPIO=$request->get('MUNICIPIO');
        $empleado->CODIGOPOSTAL=$request->get('CODIGOPOSTAL');
        $empleado->TELEFONO=$request->get('TELEFONO');
        $empleado->CELULAR=$request->get('CELULAR');
        $empleado->EMAIL=$request->get('EMAIL');
        $empleado->FECHANACIMIENTO=$request->get('FECHANACIMIENTO');
        $empleado->EMPRESA=$request->get('EMPRESA');
        $empleado->CATEGORIA=$request->get('CATEGORIA');
        $empleado->PROYECTOS=$request->get('PROYECTOS');
        $empleado->FECHADEINGRESO=$request->get('FECHADEINGRESO');
        $empleado->ACTIVO='1'; 
        $empleado->save();
        return Redirect::to('home/empleado');
    }

    /**
     * [show description]
     * @param  [type] $id_empleado [description]
     * @return [type]              [description]
     */
    public function show($Id)
    {
        return view("adminlte::empleado.show",["empleado"=>empleado::findOrFail($Id)]);
    }

    /**
     * Editar registro
     * @param  [int] $id_empleado
     * @return [type]     [description]
     */
    public function edit($Id)
    {
        return view("adminlte::empleado.edit",["empleado"=>empleado::findOrFail($Id)]);
    }

    /**
     * [update description]
     * @param  Request $request [description]
     * @param  [type]               $id      [description]
     * @return [type]                        [description]
     */
    public function update(Request $request,$Id)
    {
        $empleado = empleado::findOrFail($Id);
         $empleado->NOMBRE=$request->get('NOMBRE');
        $empleado->APELLIDOPATERNO=$request->get('APELLIDOPATERNO');
        $empleado->APELLIDOMATERNO=$request->get('APELLIDOMATERNO');
        $empleado->DIRECCION=$request->get('DIRECCION');
        $empleado->ESTADO=$request->get('ESTADO');
        $empleado->MUNICIPIO=$request->get('MUNICIPIO');
        $empleado->CODIGOPOSTAL=$request->get('CODIGOPOSTAL');
        $empleado->TELEFONO=$request->get('TELEFONO');
        $empleado->CELULAR=$request->get('CELULAR');
        $empleado->EMAIL=$request->get('EMAIL');
        $empleado->FECHANACIMIENTO=$request->get('FECHANACIMIENTO');
        $empleado->EMPRESA=$request->get('EMPRESA');
        $empleado->CATEGORIA=$request->get('CATEGORIA');
        $empleado->PROYECTOS=$request->get('PROYECTOS');
        $empleado->FECHADEINGRESO=$request->get('FECHADEINGRESO');
        $empleado->ACTIVO=$request->get('ACTIVO');
        $empleado->update();
        return Redirect::to('home/empleado');
    }

    /**
     * [destroy description]
     * @param  [type] $id_empleado
     * @return [type]     [description]
     */
    public function destroy($Id)
    {
        $empleado = Empleado::findOrFail($Id);
        //$empleado->FECHADEBAJA = 'Obtener fecha';
        $empleado->ACTIVO='0';
        $empleado->update();
        //$empleado->delete();
        return Redirect::to('home/empleado')->with('success','Registro Eliminado');
    }

    /**
     * Generar el reporte en formato PDF
     * @return [type] [description]
     */
    public function generaReporte($tipo)
    {
        $empleado = Empleado::all()->where('ACTIVO','=','1');
        $empleados = count($empleado);
        $pdf = PDF::loadView('adminlte::empleado.reporte', ['empleado' => $empleado,'empleados'=>$empleados]);
        if ($tipo == 1) { return $pdf->stream('MOSEmpleados.pdf');}
        if ($tipo == 2) { return $pdf->download('MOSEmpleados.pdf');}
    }
}
