@extends('layouts.layout')

@section('title')
    Crear Término
@endsection
@section('aside')
    @include('glossary.aside')
@endsection
@section('main')
    <form action="{{ route('sections.glossary.store', $section) }}" method="POST">
        @csrf
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between p-3">
            <h1>@yield('title')</h1>
            <button type="submit" class="btn btn-outline-success " data-bs-toggle="tooltip" data-bs-placement="top" title="Guardar nuevo término"><i class="fa-regular fa-floppy-disk"></i></button>
        </nav>
        <input type="hidden" name="section_id" value="{{ $section->id }}">
        <div class="form-group p-2">
            <label for="term">Término:</label>
            <input type="text" class="form-control @error('term') is-invalid @enderror" name="term" id="term" value="{{ old('term') }}">
            @error('term')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-2">
            <label for="definition">Definición:</label>
            <textarea class="form-control ckeditor @error('definition') is-invalid @enderror" name="definition" id="definition">{{ old('definition') }}</textarea>
            @error('definition')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>        
    </form>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
