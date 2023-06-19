<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $activity = DB::table('activities')->where('code', 'A2')->first();
        DB::table('objectives')->insert([
            'text' => 'Preparación adecuada del entorno de desarrollo Laravel, incluyendo configuración de la base de datos.',
            'activity_id' => $activity->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('objectives')->insert([
            'text' => 'Configuración y aplicación correctas de las migraciones y modelos de Laravel, especialmente para la tabla de usuarios.',
            'activity_id' => $activity->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('objectives')->insert([
            'text' => 'Creación y funcionamiento correctos del controlador AuthController, con los métodos login(), procesar(), logout() y register() implementados.',
            'activity_id' => $activity->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('objectives')->insert([
            'text' => 'Configuración correcta de las rutas de tipo POST y GET para interactuar con el controlador.',
            'activity_id' => $activity->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('objectives')->insert([
            'text' => 'Diseño y funcionamiento correctos de los formularios de registro y login.',
            'activity_id' => $activity->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('objectives')->insert([
            'text' => 'Implementación adecuada del registro de usuarios, incluyendo la gestión de contraseñas.',
            'activity_id' => $activity->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('objectives')->insert([
            'text' => 'Implementación adecuada de la autenticación de usuarios, incluyendo el uso de "cookies" para almacenar y recuperar información del usuario.',
            'activity_id' => $activity->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
