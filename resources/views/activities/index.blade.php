@extends('layouts.activitieslayout')

@section('title')
    Actividades de la UD {!! $unit !!}
@endsection

@section('main')
@if($phase)
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    var servicesTop = $("#services").offset().top;
    if ($(window).scrollTop() < servicesTop) {
        $('html, body').animate({
            scrollTop: servicesTop
        }, 1000);
    }
});
</script>
@endif
<div class="Banner_sec" id="home">
    <div class="bannerside">
        <div class="Center">
            <div class="leftside">
                <h3>UNIDAD 7. <span>AUTENTICACIÓN, MIDDLEWARE Y SERVICIOS WEB</span></h3>
                <p>Desbloquea tu potencial en Laravel: Ahora que ya conoces el patrón MVC, estructura de proyectos, rutas, vistas, controladores y gestión de bases de datos, aprende a dominar la seguiridad de tu web, y ponla al servicio de otros en la nube.</p>
            </div>                      
            <div class="rightside">
                <ul id="slider">	
                    <li>
                        <div class="Slider">
                            <figure><img src="img/slide1.jpg" alt="image"></figure>
                            <div class="text">                      								
                                <div class="Lorem col-12">
                                    <p>1.Autenticación y autorización en Laravel.</p>
                                    <p><span>Configuración del sistema de autenticación en Laravel.</span> </p>
                                    <p><span>Registro de usuarios y gestión de contraseñas.</span></p>
                                    <p><span>Uso de "cookies" y sesiones.</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="Slider">
                            <figure><img src="img/slide2.jpg" alt="image"></figure>
                            <div class="text">                       								
                                <div class="Lorem">
                                    <p>2.Middleware en Laravel.</p>
                                    <p><span>Concepto de middleware y su uso en Laravel.</span> </p>
                                    <p><span>Creación y configuración de middleware personalizados.</span></p>
                                    <p><span>Aplicación de middleware en rutas y grupos de rutas.</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="Slider">
                            <figure><img src="img/slide3.jpg" alt="image"></figure>
                            <div class="text">                       								
                                <div class="Lorem">
                                    <p>3.Servicios web</p>
                                    <p><span>Definición y conceptos básicos de APIs RESTful.</span> </p>
                                    <p><span>Configuración y creación de servicios web.</span></p>
                                    <p><span>Documentación de servicios web.</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="Slider">
                            <figure><img src="img/slide4.jpg" alt="image"></figure>
                            <div class="text">                       								
                                <div class="Lorem">
                                    <p>4.Integración de servicios web en aplicaciones.</p>
                                    <p><span>Realizar solicitudes a servicios web.</span> </p>
                                    <p><span>Obtención y procesamiento de respuestas de servicios web.</span></p>
                                    <p><span>Integración de servicios web en una aplicación existente.</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>                                                            
                <figure><img src="img/Shadow-img.png" alt="image" class="Shadow"></figure>                                                        
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="bgcolor"></div>
<div class="Services_sec" id="services">
    <div class="Center">
        @if($phase)
            <h2>Actividades de {!! $phase !!}</h2>
        @else
            <h2>Actividades del tema</h2>
        @endif
        <p> {!!$phaseText!!}</p>		
        <div class="Line"></div>
        <div class="Serviceside">
            <div class="row">
                @foreach($activities as $activity)
                <div class="col-md-4 p-4">
                    <a class="text-decoration-none" href="{{ route('activities.show', $activity) }}">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="{{ $activity->icon }} personal-icon personal-icon-big"></i>
                                <h4 class="card-title mt-3">{!! $activity->name !!}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>                
</div>
@endsection
