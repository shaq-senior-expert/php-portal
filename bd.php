<?php 

mysql_connect("localhost", "root", "123456") or
    die("Não foi possível conectar: " . mysql_error());
mysql_select_db("PHPONG");
