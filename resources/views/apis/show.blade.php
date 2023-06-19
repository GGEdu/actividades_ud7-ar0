@extends('layouts/layout')
@section('title')
{{ $api->name }}
@endsection
@section('aside')
    @include('apis.aside')
@endsection
@section('main')
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between p-3">
        <h1>@yield('title')</h1>
    </nav>

    <div class="p-3">{!! $markdown !!}</div>

    
@endsection
