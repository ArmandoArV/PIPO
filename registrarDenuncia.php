<?php
include "Parte.php";
include "Denuncia.php";
include "Estatus.php";
include "Connection.php";
$connection = getConnection();
$resultado = $connection->query("SELECT NOW() AS momento;");
$resultado = $resultado->fetch_object();
$momento = $resultado->momento;
$denunciado = new Denunciado($_POST["nombreDenunciado"].$_POST["primerApellidoDenunciado"].'_'.$momento, $_POST["nombreDenunciado"], $_POST["primerApellidoDenunciado"], $_POST["segundoApellidoDenunciado"], $_POST["sexoDenunciado"], $_POST["ocupacionDenunciado"]);
$codigo = $encriptar($denunciado -> obtenerCodigo());
$nombre = $encriptar($denunciado -> obtenerNombre());
$primerApellido = $encriptar($denunciado -> obtenerPrimerApellido());
$segundoApellido = $encriptar($denunciado -> obtenerSegundoApellido());
$sexo = $denunciado -> obtenerSexo();
$ocupacion = $encriptar($denunciado -> obtenerOcupacion());
$sentencia = $connection -> prepare("INSERT INTO Parte(codigo, nombre, primerApellido, segundoApellido, sexo, ocupacion) VALUE (?, ?, ?, ?, ?, ?)");
$sentencia -> bind_param("ssssis", $codigo, $nombre, $primerApellido, $segundoApellido, $sexo, $ocupacion);
$sentencia -> execute();
$denunciante = new Denunciante($_POST["nombreDenunciante"].$_POST["primerApellidoDenunciante"].'_'.$momento, $_POST["curp"], $_POST["correo"], $_POST["nombreDenunciante"], $_POST["primerApellidoDenunciante"], $_POST["segundoApellidoDenunciante"], $_POST["fechaNacimiento"], $_POST["sexoDenunciante"], $_POST["ocupacionDenunciante"], new Escolaridad($_POST["escolaridad"], NULL), $denunciado);
if ($_POST["tipoDenuncia"]==1){
    $codigo = $encriptar($denunciante->obtenerCodigo());
    $curp = $encriptar($denunciante->obtenerCURP());
    $correo = $encriptar($denunciante->obtenerCorreo());
    $nombre = $encriptar($denunciante->obtenerNombre());
    $primerApellido = $encriptar($denunciante->obtenerPrimerApellido());
    $segundoApellido = $encriptar($denunciante->obtenerSegundoApellido());
    $nacimiento = $denunciante->obtenerNacimiento();
    $sexo = $denunciante->obtenerSexo();
    $ocupacion = $encriptar($denunciante->obtenerOcupacion());
    $codigoEscolaridad = $denunciante->obtenerEscolaridad()->obtenerCodigo();
    $sentencia = $connection -> prepare("INSERT INTO Parte(codigo, curp, correo, nombre, primerApellido, segundoApellido, nacimiento, sexo, ocupacion, Escolaridad_codigo) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $sentencia -> bind_param("sssssssisi", $codigo, $curp, $correo, $nombre, $primerApellido, $segundoApellido, $nacimiento, $sexo, $ocupacion, $codigoEscolaridad);
    $sentencia -> execute();
}
$lugar = new Lugar($_POST["estado"], $_POST["municipio"], $_POST["colonia"], $_POST["calle"], $_POST["numeroInterior"], $_POST["numeroExterior"], $_POST["codigoPostal"], $_POST["referencias"]);
$denuncia = new Denuncia($_POST["asunto"].'_'.$momento, $_POST["asunto"], $_POST["descripcion"], $_POST["fecha"], $lugar, $denunciante, $denunciado, new Estatus($_POST["tipoDenuncia"], NULL, NULL));
$folio = $encriptar(str_replace(':','-',$denuncia->obtenerFolio()));
$titulo = $encriptar($denuncia->obtenerTitulo());
$descripcion = $encriptar($denuncia->obtenerDescripcion());
$fecha = $denuncia->obtenerFecha();
$estado = $encriptar($denuncia->obtenerLugar()->obtenerEstado());
$municipio = $encriptar($denuncia->obtenerLugar()->obtenerMunicipio());
$colonia = $encriptar($denuncia->obtenerLugar()->obtenerColonia());
$calle = $encriptar($denuncia->obtenerLugar()->obtenerCalle());
$numeroInterior = $denuncia->obtenerLugar()->obtenerNumeroInterior();
$numeroExterior = $denuncia->obtenerLugar()->obtenerNumeroExterior();
$codigoPostal = $encriptar($denuncia->obtenerLugar()->obtenerCodigoPostal());
$referencias = $encriptar($denuncia->obtenerLugar()->obtenerReferencias());
$codigo = $encriptar($denuncia->obtenerDenunciante()->obtenerCodigo());
$codigoDenunciado = $encriptar($denuncia->obtenerDenunciado()->obtenerCodigo());
$tipo = $denuncia->obtenerTipo()->obtenerCodigo();
$sentencia = $connection -> prepare("INSERT INTO Denuncia(folio, titulo, descripcion, fecha, estado, municipio, colonia, calle, numeroInterior, numeroExterior, codigoPostal, referencias, Parte_codigoDenunciante, Parte_codigoDenunciado, Tipo_codigo) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
$sentencia -> bind_param("sssssssiiissssi", $folio, $titulo, $descripcion, $fecha, $estado, $municipio, $colonia, $calle, $numeroInterior, $numeroExterior, $codigoPostal, $referencias, $codigo, $codigoDenunciado, $tipo);
$sentencia -> execute();

if($_POST["hidden"]>0 && !file_exists("evidencias/".$folio."/")){
    mkdir("evidencias/".$folio."/", 0777, true);
}
/*for($index=1;$index<=$_POST["hidden"];$index++){
    $nombre = $_FILES["archivo".$index]["name"];
    $guardado = $_FILES["archivo".$index]["tmp_name"];
    move_uploaded_file($guardado, "evidencias/".$folio."/".$folio.'_'.$index);
}*/
mysqli_close($connection);
header("Location: index.html");
?>