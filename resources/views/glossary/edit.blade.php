@extends('layouts/layout')
@section('title')
    Editar Término
@endsection
@section('aside')
    @include('glossary.aside')
@endsection
@section('main')
    <form action="{{ route('sections.glossary.update', [$section, $term]) }}" method="POST">
        @csrf
        @method('PUT')
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between p-3">
            <h1>@yield('title')</h1>
            <button type="submit" class="btn btn-outline-success " data-bs-toggle="tooltip" data-bs-placement="top" title="Guardar cambios"><i class="fa-regular fa-floppy-disk"></i></button>
        </nav>
        <div class="form-group p-2">
            <label for="term">Término:</label>
            <input type="text" class="form-control" name="term" id="term" value="{{ $term->term }}">
            @error('term')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group p-2">
            <label for="definition">Definición:</label>
            <textarea class="form-control ckeditor" name="definition" id="definition">{{ $term->definition }}</textarea>
            @error('definition')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </form>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.definition').ckeditor();
        });
    </script>
@endsection
