@extends('layouts.default')

@section('titulo')
    MédicaVial - Nuestras Clinicas
@stop

@section('descripcion')
    Conoce nuestras clínicas.
@stop

@section('enlace')
    {{ URL::route('clinicas') }}
@stop

@section('imgEnlace')
    {{ asset('images/og-images/clinicas.jpg') }}
@stop


@section('content')

	<div id="contact-version-two">
      <!--Mid Content Start-->
	    <div class="about-intro-wrap pull-left">

		    <div class="bread-crumb-wrap ibc-wrap-4">
		    	<div class="container">
		         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
		            	<div class="bread-heading"><h1>Nuestras Clinicas</h1></div>
		          </div>
		        </div>
		    </div>

		    <div class="container">
	            <!--About-us top-content-->
	        	<div class="col-md-12 col-xs-12 col-sm-12 pull-left subtitle no-pad ibg-transparent">Especialistas en Huesos y Articulaciones.</div>
	             <div class="col-xs-12 col-sm-12 col-md-12">
					        <img src="images/new-slider/24hrs.png" alt="" class="img-responsive">
	             </div>
	      </div>


			<div class="container">
				<hr>
	      <h2>Valle de México</h2>

	      <div class="col-xs-12 col-sm-12 col-md-12 pull-left doctors-3col-tabs no-pad">

					<!--Doc intro-->
					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">
  						<div class="zoom-wrap">
  							<div class="zoom-icon"></div>
  							<img alt="" class="img-responsive" src="images/clinicas/interlomas.jpg" />
  						</div>
  						<div class="doc-name">

							<div class="doc-name-class pull-left">INTERLOMAS</div>
							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapseExample" aria-controls="collapseExample">Mas Info</button>
							<br>
							<div class="collapse" id="collapseExample">
								<hr>
							  Calle de la Amargura #60 <br>
								Col. Lomas de la Herradura (a espaldas de Magnocentro) <br>
								(55) 5290 5657 y 5290 4800 <br>
								Responsable Sanitario: <br>
								Dr. Eduardo Laguna Sanchez <br>
								Cédula: 4964225 U.A.E.M.
								<br>
								<div class="purchase-strip-blue dept-apponit-butt medium-but-animation pull-right">
									<section class="color-4">
                    <p class="ipurchase-paragraph">
                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
                    </p>
	                </section>
	              </div>
							</div>
						</div>
					</div>

					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

  						<div class="zoom-wrap">
  							<div class="zoom-icon"></div>
  							<img alt="" class="img-responsive" src="images/clinicas/satelite.jpg" />
  						</div>
  						<div class="doc-name">
  							<div class="doc-name-class pull-left">SATÉLITE</div>
  							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapse2Example" aria-expanded="true" aria-controls="collapse2Example">Mas Info</button>
  							<br>
  							<div class="collapse" id="collapse2Example">
  								<hr>
  							  Pafnuncio Padilla, No. 17 Piso 3, <br>
  								Ciudad Satélite, Edo. Mex. <br>
  								Tels. 5562 0010 y 5562 2255 <br>
  								Responsable Sanitario: <br>
  								Dr. Salomón Jerónimo Campos Romano <br>
  								Cédula: 3872369 U.N.A.M.
  								<br>
  								<div class="purchase-strip-blue dept-apponit-butt small-but-animation pull-right">
  									<section class="color-4">
                      <p class="ipurchase-paragraph">
                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
                      </p>
                    </section>
  	              </div>
  							</div>

						</div>
					</div>

					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

						<div class="zoom-wrap">
							<div class="zoom-icon"></div>
							<img alt="" class="img-responsive" src="images/clinicas/perisur.jpg" />
						</div>
						<div class="doc-name">

							<div class="doc-name-class pull-left">PERISUR</div>
							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapse3Example" aria-expanded="true" aria-controls="collapse3Example">Mas Info</button>
							<br>
							<div class="collapse" id="collapse3Example">
								<hr>
							    Periférico Sur No. 4829 Piso 6, <br>
								Col. Parques del Pedregal, D.F. (Torre Jade, <br>
								frente a Perisur) <br>
								Tels. 5171 3030 y 5171 0002 <br>
								Responsable Sanitario: <br>
								Dr. Sergio Cisneros Mora <br>
								Cédula: 5461210 U.N.A.M.
								<br>
								<div class="purchase-strip-blue dept-apponit-butt medium-but-animation pull-right">
									<section class="color-4">
	                                    <p class="ipurchase-paragraph">
	                                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
	                                    </p>
	                                </section>
	                            </div>
							</div>

						</div>
					</div>

					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

						<div class="zoom-wrap">
							<div class="zoom-icon"></div>
							<img alt="" class="img-responsive" src="images/clinicas/roma.jpg" />
						</div>
						<div class="doc-name">

							<div class="doc-name-class pull-left">COL. ROMA</div>
							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapse4Example" aria-expanded="true" aria-controls="collapse4Example">Mas Info</button>
							<br>
							<div class="collapse" id="collapse4Example">
								<hr>
							    Av. Álvaro Obregón No. 121 Piso 10, <br>
								Col. Roma, D.F. <br>
								Tels. 5533 2400 y 5533 2401 <br>
								Responsable Sanitario: <br>
								Dr. Sergio Cisneros Mora <br>
								Cédula: 5461210 U.N.A.M.
								<br>
								<div class="purchase-strip-blue dept-apponit-butt medium-but-animation pull-right">
									<section class="color-4">
	                                    <p class="ipurchase-paragraph">
	                                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
	                                    </p>
	                                </section>
	                            </div>
							</div>

						</div>
					</div>

	            </div>

	            <hr>

	            <h2>Interior de la República</h2>

	            <div class="col-xs-12 col-sm-12 col-md-12 pull-left doctors-3col-tabs no-pad">

					<!--Doc intro-->
					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

						<div class="zoom-wrap">
							<div class="zoom-icon"></div>
							<img alt="" class="img-responsive" src="images/clinicas/monterrey.jpg" />
						</div>
						<div class="doc-name">

							<div class="doc-name-class pull-left">MONTERREY</div>
							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapse5Example" aria-controls="collapse5Example">Mas Info</button>
							<br>
							<div class="collapse" id="collapse5Example">
								<hr>
							    Av. Terranova No. 331 Piso 2, <br>
								Esq. Gonzalitos, Col. Leones. <br>
								Tels. (81) 8348 4591 y (81) 8348 4589 <br>
								Responsable Sanitario: <br>
								Dr. Juan Alejandro Treviño Bernal <br>
								Cédula: 5578777 U.A.N.L.
								<br>
								<div class="purchase-strip-blue dept-apponit-butt medium-but-animation pull-right">
									<section class="color-4">
	                                    <p class="ipurchase-paragraph">
	                                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
	                                    </p>
	                                </section>
	                            </div>
							</div>

						</div>
					</div>

					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

						<div class="zoom-wrap">
							<div class="zoom-icon"></div>
							<img alt="" class="img-responsive" src="images/clinicas/puebla.jpg" />
						</div>
						<div class="doc-name">

							<div class="doc-name-class pull-left">PUEBLA</div>
							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapse6Example" aria-expanded="true" aria-controls="collapse6Example">Mas Info</button>
							<br>
							<div class="collapse" id="collapse6Example">
								<hr>
								Av. Juárez No. 2318 Piso 3, <br>
								Col. La Paz. <br>
								Tel. (222) 248 9000 <br>
								Responsable Sanitario: <br>
								Dr. Victor Rosas Garcia <br>
								Cédula: 5988453 B.U.A.P.
								<br>
								<div class="purchase-strip-blue dept-apponit-butt medium-but-animation pull-right">
									<section class="color-4">
	                                    <p class="ipurchase-paragraph">
	                                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
	                                    </p>
	                                </section>
	                            </div>
							</div>

						</div>
					</div>

					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

						<div class="zoom-wrap">
							<div class="zoom-icon"></div>
							<img alt="" class="img-responsive" src="images/clinicas/merida.jpg" />
						</div>
						<div class="doc-name">

							<div class="doc-name-class pull-left">MÉRIDA</div>
							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapse7Example" aria-expanded="true" aria-controls="collapse7Example">Mas Info</button>
							<br>
							<div class="collapse" id="collapse7Example">
								<hr>
								Prolongación Paseo de Montejo <br>
								(entre calle 21 y monumento a la Patria),Col. Itzimna <br>
								Tels. (999) 927 5875 y (999) 927 5885 <br>
								Responsable Sanitario: <br>
								Dr. Miguel Alejandro del Pilar Aguilar Ramos <br>
								Cédula: 8101086 U.A.D.Y.
								<br>
								<div class="purchase-strip-blue dept-apponit-butt medium-but-animation pull-right">
									<section class="color-4">
	                                    <p class="ipurchase-paragraph">
	                                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
	                                    </p>
	                                </section>
	                            </div>
							</div>

						</div>
					</div>

					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

						<div class="zoom-wrap">
							<div class="zoom-icon"></div>
							<img alt="" class="img-responsive" src="images/clinicas/sanluis.jpg" />
						</div>
						<div class="doc-name">

							<div class="doc-name-class pull-left">SAN LUIS</div>
							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapse8Example" aria-expanded="true" aria-controls="collapse8Example">Mas Info</button>
							<br>
							<div class="collapse" id="collapse8Example">
								<hr>
								Av. Calle Mariano Arista No. 1090 Piso 2, <br>
								(frente al parque "Tequis"),Col. Barrio Tequisquiapan <br>
								Tels. (444) 817 1008 y (444) 817 2446 <br>
								Responsable Sanitario: <br>
								Dr. Cristobal Duron Ovalle <br>
								Cédula: AEIE-35068 U.A.N.L.
								<br>
								<div class="purchase-strip-blue dept-apponit-butt medium-but-animation pull-right">
									<section class="color-4">
	                                    <p class="ipurchase-paragraph">
	                                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
	                                    </p>
	                                </section>
	                            </div>
							</div>

						</div>
					</div>

					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

						<div class="zoom-wrap">
							<div class="zoom-icon"></div>
							<img alt="" class="img-responsive" src="images/clinicas/chihuahua.jpg" />
						</div>
						<div class="doc-name">

							<div class="doc-name-class pull-left">CHIHUAHUA</div>
							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapse9Example" aria-expanded="true" aria-controls="collapse9Example">Mas Info</button>
							<br>
							<div class="collapse" id="collapse9Example">
								<hr>
								Paseo Bolivar No. 206, <br>
								Col. Centro (frente a Quinta Gameros), <br>
								Tels. (614) 410 1142 y (614) 410 2201 <br>
								Responsable Sanitario: <br>
								Dr. Manuel Alejandro Serrano Enríquez <br>
								Cédula: 8475426 U.A.C.H.
								<br>
								<div class="purchase-strip-blue dept-apponit-butt medium-but-animation pull-right">
									<section class="color-4">
	                                    <p class="ipurchase-paragraph">
	                                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
	                                    </p>
	                                </section>
	                            </div>
							</div>

						</div>
					</div>

					<div class="doctor-box col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

						<div class="zoom-wrap">
							<div class="zoom-icon"></div>
							<img alt="" class="img-responsive" src="images/clinicas/veracruz.jpg" />
						</div>
						<div class="doc-name">

							<div class="doc-name-class pull-left">VERACRUZ</div>
							<button class="dept-details-butt tiny-but pull-right" data-toggle="collapse" data-target="#collapse10Example" aria-expanded="true" aria-controls="collapse10Example">Mas Info</button>
							<br>
							<div class="collapse" id="collapse10Example">
								<hr>
								Blvd. Adolfo Ruíz Cortines No. 4000, <br>
								Col. Mocambo (dentro de plaza Vela), <br>
								Tels. (229) 130 7583 y (229) 179 2289 <br>
								Responsable Sanitario: <br>
								Dra. Karla Elena Gutierrez Enríquez <br>
								Cédula: 7541576 U.N.A.M.
								<br>
								<div class="purchase-strip-blue dept-apponit-butt medium-but-animation pull-right">
									<section class="color-4">
	                                    <p class="ipurchase-paragraph">
	                                        <a class="icon-calendar btn btn-4 btn-4a notViewed" href="{{ URL::route('cita') }}">Agendar Cita</a>
	                                    </p>
	                                </section>
	                            </div>
							</div>

						</div>
					</div>

	            </div>

			</div>

			<div class="call-action-container">
		        <div class="container">
		            <div class="col-xs-12 col-md-12 col-sm-12 no-pad call-action-title wow pulse animated" data-wow-delay="0.5s" data-wow-offset="150">
		          		<div id="call-action-title">Instalaciones de primer nivel:</div>
		          		<br>
		            	<div class="row">
		            		<div class="col-md-6">
		            			<!-- <div class="intro-content-wrap elemnts-wrap col-xs-12 col-sm-12 col-md-12 typopraphy-elements no-pad "> -->
					                <ul class="text-left">
										<li> - Consultorios equipados</li>
										<li> - Rayos X</li>
										<li> - Enfermeria</li>
					                </ul>
					            <!-- </div> -->
		            		</div>
		            		<div class="col-md-6">
		            			<!-- <div class="intro-content-wrap elemnts-wrap col-xs-12 col-sm-12 col-md-12 typopraphy-elements no-pad "> -->
					                <ul class="text-left">
										<li> - Gimnasio de Rehabilitación</li>
										<li> - Cubìculos de fisioterapia</li>
										<li> - Salas de primer contacto</li>
					                </ul>
					            <!-- </div> -->
		            		</div>
		            	</div>
		            </div>
		        </div>
		    </div>

    	</div>
    </div>


@stop
