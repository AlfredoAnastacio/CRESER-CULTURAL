<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            ['cve' => "CBEOCEP", 'description' => "OCEPEDIA 2", 'price' => 0.00],
            ['cve' => "CREAAEC", 'description' => "AUDIO ACTIVE ENGLISH COURSE", 'price' => 0.00],
            ['cve' => "CREACJN", 'description' => "APRENDIENDO CON JESUS CON LOS NINOS", 'price' => 0.00],
            ['cve' => "CREACTP", 'description' => "AYUDAME CON LA TAREA PRIMARIA", 'price' => 0.00],
            ['cve' => "CREADAP", 'description' => "ACTIVIDADES DIDACTICAS PARA EL AULA DE PRIMARIA", 'price' => 0.00],
            ['cve' => "CREAJED", 'description' => "APRENDER JUGANDO EDUCACION PRIMARIA", 'price' => 0.00],
            ['cve' => "CREAMBO", 'description' => "MIS AMIGOS DEL BOSQUE", 'price' => 0.00],
            ['cve' => "CREAMDC", 'description' => "APRENDIENDO LO MEJOR DERECHOS EN ACCION", 'price' => 0.00],
            ['cve' => "CREAMDM", 'description' => "AMOR DE MAMA", 'price' => 0.00],
            ['cve' => "CREAMIJ", 'description' => "MIS AMIGUITOS DEL JARDIN", 'price' => 0.00],
            ['cve' => "CREAPIA", 'description' => "APRENDER LAS LETRAS ", 'price' => 0.00],
            ['cve' => "CREAPIN", 'description' => "APRENDER LOS NUMEROS", 'price' => 0.00],
            ['cve' => "CREAPRE", 'description' => "ACTIVIDADES DINAMICAS PREESCOLAR", 'price' => 0.00],
            ['cve' => "CREAPRI", 'description' => "ACTIVIDADES PARA PRIMARIA", 'price' => 0.00],
            ['cve' => "CREASM", 'description' => "ASI ME SIENTO YO MIS EMOCIONES", 'price' => 0.00],
            ['cve' => "CREASYC", 'description' => "ASI SOY YO MI CUERPE", 'price' => 0.00],
            ['cve' => "CREATLA", 'description' => "ATLAS", 'price' => 0.00],
            ['cve' => "CREATSI", 'description' => "AYUDAME CON LA TAREA SECUNDARIA INTERACTIVA", 'price' => 0.00],
            ['cve' => "CREAVCH", 'description' => "ATLAS VISUAL DEL CUERPO HUMANO", 'price' => 0.00],
            ['cve' => "CREAVHS", 'description' => "AVENGERS HISTORIETA", 'price' => 0.00]
        ]);
    }
}
