@extends('layouts.default')

@section('titulo')
    MédicaVial
@stop

@section('descripcion')
    Especialistas en huesos y articulaciones.
@stop

@section('enlace')
    {{ URL::route('inicio') }}
@stop

@section('imgEnlace')
    {{ asset('images/og-images/inicio.jpg') }}
@stop


@section('content')
	<div class="container full-width-container ihome-banner">
		<div class="banner col-sm-12 col-xs-12 col-md-12">

	        <ul>
				<!-- memebresia -->
	        	<li data-transition="papercut" data-slotamount="7">

	                <!-- MAIN IMAGE -->
	                <img src="images/new-slider/s1-bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
	                <!-- LAYERS -->
	                <!-- LAYER NR. 1 -->
	                <div class="tp-caption lfb skewtoright imed-sl1"
	                    data-x="left"
	                    data-y="22"
	                    data-hoffset="0"
	                    data-speed="1000"
	                    data-start="1000"
	                    data-easing="Power4.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    ><img src="images/new-slider/membresia.png" alt="" class="img-responsive">
	                </div>

	                <!-- LAYER NR. 5 -->
	                <div class="tp-caption bluebg-t1 sfr skewtoright imed-sl1 hidden-xs"
	                    data-x="600"
	                    data-y="115"
	                    data-hoffset="-60"
	                    data-speed="1000"
	                    data-start="1300"
	                    data-easing="Back.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    >La Recuperación de tu Salud,<br> Es nuestra prioridad
	                </div>

	                <!-- LAYER NR. 6 -->
	                <div class="tp-caption bluebg-t2 sfr skewtoright imed-sl1 amarillo hidden-xs"
	                    data-x="600"
	                    data-y="222"
	                    data-hoffset="-10"
	                    data-speed="1000"
	                    data-start="1800"
	                    data-easing="Back.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    >Nuestra Membresía es para ti
	                </div>

	                <!-- LAYER NR. 8 -->
	                <div class="tp-caption s1-but customin skewtoright imed-sl1"
	                    data-x="600"
	                    data-y="305"
	                    data-hoffset="205"
	                    data-speed="1000"
	                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
	                    data-start="2600"
	                    data-easing="Back.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn">
                    <!-- <a href="{{ URL::route('membresia') }}">Obtener Membresía</a> -->
                  </div>

	            </li>

	            <!-- lider -->
	        	<li data-transition="papercut" data-slotamount="7">

	                <!-- MAIN IMAGE -->
	                <img src="images/new-slider/s2-bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
	                <!-- LAYERS -->
	                <!-- LAYER NR. 1 -->
	                <div class="tp-caption lfb stl imed-sl1"
	                    data-x="left"
	                    data-y="22"
	                    data-hoffset="0"
	                    data-speed="1000"
	                    data-start="1000"
	                    data-easing="Power4.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    ><img src="images/second.png" alt="" class="img-responsive">
	                </div>



	                <!-- LAYER NR. 6 -->
	                <div class="tp-caption whitebg-t1 sfr skewtoright imed-sl1 hidden-xs"
	                    data-x="600"
	                    data-y="115"
	                    data-hoffset="-60"
	                    data-speed="1500"
	                    data-start="1500"
	                    data-easing="Back.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    >¡Lider en tratamiento<br>y cuidado de lesiones!
	                </div>



	                <!-- LAYER NR. 9 -->
	                <div class="tp-caption s1-but customin skewtoright imed-sl1"
	                    data-x="600"
	                    data-y="245"
	                    data-hoffset="205"
	                    data-speed="1500"
	                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
	                    data-start="3000"
	                    data-easing="Back.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    ><a href="{{ URL::route('cita') }}">Agendar Cita</a></div>

	            </li>

	            <!-- Formatos -->
	            <li data-transition="papercut" data-slotamount="7">

                    <!-- MAIN IMAGE -->
                    <img src="images/new-slider/s1-bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <div class="tp-caption lft skewtoright imed-sl1"
                        data-x="left"
                        data-y="0"
                        data-hoffset="-95"
                        data-speed="1400"
                        data-start="1600"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s4-img11.png" alt="" class="img-responsive">
                    </div>


                    <!-- <div class="tp-caption lft skewtoright imed-sl1"
                        data-x="left"
                        data-y="250"
                        data-hoffset="0"
                        data-speed="1200"
                        data-start="1300"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s4-img10.png" alt="" class="img-responsive">
                    </div> -->



                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lft skewtoright imed-sl1"
                        data-x="left"
                        data-y="150"
                        data-hoffset="61"
                        data-speed="1600"
                        data-start="1900"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s4-img7.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption bluebg-t1 sfr skewtoright imed-sl1 hidden-xs"
                        data-x="650"
                        data-y="115"
                        data-hoffset="-60"
                        data-speed="1000"
                        data-start="2400"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        >Atenciones de Alta Calidad
                    </div>


                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption bluebg-t2 sfr skewtoright imed-sl1 amarillo hidden-xs"
                        data-x="650"
                        data-y="170"
                        data-hoffset="-10"
                        data-speed="1000"
                        data-start="2900"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        >Trabajamos para ofrecerte <br> el mejor servicio.
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption s1-but customin skewtoright imed-sl1"
                        data-x="650"
                        data-y="305"
                        data-hoffset="205"
                        data-speed="1000"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-start="3900"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><a href="{{ URL::route('clinicas') }}">Mas Info.</a></div>

                </li>

				<!-- iconos -->
                <li data-transition="papercut" data-slotamount="7">

                    <!-- MAIN IMAGE -->
                    <img src="images/new-slider/s2-bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption skewfromright stl imed-sl1"
                        data-x="left"
                        data-y="65"
                        data-hoffset="-20"
                        data-speed="1500"
                        data-start="1300"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s2-img2.png" alt="" class="img-responsive">
                    </div>


                    <!-- Primera Fila -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="143"
                        data-hoffset="493"
                        data-speed="1400"
                        data-start="1900"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic2.png" alt="" class="img-responsive">
                    </div>


                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="115"
                        data-hoffset="408"
                        data-speed="1400"
                        data-start="2200"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic1.png" alt="" class="img-responsive">
                    </div>



                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="89"
                        data-hoffset="332"
                        data-speed="1400"
                        data-start="2500"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic4.png" alt="" class="img-responsive">
                    </div>


                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="68"
                        data-hoffset="268"
                        data-speed="1400"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic5.png" alt="" class="img-responsive">
                    </div>



                    <!-- Segunda Fila -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="177"
                        data-hoffset="370"
                        data-speed="1400"
                        data-start="3700"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic7.png" alt="" class="img-responsive">
                    </div>

                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="140"
                        data-hoffset="278"
                        data-speed="1400"
                        data-start="4000"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic9.png" alt="" class="img-responsive">
                    </div>

                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="108"
                        data-hoffset="198"
                        data-speed="1400"
                        data-start="4300"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic11.png" alt="" class="img-responsive">
                    </div>


                    <!-- Tercera -->


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="240"
                        data-hoffset="294"
                        data-speed="1400"
                        data-start="5200"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic13.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="196"
                        data-hoffset="203"
                        data-speed="1400"
                        data-start="5500"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic16.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="158"
                        data-hoffset="123"
                        data-speed="1400"
                        data-start="5800"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic15.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <!-- <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="123"
                        data-hoffset="51"
                        data-speed="1400"
                        data-start="6100"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic16.png" alt="" class="img-responsive">
                    </div> -->



                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption whitebg-t1 sfr skewtoright imed-sl1 hidden-xs"
	                    data-x="600"
	                    data-y="115"
	                    data-hoffset="-60"
	                    data-speed="1000"
	                    data-start="1300"
	                    data-easing="Back.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    >Ortopedia y Traumatología
	                </div>

	                <!-- LAYER NR. 5 -->
	                <div class="tp-caption whitebg-t1 sfr skewtoright imed-sl1 hidden-xs"
	                    data-x="600"
	                    data-y="160"
	                    data-hoffset="-60"
	                    data-speed="1000"
	                    data-start="1600"
	                    data-easing="Back.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    >Rehabilitación
	                </div>

	                <!-- LAYER NR. 5 -->
	                <div class="tp-caption whitebg-t1 sfr skewtoright imed-sl1 hidden-xs"
	                    data-x="600"
	                    data-y="205"
	                    data-hoffset="-60"
	                    data-speed="1000"
	                    data-start="1900"
	                    data-easing="Back.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    >Rayos X
	                </div>


	                <!-- LAYER NR. 8 -->
	                <div class="tp-caption s1-but customin skewtoright imed-sl1"
	                    data-x="600"
	                    data-y="305"
	                    data-hoffset="205"
	                    data-speed="1000"
	                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
	                    data-start="2600"
	                    data-easing="Back.easeOut"
	                    data-endspeed="400"
	                    data-endeasing="Power1.easeIn"
	                    ><a href="{{ URL::route('membresia') }}">Servicios</a>
	                </div>


                </li>

                <!-- clinicas -->
	        	<li data-transition="papercut" data-slotamount="7">

                    <!-- MAIN IMAGE -->
                    <img src="images/new-slider/s1-bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->

                    <div class="tp-caption lft skewtoright imed-sl1"
                        data-x="left"
                        data-y="80"
                        data-hoffset="0"
                        data-speed="1400"
                        data-start="1600"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/1.png" alt="" class="img-responsive">
                    </div>

                    <div class="tp-caption lft skewtoright imed-sl1"
                        data-x="left"
                        data-y="0"
                        data-hoffset="-130"
                        data-speed="1200"
                        data-start="1300"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/324hrs.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->


                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption bluebg-t1 sfr skewtoright imed-sl1 hidden-xs"
                        data-x="615"
                        data-y="115"
                        data-hoffset="-60"
                        data-speed="1000"
                        data-start="2400"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        >Clinicas MédicaVial
                    </div>


                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption bluebg-t2 sfr skewtoright imed-sl1 amarillo hidden-xs"
                        data-x="615"
                        data-y="180"
                        data-hoffset="-10"
                        data-speed="1000"
                        data-start="2900"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        >Nuestra red médica <br> Siempre cerca de ti.
                    </div>


                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption bluebg-t3 sfr skewtoright imed-sl1 hidden-xs"
                        data-x="615"
                        data-y="280"
                        data-hoffset="-60"
                        data-speed="1000"
                        data-start="3400"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        >Interlomas, Roma Condesa, Perisur, Satélite, Monterrey<br> Puebla, Chihuahua, Veracruz, Mérida, San Luis.</div>


                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption s1-but customin skewtoright imed-sl1"
                        data-x="615"
                        data-y="365"
                        data-hoffset="205"
                        data-speed="1000"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-start="3900"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><a href="{{ URL::route('clinicas') }}">Nuestras Clínicas</a>
                    </div>


                </li>

	        </ul>

	    </div>
	</div>

	<!--Icon Boxes 1-->
    <div class="container">
    	<div class="row">
	    	<div class="no-pad icon-boxes-1">

          <!--Icon-box-start-->
          <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
  					<div class="icon-box-3 wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="150">
  						<div class="icon-boxwrap2"><i data-icon="\e609" class="icon-hospital2 icon-box-back2"></i></div>
  						<div class="icon-box2-title">Nuestras Clínicas</div>
  						<p>Servicio 24 Hrs.</p>
  						<div class="iconbox-readmore"><a href="{{ URL::route('clinicas') }}">Más Info.</a></div>
  					</div>
          </div>

          <!--Icon-box-start-->
          <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
  					<div class="icon-box-3 wow fadeInUp" data-wow-delay="0.9s" data-wow-offset="150">
  						<div class="icon-boxwrap2"><i class="icon-heart icon-box-back2"></i></div>
  						<div class="icon-box2-title">Una Vida Saludable</div>
  						<p>Consejos, tips y más</p>
  						<div class="iconbox-readmore"><a href="https://medicavial.wordpress.com/">Ir al Blog.</a></div>
  					</div>
          </div>

          <!--Icon-box-start-->
          <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
  					<div class="icon-box-3 wow fadeInUp" data-wow-delay="1.2s" data-wow-offset="150">
  						<div class="icon-boxwrap2"><i class="icon-stethoscope icon-box-back2"></i></div>
  						<div class="icon-box2-title">Nuestros Médicos</div>
  						<p>Médicos especialistas certificados.</p>
  						<div class="iconbox-readmore"><a href="{{ URL::route('doctores') }}">Más Info.</a></div>
  					</div>
          </div>

          <!--Icon-box-start-->
          <!-- HORARIOS -->
          <!-- <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
  					<div class="icon-box-3 notViewed wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="150">
  						<div class="icon-boxwrap2"><i class="fa fa-clock-o icon-box-back2"></i></div>
  						<div class="icon-box2-title">Nuestros Paquetes</div>
  						<ul>
  							<li>Monday - Friday <span class="ibox-right-span">8.00  - 18.00</span></li>
  							<li>Saturday <span class="ibox-right-span">8.00  - 16.00</span></li>
  							<li>Sunday <span class="ibox-right-span">8.00 - 13.00</span></li>
  						</ul>
  					</div>
          </div> -->

          <!--Icon-box-start-->
          <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
    				<div class="icon-box-3 wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="150">
    					<div class="icon-boxwrap2"><i class="fa fa-medkit icon-box-back2"></i></div>
    					<div class="icon-box2-title">Nuestros Paquetes</div>
    					<p>Al servicio de tu salud.</p>
    					<div class="iconbox-readmore"><a href="{{ URL::route('nosotros') }}">Más Info.</a></div>
    				</div>
          </div>
        </div>
      </div>
    </div>

    <div class="servicios full-width-container">
      <div class="container">
        <div class="espacio"></div>
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <h2 class="amarillo"><strong>NUESTROS SERVICIOS</strong> </h2>
            <div class="espacio"></div>
          </div>

          <div class="col-xs-12 col-sm-6">
            <ul class="fa-ul">
              <li class="wow fadeIn" data-wow-delay="0.1s" data-wow-offset="10"><i class="fa-li fa fa-angle-right fa-sm"></i>Consulta Médica</li>
              <li class="wow fadeIn" data-wow-delay="0.3s" data-wow-offset="10"><i class="fa-li fa fa-angle-right fa-sm"></i>Rayos X</li>
              <li class="wow fadeIn" data-wow-delay="0.5s" data-wow-offset="10"><i class="fa-li fa fa-angle-right fa-sm"></i>Procedimientos Médicos</li>
              <li class="wow fadeIn" data-wow-delay="0.7s" data-wow-offset="10"><i class="fa-li fa fa-angle-right fa-sm"></i>Paquetes de Rehabilitación</li>
            </ul>
          </div>

          <div class="col-xs-12 col-sm-6">
            <div class="btn-container text-center align-middle">
              <div class="s1-but wow bounceIn" data-wow-delay="0.9s" data-wow-offset="10">
                <a href="{{ URL::route('cita') }}">Agenda tu cita</a>
              </div>
            </div>
          </div>
        </div>

        <div class="espacio-lg"></div>
      </div>
    </div>

    <div class="somos full-width-container">
      <div class="container">
        <div class="espacio"></div>
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4 wow fadeIn" data-wow-delay="0.5s" data-wow-offset="10">
            <h3 class="azul text-center">Servicios de Ortopedia y Traumatologia</h3>
            <ul class="fa-ul">
              <li><i class="fa-li fa fa-check fa-sm"></i>Dolor de espalda, hombros y cuello</li>
              <li><i class="fa-li fa fa-check fa-sm"></i>Padecimiento de rodillas, manos y muñecas</li>
              <li><i class="fa-li fa fa-check fa-sm"></i>Correción de pie plano</li>
              <li><i class="fa-li fa fa-check fa-sm"></i>Lesiones deportivas</li>
              <li><i class="fa-li fa fa-check fa-sm"></i>Desgarres</li>
            </ul>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4 wow fadeIn" data-wow-delay="0.7s" data-wow-offset="10">
            <h3 class="azul text-center">Servicios de Rehabilitación y Terapia Física</h3>
            <ul class="fa-ul">
              <li><i class="fa-li fa fa-check fa-sm"></i>Recuperación de lesiones</li>
              <li><i class="fa-li fa fa-check fa-sm"></i>Adultos mayores</li>
              <li><i class="fa-li fa fa-check fa-sm"></i>Deportistas</li>
              <li><i class="fa-li fa fa-check fa-sm"></i>Lesiones de oficina</li>
              <li><i class="fa-li fa fa-check fa-sm"></i>Neurológica</li>
              <li><i class="fa-li fa fa-check fa-sm"></i>Postquirúrgica</li>
            </ul>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4 wow fadeIn" data-wow-delay="0.9s" data-wow-offset="10">
            <h3 class="azul text-center">Rayos X <br><span>&nbsp;</span> </h3>
            <ul class="fa-ul">
              <li><i class="fa-li fa fa-check fa-sm"></i>Entrega de radiografías en formato impreso o dígital</li>
            </ul>
          </div>

          <div class="col-sm-12 text-right wow fadeIn" data-wow-delay="1.0s" data-wow-offset="10">
            <hr>
            <small>*ATENCIÓN INMEDIATA POR UN ESPECIALISTA</small>
          </div>
        </div>

        <div class="espacio"></div>
      </div>
    </div>

    <div class="container wow bounceIn" data-wow-delay="1.3s" data-wow-offset="10">
      <div class="espacio"></div>
      <div class="row">
        <div class="col-xs-12 text-center">
          <h2 class="azul"><strong>SOMOS ESPECIALISTAS EN HUESOS Y ARTICULACIONES</strong></h2>
        </div>
      </div>
      <div class="espacio"></div>
    </div>

    <!-- <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 pull-left subtitle ibg-transparent">Nuestros Servicios</div>
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 price-table-wrap pull-left">

          <div class="col-md-3 col-sm-6 col-xs-12 no-pad">
            <div class="price-table completo wow bounceIn iprice-no-right-border" data-wow-delay="0.5s" data-wow-offset="10" id="priceTab1"
                  onmouseover="entraPrice(1)" onmouseout="salePrice(1)">
              <div class="price-figure"><i class="fa fa-check" aria-hidden="true"></i></div>
              <div class="price-plan"><div class="price-plan-title">Consulta<br>Médica</div></div>
              <ul>
                <li class="dark-bg">Consulta</li>
                <li>Diagnostico</li>
                <li class="dark-bg">2 Radiografias</li>
                <li>aplicación de medicamento</li>
                <li><a href="./cita">Agenda tu cita</a> </li>
                <li><a href="#"><div class="learn-more">Saber Más</div></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 no-pad">
            <div class="price-table completo wow bounceIn" data-wow-delay="1.0s" data-wow-offset="10" id="priceTab2"
                  onmouseover="entraPrice(2)" onmouseout="salePrice(2)">
              <div class="price-figure"><i class="fa fa-check" aria-hidden="true"></i></div>
              <div class="price-plan"><div class="price-plan-title">Rayos<br>X</div></div>
              <ul>
                <li class="dark-bg">Consulta</li>
                <li>Diagnostico</li>
                <li class="dark-bg">3 radiografias</li>
                <li>aplicación de medicamento</li>
                <li><a href="./cita">Agenda tu cita</a> </li>
                <li><a href="#"><div class="learn-more">Saber Más</div></a></li>
              </ul>
            </div>
          </div>

         <div class="col-md-3 col-sm-6 col-xs-12 no-pad">
           <div class="price-table completo wow bounceIn" data-wow-delay="1.0s" data-wow-offset="10" id="priceTab3"
                onmouseover="entraPrice(3)" onmouseout="salePrice(3)">
           <div class="price-figure"><i class="fa fa-check" aria-hidden="true"></i></div>
           <div class="price-plan"><div class="price-plan-title">Procedimientos<br>Médicos</div></div>
           <ul>
             <li class="dark-bg">Consulta</li>
             <li>Diagnostico</li>
             <li class="dark-bg">3 radiografias</li>
             <li>aplicación de medicamento</li>
             <li><a href="./cita">Agenda tu cita</a> </li>
             <li><a href="#"><div class="learn-more">Saber Más</div></a></li>
           </ul>
           </div>
         </div>

    	    <div class="col-md-3 col-sm-6 col-xs-12 no-pad">
            <div class="price-table completo wow bounceIn iprice-no-right-border" data-wow-delay="1.0s" data-wow-offset="10" id="priceTab4"
                  onmouseover="entraPrice(4)" onmouseout="salePrice(4)">
            <div class="price-figure"><i class="fa fa-check" aria-hidden="true"></i></div>
            <div class="price-plan"><div class="price-plan-title">Paquetes de<br>Rehabilitación</div></div>
            <ul>
              <li class="dark-bg">5 sesiones</li>
              <li>Diagnostico</li>
              <li class="dark-bg">2 Radiografias</li>
              <li>aplicación de medicamento</li>
              <li><a href="./cita">Agenda tu cita</a> </li>
              <li><a href=""><div class="learn-more" data-toggle="modal" data-target="#modalRh">Saber Más</div></a></li>
            </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-lg-4 col-xs-12 no-pad">
            <div class="price-table wow fadeInDown iprice-no-right-border" data-wow-delay="0.5s" data-wow-offset="10">
              <div class="price-figure">$2,500<div class="price-semi-circle"></div></div>
              <div class="price-plan"><div class="price-plan-title">Sesiones Rehabilitacón</div></div>
              <ul>
                <li class="dark-bg">5 sesiones</li>
                <li><a href="#"><div class="learn-more">Saber Más</div></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Modal -->
    <div class="modal fade" id="modalRh" tabindex="2" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tipos de Rehabilitación</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <h5><i class="fa fa-check azul" aria-hidden="true"></i> ULTRASONIDO TERAPÉUTICO</h5>
                <h5><i class="fa fa-check azul" aria-hidden="true"></i> LÁSER TERAPÉUTICO</h5>
                <h5><i class="fa fa-check azul" aria-hidden="true"></i> LUZ INFRAROJA</h5>
                <h5><i class="fa fa-check azul" aria-hidden="true"></i> APLICACIÓN DE PARAFINA</h5>
                <h5><i class="fa fa-check azul" aria-hidden="true"></i> TRACCIÓN CERVICAL</h5>
                <h5><i class="fa fa-check azul" aria-hidden="true"></i> MASOTERAPIA</h5>
                <h5><i class="fa fa-check azul" aria-hidden="true"></i> HIDROTERAPIA LOCALIZADA</h5>
                <h5><i class="fa fa-check azul" aria-hidden="true"></i> ELECTROESTIMULACIÓN</h5>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
@stop
