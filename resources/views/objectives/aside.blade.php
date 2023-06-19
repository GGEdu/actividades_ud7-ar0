<nav class="navbar navbar-expand-md col-12">
    <div class="container-fluid d-flex flex-column col-12">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse hidden d-md-flex flex-column col-12" id="navbarDark">
            <form class="d-flex my-2 col-12" action="{{ route('objectives.search') }}" method="GET">
                <input class="form-control me-2" type="search" name="sel_activity" placeholder="Search" aria-label="Search" value="{{ request()->get('sel_activity') }}">
                @if (request()->get('sel_activity'))
                    <a href="{{ route('objectives.welcome') }}" class="btn btn-outline-dark">
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
                @foreach ($activities as $activity)
                    <li class="list-group-item col-12" aria-current="true">
                        <div id="showactivityForm" class="col-12 row m-0 justify-content-between align-items-center ">
                            <a href="{{ route('objectives.show', ['activity' => $activity->id, 'page' => request()->query('page', 1), 'sel_activity' => request()->query('sel_activity')]) }}" class="text-decoration-none col-7">{{ $activity->name }}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <footer class="mt-auto">
                @if ($activities instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="d-flex justify-content-center mt-5" id="pagination">
                    {{ $activities->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>
                @endif
            </footer>
        </div>
    </div>
</nav>