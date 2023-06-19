@extends('layouts.layout')
@section('title')
    @if ($terms->total() > 0)
        Se encontraron {{ $terms->total() }} resultados
    @else
        No se encontraron resultados
    @endif
@endsection
@section('aside')
    @include('glossary.aside')
@endsection
@section('main')
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
        <h1>@yield('title')</h1>
    </nav>
    <div class="container p-3">
        @if ($terms->total() > 0)
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($terms as $term)
                    <div class="col mb-4">
                        
                                <a href="{{ route('sections.glossary.show', $term->id) }}" class="text-decoration-none">
                                <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $term->term }}</h5>
                                </div>
                        </div>
                                </a>
                            
                    </div>
                @endforeach
            </div>
        @else
            <p>No hay términos que coincidan con la búsqueda.</p>
        @endif
    </div>
@endsection
