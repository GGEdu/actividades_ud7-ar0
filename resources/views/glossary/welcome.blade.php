@extends('layouts/layout')

@section('title')
    Inicio Glosario
@endsection
@section('aside')
    @include('glossary.aside')
@endsection
@section('main')
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
        <h1>@yield('title')</h1>
    </nav>
    <div class="container p-3">
        <p>Este proyecto web ha sido creado con el propósito de ofrecer una herramienta eficiente y práctica para gestionar un glosario de términos. Un glosario es una colección de términos y sus respectivas definiciones, que resulta especialmente útil en campos técnicos, académicos o profesionales donde se emplean términos especializados.</p>

        <p>Nuestro proyecto web del glosario permite a los usuarios registrar términos, añadir sus definiciones y realizar búsquedas rápidas y precisas dentro del glosario. Además, ofrece funcionalidades adicionales como la edición y eliminación de términos existentes.</p>

        <p>Con una interfaz amigable y de fácil navegación, podrás explorar el glosario de manera intuitiva y acceder a la información que necesitas en cuestión de segundos. Tanto si eres estudiante, profesional o simplemente alguien interesado en aprender nuevos términos, nuestro proyecto web del glosario está diseñado para brindarte una experiencia completa y satisfactoria.</p>

        <p>No importa el tamaño de tu glosario, nuestro proyecto web puede adaptarse a tus necesidades. Puedes agregar tantos términos como desees, organizarlos en categorías, realizar búsquedas avanzadas y mantener tu glosario actualizado de forma sencilla.</p>

        <p>¡Esperamos que disfrutes utilizando nuestro proyecto web del glosario y que te resulte una herramienta valiosa para ampliar tus conocimientos y mejorar tu comprensión de términos especializados en tu campo de interés!</p>

        <p>Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos. ¡Disfruta explorando el glosario y aprovecha al máximo esta herramienta única!</p>
    </div>
@endsection
