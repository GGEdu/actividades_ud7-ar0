@extends('layouts.activitieslayout')

@section('title')
    {!! $activity->name !!}
@endsection

@section('main')
<div class="About_sec" id="about">
    <div class="Center">            	
        <h2>{!! $activity->name !!}</h2>            		
        <p>{!! $activity->description !!}</p>
        <div class="Line"></div>	
        <!-- \\ Begin Tab side \\ -->
        <div class="Tabside">
            <ul>
                <li><a href="javascript:;" class="tabLink activeLink" id="cont-1">Enunciado</a></li>
                <li><a href="javascript:;" class="tabLink" id="cont-2">General</a></li>
                <li><a href="javascript:;" class="tabLink" id="cont-3">Evaluación</a></li>
                <li><a href="javascript:;" class="tabLink" id="cont-4">Solución</a></li>
            </ul>
            <div class="clear"></div>
            <div class="tabcontent" id="cont-1-1">
                <div class="TabImage">
                    <div class="img1">
                        <figure><img src="{{ asset('img/about-img2.jpg') }}" alt="image"></figure>	
                    </div>
                    <div class="img2">
                        <figure><img src="{{ asset('img/about-img1.jpg') }}" alt="image"></figure>
                    </div>
                </div>
                <div class="Description">
                    <h3>Enunciado <i class="fa-solid fa-glasses personal-icon personal-icon-small"></i></h3>
                    <p>{!!$activity->statement!!}</p>
                    <h3>Pasos a seguir <i class="fa-solid fa-shoe-prints personal-icon personal-icon-small"></i></h3>
                    <p>{!!$activity->steps!!}</p>
                </div>
            </div>
            <div class="tabcontent hide" id="cont-2-1">
                <div class="TabImage">
                <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Tipo:</th>
                                <td>{!!$activity->type!!}</td>
                            </tr>
                            <tr>
                                <th>Fase:</th>
                                <td>{!!$activity->phase!!}</td>
                            </tr>
                            <tr>
                                <th>Sesiones:</th>
                                <td>{!!$activity->sessions!!}</td>
                            </tr>
                            <tr>
                                <th>Tiempo estimado:</th>
                                <td>{!!$activity->estimated_time!!}</td>
                            </tr>
                            <tr>
                                <th>Es evaluable:</th>
                                <td>{!!$activity->evaluation!!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="Description">
                    <h3>Contenidos <i class="fa-solid fa-arrows-to-dot personal-icon personal-icon-small"></i></h3>                    
                    <p>{!!$activity->contents!!}</p>
                    <h3>Objetivos didácticos <i class="fa-solid fa-bullseye personal-icon personal-icon-small"></i></h3>
                    <p>{!!$activity->didactic_objectives!!}</p>
                    <h3>Recursos <i class="fa-solid fa-screwdriver-wrench personal-icon personal-icon-small"></i></h3>
                    <p>{!!$activity->resources!!}</p>
                </div>
            </div>
            <div class="tabcontent hide" id="cont-3-1">
                <div class="TabImage">
                    <div class="img1">
                        <figure><img src="{{ asset('img/about-img2.jpg') }}" alt="image"></figure>	
                    </div>
                    <div class="img2">
                        <figure><img src="{{ asset('img/about-img1.jpg') }}" alt="image"></figure>
                    </div>
                </div>
                <div class="Description">
                    <h3>Metodología <i class="fa-solid fa-lightbulb personal-icon personal-icon-small"></i></h3>                    
                    <p>{!!$activity->education_metodologies!!}</p>
                    <h3>Resultados de Aprendizaje <i class="fa-solid fa-graduation-cap personal-icon personal-icon-small"></i></h3>
                    <p>{!!$activity->learning_results!!}</p>
                    <h3>Criterios de Evaluación <i class="fa-solid fa-list-check personal-icon personal-icon-small"></i></h3>
                    <p>{!!$activity->evaluation_criteria!!}</p>
                </div>
            </div>
            <div class="tabcontent hide row col-12" id="cont-4-1">
                <div class="col-4">
                    @if($activity->solution_url)
                        <h3>Solucion en: <a href="{!!$activity->solution_url!!}"><figure><img src="{{ asset('img/github.png') }}" class="col-6 m-auto"  alt="image"></figure></a></h3>	
                    @endif    
                </div>
                <div class="col-10 Description">
                    {!!$activity->solution!!}
                </div>
            </div>
            <div class="clear"></div>	
        </div>                
    </div>
</div>    
@endsection
