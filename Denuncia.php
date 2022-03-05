<?php
class Lugar {

	private $estado, $municipio, $colonia, $calle, $numeroInterior, $numeroExterior, $codigoPostal, $referencias;
	
    public function __construct($estado, $municipio, $colonia, $calle, $numeroInterior, $numeroExterior, $codigoPostal, $referencias){
		$this -> estado = $estado;
		$this -> municipio = $municipio;
		$this -> colonia = $colonia;
		$this -> calle = $calle;
		$this -> numeroInterior = $numeroInterior;
		$this -> numeroExterior = $numeroExterior;
		$this -> codigoPostal = $codigoPostal;
		$this -> referencias = $referencias;
	}

	public function obtenerEstado(){
		return $this -> estado;
	}

	public function obtenerMunicipio(){
		return $this -> municipio;
	}

	public function obtenerColonia(){
		return $this -> colonia;
	}

	public function obtenerCalle(){
		return $this -> calle;
	}

	public function obtenerNumeroInterior(){
		return $this -> numeroInterior;
	}

	public function obtenerNumeroExterior(){
		return $this -> numeroExterior;
	}

	public function obtenerCodigoPostal(){
		return $this -> codigoPostal;
	}

	public function obtenerReferencias(){
		return $this -> referencias;
	}
}

class Denuncia {
	
    private $folio, $titulo, $descripcion, $momento, $fecha, $lugar, $denunciante, $denunciado, $tipo;

	public function __construct0($folio, $titulo, $descripcion, $momento, $fecha, $lugar, $denunciante, $denunciado, $tipo){
		$this -> folio = $folio;
		$this -> titulo = $titulo;
		$this -> descripcion = $descripcion;
		$this -> momento = $momento;
		$this -> fecha = $fecha;
		$this -> lugar = $lugar;
		$this -> denunciante = $denunciante;
		$this -> denunciado = $denunciado;
		$this -> tipo = $tipo;
	}

	public function __construct($folio, $titulo, $descripcion, $fecha, $lugar, $denunciante, $denunciado, $tipo){
		$this -> __construct0($folio, $titulo, $descripcion, "", $fecha, $lugar, $denunciante, $denunciado, $tipo);
	}
	
	public function obtenerFolio(){
		return $this -> folio;
	}

	public function obtenerTitulo(){
		return $this -> titulo;
	}

	public function obtenerDescripcion(){
		return $this -> descripcion;
	}

	public function obtenerMomento(){
		return $this -> momento;
	}

	public function obtenerFecha(){
		return $this -> fecha;
	}

	public function obtenerLugar(){
		return $this -> lugar;
	}

	public function obtenerDenunciante(){
		return $this -> denunciante;
	}

	public function obtenerDenunciado(){
		return $this -> denunciado;
	}

	public function obtenerTipo(){
		return $this -> tipo;
	}
}

class Evidencia{
	private $denuncia, $numero, $extension;
	
	public function __construct($denuncia, $numero, $extension)
	{
		$this -> denuncia = $denuncia;
		$this -> numero = $numero;
		$this -> extension = $extension;
	}

	public function ObtenerDenuncia(){
		return $this -> denuncia;
	}

	public function ObtenerNumero(){
		return $this -> numero;
	}

	public function ObtenerExtension(){
		return $this -> extension;
	}
}
?>