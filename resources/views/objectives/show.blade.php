@extends('layouts/layout')
@section('title')
{{ $activity->name }}
@endsection
@section('aside')
    @include('objectives.aside')
@endsection
@section('main')
    <style>
        .textarea-td {
            position: relative;
        }

        .textarea-td textarea {
            position: absolute;
            top: 5%;
            left: 10px;
            width: 90%;
            height: 90%;
            resize: none;
            border: solid 1px #c5a072;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between p-3">
        <h1>Autoevaluación del @yield('title')</h1>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCriteriaModal">Añadir Criterio</button>
    </nav>

    <div class="p-3">
        <form action="{{ route('objectives.store') }}" method="POST">
            @csrf
            <table class="table table-striped">
                <thead>
                    <tr class="row px-3">
                        <th class="col-4">Aspectos a mejorar</th>
                        <th class="col-4">Criterios de evaluación y Objetivos</th>
                        <th class="col-4">Aspectos destacados</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($objectives as $objective)
                    <tr class="row px-3">
                        <td class="col-4 textarea-td">
                            @if($objective->users()->exists())
                                @foreach($objective->users as $user)
                                    <textarea name="improvements[]" class="form-control">{{ $user->pivot->improvements }}</textarea>
                                @endforeach
                            @else
                                <textarea name="improvements[]" class="form-control"></textarea>
                            @endif
                            <input type="hidden" name="objective_id[]" value="{{ $objective->id }}">
                        </td>
                        <td class="col-4 text-center">
                            {{ $objective->text }}
                        </td>
                        <td class="col-4 textarea-td">
                            @if($objective->users()->exists())
                                @foreach($objective->users as $user)
                                    <textarea name="highlights[]" class="form-control">{{ $user->pivot->highlights }}</textarea>
                                @endforeach
                            @else
                                <textarea name="highlights[]" class="form-control"></textarea>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-success col-3">Actualizar cambios</button>
            </div>
            
        </form>
        <div class="modal fade" id="addCriteriaModal" tabindex="-1" aria-labelledby="addCriteriaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCriteriaModalLabel">Añadir Criterio de Evaluación y Objetivo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('objectives.add') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="newText" class="form-label">Añadir un nuevo criterio</label>
                                <input type="hidden" name="activity" value="{{ $activity->id }}">
                                <textarea class="form-control" id="newText" name="new_text" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
