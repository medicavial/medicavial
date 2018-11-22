<footer id="footer">
	<div class="container">
		<div class="row">
				<!--Foot widget-->
				<div class="col-xs-12 col-sm-6 col-md-4 foot-widget">
				  <a href="{{ URL::route('inicio') }}"><div class="foot-logo col-xs-12 no-pad"></div></a>
				  <address class="foot-address">
				  	<div class="col-xs-12 no-pad gris"><i class="icon-globe address-icons"></i>MédicaVial (Corporativo) <br />Av. Alvaro Obregon 151 Piso 9 <br />Col. Roma Norte, 06700</div>
				    <div class="col-xs-12 no-pad gris"><i class="icon-phone2 address-icons"></i><a href="tel:018003633422" class="link-tel gris">01 800 3 MEDICA(633422)</a></div>
				    <div class="col-xs-12 no-pad gris"><i class="icon-mail address-icons"></i> <a href="mailto:contacto@medicavial.com.mx" class="link-tel gris">contacto@medicavial.com.mx</a> </div>
				  </address>
			 	</div>

				<!--Foot widget-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="recent-tweet-foot foot-widget">
						<div class="foot-widget-title">Responsable:</div>
						<address class="foot-address">
							<div class="col-xs-12 no-pad"><i class="fa fa-caret-right" aria-hidden="true"></i> Dr. Sergio Cisneros Mora <br> &nbsp;&nbsp;(U.N.A.M.) Ced. 5461210.</div>
							<div class="col-xs-12 no-pad"><i class="fa fa-caret-right" aria-hidden="true"></i> Aut. Cof. 153300201A3138</div>
						</address>
					</div>

					<div class="recent-post-foot foot-widget">
						<div class="foot-widget-title">Empresa</div>
						<address class="foot-address">
							<div class="col-xs-12 no-pad gris"><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ URL::route('inicio') }}" class="gris">Bolsa de trabajo</a></div>
							<div class="col-xs-12 no-pad gris"><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="images/avisoPrivacidad.pdf" target="_blank" class="gris">Aviso de privacidad</a></div>
							<!-- <div class="col-xs-12 no-pad"><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ URL::route('inicio') }}" class="link-tel gris">Preguntas frecuentes</a></div> -->
						</address>
					</div>
					</div>

	      <!--Foot widget-->
	      <div class="col-xs-12 col-sm-6 col-md-4 foot-widget">
	      	<div class="foot-widget-title">Suscribete</div>
	      	<p>Enterate de nuestras promociones antes que nadie.</p>
          <div class="news-subscribe"><input type="text" class="news-tb" placeholder="Correo" />
          	<button class="news-button" disabled>Suscribirme</button>
          </div>
          <div class="foot-widget-title">Redes Sociales</div>
          <div class="social-wrap">
              <ul>
              <li><a href="https://www.facebook.com/medicavial"><i class="icon-facebook foot-social-icon" id="face-foot" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a></li>
              <li><a href="https://twitter.com/MedicaVial"><i class="icon-social-twitter foot-social-icon" id="tweet-foot" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a></li>
              <!-- <li><a href="#"><i class="icon-google-plus foot-social-icon" id="gplus-foot" data-toggle="tooltip" data-placement="bottom" title="Google+"></i></a></li>
              <li><a href="#"><i class="icon-linkedin foot-social-icon" id="link-foot" data-toggle="tooltip" data-placement="bottom" title="Linked in"></i></a></li>
              <li><a href="#"><i class="icon-rss foot-social-icon" id="rss-foot" data-toggle="tooltip" data-placement="bottom" title="RSS"></i></a></li> -->
              </ul>
          </div>
	      </div>
		</div>
	</div>
</footer>

<div class="bottom-footer">
	<div class="container">
	  <div class="row">
	    <!--Foot widget-->
	    <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom">
	      <p class="col-xs-12 col-md-5 no-pad">
					Todos los derechos reservados &copy; MédicaVial 2016 - {{ date('Y') }}
					<br>
					<small class="gris">
						Desarrollado por <a href="mailto:salcala@medicavial.com.mx" class="link-dev">Ing. Sergio Alcalá</a> | <a href="http://sramirez.hol.es" target="_blank" class="link-dev">Ing. Samuel Ramírez</a>
					</small>
				</p>
	      <ul class="foot-menu col-xs-12 col-md-7 no-pad">
	        <li><a href="http://facturacion.medicavial.com.mx/" target="_blank">Facturación</a></li>
	        <li><a href="https://medicavial.wordpress.com/" target="_blank">Blog</a></li>
	        <li><a href="{{ URL::route('nosotros') }}">Quienes Somos</a></li>
	        <li><a href="{{ URL::route('contacto') }}">Contacto</a></li>
	        <li><a href="{{ URL::route('inicio') }}">Inicio</a></li>
	      </ul>
	    </div>
	  </div>
	</div>
</div>
