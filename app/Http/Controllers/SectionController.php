<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Redirect;

class SectionController extends Controller
{
    /**
     * Display a listing of the sections.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
    }

    /**
     * Show the form for creating a new section.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created section in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Definir mensajes de validación personalizados
        $messages = [
            'name.required' => 'El nombre de la sección es obligatorio.',
            'name.unique' => 'El valor ":input" ya está en uso para la sección.',
            'name.max' => 'El nombre de la sección no debe exceder los :max caracteres.',
        ];
        
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|unique:sections|max:255',
        ], $messages);
        
        $user = JWTAuth::user();
        
        $section = new Section;
        $section->user_id = $user->id;
        $section->name = $request->input('name');
        $section->save();
        
        return redirect()->route('sections.glossary.index', compact('section'))->with('success', 'Sección creada exitosamente.');
    }

    /**
     * Display the specified section.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
    }

    /**
     * Show the form for editing the specified section.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
    }

    /**
     * Update the specified section in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        // Definir mensajes de validación personalizados
        $messages = [
            'name.required' => 'El nombre de la sección es obligatorio.',
            'name.unique' => 'El valor ":input" ya está en uso para otra sección.',
            'name.max' => 'El nombre de la sección no debe exceder los :max caracteres.',
        ];
        
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|unique:sections,name,' . $section->id . '|max:255',
        ], $messages);

        $section->name = $request->input('name');
        $section->save();
        
        return redirect()->route('sections.glossary.index', compact('section'))->with('success', 'Sección actualizada exitosamente.');
    }

    /**
     * Remove the specified section from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();
        
        return redirect()->route('glossary.welcome')->with('success', 'Sección eliminada exitosamente.');
    }

    public function search(Request $request)
    {
        $name = $request->get('sel_section');
        $sections = Section::where('name', 'LIKE', '%' .$name . '%')->paginate(10)->appends(['sel_section' => $name]);

        return view('glossary.welcome', compact('sections', 'name'));
    }
}
