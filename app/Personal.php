<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Automovil;

class Personal extends Model
{
    protected $table = 'personal';
    protected $primaryKey = 'id_personal';   //Primary Key
   	public $timestamps = false;


    /**
     * Atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
    	'estado',
        'nombre', 
        'apaterno',
        'amaterno',
        'estado_civil',
        'estatura',
        'fecha_nacimiento',
        'nacionalidad',
        'edad',
        'sexo',
        'peso',
        'celular',
        'tel_casa',
        'tel_emergencia',
        'licencia',
        'curp',
        'email',
        'imss',
        'ife',
        'rfc',
        'vigencia_licencia',
        'departamento',
        'cargo',
        'fecha_ingreso',
        'fecha_fin',
        'hora_entrada',
        'hora_salida',
        'tipo_contrato',
        'salario',
    ];

    //RELACIONES
    /**
     * Obtener el auto del Personal
     */
    // public function automovil()
    // {
    //     return $this->hasOne('App\Automovil');
    // }

}
