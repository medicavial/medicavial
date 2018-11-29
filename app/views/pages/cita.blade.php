@extends('layouts.default')

@section('titulo')
    MedicaVial - Agenda tu cita
@stop

@section('descripcion')
    Somos MedicaVial
@stop

@section('content')

	<div id="contact-version-two" ng-controller="citaCtrl" ng-init="inicio()">
    <!--Mid Content Start-->

	    <div class="about-intro-wrap pull-left">

		    <div class="bread-crumb-wrap ibc-wrap-4">
		    	<div class="container">
		         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
		            	<div class="bread-heading"><h1>Agenda Tu Cita</h1></div>
		            </div>
		        </div>
		    </div>

            <div class="col-md-12 col-xs-12 col-sm-12 pull-left full-content wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-offset="130">
                <div class="container">
                    <div class="full-content-title">Estimado Paciente</div>
                        <p>Para solicitar una cita por favor ingresa tus datos asi como la clinica de tu preferencia, la fecha y la hora en que te gustaria recibir la atención médica especializada. Una vez hecho lo anterior nos pondremos en contacto contigo para confirmar los datos de tu cita.</p>
                    </div>
                </div>
            </div>

            <div class="container wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-offset="130">
                <div class="row">


                    <form ng-submit="generaCita()" class="col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad contact-v2">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="alert alert-success" id="contactSuccess" ng-show="mensaje">
                                    <strong>Exito!</strong> <% mensaje %>.
                                </div>

                                <div class="alert alert-danger" id="contactError" ng-show="error">
                                    <strong>Ups!</strong> <% error %>.
                                </div>

                            </div>
                        </div>

                        <br>

                        <div class="row">


                            <div class="col-lg-4 col-sm-6 col-md-4 col-xs-12">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <label>Selecciona Fecha *</label>
                                    <uib-datepicker ng-model="datosCita.fecha" class="well well-sm" datepicker-options="dateOptions"></uib-datepicker>
                                </div>
                                <!-- <button type="button" class="btn btn-sm btn-primary" ng-click="hoy()">Hoy</button> -->
                            </div>

                            <div class="col-lg-2 col-sm-6 col-md-2 col-xs-12">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <label>Selecciona Hora *</label>
                                    <uib-timepicker ng-model="datosCita.hora" hour-step="1" minute-step="15" show-meridian="true"></uib-timepicker>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <input type="text" class="contact2-textbox" ng-model="datosCita.nombre" placeholder="Nombre *" name="name" required/>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                	<input type="email" class="contact2-textbox" ng-model="datosCita.correo" placeholder="Email *" name="email" required/>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <input type="text" class="contact2-textbox" ng-model="datosCita.telefono" placeholder="Telefono" name="telefono" />
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <input type="text" class="contact2-textbox" ng-model="datosCita.lugar" placeholder="Lugar donde quieres tu cita *" name="lugar" />
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                               		<textarea class="contact2-textarea" placeholder="Comentarios adicionales" ng-model="datosCita.comentarios" name="message" id="message" col="2"></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 contact2-page-form">
                            <section class="color-7" id="btn-click">
                              <button type="button" class="btn btn-danger disabled btn-xs avisoSwitch" style="color: #fff !important;">
                                Sin conexión <i class="fa fa-spinner fa-spin"></i>
                              </button>
            					<button class="icon-mail btn2-st2 btn-7 btn-7b elementSwitch" id="botonCita" data-text-loading="Verificando Información" type="submit">Solicitar Cita</button>
                			</section>
                        </div>

                        <br>
                        <br>
                        <br>

                    </form>

		    	</div>
		    </div>

	    </div>

    </div>


@stop
