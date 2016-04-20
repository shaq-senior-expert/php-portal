<?php
require "bd.php";

$request = $_SERVER['REQUEST_METHOD'];
switch ($request) {
	case 'GET':
		$result = mysql_query("SELECT * FROM contato");
		$linhas = array();
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    		$linhas[] = $row;  
		}
		echo json_encode($linhas);
		break;
	case 'POST':
		$insert = json_decode($HTTP_RAW_POST_DATA);
		mysql_query("INSERT INTO contato (email) VALUES ('{$insert->email}')");
		break;
	case 'PUT':
		$update = json_decode(file_get_contents('php://input'));
		$id = $update->id;
		mysql_query("UPDATE contato SET email = '{$update->email}' WHERE id={$id}");
		break;
	case 'DELETE':
		$delete = json_decode(file_get_contents('php://input'));
		$id = $delete->id;
		mysql_query("DELETE FROM contato WHERE id={$id}");
		break;
	default:
		# code...
		break;
}

