<?php
header('Content-Type: application/jason');
require "bd.php";

function Idoso($mysqli){
	$request = $_SERVER['REQUEST_METHOD'];
	switch ($request) {
		case 'GET':
			$query ="SELECT * FROM idoso";
			$linhas = array();
			if($result = $mysqli->query($query)) { 
				while ($row = $result->fetch_assoc()) {
		    		$linhas[] = $row;  
				}
				return json_encode($linhas);
			}
			break;
		case 'POST':
			$array = json_decode(file_get_contents('php://input'));
			$insert = $array[0];
			var_dump($insert);
			$query ="INSERT INTO idoso (nome,idade,endereco,email) VALUES ('{$insert->nome}','{$insert->idade}','{$insert->endereco}','{$insert->email}')";
			if(!$mysqli->query($query)) { 
				echo "deu ruim";
			}
			break;
		case 'PUT':
			$array = json_decode(file_get_contents('php://input'));
			$update = $array[0];
			$id = $update->id;
			$query = "UPDATE idoso SET nome = '{$update->nome}',idade = '{$update->idade}',endereco = '{$update->endereco}',email = '{$update->email}' WHERE id={$id}";
			if(!$mysqli->query($query)) { 
				echo "deu ruim";
			}
			break;
		case 'DELETE':
			$array = json_decode(file_get_contents('php://input'));
			$delete = $array[0];
			$id = $delete->id;
			$query = "DELETE FROM idoso WHERE id={$id}";
			if(!$mysqli->query($query)) { 
				echo "deu ruim";
			}
			break;
	}
}

$result = Idoso($mysqli);
echo $result;