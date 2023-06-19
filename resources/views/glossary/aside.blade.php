<nav class="navbar navbar-expand-md col-12">
    <div class="container-fluid d-flex flex-column col-12">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse hidden d-md-flex flex-column col-12" id="navbarDark">
            <form class="d-flex my-2 col-12" action="{{ route('sections.search') }}" method="GET">
                <input class="form-control me-2" type="search" name="sel_section" placeholder="Search" aria-label="Search" value="{{ request()->get('sel_section') }}">
                @if (request()->get('sel_section'))
                    <a href="{{ route('home') }}" class="btn btn-outline-dark">
                    <i class="fa-solid fa-eraser"></i>
                    </a>
                @else
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                @endif
            </form>

            <a id="createSectionButton" class="btn btn-outline-success w-100 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Crear sección" onclick="toggleCreateSectionForm()">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
            @if($errors->has('name'))
                <div class="alert alert-danger mt-2">
                    {{ $errors->first('name') }}
                </div>
            @endif
            <div id="createSectionForm" class="col-12 d-none">
                <form class="d-flex my-2 col-12" action="{{ route('sections.store') }}" method="POST">
                    @csrf
                    <input class="form-control me-2" type="text" name="name" placeholder="Nombre de la sección" aria-label="Nombre de la sección" required>
                    <button type="submit" class="btn btn-outline-success " data-bs-toggle="tooltip" data-bs-placement="top" title="Añadir sección"><i class="fa-regular fa-floppy-disk"></i></button>
                    <a class="btn btn-outline-warning ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancelar modificación" onclick="toggleCreateSectionForm()">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                </form>
            </div>
            <ul class="list-group col-12">
                @foreach ($sections as $section)
                    <li class="list-group-item col-12" aria-current="true">
                        <div id="showSectionForm" class="col-12 row m-0 justify-content-between align-items-center ">
                        <a href="{{ route('sections.glossary.index', ['section' => $section->id, 'page' => request()->query('page', 1), 'sel_section' => request()->query('sel_section')]) }}" class="text-decoration-none col-7">{{ $section->name }}</a>
                            <div class="col-5 d-lg-flex justify-content-end d-none">
                                <a class="btn btn-outline-warning me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Modificar sección" onclick="toggleEditSectionForm()">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('sections.destroy', $section->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar sección"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                        <div id="editSectionForm" class="col-12 d-none">
                            <form class="d-flex col-12" action="{{ route('sections.update', $section) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input class="form-control me-2" type="text" name="name" placeholder="Nombre de la sección" aria-label="Nombre de la sección" required value="{{$section->name}}">
                                <button type="submit" class="btn btn-outline-success " data-bs-toggle="tooltip" data-bs-placement="top" title="Guardar cambios"><i class="fa-regular fa-floppy-disk"></i></button>
                                <a class="btn btn-outline-warning ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancelar modificación" onclick="toggleEditSectionForm()">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </a>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
            <footer class="mt-auto">
                @if ($sections instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="d-flex justify-content-center mt-5" id="pagination">
                    {{ $sections->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>
                @endif
            </footer>
        </div>
    </div>
</nav>

<script>
    function toggleCreateSectionForm() {
        const createSectionForm = document.getElementById('createSectionForm');
        createSectionForm.classList.toggle('d-none');
        const createSectionButton = document.getElementById('createSectionButton');
        createSectionButton.classList.toggle('d-none');
    }
    function toggleEditSectionForm() {
        const editSectionForm = document.getElementById('editSectionForm');
        editSectionForm.classList.toggle('d-none');
        const showSectionForm = document.getElementById('showSectionForm');
        showSectionForm.classList.toggle('d-none');
    }
</script>
