@extends('layouts.app')
@section('content')
  <main class="col-12 p-5">
      <div class="h-100">
          <div class="card-body d-flex flex-column">
              @yield('main')
          </div>
      </div>
  </main>
@endsection