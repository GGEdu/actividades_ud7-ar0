@extends('layouts/activitieslayout')

@section('title')
    Editar Actividad
@endsection

@section('main')
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Editar Actividad') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('activities.update', $activity->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row py-2">
                                <label for="code" class="col-md-3 col-form-label text-md-right">{{ __('Código') }}</label>

                                <div class="col-md-9">
                                    <input id="code" type="text" class="ckeditor form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code',  $activity->code) }}" required autofocus>

                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="subject" class="col-md-3 col-form-label text-md-right">{{ __('Asignatura') }}</label>

                                <div class="col-md-9">
                                    <input id="subject" type="text" class="ckeditor form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject',  $activity->subject) }}" required>

                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="subject_name" class="col-md-3 col-form-label text-md-right">{{ __('Nombre de la Asignatura') }}</label>

                                <div class="col-md-9">
                                    <input id="subject_name" type="text" class="ckeditor form-control @error('subject_name') is-invalid @enderror" name="subject_name" value="{{ old('subject_name', $activity->subject_name) }}" required>

                                    @error('subject_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="unit" class="col-md-3 col-form-label text-md-right">{{ __('Unidad') }}</label>

                                <div class="col-md-9">
                                    <input id="unit" type="text" class="ckeditor form-control @error('unit') is-invalid @enderror" name="unit" value="{{ old('unit', $activity->unit) }}" required>

                                    @error('unit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="unit_name" class="col-md-3 col-form-label text-md-right">{{ __('Nombre de la Unidad') }}</label>

                                <div class="col-md-9">
                                    <input id="unit_name" type="text" class="ckeditor form-control @error('unit_name') is-invalid @enderror" name="unit_name" value="{{ old('unit_name',  $activity->unit_name) }}" required>

                                    @error('unit_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nombre de la Actividad') }}</label>

                                <div class="col-md-9">
                                    <input id="name" type="text" class="ckeditor form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',  $activity->name) }}" required>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="type" class="col-md-3 col-form-label text-md-right">{{ __('Tipo') }}</label>

                                <div class="col-md-9">
                                    <input id="type" type="text" class="ckeditor form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type', $activity->type) }}" required>

                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="phase" class="col-md-3 col-form-label text-md-right">{{ __('Fase') }}</label>

                                <div class="col-md-9">
                                    <input id="phase" type="text" class="ckeditor form-control @error('phase') is-invalid @enderror" name="phase" value="{{ old('phase', $activity->phase) }}" required>

                                    @error('phase')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="sessions" class="col-md-3 col-form-label text-md-right">{{ __('Sesiones') }}</label>

                                <div class="col-md-9">
                                    <input id="sessions" type="text" class="ckeditor form-control @error('sessions') is-invalid @enderror" name="sessions" value="{{ old('sessions', $activity->sessions) }}">

                                    @error('sessions')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="estimated_time" class="col-md-3 col-form-label text-md-right">{{ __('Tiempo Estimado') }}</label>

                                <div class="col-md-9">
                                    <input id="estimated_time" type="text" class="ckeditor form-control @error('estimated_time') is-invalid @enderror" name="estimated_time" value="{{ old('estimated_time', $activity->estimated_time) }}">

                                    @error('estimated_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="contents" class="col-md-3 col-form-label text-md-right ">{{ __('Contenidos') }}</label>

                                <div class="col-md-9">
                                    <textarea id="contents" class="ckeditor form-control @error('contents') is-invalid @enderror" name="contents" required>{{ old('contents', $activity->contents) }}</textarea>

                                    @error('contents')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="resources" class="col-md-3 col-form-label text-md-right">{{ __('Recursos') }}</label>

                                <div class="col-md-9">
                                    <textarea id="resources" class="ckeditor form-control @error('resources') is-invalid @enderror" name="resources" required>{{ old('resources', $activity->resources) }}</textarea>

                                    @error('resources')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="education_metodologies" class="col-md-3 col-form-label text-md-right">{{ __('Metodologías de Enseñanza') }}</label>

                                <div class="col-md-9">
                                    <textarea id="education_metodologies" class="ckeditor form-control @error('education_metodologies') is-invalid @enderror" name="education_metodologies" required>{{ old('education_metodologies', $activity->education_metodologies) }}</textarea>

                                    @error('education_metodologies')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="learning_results" class="col-md-3 col-form-label text-md-right">{{ __('Resultados de Aprendizaje') }}</label>

                                <div class="col-md-9">
                                    <textarea id="learning_results" class="ckeditor form-control @error('learning_results') is-invalid @enderror" name="learning_results">{{ old('learning_results', $activity->learning_results) }}</textarea>

                                    @error('learning_results')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="evaluation_criteria" class="col-md-3 col-form-label text-md-right">{{ __('Criterios de Evaluación') }}</label>

                                <div class="col-md-9">
                                    <textarea id="evaluation_criteria" type="text" class="ckeditor form-control @error('evaluation_criteria') is-invalid @enderror" name="evaluation_criteria" value="">{{ old('evaluation_criteria', $activity->evaluation_criteria) }}</textarea>

                                    @error('evaluation_criteria')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="didactic_objectives" class="col-md-3 col-form-label text-md-right">{{ __('Objetivos Didácticos') }}</label>

                                <div class="col-md-9">
                                    <textarea id="didactic_objectives" class="ckeditor form-control @error('didactic_objectives') is-invalid @enderror" name="didactic_objectives" required>{{ old('didactic_objectives', $activity->didactic_objectives) }}</textarea>

                                    @error('didactic_objectives')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="description" class="col-md-3 col-form-label text-md-right">{{ __('Descripción') }}</label>

                                <div class="col-md-9">
                                    <textarea id="description" class="ckeditor form-control @error('description') is-invalid @enderror" name="description" required>{{ old('description', $activity->description) }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="statement" class="col-md-3 col-form-label text-md-right">{{ __('Enunciado') }}</label>
                                <div class="col-md-9">
                                    <textarea id="statement" class="ckeditor form-control @error('statement') is-invalid @enderror" name="statement">{{ old('statement', $activity->statement) }}</textarea>

                                    @error('statement')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="steps" class="col-md-3 col-form-label text-md-right">{{ __('Pasos') }}</label>

                                <div class="col-md-9">
                                    <textarea id="steps" class="ckeditor form-control @error('steps') is-invalid @enderror" name="steps">{{ old('steps', $activity->steps) }}</textarea>

                                    @error('steps')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="evaluation" class="col-md-3 col-form-label text-md-right">{{ __('Evaluación') }}</label>

                                <div class="col-md-9">
                                    <textarea id="evaluation" class="ckeditor form-control @error('evaluation') is-invalid @enderror" name="evaluation">{{ old('evaluation', $activity->evaluation) }}</textarea>

                                    @error('evaluation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="author" class="col-md-3 col-form-label text-md-right">{{ __('Autor') }}</label>

                                <div class="col-md-9">
                                    <input id="author" type="text" class="ckeditor form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author', $activity->author) }}" required>

                                    @error('author')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="solution_url" class="col-md-3 col-form-label text-md-right">{{ __('URL de la solución') }}</label>

                                <div class="col-md-9">
                                    <input id="solution_url" type="text" class="ckeditor form-control @error('solution_url') is-invalid @enderror" name="solution_url" value="{{ old('solution_url', $activity->solution_url) }}">

                                    @error('solution_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label for="solution" class="col-md-3 col-form-label text-md-right">{{ __('Solución') }}</label>
                                <div class="col-md-9">
                                    <textarea id="solution" class="ckeditor form-control @error('solution') is-invalid @enderror" name="solution">{{ old('solution', $activity->solution) }}</textarea>

                                    @error('solution')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-9 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Guardar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.contents').ckeditor();
            $('.resources').ckeditor();
            $('.education_metodologies').ckeditor();
            $('.learning_results').ckeditor();
            $('.evaluation_criteria').ckeditor();
            $('.didactic_objectives').ckeditor();
            $('.description').ckeditor();
            $('.statement').ckeditor();
            $('.steps').ckeditor();
            $('.evaluation').ckeditor();
            $('.solution').ckeditor();
        });
    </script>
@endsection
