<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GlossaryTerm;
use App\Models\Section;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class GlossaryController extends Controller
{
    public function index(Request $request, Section $section)
    {
        // Recoge la página actual de los parámetros de consulta
        $page = $request->query('page', 1);
        $term = $request->query('term', null);

        // Utiliza la página actual para recuperar los datos paginados
        $terms = $section->glossaryTerms()
            ->when($term, function ($query, $term) {
                return $query->where('term', 'like', "%{$term}%");
            })
            ->paginate(10, ['*'], 'page', $page);

        return view('glossary.index', compact('section', 'terms'));
    }


    public function create(Section $section)
    {
        return view('glossary.create', compact('section'));
    }

    public function store(Request $request, Section $section)
    {
        // Validar y procesar los datos del formulario
        $validatedData = $request->validate([
            'term' => [
                'required',
                Rule::unique('glossary_terms')->where(function ($query) use ($section) {
                    return $query->where('section_id', $section->id);
                }),
            ],
            'definition' => 'required',
        ], [
            'term.required' => 'El término es obligatorio.',
            'term.unique' => 'El término ya existe en el glosario de esta sección.',
            'definition.required' => 'La definición es obligatoria.',
        ]);

        $term = new GlossaryTerm;
        $term->section_id = $section->id;
        $term->term = $request->input('term');
        $term->definition = $request->input('definition');
        $term->save();
        
        return redirect()->route('sections.glossary.index', $section)->with('success', 'Término "' . $term->term . '" creado exitosamente.');
    }

    public function show(Section $section, GlossaryTerm $term)
    {
        return view('glossary.show', compact('term', 'section'));
    }

    public function edit(Section $section, GlossaryTerm $term)
    {
        return view('glossary.edit', compact('section', 'term'));
    }

    public function update(Request $request, Section $section, GlossaryTerm $term)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'term' => [
                'required',
                Rule::unique('glossary_terms')->where(function ($query) use ($section) {
                    return $query->where('section_id', $section->id);
                })->ignore($term->id),
            ],
            'definition' => 'required',
        ], [
            'term.required' => 'El término es obligatorio.',
            'term.unique' => 'El término ya existe en el glosario de esta sección.',
            'definition.required' => 'La definición es obligatoria.',
        ]);

        $term->term = $request->input('term');
        $term->definition = $request->input('definition');
        $term->save();

        return redirect()->route('sections.glossary.show', compact('section', 'term'))->with('success', 'Término "' . $term->term . '" actualizado exitosamente.');
    }

    public function destroy(Section $section, GlossaryTerm $term)
    {
        $term->delete();

        return redirect()->route('sections.glossary.index', $section)->with('success', 'Término "' . $term->term . '" eliminado exitosamente.');
    }

    public function search(Request $request)
    {
        $name = $request->get('term');
        $terms = GlossaryTerm::where('term', 'LIKE', $name . '%')->paginate(10);

        return view('glossary.index', compact('terms'));
    }
}
