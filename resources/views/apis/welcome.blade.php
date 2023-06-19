@extends('layouts/layout')

@section('title')
    Inicio Servicios Web
@endsection
@section('aside')
    @include('apis.aside')
@endsection
@section('main')
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
        <h1>@yield('title')</h1>
    </nav>
    <div class="container p-3">
        <p>¡Bienvenido! Esta aplicación web ha sido creada con el propósito de proporcionar una solución versátil para almacenar y gestionar información diversa. Aquí puedes documentar y recuperar conceptos de una amplia variedad de propósitos: preguntas y respuestas, actividades y sus contenidos, APIs y sus respuestas, y mucho más.</p>

        <p>La aplicación permite a los usuarios registrar y organizar la información de una manera eficiente y fácil de usar. Además, ofrece la capacidad de buscar rápidamente conceptos y navegar a través de ellos de una manera intuitiva. No importa si eres un estudiante, un profesional o simplemente alguien interesado en documentar y acceder a la información de una manera estructurada, esta aplicación está diseñada para satisfacer tus necesidades.</p>

        <p>La interfaz amigable y las funcionalidades avanzadas como la edición y eliminación de conceptos existentes hacen que la gestión de la información sea un proceso sencillo. Independientemente de la cantidad de información que desees manejar, nuestra aplicación puede adaptarse a tus necesidades.</p>

        <p>Esperamos que disfrutes utilizando nuestra aplicación y que te resulte una herramienta valiosa para documentar y acceder a tu información. Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos. ¡Disfruta explorando y aprovecha al máximo esta herramienta única!</p>
    </div>
@endsection
