<?php
require "bd.php";
header('Content_Type: application/json');

function RetornaMenu() {
	$request = $_SERVER['REQUEST_METHOD'];
	switch ($request) {
			case 'GET':
			$result = mysql_query("SELECT * FROM menu");
			$linhas = array();
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    		$linhas[] = $row;  
			}
			return json_encode($linhas);
			break;
	}
}