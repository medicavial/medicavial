@extends('layouts.default')

@section('titulo')
    MedicaVial - Contacto
@stop

@section('descripcion')
    Somos MedicaVial
@stop

@section('content')

	<div id="contact-version-two" ng-controller="membresiaCtrl" ng-init="inicio()">

	    <div class="about-intro-wrap pull-left">

		    <div class="bread-crumb-wrap ibc-wrap-4">
		    	<div class="container">
		         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
		            	<div class="bread-heading"><h1>Membresia MédicaVial</h1></div>
		            </div>
		        </div>
		    </div>

		    <div class="container">


				<div class="row">

		            <div class="intro-content-wrap col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left no-pad wow fadeInUp animated" data-wow-delay="0.6s" data-wow-offset="200">

						<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 no-pad">

							<img class="img-responsive pull-left" alt="" src="images/membresia.png"/>

						</div>


	                	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 no-pad">
	                		<h2>Obten Grandes Beneficios.</h2>

			                <ul>
				                <li><i class="fa fa-angle-right about-list-arrows"></i>Hasta 40% de descuento en todos nuestros paquetes</li>
				                <li><i class="fa fa-angle-right about-list-arrows"></i>Pudes usarla tu y tu familia.</li>
				                <li><i class="fa fa-angle-right about-list-arrows"></i>Facil de tramitar</li>
			                </ul>


	               	 	</div>

                		<!-- <a href="#tramite" class="inner-page-butt-blue">Tramitala Ahora</a> -->

	           		</div>

          		</div>

	        </div>

			<br><br>

	    <div id="tramite" class="container wow fadeInUp animated" novalidate data-wow-delay="0.6s" data-wow-offset="200">
				<h2>Trámite en linea</h2>
        <h4 class="avisoSwitch text-danger">Espera a tener conexión para realizar el trámite <i class="fa fa-spinner fa-spin"></i> </h4>
				<hr>
				<br>
				<form  name="membresiaForm" id="membresiaForm" ng-submit="crearMembresia()" novalidate>
				  <div class="row">
				    <div class="col-md-4">
				      <div class="form-group">
				        <label class="control-label" for="nombre">Nombre: </label>
				        <input type="text" class="form-control" id="nombre" name="nombre" ng-model="membresia.nombre" required>
				          <div class="validacion" role="alert" ng-if="interacted(membresiaForm.nombre)" ng-messages="membresiaForm.nombre.$error">
				            <div ng-message="required">Campo obligatorio </div>
				          </div>
				      </div>

				    </div>
				    <div class="col-md-4">
				       <div class="form-group">
				        <label class="control-label" for="apaterno">Apellido paterno: </label>
				        <input type="text" class="form-control" id="apaterno" name="apaterno" ng-model="membresia.apanterno" required>
				          <div class="validacion" role="alert" ng-if="interacted(membresiaForm.apaterno)" ng-messages="membresiaForm.apaterno.$error">
				            <div ng-message="required">Campo obligatorio </div>
				          </div>
				      </div>
				    </div>
				    <div class="col-md-4">
				      <div class="form-group">
				        <label class="control-label" for="amaterno">Apellido materno: </label>
				        <input type="text" class="form-control" id="amaterno" name="amaterno" ng-model="membresia.amaterno" required>
				          <div class="validacion" role="alert" ng-if="interacted(membresiaForm.amaterno)" ng-messages="membresiaForm.amaterno.$error">
				            <div ng-message="required">Campo obligatorio </div>
				          </div>
				      </div>
				    </div>
				  </div>
				  <div class="row">
				    <div class="col-md-4">
				       <div class="form-group">
				        <label class="control-label" for="email">Correo electrónico: </label>
				        <input type="text" class="form-control" id="email" name="email" ng-model="membresia.email" ng-pattern="/^[a-z]+[a-z0-9._]+@[a-z]+\.(gov$|gob.mx$|mx$|com.mx$|net$|com$|org$|gob$)/" required>
				        <div class="validacion" role="alert" ng-if="interacted(membresiaForm.email)" ng-messages="membresiaForm.email.$error">
				          <div ng-message="required">Campo obligatorio</div>
				          <div ng-message="pattern">email incorrecto</div>
				        </div>
				      </div>
				    </div>
				    <div class="col-md-4">
				       <div class="form-group">
				        <label class="control-label" for="telefono">Teléfono: </label>
				        <input type="text" class="form-control" id="telefono" name="telefono"  ng-model="membresia.telefono" ng-pattern="/^[0-9]{6,12}$/" required>
				        <div class="validacion" role="alert" ng-if="interacted(membresiaForm.telefono)" ng-messages="membresiaForm.telefono.$error">
				          <div ng-message="required">Campo obligatorio</div>
				          <div ng-message="pattern">valor numérico de 6 a 12 dígitos</div>
				        </div>
				      </div>
				    </div>
				    <div class="col-md-4">
				       <div class="form-group">
				        <label class="control-label" for="codPos">Código postal: </label>
				        <input  type="text" class="form-control" id="codPos" name="codPos" ng-model="membresia.codPos" ng-change="verificaCodigo()" minlength="5" maxlength="5" required>
				        <div class="validacion" role="alert" ng-if="interacted(membresiaForm.codPos)" ng-messages="membresiaForm.codPos.$error">
				          <div ng-message="required">Se requiere el valor del código postal</div>
				          <div ng-message="number">valor numérico</div>
				          <div ng-message="maxlength">no debe ser mayor a 5 digitos</div>
				          <div ng-message="minlength">no debe ser menor a 5 digitos</div>
				        </div>
				        <div class="alert alert-danger" ng-show="codigoE">código inexistente</div>
				      </div>
				    </div>
				  </div>
				  <div class="row">

				    <div class="col-md-6">
				    	<label class="control-label" for="unidad">Clinica: </label>
				    	<select class="form-control" name="unidad" ng-model="membresia.unidad" ng-options="unidad.Uni_clave as unidad.Uni_nombre for unidad in unidades" required>
							<option value="">Elije la clinica de tu preferencia</option>
						</select>
						<div class="validacion" role="alert" ng-if="interacted(membresiaForm.unidad)" ng-messages="membresiaForm.unidad.$error">
				          <div ng-message="required">Campo obligatorio</div>
				        </div>
				    </div>

				    <div class="col-md-6">
				       	<div class="form-group">
					        <label class="control-label" for="email">¿Cómo se enteró de Médicavial?: </label>
					        <textarea class="form-control" name="obs" id="obs" cols="30" rows="3" ng-model="membresia.obs"></textarea>
				      	</div>
				    </div>
				  </div>
				</form>
				<div class="row">
				  <div class="col-lg-12">
				    <div class="panel panel-default">
				      <div class="panel-heading">Si quieres que mas integrantes de tu familia gocen de estos veneficios dinos quien(es)</div>
				      <div class="panel-body">
				        <form  name="referenciasForm" id="referenciasForm" ng-submit="agregaParentezco()" novalidate>
				          <div class="row">
				          <div class="col-md-4">
				            <div class="form-group">
				              <label class="control-label" for="nombre">Nombre completo: </label>
				              <input type="text" class="form-control" id="nombreRef" name="nombreRef" ng-model="referencia.nombre" required >
				                <div class="validacion" role="alert" ng-if="interacted1(referenciasForm.nombreRef)" ng-messages="referenciasForm.nombreRef.$error">
				                  <div ng-message="required">Campo obligatorio</div>
				                </div>
				            </div>
				          </div>
				          <div class="col-md-4">
				             <div class="form-group">
				              <label class="control-label" for="apaterno">Correo Electronico: </label>
				              <input type="email" class="form-control" name="email" id="email" ng-model="referencia.email" ng-pattern="/^[a-z]+[a-z0-9._]+@[a-z]+\.(gov$|gob.mx$|mx$|com.mx$|net$|com$|org$|gob$)/" required>
				               <div class="validacion" role="alert" ng-if="interacted1(referenciasForm.email)" ng-messages="referenciasForm.email.$error">
				                  <div ng-message="required">Campo obligatorio</div>
				                  <div ng-message="pattern">email incorrecto</div>
				                </div>
				            </div>
				          </div>
				          <div class="col-md-2">
				            <div class="form-group">
				              <label class="control-label" for="telefono">Teléfono: </label>
				              <input type="text" class="form-control" name="telefono" id="telefono" ng-model="referencia.telefono" ng-pattern="/^[0-9]{6,12}$/" required>
				              <div class="validacion" role="alert" ng-if="interacted1(referenciasForm.telefono)" ng-messages="referenciasForm.telefono.$error">
				                <div ng-message="required">Campo obligatorio</div>
				                <div ng-message="pattern">valor numérico de 6 a 12 dígitos</div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-2">
				            <div class="form-group">
				              <label class="control-label" for="amaterno">Parentezco: </label>
				              <input type="text" class="form-control" name="parent" id="parent" ng-model="referencia.parentezco" required>
				               <div class="validacion" role="alert" ng-if="interacted1(referenciasForm.parent)" ng-messages="referenciasForm.parent.$error">
				                  <div ng-message="required">Campo obligatorio</div>
				                </div>
				            </div>
				          </div>
				          </div>
				          <div class="row" align="right">
				          <div class="col-md-12">
				            <div class="form-group">
				              <input type="submit" value="Agregar"   class="btn btn-default">
				            </div>
				          </div>
				          </div>
				          <div class="row" ng-show="veTabla">
				            <div class="col-md-12">
				              <div class="table-responsive">
				                 <table class="table table-striped table-bordered table-hover">
				                    <thead>
				                       <tr>
				                          <th>#</th>
				                          <th>Nombre</th>
				                          <th>Correo Electrónico</th>
				                          <th>Parentezco</th>
				                       </tr>
				                    </thead>
				                    <tbody>
				                       <tr ng-repeat="referencia in sumaReferencia">
				                          <td> <% referencia.cont %></td>
				                          <td> <% referencia.nombre %></td>
				                          <td> <% referencia.email %></td>
				                          <td> <% referencia.parentezco %></td>
				                       </tr>
				                    </tbody>
				                 </table>
				              </div>
				            </div>
				          </div>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>

        <button type="button" class="avisoSwitch inner-page-butt-blue pull-right">Sin conexión</button>
        <button type="submit" data-loading-text="Generando...." id="botonMem" ng-hide="mensajeMembresia" form="membresiaForm" class="elementSwitch inner-page-butt-blue pull-right">Solicitar membresía</button>
	        	<div class="alert alert-success" id="contactSuccess" ng-show="mensaje">
					<strong>Exito!</strong> <% mensaje %>
				</div>
	    </div>
	        <br><br>

	    </div>

    </div>


@stop
