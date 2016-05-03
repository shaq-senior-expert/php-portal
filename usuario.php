{
  "name": "Meu SILEX",
  "version": "0.0.1",
  "dependencies": {
    "bootstrap": "~*",
    "font-awesome": "~*",
    "jquery": "~*"
  }
}

<?php
header('Content-Type: application/jason');
require "bd.php";
require "login.php";

function Usuario($mysqli) {
	if (!isAllowed($mysqli))
		throw new Exception("Nao autorizado", 403);
	
	$request = $_SERVER['REQUEST_METHOD'];
	switch ($request) {
		case 'GET':
			$query = ("SELECT * FROM usuario");
			if($result = $mysqli->query($query)) { 
	    		$linhas = array();
				while ($row = $result->fetch_assoc()) {
		    		$linhas[] = $row;  
				}
			}
			echo json_encode($linhas);
			break;
		case 'POST':
			$array = json_decode(file_get_contents('php://input'));
			$insert = $array[0];
			$query = "INSERT INTO usuario (email,senha,nome,tipo_acesso) VALUES ('{$insert->email}','{$insert->senha}','{$insert->nome}','{$insert->acesso})";
			if(!$mysqli->query($query)) { 
				echo "deu ruim";
			}
			break;
		case 'PUT':
			$array = json_decode(file_get_contents('php://input'));
			$update = $array[0];
			$id = $update->id;
			$query = "UPDATE usuario SET email = '{$update->email}' WHERE id={$id}";
			if(!$mysqli->query($query)) { 
				echo "deu ruim";
			}
			break;
		case 'DELETE':
			$array = json_decode(file_get_contents('php://input'));
			$delete = $array[0];
			$id = $delete->id;
			$query = "DELETE FROM usuario WHERE id={$id}";
			if(!$mysqli->query($query)) { 
				echo "deu ruim";
			}
			break;
	}
}

$result = Usuario($mysqli);
echo $result;
