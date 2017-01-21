<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Personal;

class Automovil extends Model
{
    protected $table = 'automovil';
	protected $primaryKey = 'id_auto'; //primaryKey
	public $timestamps = false;


    /**
     * Atributos que son asignables en la base de datos.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 
        'rfc',	
        'marca',
        'vehiculo',
        'modelo',
        'clase_tipo',
        'oficina_exp',
        'veh_origen',
        'fecha_exp',
        'vigencia',
        'NIV',
        'motor',
        'cilindros',
        'combustible',
        'personas',
        'uso',
        'capacidad_carga',
        'folio',
        'placa',
        'verificacion',
        'fecha_verificacion',
        'certificacion',
        'color',
        'observaciones',
    ];


    //RELACIONES
    /**
     * Devuelve el personal propietario de este vehiculo
     * belong To - Pertene a ...
     */
    // public function personal()
    // {
    //     return $this->belongsTo('App\Personal');
    // }
}
