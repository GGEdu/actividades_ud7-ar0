<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/theme.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/media.css') }}" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<body>
    <div >
        <header class="smaller">
            @include('layouts.activitiesheader')
        </header>
        @yield('main')
    </div>
    <footer>
        <div class="Cntr">                
            <p>COPYRIGHT © 2023 GUILLERMO GARRIDO PORTES.</p>
        </div>
    </footer>
  <!-- <<Attched Javascripts>> -->
  <script type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.sudoSlider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/global.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
