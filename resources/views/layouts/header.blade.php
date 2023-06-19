<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headernav" aria-controls="headernav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="headernav">
        <div class="container-fluid px-5 d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">GlobalDoc</a>
            @if (JWTAuth::user())
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('glossary.welcome') }}">Glossario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('objectives.welcome') }}">Autoevaluación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apis.welcome') }}">Servicios Web</a>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Salir"><i class="fa-solid fa-right-from-bracket"></i></button>
                </form>
            @else
                <h3 class="mb-0">Gestiona y accede a tu conocimiento: rápido, fácil, a tu alcance.</h3>
            @endif
        </div>
</nav>
