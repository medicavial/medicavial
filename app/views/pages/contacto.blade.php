@extends('layouts.default')

@section('titulo')
    MedicaVial - Contacto
@stop

@section('descripcion')
    Somos MedicaVial
@stop

@section('content')

	<div id="contact-version-two" ng-controller="contactoCtrl">
    <!--Mid Content Start-->


	    <div class="about-intro-wrap pull-left">

		    <div class="bread-crumb-wrap ibc-wrap-4">
		    	<div class="container">
		         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
		            	<div class="bread-heading"><h1>Contactanos</h1></div>
		            </div>
		        </div>
		    </div>


	        <!-- <div class="container">
	        	<div class="pull-left map-full no-pad contact-v1-map">
                	<div id="map-canvas"></div>
                	<div class="map-shadow"></div>
                </div>
	        </div> -->

	        <div class="container">
            	<div class="mid-widgets-serices  text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 no-pad top-pad pull-left services-page">

		            <!--service box-->
		            <div class="col-sm-5 col-xs-12 col-md-3 col-lg-3 service-box no-pad wow fadeInLeft animated" data-wow-delay="1s" data-wow-offset="150">
		                <div class="service-title"><div class="service-icon-container rot-y"><i class="fa fa-map-marker panel-icon"></i></div><div class="service-heading">Corporativo</div></div>
		                <p>
                      <a href="https://goo.gl/maps/wGZsQ2juARM2" target="_blank">
                        Av. Alvaro Obregon 151 Piso 9 <br/>Col. Roma Norte, 06700
                      </a>
                    </p>

		            </div>

		            <!--service box-->
		            <div class="col-sm-5 col-xs-12 col-md-3 col-lg-3 service-box no-pad wow fadeInLeft animated" data-wow-delay="1.3s" data-wow-offset="150">
		                <div class="service-title"><div class="service-icon-container rot-y"><i class="fa fa-phone panel-icon"></i></div><div class="service-heading">Telefono</div></div>
		                <p>
                      <a href="tel:018003633422">
                        01 800 - 3 MEDICA(633422)
                      </a>
                    </p>

		            </div>

		            <!--service box-->
		            <div class="col-sm-5 col-xs-12 col-md-3 col-lg-3 service-box no-pad wow fadeInLeft animated" data-wow-delay="1.6s" data-wow-offset="150">
		                <div class="service-title"><div class="service-icon-container rot-y"><i class="fa fa-envelope-o panel-icon"></i></div><div class="service-heading">Correo</div></div>
		                <p>
                      <a href="mailto:contacto@medicavial.com.mx">
                        contacto@medicavial.com.mx
                      </a>
                    </p>

		            </div>

		            <!--service box-->
		            <div class="col-sm-5 col-xs-12 col-md-3 col-lg-3 service-box no-pad wow fadeInLeft animated" data-wow-delay="1.9s" data-wow-offset="150">
		                <div class="service-title"><div class="service-icon-container rot-y"><i class="fa fa-facebook panel-icon"></i></div><div class="service-heading">Redes Sociales</div></div>
		                <p>
                      <a href="https://twitter.com/MedicaVial" target="_blank">
                        twitter.com/MedicaVial
                      </a>
                      <br>
                      <a href="https://www.facebook.com/medicavial" target="_blank">
                        facebook.com/medicavial
                      </a>
                    </p>

		            </div>
				</div>  <!--sservice box end-->
		 	</div><!--container-->

			<div class="container">
			 	<div class="row">
		            <div class="col-xs-12 col-lg-12  col-sm-12 col-md-12 pull-left contact2-wrap no-pad">
		                <!--contact widgets-->
		                <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 pull-left no-pad">
		                    <!--Contact form-->
		                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="160">

		                        <div>

		                        </div>

								<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad">


									<div class="alert alert-success" id="contactSuccess" ng-show="mensaje">
										<strong>Exito!</strong> <% mensaje %>.
									</div>

									<div class="alert alert-danger" id="contactError" ng-show="error">
										<strong>Ups!</strong> <% error %>.
									</div>

									<form ng-submit="enviaContacto()" class="contact2-page-form col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad contact-v1">


			                        	<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 control-group">
			                        		<input type="text" class="contact2-textbox" ng-model="datos.nombres" placeholder="Nombre" required/>
			                            </div>

										<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 control-group">
											<input type="text" class="contact2-textbox" ng-model="datos.apellidos" placeholder="Apellidos" />
			                            </div>

										<div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 control-group">
											<input type="text" class="contact2-textbox" ng-model="datos.telefono" placeholder="Telefono" />
			                            </div>

			                            <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 control-group">
			                            	<input type="text" class="contact2-textbox" ng-model="datos.correo" placeholder="Correo" required />
			                            </div>

			                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			                            	<textarea class="contact2-textarea" placeholder="Comentarios" ng-model="datos.comentarios" name="message" id="message" required></textarea>
			                            </div>

			                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

				                            <section class="color-7">
                                      <button type="button" class="btn btn-danger btn-disabled btn-xs avisoSwitch btn-block" style="color: #fff !important;">
                                        Sin conexión <i class="fa fa-spinner fa-spin"></i>
                                      </button>
				                				<button class="icon-mail btn2-st2 btn-7 btn-7b elementSwitch" id="botonContacto" data-loading-text="Enviando..." type="submit">Enviar</button>
				                			</section>
				                		</div>

									</form>


		                		</div>

		                    </div>

		                </div>

		            </div>
	            </div>
			</div>
			<br>
			<br>
			<br>

	    </div>

    </div>


@stop
