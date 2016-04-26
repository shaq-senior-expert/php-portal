<?php
header('Content_Type: application/json');
require "lib/bd.php";
require "lib/login.php";

function Contato($mysqli){
	if (!isAllowed($mysqli))
		throw new Exception("Nao autorizado", 403);	

	$request = $_SERVER['REQUEST_METHOD'];
	switch ($request) {
		case 'POST':
			$array = json_decode(file_get_contents('php://input'));
			$insert = $array[0];
			$query = "INSERT INTO contato (email, nome, assunto, mensagem) VALUES ('{$insert->email}', '{$insert->nome}', '{$insert->assunto}', '{$insert->mensagem}')";
			if(!$mysqli->query($query)) { 
				echo "deu ruim";
			}
		break;		
	}
}