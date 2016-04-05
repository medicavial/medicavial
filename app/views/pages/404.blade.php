@extends('layouts.error')

@section('titulo')
    MedicaVial - Sitio no encontrado 
@stop

@section('descripcion')
    Somos MedicaVial
@stop

@section('content')

    <div class="bread-crumb-wrap ibc-wrap-4">
        <div class="container">
            <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
                <div class="bread-heading"><h1>Sitio no encontrado</h1></div>
            </div>
        </div>
    </div>
    
    <div class="container text-center">
        
        
        <h2>Te invitamos a ver nuestra sugerencia para ti.</h2>

        <div class="row">
            <div class="no-pad icon-boxes-1"> 
                
                <!--Icon-box-start-->
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                    <div class="icon-box-3 wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="150">
                        <div class="icon-boxwrap2"><i data-icon="\e609" class="icon-hospital2 icon-box-back2"></i></div>
                        <div class="icon-box2-title">Nuestras Clinicas</div>
                        <p>Servicio 24 Hrs.</p>
                        <div class="iconbox-readmore"><a href="{{ URL::route('clinicas') }}">Más Info.</a></div>
                    </div>   
                </div>
                
                <!--Icon-box-start-->
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                    <div class="icon-box-3 wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="150">
                        <div class="icon-boxwrap2"><i class="fa fa-medkit icon-box-back2"></i></div>
                        <div class="icon-box2-title">Nuestra membresia</div>
                        <p>Al servicio de tu salud.</p>
                        <div class="iconbox-readmore"><a href="{{ URL::route('membresia') }}">Más Info.</a></div>
                    </div>   
                </div>

                <!--Icon-box-start-->
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                    <div class="icon-box-3 wow fadeInUp" data-wow-delay="1.2s" data-wow-offset="150">
                        <div class="icon-boxwrap2"><i class="icon-stethoscope icon-box-back2"></i></div>
                        <div class="icon-box2-title">Nuestros Médicos</div>
                        <p>Medicos especialistas certificados.</p>
                        <div class="iconbox-readmore"><a href="{{ URL::route('doctores') }}">Más Info.</a></div>
                    </div>   
                </div>

                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                    <div class="icon-box-3 wow fadeInUp" data-wow-delay="0.9s" data-wow-offset="150">
                        <div class="icon-boxwrap2"><i class="icon-heart icon-box-back2"></i></div>
                        <div class="icon-box2-title">Una Vida Saludable</div>
                        <p>Consejos, tips y más</p>
                        <div class="iconbox-readmore"><a href="https://medicavial.wordpress.com/">Ir al Blog.</a></div>
                    </div>   
                </div>
            
            </div>
        </div>


    </div>
	 
@stop