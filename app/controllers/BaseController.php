<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    public function activacion($id){

        $membresia = Membresia::find($id);

        return View::make('pages.activacion')->with($membresia);

    }

    public function contacto(){

        $datos = Input::all();

        //Validation rules
        $reglas = array (
            'nombres' => 'required', //uncomment if you want to grab this field
            'correo' => 'required|email',  //uncomment if you want to grab this field
            'comentarios' => 'required|min:5'
        );

        $validator = Validator::make ($datos, $reglas);

        if ( $validator->passes() ){

            Mail::send('emails.comentarios', $datos, function($message) use ($datos)
            {
                //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields 
                $message->from( $datos['correo'], $datos['nombres']);
                //email 'To' field: cahnge this to emails that you want to be notified.                    
                $message->to('salcala@medicavial.com.mx', 'Sergio Alcala')->subject('Comentarios MV.com');

            });

            return 'Correo Enviado Correctamente';

        }else{
            return Response::json(array( 'mensaje' => 'Error en validación','error' => $validator->messages() ), 500); 
        }
    }

	public function cita(){

        $datos = Input::all();

        $mensajes = array(
            'correo.required' => 'El correo es obligatorio por favor',
            'correo.email'    => 'El correo no es valido',
            'nombre.required' => 'El nombre es requerido por favor',
            'fecha.required'  => 'La fecha es requerida por favor',
            'hora.required'   => 'La hora es requerida por favor',
            'lugar.required'  => 'El lugar de su cita es requerido por favor'
        );

        //Validation rules
        $reglas = array (
            'fecha' => 'required|date',
            'hora' => 'required|date',
            'nombre' => 'required', //uncomment if you want to grab this field
            'correo' => 'required|email',  //uncomment if you want to grab this field
            'lugar' => 'required'
        );

        $validator = Validator::make ($datos, $reglas,$mensajes);

        if ( $validator->passes() ){

            Mail::send('emails.cita', $datos, function($message) use ($datos)
            {
                //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields 
                $message->from( $datos['correo'], $datos['nombre']);
                //email 'To' field: cahnge this to emails that you want to be notified.                    
                $message->to('salcala@medicavial.com.mx', 'Sergio Alcala')->subject('Cita MV.com');

            });

            return 'Cita Generada Correctamente en breve recibiras un correo para que confirmes tu cita';

        }else{
            return Response::json(array('mensaje' => 'Error en validación','error' => $validator->messages()), 500); 
        }


	}

	public function membresia(){

		$idMembresia = Membresia::max('mem_id') + 1;
		$folioMembresia = Membresia::max('mem_folio') + 1;
                                            
        if($folioMembresia < '003000'){
			$folioMembresia ='003000';
        }


        //sustraer los ceros faltantes
        $c="000000".$folioMembresia;
		$c=substr($c,-6,6);
		$folioMembresia = $c;

        $datosMem = Input::get('membresia');
        $datosRef = Input::get('referencias');

        switch ($datosMem['unidad']) { 
            case 1: 
                $serie='MFR'; 
                break; 
            case 2: 
                $serie='MFS'; 
                break; 
            case 3: 
                $serie='MFP'; 
                break; 
            case 4: 
                $serie='MFB'; 
                break; 
            case 5: 
                $serie='MFY'; 
                break; 
            case 6: 
                $serie='MFM'; 
                break; 
            case 7: 
                $serie='MFL'; 
                break; 
            case 8: 
                $serie='MFO'; 
                break; 
            case 86: 
                $serie='MFC'; 
                break; 
            case 184: 
                $serie='MFI'; 
                break; 
            case 186: 
                $serie='MFV'; 
                break;                  
        }


        $membresia = new Membresia;

        $membresia->mem_id = $idMembresia;
        $membresia->mem_folio = $folioMembresia;
        $membresia->mem_serie = $serie;
        $membresia->mem_nombre = strtoupper($datosMem['nombre']);
        $membresia->mem_apaterno = strtoupper($datosMem['apanterno']);
        $membresia->mem_amaterno = strtoupper($datosMem['amaterno']);
        $membresia->mem_completo = strtoupper($datosMem['nombre']) . ' ' . strtoupper($datosMem['apanterno']) . ' ' . strtoupper($datosMem['amaterno']);
        $membresia->mem_correo = $datosMem['email'];
        $membresia->mem_telefono = $datosMem['telefono'];
        $membresia->mem_codPostal = $datosMem['codPos'];
        $membresia->mem_fecreg = date('Y-m-d H:i:s');
        $membresia->mem_anio = date('Y');
        $membresia->Usu_login = 'mv_sitio';
        $membresia->mem_entero = $datosMem['obs'] == '' ? 'Sitio Web' : $datosMem['obs'];

        $membresia->save();

        foreach ($datosRef as $dato) {

        	$referencia = new Referencia;
        	$referencia->mem_folio = $folioMembresia;
        	$referencia->MRE_nombre = strtoupper($dato['nombre']);
        	$referencia->MRE_correo = $dato['email'];
        	$referencia->MRE_telefono = $dato['telefono'];
        	$referencia->MRE_parentezco = $dato['parentezco'];

        	$referencia->save();
        }

        $datosMail =  array( 
        	'id'		=> 	$idMembresia,
        	'folio' 	=> 	$folioMembresia,
        	'anio' 		=> 	date('Y'),
        	'nombre' 	=> 	$datosMem['nombre'] . ' ' . $datosMem['apanterno'] . ' ' . $datosMem['amaterno'], 
        	'imagen1' 	=> 	'images/membresia/frentearriba.png',
			'imagen2' 	=> 	'images/membresia/frenteabajo.png',
			'imagen3' 	=> 	'images/membresia/frentefin.png',
			'imagen4' 	=> 	'images/membresia/1.png',
			'imagen5' 	=> 	'images/membresia/2.png'
        );

        Mail::send('emails.membresia', $datosMail, function($message) use ($datosMem)
        {
            //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields 
            $message->from('salcala@medicavial.com.mx', 'Sergio Alcala');
			//email 'To' field: cahnge this to emails that you want to be notified.                    
			$message->to( $datosMem['email'],$datosMem['nombre'])->subject('Bienvenido a la membresia MédicaVial');

        });

		return 'Tu membresia ha sido solicitada, te enviamos un correo para que la actives y goces de nuestros veneficios que tenemos para ti.';

	}

}
