<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param string|null $phase
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $phase = $request->input('phase');

        if ($phase) {
            $activities = Activity::where('phase', $phase)->get();
            $phaseText = trans('texts.' . strtolower($phase));
        } else {
            $activities = Activity::all();
            $phaseText = trans('texts.' . strtolower('all_activities'));
        }
        
        $unit = $activities->isNotEmpty() ? $activities->first()->unit : null;
        
        return view('activities.index', compact('activities', 'phase', 'unit', 'phaseText'))->with('#services');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'subject' => 'required',
            'subject_name' => 'required',
            'unit' => 'required',
            'unit_name' => 'required',
            'name' => 'required',
            'type' => 'required',
            'phase' => 'required',
            'contents' => 'required',
            'resources' => 'required',
            'education_metodologies' => 'required',
            'didactic_objectives' => 'required',
            'description' => 'required',
            'statement' => 'required',
            'bibliography' => 'required',
            'author' => 'required',
        ]);

        // Create a new activity using the validated data
        $activity = Activity::create($validatedData);

        // Redirect to the activity's show page
        return redirect()->route('activities.show', $activity->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
{
    $request->validate([
        'code' => 'required',
        'subject' => 'required',
        'subject_name' => 'required',
        'unit' => 'required',
        'unit_name' => 'required',
        'name' => 'required',
        'type' => 'required',
        'phase' => 'required',
        'contents' => 'required',
        'resources' => 'required',
        'education_metodologies' => 'required',
        'didactic_objectives' => 'required',
        'description' => 'required',
        'statement' => 'required',
        'author' => 'required',
    ]);

    $activity->code = $request->input('code');
    $activity->subject = $request->input('subject');
    $activity->subject_name = $request->input('subject_name');
    $activity->unit = $request->input('unit');
    $activity->unit_name = $request->input('unit_name');
    $activity->name = $request->input('name');
    $activity->type = $request->input('type');
    $activity->phase = $request->input('phase');
    $activity->sessions = $request->input('sessions');
    $activity->estimated_time = $request->input('estimated_time');
    $activity->contents = $request->input('contents');
    $activity->resources = $request->input('resources');
    $activity->education_metodologies = $request->input('education_metodologies');
    $activity->learning_results = $request->input('learning_results');
    $activity->evaluation_criteria = $request->input('evaluation_criteria');
    $activity->didactic_objectives = $request->input('didactic_objectives');
    $activity->description = $request->input('description');
    $activity->statement = $request->input('statement');
    $activity->steps = $request->input('steps');
    $activity->evaluation = $request->input('evaluation');
    $activity->author = $request->input('author');
    $activity->solution_url = $request->input('solution_url');
    $activity->solution = $request->input('solution');

    $activity->save();

    return redirect()->route('activities.show', $activity)->with('success', 'La actividad se ha actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        // Delete the activity
        $activity->delete();

        // Redirect to the activities index page
        return redirect()->route('activities.index');
    }
}
