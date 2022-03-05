<?php
$clave  = 'No hay nada qué hacer aquí. Si vienes por el tesoro, hace tiempo que se lo han llevado y, estoy seguro que jamás regresará.';
function getConnection(){
	$connection = new mysqli("127.0.0.1", "root", "", "pipo");
	if($connection -> connect_errno){
		die();
	}
	return $connection;
}

$method = 'aes-256-cbc';
$iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
 $encriptar = function ($valor) use ($method, $clave, $iv) {
     return openssl_encrypt ($valor, $method, $clave, false, $iv);
 };
 $desencriptar = function ($valor) use ($method, $clave, $iv) {
     $encrypted_data = base64_decode($valor);
     return openssl_decrypt($valor, $method, $clave, false, $iv);
 };
 $getIV = function () use ($method) {
     return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
 };
?>