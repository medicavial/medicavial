<?php

class Unidad extends Eloquent {

	public $timestamps = false;
	protected $connection = 'mysql';
	protected $primaryKey ='Uni_clave';
    protected $table = 'Unidad';
    
}
