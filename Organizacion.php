<?php
class Organizacion {
	private $codigo, $nombre, $descripcion, $momento;

	public function __construct0($codigo, $nombre, $descripcion, $momento)
	{
		$this -> codigo = $codigo;
		$this -> nombre = $nombre;
		$this -> descripcion = $descripcion;
		$this -> momento = $momento;
	}

	public function __construct1($codigo, $nombre, $descripcion)
	{
		$this -> __construct0($codigo, $nombre, $descripcion, "");
	}

	public function obtenerCodigo(){
		return $this -> codigo;
	}

	public function obtenerNombre(){
		return $this -> nombre;
	}

	public function obtenerDescripcion(){
		return $this -> descripcion;
	}

	public function obtenerMomento(){
		return $this -> momento;
	}
}
?>