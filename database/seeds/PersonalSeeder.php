<?php

use Illuminate\Database\Seeder;
use App\Personal;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 500; $i++) {
        	DB::table('personal')->insert([
                'estado' => '1',
                'nombre' => 'Noe',
                'amaterno' => 'Jimenez',
                'apaterno' => 'Peñaloza',
                'estado_civil' => 'solter@',
                'estatura' => '1.70',
                'fecha_nacimiento' => '1994-09-04',
                'nacionalidad' => 'Mexicana',
                'edad' => '20',
                'sexo' => 'Masculino',
                'peso' => '70',
                'celular' => '71215394',
                'tel_casa' => '2717325',
                'tel_emergencia' => '2717325',
                'licencia' => str_random(10),
    	        'curp' => str_random(10),
    	        'email' => str_random(10).'@mosproyectos.com.mx',
    	        'imss' => str_random(10),
    	        'ife' => '28282',
    	        'rfc' => 'JIPN940904',
    	        'vigencia_licencia' => '2017-09-04',
    	        'departamento' => str_random(10),
    	        'cargo' => str_random(15),
    	        'fecha_ingreso' => '2016-12-12',
    	        'fecha_fin' => '2017-12-01',
    	        'hora_entrada' => '09:00:00',
    	        'hora_salida' => '18:00:00',
    	        'tipo_contrato' => str_random(10),
    	        'salario' => '1000'
            ]);
        }
    }
}
