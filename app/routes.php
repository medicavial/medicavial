<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'inicio', function()
{
	return View::make('pages.home');
    
}));


Route::get('activacion/{membresia}', array('as' => 'activacion', function($membresia) {
    
    $datos = Membresia::find($membresia);
    
    $activada = Membresia::find($membresia)->mem_activo;

    if ( (int)$activada == 0 ) {

        $datos->mem_activo = 1;
        $datos->save();
        return View::make('pages.activacion')->with('membresia', $datos);

    }else{

        return Redirect::to('membresia');

    }

})); 




Route::get('/clinicas', array('as' => 'clinicas', function()
{
	return View::make('pages.clinicas');
    
}));

Route::get('/cita', array('as' => 'cita', function()
{
	return View::make('pages.cita');
    
}));


Route::post('/cita', array('uses' => 'BaseController@cita'));


Route::get('/contacto', array('as' => 'contacto', function()
{
	return View::make('pages.contacto');
    
}));

Route::post('/contacto', array('uses' => 'BaseController@contacto'));


Route::get('/doctores', array('as' => 'doctores', function()
{
    return View::make('pages.doctores');
    
}));

Route::get('/facturacion', array('as' => 'facturacion', function()
{
	return View::make('pages.facturacion');
    
}));

Route::get('/membresia', array('as' => 'membresia', function()
{
    return View::make('pages.membresia');
    
}));

Route::post('/membresia', array('uses' => 'BaseController@membresia'));


Route::get('/nosotros', array('as' => 'nosotros', function()
{
    return View::make('pages.nosotros');
    
}));

Route::get('/pacientes', array('as' => 'pacientes', function()
{
    return View::make('pages.pacientes');
    
}));


Route::get('/unidades', function()
{
    return Unidad::where('UNI_propia','S')->where('UNI_activa','S')->where('UNI_clave','<>',8)->orderBy('UNI_nombre')->get();
    
});


App::missing(function($exception)
{
    return Response::view('pages.404', array(), 404);
});


