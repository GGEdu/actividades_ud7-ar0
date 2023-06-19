@extends('layouts.layout')

@section('title')
    {{$section->name}}
@endsection
@section('aside')
    @include('glossary.aside')
@endsection
@section('main')
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between p-3">
        <h1>@yield('title')</h1>
        <div class="d-flex justify-content-end">   
            <a href="{{ route('sections.glossary.create', $section) }}" class="btn btn-outline-success me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Crear término"><i class="fa-solid fa-circle-plus"></i></a>
        </div>
    </nav>
    <form class="d-flex my-2 col-12" action="{{ route('sections.glossary.index', $section) }}" method="GET">
        <input class="form-control me-2" type="search" name="term" placeholder="Search" aria-label="Search" value="{{ request()->get('term') }}">
            @if (request()->get('term'))
                <a href="{{ route('sections.glossary.index', $section) }}" class="btn btn-outline-dark">
                    <i class="fa-solid fa-eraser"></i>
                </a>
            @else
                <button class="btn btn-outline-dark" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            @endif
        </form>
    <table class="table table-striped">
        <thead>
            <tr class="row px-3">
                <th class="col-9">Term</th>
                <th class="col-3 text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach($terms as $term)
        <tr class="row px-3">
            <td class="col-9">
                <a href="{{ route('sections.glossary.show', ['section' => $section, 'term' => $term, 'page' => request('page')]) }}" class="text-decoration-none">
                    {{ $term->term }}
                </a>
            </td>
            <td class="col-3 text-end">
                <a href="{{ route('sections.glossary.edit', [$section, $term]) }}" class="btn btn-outline-warning me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Modificar término">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <form action="{{ route('sections.glossary.destroy', [$section, $term]) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar término">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

    </table>
    <footer class="mt-auto">
        @if ($sections instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div class="d-flex justify-content-center mt-5" id="pagination">
                {!! $terms->onEachSide(1)->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
        @endif  
    </footer>    
@endsection
