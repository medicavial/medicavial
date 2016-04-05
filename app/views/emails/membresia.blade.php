<!DOCTYPE html>

<html lang="es-MX">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<br>
       	<table  width='1000' style="border:1px;" align="center">
       	<tr>
       	<td align="center">
        <table  width='800' style="font-size:20px">
            <tr>
                <td align="center" width=400>
                <p  align="justify" style="color:#636465;font-size;20px">
                    Tu <b>Membresía Familiar MédicaVial</b> está lista. Para hacer uso de ella ya solo resta activarla, para ello solo tienes que acudir a cualquiera de nuestras clínicas a recibir atención médica u oprimir el siguiente enlace.<br><br>
                    <a href="www.medicavial.com/activacion/{{ $id }}">Activar membresía</a>         
                </p>
                </td>
            </tr>
            <tr>
                
                <td align="center" width="400">
                    <br>
                    <img src="{{ $message->embed( $imagen1 ) }}" width='400'><br>
                    {{ $folio }} - MFO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                     {{ $nombre }}<br>
                    <img src="{{ $message->embed( $imagen2 ) }}" width='400'><br>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $anio }} <br>
                    <img src="{{ $message->embed( $imagen3 ) }}" width='400'><br><br><br>
                    <img src="{{ $message->embed( $imagen4 ) }}" width='500'><br>
                    <img src="{{ $message->embed( $imagen5 ) }}" width='500'><br><br>

                	<b>TERMINOS Y CONDICIONES.</b><br><br>
                	<p align="justify"  style="font-size:14px; color:#636465">
                    	Esta membresía – salvo que haya sido cancelada por el otorgante MEDICAVIAL o la operadora de este servicio ORTHOFAM, S.A. DE C.V. – acreditan al tarjetahabiente y sus familiares directos, con descuentos permanentes en todas las instalaciones propiedad de MEDICAVIAL. Para dudas o comentarios relativos a su MEMBRESIA FAMILIAR MEDICAVIAL, favor de comunicarse a nuestros centros de atención de clientes al 01-800-3 MEDICA (633422) o a www.medicavial.com  . Favor de presentar su tarjeta MEMBRESIA FAMILIAR MEDICAVIAL  o el número de la misma, en la recepción de MEDICAVIAL antes de recibir tratamiento médico. Esto le generará el descuento pactado en los paquetes y ventas por suministro antes de que se genere su factura. La asistencia Médica Telefónica y/o por chat y/o por medios electrónicos es únicamente una orientación m&acute;dica y no se emite diagnóstico remotamente. Esta MEMBRESIA FAMILIAR MEDICAVIAL es única y los descuentos permanentes y beneficios, no son acumulables con el tiempo ni con otras promociones. Los descuentos de la MEMBRESIA FAMILIAR MEDICAVIAL no aplican en paquetes, promociones, servicios, ni artículos previamente rebajados. MEDICAVIAL SA DE CV Especialistas en Huesos y articulaciones, atiende únicamente emergencias menores o padecimientos de ortopedia y traumatologiacute;a que no pongan en riesgo la vida ni la función de las personas. No se atienden emergencias mayores ni otras especialidades médicas. Para conocer las condiciones generales completas, beneficios y exclusiones de la MEMBRESIA FAMILIAR MEDICAVIAL, as&iacute; como para conocer el aviso de privacidad de MEDICAVIAL y la operadora de membresía ORTHOFAM, SA DE CV, favor de consultar estas condiciones en el sitio www.medicavial.com . 
                	</p>
                </td>
            </tr>                                    
            
        </table>
        </td>
        </tr>
        </table>
	</body>
</html>