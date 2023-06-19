@extends('layouts.app')
@section('content')
    <div class="row col-12 m-0">
        <aside class="col-md-4 d-flex flex-column">
            <div class="card shadow h-100">
                <div class="card-body">
                    @yield('aside')
                </div>
            </div>
        </aside>        
        <main class="col-md-8 p-3 pe-md-5">
            <div class="card shadow h-100">
                <div class="card-body d-flex flex-column">
                    @yield('main')
                </div>
            </div>
        </main>
    </div>
@endsection