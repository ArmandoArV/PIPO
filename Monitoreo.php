<?php
class Monitoreo {
	
    private $denuncia, $estado, $organizacion, $momento, $fecha, $observaciones;

	public function __construct0($denuncia, $estado, $organizacion, $momento, $fecha, $observaciones)
	{
		$this -> denuncia = $denuncia;
		$this -> estado = $estado;
		$this -> organizacion = $organizacion;
		$this -> momento = $momento;
		$this -> fecha = $fecha;
		$this -> observaciones = $observaciones;
	}

	public function __construct1($denuncia, $estado, $organizacion, $fecha, $observaciones)
	{
		$this -> __construct0($denuncia, $estado, $organizacion, "", $fecha, $observaciones);
	}

	public function obtenerDenuncia(){
		return $this -> denuncia;
	}

	public function obtenerEstado(){
		return $this -> estado;
	}

	public function obtenerOrganizacion(){
		return $this -> organizacion;
	}

	public function obtenerMomento(){
		return $this -> momento;
	}

	public function obtenerFecha(){
		return $this -> fecha;
	}

	public function obtenerObservaciones(){
		return $this -> observaciones;
	}
}
?>