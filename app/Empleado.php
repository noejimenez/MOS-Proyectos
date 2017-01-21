<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'Id';   //Primary Key
   	public $timestamps = false;


   	/**
     * Atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
    	'NOMBRE',
        'APELLIDOPATERNO', 
        'APELLDIOMATERNO',
        'DIRECCION',
        'ESTADO',
        'MUNICIPIO',
        'CODIGOPOSTAL',
        'TELEFONO',
        'CELULAR',
        'EMAIL',
        'FECHANACIMIENTO',
        'EMPRESA',
        'CATEGORIA',
        'PROYECTOS',
        'IFE',
        'CURP',
        'ACTADENACIMIENTO',
        'COMPROBANTEDEDOMICILIO',
        'LICENCIA',
        'IMSS',
        'CROQUISDELDOMICILIO',
        'CONSTANCIADEESTUDIOS',
        'CARTADEANTECEDENTESNOPENALES',
        'CARTADERECOMENDACION',
        'FOTOGRAFIA',
        'CARTILLA',
        'FECHADEINGRESO',
        'FECHADEBAJA',
        'ACTIVO',
    ];

}
