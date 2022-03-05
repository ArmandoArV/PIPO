<?php
class Estatus {
	private $codigo, $denominacion, $descripcion;

	public function __construct($codigo, $denominacion, $descripcion){
		$this -> codigo = $codigo;
		$this -> denominacion = $denominacion;
		$this -> descripcion = $descripcion;
	}

	public function obtenerCodigo(){
		return $this -> codigo;
	}

	public function obtenerDenominacion(){
		return $this -> denominacion;
	}

	public function obtenerDescripcion(){
		return $this -> descripcion;
	}
}
?>