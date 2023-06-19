<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObjectiveController extends Controller
{
    public function show(Request $request)
    {
        $page = $request->query('page', 1);
        $activity_id = $request->query('activity', 1);
        $activity = Activity::findOrFail($activity_id);
        // Obtén el usuario logueado
        $user = Auth::user();
        
        // Obtén los objetivos con la tabla pivot solo para el usuario logueado
        $objectives = $activity->objectives()
            ->with(['users' => function ($query) use ($user) {
                $query->where('user_id', $user->id);
            }])
            ->get();

        return view('objectives.show', compact('activity', 'objectives'));
    }

    public function store(Request $request)
    {
        // Valida los campos enviados desde el formulario
        $validatedData = $request->validate([
            'improvements.*' => 'nullable|string',
            'highlights.*' => 'nullable|string',
        ]);

        // Obtén los datos enviados desde el formulario
        $improvements = $validatedData['improvements'];
        $highlights = $validatedData['highlights'];

        // Obtén el usuario autenticado
        $user = Auth::user();

        // Procesa los datos y guarda los registros en la base de datos
        foreach ($improvements as $index => $improvement) {
            $highlight = $highlights[$index];

            $objectiveId = $request->input('objective_id.' . $index);

            // Si se proporciona el ID del objetivo, actualiza el registro en la tabla pivot
            if ($objectiveId) {
                $user->objectives()->syncWithoutDetaching([$objectiveId => [
                    'improvements' => $improvement,
                    'highlights' => $highlight,
                ]]);
            } else {
                // Si no se proporciona el ID del objetivo, crea un nuevo registro en la tabla pivot
                $objective = new Objective();
                $objective->save();

                $user->objectives()->attach($objective->id, [
                    'improvements' => $improvement,
                    'highlights' => $highlight,
                ]);
            }
        }

        // Redirige o muestra un mensaje de éxito
        return redirect()->back()->with('success', 'Los datos se han guardado correctamente.');
    }

    public function addObjective(Request $request)
    {
        // Valida los datos enviados desde el formulario
        $validatedData = $request->validate([
            'new_text' => 'required|string',
        ]);

        // Obtén el ID de la actividad actual
        $activity_id = $request->input('activity');

        // Crea el nuevo objetivo
        $objective = new Objective();
        $objective->text = $validatedData['new_text'];
        $objective->activity_id = $activity_id;
        $objective->save();

        // Redirige o muestra un mensaje de éxito
        return redirect()->back()->with('success', 'Se ha añadido un nuevo objetivo correctamente.');
    }




    public function destroy(Activity $activity, objectivesTerm $term)
    {
        $term->delete();

        return redirect()->route('sections.objectives.index', $section)->with('success', 'Término "' . $term->term . '" eliminado exitosamente.');
    }

    public function search(Request $request)
    {
        $name = $request->get('term');
        $terms = objectivesTerm::where('term', 'LIKE', $name . '%')->paginate(10);

        return view('objectives.index', compact('terms'));
    }
}
