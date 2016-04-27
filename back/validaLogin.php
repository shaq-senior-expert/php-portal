<?php
header('Content_Type: application/json');
require "lib/bd.php";

function RetornaMenu($mysqli) {
	$request = $_SERVER['REQUEST_METHOD'];
	switch ($request) {
		case 'POST':
		$logar = json_decode(file_get_contents('php://input'));
		$query = "SELECT * FROM usuario WHERE email = '{$logar->email}' AND senha = '{$logar->senha}'";
		//$query = "SELECT * FROM usuario WHERE email = '%s' AND senha = '%s'";
		$linhas = array();
		if($result = $mysqli->query($query)) { 
			$linhas = $result->fetch_assoc();
		}
		return json_encode($linhas);
		break;
	}
}
$result = RetornaMenu($mysqli);
echo $result;
