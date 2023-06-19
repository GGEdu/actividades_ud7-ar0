@extends('layouts/layout')
@section('title')
    {{ $term->term }}
@endsection
@section('aside')
    @include('glossary.aside')
@endsection
@section('main')
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between p-3">
        <h1>@yield('title')</h1>
        <div class="col-5 d-flex justify-content-end">   
            <a href="{{ route('sections.glossary.edit', [$section, $term]) }}" class="btn btn-outline-warning me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Modificar término"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="{{ route('sections.glossary.destroy', [$section, $term]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar término"><i class="fa-solid fa-trash"></i></button>
            </form>
        </div>
    </nav>

    <div class="p-3">{!! $term->definition !!}</div>

    
@endsection
