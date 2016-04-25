<?php 

header('Content-Type: application/jason');
require "bd.php";

function isAllowed($mysqli, $admin = false){
	$headers = getallheaders();
	$authorization = $headers['Authorization'];
	$hash = explode(' ', $authorization);
	$hash = $hash[1];
	list($usuario, $senha) = explode(':', base64_decode($hash)); 
	
	$query ="SELECT * FROM usuario where email = '$usuario' and senha = '$senha'";
	if ($admin)
		$query .= " and tipo_acesso ='a'";
	return ($mysqli->query($query)->fetch_assoc() ==  true);

}
