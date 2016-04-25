<?php

$mysqli = mysqli_connect("127.0.0.1", "root", "123456", "PHPONG");

function login(){
$login = $_POST['login'];
$senha = $_POST['senha'];

echo $login;
echo $senha;
$query = "SELECT * FROM idoso where login={$login} and senha={$senha}";
$linhas = array();
			if($result = $mysqli->query($query)) { 
				while ($row = $result->fetch_assoc()) {
		    		$linhas[] = $row;  
				}
				
			}
			$i = 0;
			do{

				echo ($linhas[$i]);
				$i++;
			}while($i<=3);
}


?>