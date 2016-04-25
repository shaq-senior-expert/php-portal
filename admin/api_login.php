<?php
header('Content-Type: application/jason');
require "../bd.php";

function login(){
$login = $_POST['login'];
$senha = $_POST['senha'];
$query = "SELECT * FROM idoso where login={$login} and senha={$senha}";
}

?>