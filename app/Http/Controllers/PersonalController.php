<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Personal;
use DB;
use PDF;

class PersonalController extends Controller
{
    //
    //
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
            $personal=DB::table('personal')->where('nombre','LIKE','%'.$query.'%')
            ->where ('estado','=','1')
            ->orderBy('id_personal','asc')
            ->paginate(10);
            return view('adminlte::personal.index',["personal"=>$personal,"searchText"=>$query]);
        }
    }

    /**
     * Agregar nuevo personal
     * 
     * @return [type] [description]
     */
    public function create()
    {
        return view("adminlte::personal.create");
    }

    /**
     * Guardar datos
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store (Request $request)
    {
        $personal = new Personal;
        $personal->estado='1';
        $personal->nombre=$request->get('nombre');
        $personal->apaterno=$request->get('apaterno');
        $personal->amaterno = $request->get('amaterno');
        $personal->estado_civil = $request->get('estado_civil');
        $personal->estatura = $request->get('estatura');
        $personal->fecha_nacimiento = $request->get('fecha_nacimiento');
        $personal->nacionalidad = $request->get('nacionalidad');
        $personal->edad = $request->get('edad');
        $personal->sexo = $request->get('sexo');
        $personal->peso = $request->get('peso');
        $personal->celular = $request->get('celular');
        $personal->tel_casa = $request->get('tel_casa');
        $personal->tel_emergencia = $request->get('tel_emergencia');
        $personal->licencia = $request->get('licencia');
        $personal->curp = $request->get('curp');
        $personal->email = $request->get('email');
        $personal->imss = $request->get('imss');
        $personal->ife = $request->get('ife');
        $personal->rfc = $request->get('rfc');
        $personal->vigencia_licencia = $request->get('vigencia_licencia');
        $personal->departamento = $request->get('departamento');
        $personal->cargo = $request->get('cargo');
        $personal->fecha_ingreso = $request->get('fecha_ingreso');
        $personal->hora_entrada = $request->get('hora_entrada');
        $personal->hora_salida = $request->get('hora_salida');
        $personal->tipo_contrato = $request->get('tipo_contrato');
        $personal->salario = $request->get('salario');
        $personal->save();
        return Redirect::to('home/personal');

    }

    /**
     * [show description]
     * @param  [type] $id_personal [description]
     * @return [type]              [description]
     */
    public function show($id_personal)
    {
        return view("adminlte::personal.show",["personal"=>Personal::findOrFail($id_personal)]);
    }

    /**
     * Editar registro
     * @param  [int] $id_personal
     * @return [type]     [description]
     */
    public function edit($id_personal)
    {
        return view("adminlte::personal.edit",["personal"=>Personal::findOrFail($id_personal)]);
    }

    /**
     * [update description]
     * @param  Request $request [description]
     * @param  [type]               $id      [description]
     * @return [type]                        [description]
     */
    public function update(Request $request,$id_personal)
    {
        $personal = Personal::findOrFail($id_personal);
        $personal->estado='1';
        $personal->nombre=$request->get('nombre');
        $personal->apaterno=$request->get('apaterno');
        $personal->amaterno = $request->get('amaterno');
        $personal->estado_civil = $request->get('estado_civil');
        $personal->estatura = $request->get('estatura');
        $personal->fecha_nacimiento = $request->get('fecha_nacimiento');
        $personal->nacionalidad = $request->get('nacionalidad');
        $personal->edad = $request->get('edad');
        $personal->sexo = $request->get('sexo');
        $personal->peso = $request->get('peso');
        $personal->celular = $request->get('celular');
        $personal->tel_casa = $request->get('tel_casa');
        $personal->tel_emergencia = $request->get('tel_emergencia');
        $personal->licencia = $request->get('licencia');
        $personal->curp = $request->get('curp');
        $personal->email = $request->get('email');
        $personal->imss = $request->get('imss');
        $personal->ife = $request->get('ife');
        $personal->rfc = $request->get('rfc');
        $personal->vigencia_licencia = $request->get('vigencia_licencia');
        $personal->departamento = $request->get('departamento');
        $personal->cargo = $request->get('cargo');
        $personal->fecha_ingreso = $request->get('fecha_ingreso');
        $personal->hora_entrada = $request->get('hora_entrada');
        $personal->hora_salida = $request->get('hora_salida');
        $personal->tipo_contrato = $request->get('tipo_contrato');
        $personal->salario = $request->get('salario');
        $personal->update();
        return Redirect::to('home/personal');
    }

    /**
     * [destroy description]
     * @param  [type] $id_personal
     * @return [type]     [description]
     */
    public function destroy($id_personal)
    {
        $personal = Personal::findOrFail($id_personal);
        $personal->delete();
        return Redirect::to('home/personal')->with('success','Registro Eliminado');
    }

    /**
     * Generar el reporte en formato PDF
     * @return [type] [description]
     */
    public function generaReporte($tipo)
    {
        $personal = Personal::all();
        $pdf = PDF::loadView('adminlte::personal.reporte', ['personal' => $personal]);
        if ($tipo == 1) { return $pdf->stream('reportePersonal.pdf');}
        if ($tipo == 2) { return $pdf->download('reportePersonal.pdf');}
    }

}