<?php

$pagina = "layout/index.php";

if($_GET){
	if(array_key_exists('pagina', $_GET)) {
		$paginaGET = $_GET['pagina'];
		$pagina = "htmls/pages/{$paginaGET}.php";
	} else {
		$pagina = "htmls/pages/404.php";		
	}
}

$arquivo = "htmls/{$pagina}";
if(file_exists($arquivo)) {
	require_once $arquivo;
} else {
	require_once "htmls/pages/404.php";
}