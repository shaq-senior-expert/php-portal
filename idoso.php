<?php
header('Content-Type: application/jason');
require "bd.php";

function Idoso(){
$request = $_SERVER['REQUEST_METHOD'];
switch ($request) {
	case 'GET':
		$result = mysql_query("SELECT * FROM idoso");
		$linhas = array();
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    		$linhas[] = $row;  
		}
		return json_encode($linhas);
		break;
	case 'POST':
		$insert = json_decode($HTTP_RAW_POST_DATA);
		mysql_query("INSERT INTO idoso (nome,idade,endereco,email) VALUES ('{$insert->nome}','{$insert->idade}','{$insert->endereco}','{$insert->email})");
		break;
	case 'PUT':
		$update = json_decode(file_get_contents('php://input'));
		$id = $update->id;
		mysql_query("UPDATE idoso SET nome = '{$update->nome}',idade = '{$update->idade}',endereco = '{$update->endereco}',email = '{$update->email}' WHERE id={$id}");
		break;
	case 'DELETE':
		$delete = json_decode(file_get_contents('php://input'));
		$id = $delete->id;
		mysql_query("DELETE FROM idoso WHERE id={$id}");
		break;
	}
}