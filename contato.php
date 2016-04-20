<?php
require "bd.php";
header('Content_Type: application/json');
$request = $_SERVER['REQUEST_METHOD'];
switch ($request) {
	case 'POST':
		$insert = json_decode($HTTP_RAW_POST_DATA);
		mysql_query("INSERT INTO contato (email, nome, assunto, mensagem) VALUES ('{$insert->email}', '{$insert->nome}', '{$insert->assunto}', '{$insert->mensagem}')");
		break;		
}

var_dump($insert);