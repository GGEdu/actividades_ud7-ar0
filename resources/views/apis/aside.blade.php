<nav class="navbar navbar-expand-md col-12">
    <div class="container-fluid d-flex flex-column col-12">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse hidden d-md-flex flex-column col-12" id="navbarDark">
            <form class="d-flex my-2 col-12" action="{{ route('apis.search') }}" method="GET">
                <input class="form-control me-2" type="search" name="sel_api" placeholder="Search" aria-label="Search" value="{{ request()->get('sel_api') }}">
                @if (request()->get('sel_api'))
                    <a href="{{ route('apis.welcome') }}" class="btn btn-outline-dark">
                        <i class="fa-solid fa-eraser"></i>
                    </a>
                @else
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                @endif
            </form>

            @if($errors->has('name'))
                <div class="alert alert-danger mt-2">
                    {{ $errors->first('name') }}
                </div>
            @endif
            <ul class="list-group col-12">
                @foreach ($apis as $api)
                    <li class="list-group-item col-12" aria-current="true">
                        <div id="showapiForm" class="col-12 row m-0 justify-content-between align-items-center ">
                            <a href="{{ route('apis.show', ['api' => $api->id, 'page' => request()->query('page', 1), 'sel_api' => request()->query('sel_api')]) }}" class="text-decoration-none col-7">{{ $api->name }}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <footer class="mt-auto">
                @if ($apis instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="d-flex justify-content-center mt-5" id="pagination">
                    {{ $apis->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>
                @endif
            </footer>
        </div>
    </div>
</nav>