<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Objective;
use App\Models\User;

class UserObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objectives = Objective::all();
        $user = User::find(1);

        $userObjectives = [
            [
                'improvements' => 'Tuve algunas dificultades iniciales al configurar la base de datos para el entorno de desarrollo Laravel. Necesito mejorar mi conocimiento sobre las bases de datos y su interacción con Laravel.',
                'highlights' => 'A pesar de las dificultades iniciales, finalmente logré configurar correctamente la base de datos para Laravel.',
            ],
            [
                'improvements' => 'Tuve que repasar varias veces los conceptos de migraciones y modelos de Laravel para implementar correctamente la tabla de usuarios.',
                'highlights' => 'Pude entender y aplicar correctamente los conceptos de migraciones y modelos en Laravel.',
            ],
            [
                'improvements' => 'Al principio, tuve problemas con la creación del controlador AuthController.',
                'highlights' => 'Lo conseguí con la ayuda del profesor, pero debo repasar la solución.',
            ],
            [
                'improvements' => 'Al implementar las rutas de tipo POST y GET, encontré algunos problemas para que interactuaran correctamente con el controlador.',
                'highlights' => 'Una vez que entendí completamente cómo funcionan las rutas, pude configurarlas correctamente y logré que interactuaran con el controlador de la manera esperada.',
            ],
            [
                'improvements' => 'El diseño de los formularios de registro y login fue un poco desafiante para mí. Necesito mejorar mis habilidades de diseño y usabilidad.',
                'highlights' => '',
            ],
            [
                'improvements' => '',
                'highlights' => 'Funcionó a la primera.',
            ],
            [
                'improvements' => '',
                'highlights' => 'Perfecto y sin problemas.',
            ],
        ];

        foreach ($objectives as $index => $objective) {
            $userObjective = $userObjectives[$index % count($userObjectives)];
            $objective->users()->attach($user, $userObjective);
        }
    }

}
