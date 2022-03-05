<?php
class Escolaridad {
	private $codigo, $denominacion;

	public function __construct($codigo, $denominacion)
	{
		$this -> codigo = $codigo;
		$this -> denominacion = $denominacion;
	}

	public function obtenerCodigo(){
		return $this -> codigo;
	}

	public function obtenerDenominacion(){
		return $this -> denominacion;
	}
}

class Parte {

	protected $codigo, $curp, $correo, $nombre, $primerApellido, $segundoApellido, $nacimiento, $sexo, $ocupacion, $escolaridad;
	
	protected function __construct($codigo, $curp, $correo, $nombre, $primerApellido, $segundoApellido, $nacimiento, $sexo, $ocupacion, $escolaridad)
	{
		$this -> codigo = $codigo;
		$this -> curp = $curp;
		$this -> correo = $correo;
		$this -> nombre = $nombre;
		$this -> primerApellido = $primerApellido;
		$this -> segundoApellido = $segundoApellido;
		$this -> nacimiento = $nacimiento;
		$this -> sexo = $sexo;
		$this -> ocupacion = $ocupacion;
		$this -> escolaridad = $escolaridad;
	}
	public function obtenerCodigo(){
		return $this -> codigo;
	}

	public function obtenerCURP(){
		return $this -> curp;
	}

	public function obtenerCorreo(){
		return $this -> correo;
	}

	public function obtenerNombre(){
		return $this -> nombre;
	}

	public function obtenerPrimerApellido(){
		return $this -> primerApellido;
	}

	public function obtenerSegundoApellido(){
		return $this -> segundoApellido;
	}

	public function obtenerNacimiento(){
		return $this -> nacimiento;
	}

	public function obtenerSexo(){
		return $this -> sexo;
	}

	public function obtenerOcupacion(){
		return $this -> ocupacion;
	}

	public function obtenerEscolaridad(){
		return $this -> escolaridad;
	}
}

class Denunciante extends Parte {
	
	private $denunciado;

	public function __construct($codigo, $curp, $correo, $nombre, $primerApellido, $segundoApellido, $nacimiento, $sexo, $ocupacion, $escolaridad, $denunciado)
	{
		parent::__construct($codigo, $curp, $correo, $nombre, $primerApellido, $segundoApellido, $nacimiento, $sexo, $ocupacion, $escolaridad);
		$this -> denunciado = $denunciado;
	}

	public function obtenerDenunciado(){
		return $this -> denunciado;
	}
}

class Denunciado extends Parte {
	
	public function __construct($codigo, $nombre, $primerApellido, $segundoApellido, $sexo, $ocupacion)
	{
		parent::__construct($codigo, NULL, NULL, $nombre, $primerApellido, $segundoApellido, NULL, $sexo, $ocupacion, NULL);
	}
}
?>