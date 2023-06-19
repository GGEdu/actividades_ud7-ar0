@extends('layouts/layout')

@section('title')
    Autoevaluación de actividades
@endsection
@section('aside')
    @include('objectives.aside')
@endsection
@section('main')
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
        <h1>@yield('title')</h1>
    </nav>
    <div class="container p-3">
        <p>¡Bienvenido! Este apartado se ha creado para que puedas autoevaluar tu trabajo de modo que puedas llevar un registro de los conceptos que has adquirido y los que crees que deberías repasar.</p>

        <p>En la columna "Aspectos a mejorar", escribe aquellos elementos o aspectos que consideras que podrías haber mejorado en tu comprensión de los temas teóricos durante la actividad.</p>

        <p>En la columna "Aspectos destacados", escribe los aspectos que consideras que has comprendido excepcionalmente bien o las habilidades que has mejorado a través de esta actividad.</p>

        <p>Recuerda que esta autoevaluación es una oportunidad para reflexionar honestamente sobre tu rendimiento y establecer objetivos para el futuro.</p>
    </div>
@endsection
